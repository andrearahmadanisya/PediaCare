<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/konsultasi.css"; ?>" />

<body class="konsultasi">
    <img class="card-img" src="<?php echo base_url(); ?>assets/images/konsul/bg.png">

    <br><br><br><br>
    <?php foreach ($konsultasi as $k) { ?>
        <div class="card text-left">
            <div class="card-header">
                <b><?= $k['judul'] ?></b> <!-- judul -->
            </div>
            <div class="card-body">
                <h7 class="card-title"><b>Penanya : <?= $k['username'] ?></b></h7>
                <br>
                <!-- ini isi pertanyaan -->
                <p class="card-text"><?php echo substr($k['question'], 0, 50)  ?>...</p>
            </div>
            <div class="card-footer">
                <a type="button" href="<?= base_url('lihat_konsultasi_controller/index/') . $k['id_konsultasi'] ?>" class="btn"> lihat</a>
                <a type="button" href="<?= base_url('JawabKonsultasiController/index/') . $k['id_konsultasi'] ?>" class="btn">Jawab</a>
            </div>
        </div>
    <?php } ?>
    <br>
    <div class="card-footer">
        <a type="button" href="<?= base_url('InputKonsultasiController'); ?>" class="btn">Tanya!</a>
    </div>

    </table>
    <br></bbr>
</body>
</div>
