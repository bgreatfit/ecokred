

<section id="content_wrapper">

    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="home">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-link">
                    <a href="home">Home</a>
                </li>
            </ol>
        </div>
    </header>


    <section id="content" class="table-layout animated fadeIn">

        <div class="chute chute-center">

            <div class="row">



                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile info-block info-block-bg-info">
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-xs-5 ph10 text-center">
                                    <i class="imoon imoon-users2"></i>
                                </div>
                                <div class="col-xs-7 pl35 text-center">
                                    <h2 class=""><?php
                                        $q2 =  $conn->query("SELECT * FROM users")->rowCount();
                                        echo $q2;
                                        ?></h2>
                                    <h6>Total Users</h6>
                                </div>
                                <div class="col-sm-12">
                                    <div class="info-block-stat">
<span>Users As At Today - <?php
    $q3 =  $conn->query("SELECT * FROM users")->rowCount();
    echo $q3;
    ?></span>
                                        <span class=""></span>
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
                                    <i class="fa fa-cloud-upload"></i>
                                </div>
                                <div class="col-xs-7 pl35 text-center">
                                    <h2 class=""><?php
                                        $q =  $conn->query("SELECT * FROM products")->rowCount();
                                        echo $q;
                                        ?></h2>
                                    <h6 class="text-muted">Total Products</h6>
                                </div>
                                <div class="col-sm-12">
                                    <div class="info-block-stat">
<span>Current Products - <?php
    $q =  $conn->query("SELECT * FROM products")->rowCount();
    echo $q;
    ?></span>
                                        <span class=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    </section>
</section>

<script src="./assets/js/jquery/jquery-1.11.3.min.js"></script>
<script src="./assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>
<script src="./assets/js/pages/tables-data.js"></script>
