

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
                                        $q2 =  $conn->query("SELECT * FROM users WHERE account = 1")->rowCount();
                                        echo $q2;
                                        ?></h2>
                                    <h6>Total Sellers</h6>
                                </div>
                                <div class="col-sm-12">
                                    <div class="info-block-stat">
<span>Sellers As At Today - <?php
    $q3 =  $conn->query("SELECT * FROM users WHERE account = 1")->rowCount();
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



                <div class="col-md-12">
                    <div class="panel panel-visible" id="spy6">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                Sellers Info
                            </div>
                        </div>
                        <div class="panel-body pn">
                            <div class="table-responsive">
                                <div id="datatable2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                                    <table class="table table-striped table-hover dataTable no-footer" id="datatable2" role="grid" aria-describedby="datatable2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="va-m sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 114px;">Seller</th>
                                            <th class="va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Address line: activate to sort column ascending" style="width: 145px;">Seller Type</th>
                                            <th class="va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 103px;">Contact</th>
                                            <th class="hidden-xs va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 88px;">Action</th>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $q = $conn->prepare("SELECT * FROM users WHERE account = 1 ORDER BY id desc");
                                        $q->execute();
                                        while($row = $q->fetch(PDO::FETCH_OBJ)){
                                            ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo $row->shop;?></td>
                                                <td><?php $q1 = $conn->query("SELECT option_type FROM options WHERE id = $row->option_id")->fetch(); echo $q1['option_type'];?></td>
                                                <td><?php echo $row->phone;?><br/><?php echo $row->email;?></td>
                                                <td class="hidden-xs">
<span class="">
<a href="javascript:;" class="delUser text-primary" id="<?php echo $row->id;?>" title="Delete"><i class="fa fa-trash"></i></a>
&nbsp;&nbsp;

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

    </section>
</section>
