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
                <?php if($k['answer']) { ?>
                <p class="card-text"><b>Jawaban:</b> <?=$k['answer']  ?></p>
                <?php }?>
            </div>
            <div class="card-footer">
                <a type="button" href="<?= base_url('lihat_konsultasi_controller/index/') . $k['id_konsultasi'] ?>" class="btn"> lihat</a>
                <?php if($user['role']==1){ ?>
                <a type="button" href="<?= base_url('JawabKonsultasiController/index/') . $k['id_konsultasi'] ?>" class="btn">Jawab</a>
                <a type="button" href="<?= base_url('KonsultasiController/DeleteKonsultasi/') . $k['id_konsultasi'] ?>" class="btn" onClick="return confirm('Apakah Anda Yakin?')">Delete</a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <br>
    <div class="card ">
        <div class="card-footer">
            <a type="button" href="<?= base_url('InputKonsultasiController'); ?>" class="btn">Tanya!</a>
        </div>
    </div>
    </table>
    <br></bbr>
</body>
</div>
