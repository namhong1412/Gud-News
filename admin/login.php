<?php 
    include '../model/session/check_logged.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'componetns/head.php'; ?>
    <title>Login</title>
</head>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->
    <div class="wrapper pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="index.html">
                    <img class="brand-img mr-10" src="assets/img/logo.png" width="25" alt="brand" />
                    <span class="brand-text">Gud News</span>
                </a>
            </div>
            <div class="clearfix"></div>
        </header>
        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="container-fluid">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="mb-30">
                                        <h3 class="text-center txt-dark mb-10">Login to Gud News</h3>
                                        <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                    </div>
                                    <div class="form-wrap">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="email">Email address</label>
                                            <input type="text" class="form-control" required="" id="email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="password">Password</label>
                                            <div class="clearfix"></div>
                                            <input type="password" class="form-control" required="" id="password" placeholder="Enter password">
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" id="login" class="btn btn-primary  btn-rounded">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
        </div>
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    <?php include_once 'componetns/script.php'; ?>
    <script>
        $('#login').click(() => {
            var email = $('#email').val();
            var password = $('#password').val();
            if (email == "" || password == "") {

            }
            $.ajax({
                url: '../model/login/check.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    email : email,
                    password : password
                }
            })
            .done((res) => {
                window.location = "add-post.php";
            })
        });
    </script>
</body>

</html>