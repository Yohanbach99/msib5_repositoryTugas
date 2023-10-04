<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contac</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php

// Deklarasi variabel PHP
$nama = "Yohan Dwi Bachtiar";
$alamat = "Irman Jaya-Manokwari, Papua Barat.";
$telepon = "082 345 678 980";
$email = "yohanbachtiar2001@gmail.com";
$linke = "https://www.linkedin.com/in/yohan-dwi-bachtiar-309844254"
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-primary text-center">
                    Hubungi Saya
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                 
                <address>
                     <strong>Telepon</strong><br /> <?php echo $telepon; ?><br /> <br /> <abbr title="Phone"></abbr> 
                </address>
            </div>
            <div class="col-md-4">
                 
                <address>
                     <strong>Email</strong><br /> <?php echo $email; ?><br /><br /> <abbr title="Phone"></abbr> 
                </address>
            </div>
            <div class="col-md-4">
                 
                <address>
                     <strong>LinkedIn</strong><br /><?php echo $linke; ?><br /> <br /> <abbr title="Phone"></abbr> 
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 
                <a href="index.php"><button type="button" class="btn btn-sm btn-block btn-outline-success">
                    Back To Home
                </button></a>
            </div>
        </div>
    </div>
</body>
</html>