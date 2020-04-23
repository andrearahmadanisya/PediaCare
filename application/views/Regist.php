<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/regist.css"; ?>" />

</head>

<body>
  <section class="register-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 register-sec">
          <h2 class="text-center">Register Now</h2>
          <form action="<?= base_url('registcontroller/register') ?>" method="POST" accept-charset="utf-8">
            <br>
            <div class="form-group">
              <label for="exampleInputName1" class="text-uppercase">fullname</label>
              <input type="fullname" name="fullname" value="<?= set_value('fullname') ?>" style="padding: 5px; padding-right: 225px;">
            </div>
            <div class="form-group">
              <label for="exampleInputAddress2" class="text-uppercase">username</label>
              <input type="username" name="username" value="<?= set_value('username') ?>" style="padding: 5px; padding-right: 225px;">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail" class="text-uppercase">Email</label>
              <input type="email" name="email" value="<?= set_value('email') ?>" style="padding: 5px; padding-right: 225px;">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="text-uppercase">Password</label>
              <input type="password" name="password" value="<?= set_value('password') ?>" style="padding: 5px; padding-right: 225px;">
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
            <!-- <div class="text-right" auto>
              <a class="btn btn-secondary btn-sm active" href="<?= base_url('LoginController'); ?>">Login</a>
            </div> -->
          </form>
        </div>
        <div class="col-md-8 banner-sec">
          <img height="560px" width="760px" src="<?php echo base_url(); ?>assets/images/register/foto.jpg">
        </div>
      </div>
  </section>

  <body>
