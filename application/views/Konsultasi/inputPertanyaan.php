

<body class="inputpertanyaan">
    <img class="card-img" src="<?php echo base_url(); ?>assets/images/konsul/bg.png">
    <br><br><br>

    <div class="card">
        <?php if (!isset($user['fullname'])) { ?>
            <div class="alert alert-danger" role="alert">
                <strong>Anda belum Login. Silahkan login terlebih dahulu</strong>
            </div>
            <div>
                <a class="btn navbar-dark my-2 my-sm-0" href="<?= base_url('LoginController'); ?>">Login</a>
                or
                <a class="btn navbar-dark my-2 my-sm-0" href="<?= base_url('RegistController'); ?>">Sign Up</a>
            </div>
        <?php } else { ?>
            <form action="<?= base_url('InputKonsultasiController') ?>" method="POST">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="judul">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Pertanyaan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="question"></textarea>
                </div>
                <left><button type="submit" class="btn btn-primary">Submit</button></left>
                <a class="btn btn-secondary" href="<?= base_url('KonsultasiController'); ?>">Batal</a>
            </form>
        <?php } ?>
    </div>


    <br>
    <br>
    <br>
</body>
<footer>.</footer>
