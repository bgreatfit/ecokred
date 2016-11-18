<header class="contact"><i class="icon-map-marker icon-2x" style="color:#009426;"></i><h3><strong>Where To Earn Eks</strong></h3></header>

<div class="container">
        <div class="row">
            <?php
            $q3 = $conn->prepare("SELECT shop,phone,address,city ,email FROM users WHERE account = 1 AND id NOT IN ( 1 ) ");
            $q3->execute();

            while($read = $q3->fetch(PDO::FETCH_OBJ)){

            ?>

            <div class="col-md-4 services_small">
                <dl class="dl-horizontal ">
                    <dt><i class="icon-map-marker icon-2x" style="color:#009426;"></i> </dt>
                    <dd>
                        <h4><?php echo ucfirst($read->shop); ?> Store</h4>
                        <div class="content">
                            <div><?php echo ucfirst($read->address); ?>,<br>
                                <?php echo ucfirst( $read->city); ?>,<br>
                                <?php echo ucfirst($read->phone); ?>,<br>
                                <?php echo strtolower($read->email); ?>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>
            <?php } ?>

    </div>
</div>