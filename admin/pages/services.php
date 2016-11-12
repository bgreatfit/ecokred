

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
                                        $q =  $conn->query("SELECT * FROM services")->rowCount();
                                        echo $q;
                                        ?></h2>
                                    <h6 class="text-muted">Total Services</h6>
                                </div>
                                <div class="col-sm-12">
                                    <div class="info-block-stat">
<span>Current Service - <?php
    $q =  $conn->query("SELECT * FROM services")->rowCount();
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
                                Service Approval
                            </div>
                        </div>
                        <div class="panel-body pn">
                            <div class="table-responsive">
                                <div id="datatable2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                                    <table class="table table-striped table-hover dataTable no-footer" id="datatable2" role="grid" aria-describedby="datatable2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="va-m sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 114px;">Service</th>
                                            <th class="va-m sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 114px;">Category</th>
                                            <th class="va-m sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 114px;">Type</th>
                                            <th class="va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Address line: activate to sort column ascending" style="width: 145px;">Seller</th>
                                            <th class="va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 103px;">Contact</th>
                                            <th class="hidden-xs va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="State: activate to sort column ascending" style="width: 39px;">Eks</th>
                                            <th class="hidden-xs va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 88px;">Action</th>
                                            <th class="va-m sorting_disabled" rowspan="1" colspan="1" aria-label="Credit Limit" style="width: 91px;">Price</th></tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $q = $conn->prepare("SELECT * FROM services  ");
                                        $q->execute();
                                        while($row = $q->fetch(PDO::FETCH_OBJ)){
                                            ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo $row->name;?></td>
                                                <td class="sorting_1"><?php $q1 = $conn->query("SELECT * FROM service_cats WHERE id=".$row->service_cat_id."")->fetch(); echo $q1['service_cat_title'];?></td>
                                                <td class="sorting_1"><?php echo $row->service_type;?></td>
                                                <td><?php $q1 = $conn->query("SELECT * FROM users WHERE id=".$row->manufacturer_id."")->fetch(); echo $q1['shop'];?></td>
                                                <td><?php echo $q1['phone'];?><br/><?php echo $q1['email'];?></td>
                                                <td class="hidden-xs"><?php echo $row->points;?></td>
                                                <td class="hidden-xs">
<span class="">
<a href="javascript:;" class="editSer" id="<?php echo $row->id;?>" Title="Edit"><i class="fa fa-edit"></i></a>
&nbsp;&nbsp;
<a href="javascript:;" class="delSer text-primary" id="<?php echo $row->id;?>" title="Delete"><i class="fa fa-trash"></i></a>
&nbsp;&nbsp;
    <?php
    if($row->approve == 1){
        ?>
        <a href="javascript:;" class="disapproveSer text-warning" id="<?php echo $row->id;?>" title="Disapprove"><i class="fa fa-thumbs-down"></i></a>
    <?php }else{?>
        <a href="javascript:;" class="approveSer text-info" id="<?php echo $row->id;?>" title="Approve"><i class="fa fa-thumbs-up"></i></a>
    <?php }?>
</span>
                                                </td>
                                                <td>₦<?php echo number_format($row->price);?></td>
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

