<body class="lihat_konsultasi">
  <div class="card">
    <?php $konsul = $konsultasi ?>
    <div class="card-header">
      <h4><b><?= $konsul['judul'] ?></b></h4>
      <p>penanya : <?= $konsul['username'] ?></p>
    </div>
    <div class="card-body">
      <p class="card-text"><?= $konsul['question'] ?></p>
    </div>
    <?php if($konsul['dokter'] and $konsul['answer']) { ?>
    <div class="card-footer">
      <p>Dijawab oleh : <?= $konsul['dokter'] ?></p>
      <p class="card-jawab">Jawab : <?= $konsul['answer'] ?></p>
    </div>
    <?php } ?>
    <?php if($user['role']==1) { ?>
    <a type="button" href="<?= base_url('JawabKonsultasiController/index/') . $konsul['id_konsultasi'] ?>" class="btn">Jawab</a> 
    <?php } ?>
    <br>
    <left><a type="button" class="btn" href="<?= base_url('KonsultasiController'); ?>">back</a></left>
  </div>
  <br>
  <br>
</body>
<footer>.</footer>
