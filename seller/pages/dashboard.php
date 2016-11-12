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


                    <div class="col-sm-6 col-md-12 col-xl-12">
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
                        <div class="panel panel-tile info-block info-block-bg-success">
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-xs-5 ph10 text-center ">
                                        <i class="fa fa-cloud-upload"></i>
                                    </div>
                                    <div class="col-xs-7 pl35 prn text-center">
                                        <h2 class="earnings">
                                            <?php
                                            $u = $conn->prepare("SELECT * FROM services WHERE manufacturer_id = :uv");
                                            $u->bindValue(':uv', $read['id']);
                                            $u->execute();
                                            echo $u->rowCount();
                                            ?>
                                        </h2>
                                        <h6>Total Services</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-block-stat">
                                            <span>Services as at today</span>
                                            <span class="earnings"><?php echo $u->rowCount();?></span>
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

