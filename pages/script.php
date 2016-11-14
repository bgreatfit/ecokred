<div class="container">
    <div class="row">
        <div class="col-md-9">
            <p>hello</p>
            <form id ="hello" action="" class="horizontal">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control">
                </div>

                    <button type="submit" class="btn btn-primary btn-block btn-reg btn-lg" style="border-radius:0px !important;">Register</button>

            </form>
          
        </div>
    </div>
</div>

<script>
    $(document).ready(function (e) {
        event.preventDefault();
        $("#hello").submit(function () {
            $(".btn-reg").prop("disabled", true).html("<i class='fa fa-repeat fa-spin'></i> Processing...").fadeOut(1000);

        });
    });

</script>