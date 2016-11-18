<?php
if($_SESSION['admin']){
    $w = $conn->prepare("SELECT * FROM users WHERE  id= 1");
    $w->execute();
    $read = $w->fetch();
    ?>
    <section id="content_wrapper">

        <!--<header id="topbar" class="alt">
        <div class="topbar-left">
        <ol class="breadcrumb">
        <li class="breadcrumb-icon">
        <a href="index-2.html">
        <span class="fa fa-home"></span>
        </a>
        </li>
        <li class="breadcrumb-link">
        <a href="index-2.html">Home</a>
        </li>
        <li class="breadcrumb-current-item">Dashboard</li>
        </ol>
        </div>
        </header>-->


        <section id="content" class="table-layout animated fadeIn">

            <div class="chute chute-center">

                <div class="row">

                    <div class="col-sm-6 col-md-12 col-xl-3">
                        <div class="panel panel-tile info-block info-block-bg-success">
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-xs-5 ph10 text-center ">
                                        <i class="fa fa-cloud-upload"></i>
                                    </div>
                                    <div class="col-xs-7 pl35 prn text-center">
                                        <h2 class="earnings">
                                            <?php
                                            $u = $conn->query("SELECT * FROM products ");
                                            echo $u->rowCount();
                                            ?>
                                        </h2>
                                        <h6>Total Products</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-block-stat">
                                            <span>Products as at today</span>
                                            <span class="earnings"><?php echo $u->rowCount();?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="allcp-panels mt40 fade-onload">
                        <div class="row">

                            <div class="col-md-12 allcp-grid">

                                <div class="panel mbn pt25" data-panel-title="false">

                                    <div class="panel-body mt40 pn">

                                        <div class="row">

                                            <div class="col-md-6 mb10 col-sm-6 col-xs-12">

                                                <form id="productForm" class="form" action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group earn-info">
                                                        <?php
                                                        if(isset($_POST['submit'])){
                                                            //var_dump($_FILES);
                                                            if($_FILES['pics']['name'] AND $_POST['pname']  AND $_POST['details'] AND $_POST['points']){
                                                                $product_cat_id= secureTxt($_POST['product_cat_id']);
                                                                $name = secureTxt($_POST['pname']);
                                                                $pts = secureTxt($_POST['points']);
                                                                $details = secureTxt($_POST['details']);
                                                                $time = time();
                                                                $target_dir = "../images/products/";
                                                                $file = $time.basename($_FILES["pics"]["name"]);
                                                                $target_file = $target_dir .$file;
                                                                $size = ceil($_FILES['pics']['size']/1024); //returns the Kilobyte value
                                                                /*$thumb = base64_encode(file_get_contents($_FILES['files']['tmp_name']));
                                                                $image = "data:".$type.";base64,".$thumb."";*/
                                                                if($size > 2000){?>
                                                                    <div class='alert alert-warning'>
                                                                        <i class='fa fa-exclamation-triangle'></i> File too large...
                                                                        <button class='close' data-dismiss='alert'>&times;</button>
                                                                    </div>
                                                                    <?php
                                                                }else{
                                                                    if(move_uploaded_file($_FILES['pics']['tmp_name'], $target_file)){
                                                                        $q12 = $conn->prepare("INSERT INTO products(name,manufacturer_id,thumbnail,details,points,timestamp,product_cat_id,product_type,approve) VALUES(:name,:man,:tmb,:det,:pts,:time,:product_cat_id,'merchant',0)");
                                                                        $q12->bindValue(':name', $name);
                                                                        $q12->bindValue(':man', $read['id']);
                                                                        $q12->bindValue(':tmb', $file);
                                                                        $q12->bindValue(':det', $details);
                                                                        $q12->bindValue(':pts', $pts);
                                                                        $q12->bindValue(':time', $time);
                                                                        $q12->bindValue(':product_cat_id', $product_cat_id);
                                                                        if($q12->execute()){
                                                                            exit(header('location:add-product?success=true'));
                                                                        }
                                                                    }
                                                                }
                                                            }else{
                                                                ?>
                                                                <div class='alert alert-warning'>
                                                                    <i class='fa fa-exclamation-triangle'></i> All fields are required...
                                                                    <button class='close' data-dismiss='alert'>&times;</button>
                                                                </div>
                                                            <?php }
                                                        }
                                                        ?>

                                                        <?php if(isset($_GET['success']) AND ($_GET['success'] == "true")){?>
                                                            <div class='alert alert-success'>
                                                                <i class='fa fa-check'></i> Product  created! <button class='close' data-dismiss='alert'>&times;</button>
                                                            </div>
                                                        <?php }?>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Product Photo</label>
                                                        <input type="file" name="pics" class="dropify" data-max-file-size="200K" data-default-file=""/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Product Name</label>
                                                        <input type="text" value="<?php if(isset($_POST['pname'])){ echo $_POST['pname'];}?>" placeholder="Name of product" name="pname" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="control-label" for="sel1">Product Category:</label>
                                                        <select class="form-control" id="sel1" name="product_cat_id">
                                                            <option >Select Categories</option>
                                                            <?php $q= $conn->query('SELECT * FROM product_cats');?>
                                                            <?php while($product_cats = $q->fetch(PDO::FETCH_ASSOC)) :?>
                                                                <option value="<?php echo $product_cats['id']?>"><?php echo $product_cats['product_cat_title']?></option>
                                                            <?php endwhile;?>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Eks </label>
                                                        <input type="number" min="0" value="<?php if(isset($_POST['points'])){ echo $_POST['points'];}?>" placeholder="Assign Eks" name="points" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Description </label>
                                                        <textarea name="details" rows="5" placeholder="A little description (100 characters preferably)" class="form-control"><?php if(isset($_POST['details'])){ echo $_POST['details'];}?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="submit" value="1" class="btn btn-block btn-warning btn-lg" style="width:100%"><i class="fa fa-cloud-upload"></i> Upload</button>
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-6 ">
                                                <div class='alert alert-success'>
                                                    <i class='fa fa-check'></i> <p></p> <button class='close' data-dismiss='alert'>&times;</button>
                                                </div>
                                                <div  style="border: 1px solid #939393 ;">
                                                    <div class="well">
                                                        <div class="panel-heading">
                                                            Products Settings
                                                        </div>
                                                        </div>
                                                        <div class="panel-body">
                                                                <form class="form-inline" method="post" id="prodCat" action="includes/insert-cat.php">
                                                                    <div class="form-group">
                                                                        <input name="cat" type="text" class="form-control"  placeholder="Category Name">
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" name="visible" value="1"> Set visibility
                                                                        </label>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary prod-cat"><span class="glyphicon glyphicon-plus"></span>Add</button>
                                                                </form>

                                                                <br>
                                                                <br>
                                                                <div class='alert alert-info'>
                                                                Note<i class='fa fa-info'></i> if Visibility is Set, sellers would see this category
                                                                <button class='close' data-dismiss='alert'>&times;</button>
                                                            </div>

                                                        </div>
                                                </div>

                                            </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

        </section>
    </section>
<?php }else{
    exit(header('location:/'));
}	?>
 
<script>
    $('#prodCat').submit(function (event) {
        event.preventDefault();
       var url= $(this).attr('action');
        var dat = $(this).serialize();
        $.json(url,dat,function (resp) {
            if(resp.status==200)
            {
                $('#prodCat')[0].reset();
                $('.alert p').html('Category Added').fadeIn(1000);
            }
            else{
                
            }


        });

    })
</script>