

<section id="content_wrapper">

    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="sliders">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-link">
                    <a href="sliders">sliders</a>
                </li>
            </ol>
        </div>
    </header>


    <section id="content" class="table-layout animated fadeIn">

        <div class="chute chute-center">

            <div class="row">




                <a href="add-slider" style="left: 12px;position: relative;" class="btn btn-primary">Add Slider</a>

                <div class="col-md-12">
                    <div class="panel panel-visible" id="spy6">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                Sliders
                            </div>
                        </div>
                        <div class="panel-body pn">
                            <div class="table-responsive">
                                <div id="datatable2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                                    <table class="table table-striped table-hover dataTable no-footer" id="datatable2" role="grid" aria-describedby="datatable2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="va-m sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 114px;">S/N</th>
                                            <th class="va-m sorting_asc" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 114px;">Image</th>
                                            <th class="va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Address line: activate to sort column ascending" style="width: 145px;">Type</th>
                                            <th class="va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 103px;">Created</th>
                                            <th class="hidden-xs va-m sorting" tabindex="0" aria-controls="datatable2" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 88px;">Action</th>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $q = $conn->prepare("SELECT * FROM sliders  ");
                                        $q->execute();
                                        while($row = $q->fetch(PDO::FETCH_OBJ)){
                                            ?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo $row->id;?></td>
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

    </section>
</section>

