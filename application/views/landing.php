<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/landing.css"; ?>" />
</head>
<body class="landing">
  <div class="card text-black" padding-left="0">
    <img class="card-img" width="1200" height="500" ovelay="50%" src="<?php echo base_url(); ?>assets/images/landing/landing_bg.jpg">
    <div class="card-img-overlay text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="row" style="margin-top:50px">
              <div class="col-md-6">
              </div>
              <div class="card card-form" style="width: 30rem;">
                <div class="card-body text-center">
                  <div class="row" style="margin-top : 10px">
                    <div class="col-md" >
                      <ul class="text-left">
                        <ul class="text-center"><a>Login</a></ul>
                        <form action="<?= site_url('LoginController') ?>" method="post" accept-charset="utf-8">
                          <div class="form-group">
                            <label class="label control-label">Username</label>
                            <input type="username" class="form-control" name="username" placeholder="Username">
                          </div>

                          <div class="form-group">
                            <label class="label control-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                          </div>

                          <button type="submit" class="btn btn-info">Login</button><br>
                          <div class="signup text-right">
                            <a href="<?= base_url('RegistController'); ?>">Sign Up</a>
                          </div>
                        </form>
                    </div>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <br>
  <br>
  <div class="container-fluid">
    <div class="row">
      <h1 class="col-4">Mari kita beri dukungan kepada mereka yang berjuang di garda terdepan melawan Krisis COVID-19</h1>
      <div class="col-6">
        <h2></h2>
        <p>Untuk membantu perjuangan melawan virus, Pediatricare bermitra dengan para tuan rumah untuk menghubungkan 100.000 tenaga kesehatan dan juga menyalurkan donasi, tenaga bantuan, dan penganggap darurat dengan tempat menginap yang bersih dannyaman, agar mereka dapat berada dekat dengan pasien dan menjaga jarak aman dari keluarga mereka terutama buah hati. kita mungkin terpisah jarak, tapi kita akan melewati masalah ini bersama-sama.</p>
      </div>
    </div>
  </div>
  <br><br>

  <div class="container">
    <div class="row">
      <div class="col text-left">
        <h1 class="text-center">Jelajahi Pediatricare</h1>
      </div>
    </div>

    <br><br>
    <div class="row">
      <div class="col">
        <div class="card">
          <img height="100px" aaclass="mr-3" src="assets/images/landing/dr.png" alt="Generic placeholder image">
          <div class="card-body text-center">
          <a class="btn navbar-dark my-2 my-sm-0" href="<?= base_url('KonsultasiController'); ?>">KONSULTASI</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img height="100px" aaclass="mr-3" src="assets/images/landing/rs.jpg" alt="Generic placeholder image">
          <div class="card-body text-center">
          <a class="btn navbar-dark my-2 my-sm-0" href="<?= base_url('RumahSakitController'); ?>">RUMAH SAKIT</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card">
          <img height="100px" aaclass="mr-3" src="assets/images/landing/info.jpg" alt="Generic placeholder image">
          <div class="card-body text-center">
          <a class="btn navbar-dark my-2 my-sm-0" href="<?= base_url('infoController'); ?>">INFO-INFO</a>
          </div>
        </div>
      </div>
<br><br>
</body>
