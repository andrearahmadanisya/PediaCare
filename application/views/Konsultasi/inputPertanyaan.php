<body class="inputpertanyaan">
    <img class="card-img" src="<?php echo base_url(); ?>assets/images/konsul/bg.png">
    <br><br><br>

    <div class="card">
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
        </form>
    </div>


    <br>
    <br>
    <br>
</body>
<footer>.</footer>
