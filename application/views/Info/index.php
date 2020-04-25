    <head>
        <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/info.css" />
    </head>

    <body class="info">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h2 class="display-4">Anda Ingin Konsultasi Seputar Anak ?</h2>
                <p class="lead">Tanyakan kepada kami secara mudah dan cepat</p>
                <a class="btn btn-primary btn-lg" href="<?=base_url('KonsultasiController')?>" role="button">klik disini</a>
            </div>
        </div>
        <br><br>

        <div class="container col-8">
            <div class="row">
                <div class="col text-left">
                    <h3>Info Seputar Kesehatan</h3>
                </div>
            </div>
            <br>
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav float-right">
                    <img height="500px" width="180px" src="<?php echo base_url(); ?>assets/images/ss.png">
                </ul>
            </div> <!-- /#sidebar-wrapper -->

            <?php foreach ($info as $i) { ?>
                <div class="media position-relative">
                    <img src="<?= base_url() ?>assets/images/info/<?= $i['photo'] ?>" class="mr-3" alt="..." style="width:30%;">
                    <div class="media-body">
                        <h5 class="mt-0"><?= $i['judul'] ?></h5>
                        <p><?php echo substr($i['isi'], 0, 100)  ?>...</p>
                        <a type="button" class="btn btn-sm" href="<?= base_url('InfoController/view/') . $i['id_info'] ?>" class="stretched-link"><b>Lanjutkan membaca</b></a>
                        <?php if($user['role']==1) { ?>
                        <a type="button" class="btn btn-danger btn-sm" href="<?php echo base_url() . 'InfoController/DeleteInfo/' . $i['id_info'] ?>" onClick="return confirm('Apakah Anda Yakin?')">Delete</a></td>
                        <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#UpdateInfo<?= $i['id_info'] ?>"> Update</a>
                        <?php }?>
                    </div>
                </div>
                <br>
            <?php } ?>
            <?php if($user['role']==1) { ?>
            <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#AddInfo"> Create</a>
            <?php }?>
        </div>
    </body>

    <div class="modal fade" id="AddInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <center>
                        <h2>TAMBAH INFO</h2>
                    </center>
                </div>
                <div class="modal-body">
                    <?php echo form_open(base_url() . 'InfoController/Save', array('enctype' => 'multipart/form-data')); ?>
                    <table cellpadding="8">
                        <div>
                            <label>Judul</label>
                            <input class="form-control" type="text" name="judul" required>
                        </div>
                        <div>
                            <label>Isi</label>
                            <textarea class="form-control" type="text" name="isi" required> </textarea>
                        </div>
                        <div>
                            <label>Gambar</label><br>
                            <input type="file" name="gambar">
                        </div>

                    </table>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <?php foreach ($info as $i) { ?>
        <div class="modal fade" id="UpdateInfo<?= $i['id_info'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                            <h2>EDIT INFO</h2>
                        </center>
                    </div>
                    <div class="modal-body">

                        <?php echo form_open(base_url() . 'InfoController/UpdateInfo/' . $i['id_info'], array('enctype' => 'multipart/form-data')); ?>
                        <table cellpadding="8">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Judul</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul" value="<?= $i['judul'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Isi</label>
                                <textarea class="form-control" id="formGroupExampleInput" placeholder="Isi" name="isi" required><?= $i['isi'] ?></textarea>
                            </div>
                            <div class="form-group">

                                <label for="file">Gambar</label><br>
                                <input type="file" name="gambar">
                            </div>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <br><br><br><br>
    <footer>,</footer>
