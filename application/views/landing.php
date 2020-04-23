<body class="landing">
  <div class="card text-black" padding-left="0">
    <img class="card-img" width="1200" height="400" src="<?php echo base_url(); ?>assets/images/landing/landing_bg.jpg">
    <div class="card-img-overlay text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="row" style="margin-top:20px">
              <div class="col-md-6">
              </div>

              <div class="card" style="width: 30rem;">
                <div class="card-body text-center">
                  <div class="row" style="margin-top : 10px">
                    <div class="col-md-6">
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

  <div class="container-fluid">
    <div class="row">
      <h1 class="col-4">Penginapan bagi mereka yang berjuang di garda terdepan melawan Krisis COVID-19</h1>
      <div class="col-6">
        <h2></h2>
        <p>Untuk membantu perjuangan melawan virus,Airbnb bermitra dengan para tuan rumah untuk menghubungkan 100.000 tenaga kesehatan,tenaga bantuan, dan penganggap darurat dengan tempat menginap yang bersih dannyaman, agar mereka dapat berada dekat dengan pasien- dan menjaga jarak aman dari keluarga mereka. kita mungkin terpisah jarak, tapi kita akan melewati masalh ini bersama-sama.</p>
      </div>
    </div>
  </div>
  <br><br>

  <div class="container-fluid">
    <div class="row">
      <div class="col text-left">
        <h1>Jelajahi Pediatricare</h1>
      </div>
    </div>

    <br><br>
    <div class="row" style="background-color: #007B9B;">
      <div class="col">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Konsultasi</h5>
            <a href="#" class="card-link">Card link</a>
          </div>
        </div>
      </div>

      <div class="col" style="background-color: #007B9B;">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Rumah Sakit</h5>
            <a href="#" class="card-link">Card link</a>
          </div>
        </div>
      </div>

      <div class="col" style="background-color: #007B9B;">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title">Info Kesehatan</h5>
            <a href="#" class="card-link">Card link</a>
          </div>
        </div>
      </div>

</body>
