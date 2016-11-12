<?php
if($_SESSION['admin']){
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


        <section id="content" class="table-layout animated fadeIn" >

            <div class="chute chute-center">

                <div class="row">


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
                                                            if($_FILES['pics']['name'] AND $_POST['type']){
                                                                $type= secureTxt($_POST['type']);
                                                                $target_dir = "../images/sliders/";
                                                                $file = basename($_FILES["pics"]["name"]);
                                                                $target_file = $target_dir .$file;
                                                                $size = ceil($_FILES['pics']['size']/1024); //returns the Kilobyte value
                                                                /*$thumb = base64_encode(file_get_contents($_FILES['files']['tmp_name']));
                                                                $image = "data:".$type.";base64,".$thumb."";*/
                                                                if($size > 6000){?>
                                                                    <div class='alert alert-warning'>
                                                                        <i class='fa fa-exclamation-triangle'></i> File too large...
                                                                        <button class='close' data-dismiss='alert'>&times;</button>
                                                                    </div>
                                                                    <?php
                                                                }else{
                                                                    if(move_uploaded_file($_FILES['pics']['tmp_name'], $target_file)){

                                                                        $q12 = $conn->prepare("INSERT INTO sliders (image,type,created_at) VALUES(:image,:type,now())");
                                                                        $q12->bindValue(':image', $file);
                                                                        $q12->bindValue(':type', $type);

                                                                        if($q12->execute()){
                                                                            exit(header('location:sliders?success=true'));
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
                                                                <i class='fa fa-check'></i> Slider  created! <button class='close' data-dismiss='alert'>&times;</button>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                    <div class='alert alert-info'>
                                                        <i class='fa fa-check'></i> Image size should be at most 760px wide
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Slider Photo</label>
                                                        <input type="file" name="pics" class="dropify" data-max-file-size="600K" data-default-file=""/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label  class="control-label" for="sel1">Slider Type:</label>
                                                        <select class="form-control" id="sel1" name="type">
                                                            <option >Select Option</option>
                                                                <option value="home">Home</option>
                                                                <option value="shop">Shop</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="submit" value="1" class="btn btn-block btn-warning btn-lg" style="width:100%"><i class="fa fa-cloud-upload"></i> Upload</button>
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="col-md-5 mb10 col-sm-6 col-xs-12">
                                            <table class="table table-bordered table-hover">

                                                <thead>
                                                <tr>

                                                    <th>Image</th>
                                                    <th>Type</th>
                                                    <th>Created At</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $q = $conn->prepare("SELECT * FROM sliders  ");
                                                $q->execute();
                                                while($row = $q->fetch(PDO::FETCH_OBJ)){
                                                    ?>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img src="../images/sliders/<?php echo $row->image;?> " width="100px" height="100"></td>
                                                        <td class="sorting_1"><?php echo $row->type;?></td>
                                                        <td class="sorting_1"><?php echo $row->created_at;?></td>
                                                        <td>
                                                        <span class="">
                                                        <a href="javascript:;" class="delSlider text-primary" id="<?php echo $row->id;?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                        &nbsp;&nbsp;
                                                        </span>
                                                        </td>
                                                    </tr>
                                                <?php }?>
                                                </tbody>
                                            </table>
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

