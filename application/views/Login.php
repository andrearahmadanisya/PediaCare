<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php base_url(); ?>assets/css/login.css" type="text/css" />
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row" style="margin-top:70px">
                    <div class="col-md-6">
                        <img src="assets/images/login/foto_login.png" width="500px">
                    </div>
                    <div class="col-md-6">
                        <ul class="text-center"><a>Member Login</a></ul>
                        <form action="<?= site_url('LoginController') ?>" method="post" accept-charset="utf-8">
                            <div class="form-group">
                                <label class="label control-label">Username</label>
                                <input type="username" class="form-control" name="username" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <label class="label control-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>

                            <button type="submit" class="btn btn-info">Login</button>

                            <p class="text-center">Or </p>

                            <div class="signup text-center">
                                <a href="<?= base_url('RegistController'); ?>">Sign Up</a>
                            </div>

                            <div class="back text-left">
                                <a class="btn btn-secondary btn-sm active" href="">back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
