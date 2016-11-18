<?php
If(isset($_REQUEST['name'])){
    $name =$_REQUEST['name'];
    $email =$_REQUEST['email'];
    $password =$_REQUEST['password'];
    $data= array($name,$email,$password);
    deliver_response ('512',"all field required",$data);
}



?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
       </div>
        <div class="col-md-6">
            <p>hello</p>
            <form id ="hello" action="" class="horizontal">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label for="">Account Type </label>
                    <select class="form-control" name="">
                        <option value="" class="form-control">Seller</option>
                        <option value="" class="form-control ">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                    <button type="submit" class="btn btn-primary btn-block btn-reg btn-lg" style="border-radius:0px !important;">Register</button>

            </form>
          
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>

<script>
    $(document).ready(function (e) {
        event.preventDefault();
        $("#hello").submit(function () {
            $(".btn-reg").prop("disabled", true).html("<i class='fa fa-repeat fa-spin'></i> Processing...");
            var data =  $(this).serialize();
            var url = 'script.php';
            $.getJSON(url,data,function (resp) {
                $('.col-md-9 p' ).html(resp.status);

            })
        });
    });

</script>