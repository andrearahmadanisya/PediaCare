<html lang="en">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/nextinfo.css'; ?>" /> 
    

</head>
<body>
<?php $data = $info_detail;  ?>
    <div class="card">
        <div class="row">
            <div class="col text-center">
                <h2 class="img-title"><?= $data['judul'] ?></h2>
                <img src="<?= base_url() ?>assets/images/info/<?= $data['photo'] ?>" width="500" height="300" />
                <p><?= $data['isi'] ?></p>
            </div>
        </div>
        <div class="kembali text-left">
            <a class="btn btn-secondary btn-sm active" href="<?php echo base_url('InfoController') ?>">back</a>
        </div>
    </div>
</body>
</html>

<br><br><br><br><br>
<footer>,</footer>

