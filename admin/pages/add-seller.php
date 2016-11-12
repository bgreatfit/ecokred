<div class="container">
    <div class="row">
    <div class="col-sm-3 col-md-12 col-xl-12">
        <div id="signin-form" class="col-md-6  login-form-validation" style="margin-left:100px">
            <h2 class="register">Add Seller</h2>


            <form id="regForm" name="registration" action="" class="login-base-form form-horizontal" method="POST">
                <div class="form-group reg-info">
                    <?php if(isset($_GET['status']) AND ($_GET['status'] == 'registered')){?>
                        <div class='alert alert-warning'><i class='fa fa-check'></i> Seller successfully added, <button class='close' data-dismiss='alert'>&times;</button></div>

                    <?php }?>
                </div>
                <div class="form-group"><p><label id="passwordLabel" for="shopname">Shop Name</label></p>
                    <input type="text" id="shopname" name="shop" class="form-control input-lg validate-login" tabindex="2" data-validate="password"/></div>
                <div class="form-group"><p><label id="passwordLabel" for="shopadd">Shop Address</label></p>
                    <input type="text" id="shopadd" name="shopadd" class="form-control input-lg validate-login" tabindex="2" data-validate="password"/></div>
                <div class="form-group"><p><label id="passwordLabel" for="shopcity">City</label></p>
                    <input type="text" id="shopcity" name="city" class="form-control input-lg validate-login" tabindex="2" data-validate="password"/></div>

                <div class="form-group">
                    <label  class="control-label" for="sel1">Seller Option:</label>
                    <select class="form-control" id="sel1" name="option">
                        <option >Select Option</option>
                        <?php $op= $conn->query('SELECT * FROM options');?>
                        <?php while($option = $op->fetch(PDO::FETCH_ASSOC)) :?>
                            <option value="<?php echo $option['id']?>"><?php echo $option['option_type']?></option>
                        <?php endwhile;?>

                    </select>
                </div>
                <div class="form-group">
                    <p><label id="emailLabel" for="email">Email Address</label></p>
                    <input type="email" id="email" name="email" class="req  form-control input-lg validate-login" value=""
                           tabindex="1" data-validate="email"/>
                </div>
                <div class="form-group">
                    <p><label id="emailLabel" for="phone">Phone Number</label></p>
                    <input type="number" min="0" id="phone" name="phone" class="req  form-control input-lg validate-login" value=""
                           tabindex="1" data-validate="phone"/>
                </div>
                <div class="form-group">
                    <p><label id="passwordLabel" for="password">Password</label></p>
                    <input type="password" id="password" name="password" class="form-control input-lg validate-login" tabindex="2"
                           data-validate="password"/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-reg btn-lg" style="border-radius:0px !important;width:100%;"><span class="glyphicon-plus"></span> Add User</button>
                </div>


            </form>
        </div>

    </div>

    </div>
</div> <!-- ./container -->
