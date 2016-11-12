<?php
if($_SESSION['account'] == 'manufacturer'){
    $w = $conn->prepare("SELECT * FROM users WHERE verify = :uv");
    $w->bindValue(':uv', $_SESSION['verify']);
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

                    <div class="col-sm-6 col-xl-3">
                        <div class="panel panel-tile info-block info-block-bg-success">
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-xs-5 ph10 text-center ">
                                        <i class="fa fa-cloud-upload"></i>
                                    </div>
                                    <div class="col-xs-7 pl35 prn text-center">
                                        <h2 class="earnings">
                                            <?php
                                            $u = $conn->prepare("SELECT * FROM products WHERE manufacturer_id = :uv");
                                            $u->bindValue(':uv', $read['id']);
                                            $u->execute();
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

                    <div class="col-sm-6 col-xl-3">
                        <div class="panel panel-tile info-block info-block-bg-system">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-5 ph10 text-center">
                                        <i class="imoon imoon-users2"></i>
                                    </div>
                                    <div class="col-xs-7 pl35 text-center">
                                        <h2 class="">0</h2>
                                        <h6 class="text-muted"><?php echo $read['shop'];?></h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-block-stat">
                                            <span>Member - <?php echo date("d M, y", $read['timestamp']);?></span>
                                            <span class=""></span>
                                        </div>
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

                                        <div class="col-md-7 mb10 col-sm-6 col-xs-12">

                                            <form id="productForm" class="form" action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-group earn-info">
                                                    <?php
                                                    if(isset($_POST['submit'])){
                                                        //var_dump($_FILES);
                                                        if($_FILES['pics']['name'] AND $_POST['pname'] AND $_POST['price'] AND $_POST['details'] AND $_POST['points']){
                                                            $product_cat_id= secureTxt($_POST['product_cat_id']);
                                                            $name = secureTxt($_POST['pname']);
                                                            $price = secureTxt($_POST['price']);
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
                                                                    function rand_string() {
                                                                        return  substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), -8);
                                                                    }
                                                                    $productId = rand_string();
                                                                    $q12 = $conn->prepare("INSERT INTO products(name,manufacturer_id,product_code,thumbnail,details,price,points,timestamp,product_cat_id,product_type) VALUES(:name,:man,:pcode,:tmb,:det,:price,:pts,:time,:product_cat_id,'seller')");
                                                                    $q12->bindValue(':name', $name);
                                                                    $q12->bindValue(':man', $read['id']);
                                                                    $q12->bindValue(':tmb', $file);
                                                                    $q12->bindValue(':det', $details);
                                                                    $q12->bindValue(':price', $price);
                                                                    $q12->bindValue(':pts', $pts);
                                                                    $q12->bindValue(':time', $time);
                                                                    $q12->bindValue(':pcode', $productId);
                                                                    $q12->bindValue(':product_cat_id', $product_cat_id);
                                                                    if($q12->execute()){
                                                                        exit(header('location:product?pid='.$productId.'&success=true'));
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
                                                            <i class='fa fa-check'></i> Product with earning code [<?php echo $_GET['pid'];?>] created! <button class='close' data-dismiss='alert'>&times;</button>
                                                        </div>
                                                    <?php }?>
                                                </div>



                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label">Product Photo</label>
                                                    <input type="file" name="pics" class="dropify" data-max-file-size="200K" data-default-file=""/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Product Name</label>
                                                    <input type="text" value="<?php if(isset($_POST['pname'])){ echo $_POST['pname'];}?>" placeholder="Name of product" name="pname" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Product Price </label>
                                                    <input type="number" min="0" value="<?php if(isset($_POST['price'])){ echo $_POST['price'];}?>" placeholder="Price" name="price" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label  class="control-label" for="sel1">Product Category:</label>
                                                    <select class="form-control" id="sel1" name="product_cat_id">
                                                        <option >Select Categories</option>
                                                        <?php $q= $conn->query('SELECT * FROM product_cats ');?>
                                                        <?php while($product_cats = $q->fetch(PDO::FETCH_ASSOC)) :?>
                                                            <option value="<?php echo $product_cats['id']?>"><?php echo $product_cats['product_cat_title']?></option>
                                                        <?php endwhile;?>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Eks </label>
                                                    <input type="number" min="0" value="<?php if(isset($_POST['points'])){ echo $_POST['points'];}?>" placeholder="Assign eks" name="points" class="form-control">
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

                                        <div class="col-md-5 col-xs-12 col-sm-6 hidden-xs">

                                            <div class="mw400 ml70 " style="height:680px;margin-top:40px;overflow-y:scroll;overflow-x:auto">
                                                <?php
                                                $p = $conn->prepare("SELECT * FROM products WHERE manufacturer_id = :uv ORDER BY id DESC");
                                                $p->bindValue(":uv", $read['id']);
                                                $p->execute();
                                                while($row = $p->fetch()){
                                                    ?>
                                                    <div class="mb20 fs13">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <img src="../images/products/<?php echo $row['thumbnail'];?>" width="50" class="media-object img-thumbnail img-rounded">
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="media-heading ml2 mb7 fs16 fw600"><?php echo $row['name'];?> <br><small class="text-info" style="font-size:10px;"><?php echo timeAgo($row['timestamp']);?></small></h6>
                                                                <p><?php if($row['status'] == 0){?><span class="" style=""><?php echo $row['product_code'];?></span><?php }else{?><span class="text-warning" style="text-decoration:line-through"><?php echo $row['product_code'];?></span><?php }?> / <small class="">₦<?php echo number_format($row['price']);?></small> / <small class="text-info"><?php echo number_format($row['points']);?> pts</small></p>
                                                                <p>
                                                                    <a href="javascript:;" class="btn btn-xs btnDel" id="<?php echo $row['id'];?>" ><i class="fa fa-trash"></i></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr/>
                                                <?php } ?>
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
 
