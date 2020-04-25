<body class="jawabkonsultasi">
    <img class="card-img" src="<?php echo base_url(); ?>assets/images/konsul/bg.png">
    <br><br><br>
    <?php $konsul = $konsultasi ?>
    <div class="card">
        <form action="<?= base_url('JawabKonsultasiController/index/') . $konsul['id_konsultasi'] ?>" method="POST">
            <h4><b>Form Jawab</b></h4>
            <div class="form-group">
                <h4><b><?= $konsul['judul'] ?></b></h4>
                <p>Penanya :<?= $konsul['username'] ?></p>
                <p class="card-text">Pertanyaan : <?= $konsul['question'] ?></p>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Jawaban: <?= $konsul['answer'] ?></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="jawaban" rows="8"></textarea>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
</body>
<footer>.</footer>
