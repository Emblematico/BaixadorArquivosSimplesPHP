<?php
    if (isset($_POST["submit"])) {
        $file_url = $_POST["url"];
        $file_name = basename($file_url);

        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file_name");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        readfile($file_url);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon" href="img/baixar.ico" type="image/x-icon">
    <title>Download de arquivos PHP</title>
</head>
<body style="background: #ab41d5;">
    <!-- Imagem e texto -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="img/baixar.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Simple file downloader
  </a>
</nav>
<div class="container">
<div class="container bg-white wrapper shadow p-4">
        <h2 class="title text-center mb-4">Baixador de arquivos simples</h2>
        <form action="" method="post" class="form">
            <div class="mb-3">
                <input type="url" name="url" id="url" class="form-control" placeholder="Colar URL do vídeo..." required>
            </div>
            <button type="submit" name="submit" class="btn w-100 shadow-sm" style="background: #ab41d5; color: #fff;">Download</button>
        </form>
        <div class="text-center p-4">
        <label><img src="img/unlink.png" width="50" height="50" class="d-inline-block align-top" alt=""></label>
         <h4>O URL inserido é inválido</h4>
          <p>Verifique se o URL é válido</p>
		</div>
    </div>
</div>
    	<script src="js/bootstrap.min.js"></script>
</body>
</html>