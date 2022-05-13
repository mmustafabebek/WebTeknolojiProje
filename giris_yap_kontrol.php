<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="proje.css">
    <title>ANA SAYFA</title>
  </head>
  <body>
      
  <!----------menulerimin basladığı konum !!!!!!! ----------->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mustafa Bebek</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="hakkimda.html">HAKKIMDA</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="ozgecmisim.html">ÖZGEÇMİŞİM</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="sehrim.html">ŞEHRİM</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mirasimiz.html">MİRASIMIZ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="ilgialani.htmi">İLGİ ALANLARIM</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="iletisim.html">İLETİŞİM</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="giris_yap.php">GİRİŞ YAP</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<br><br><br>

           



<!----------menulerin bittiği konum !!!!!!! ----------->



    <div class="container">
                
         <?php 

                include("kayitlilar.php");


                if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
                {
                $_SESSION["login"] = "true";
                $_SESSION["user"] = $user;
                $_SESSION["pass"] = $pass;
                
                echo("!!!!!!!!!!!!SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!!!!!!!!");
                
                }
                
                else 
                {
                     echo "!!!!!!Kullancı Adı veya Şifre Yanlış!!!!!!!!!.<br>";
                     echo "!!!TEKRAR DENEYİNiz!!!";
                     header("Refresh: 1; url=giris_yap.php");
                }
                
         ?>
                
    </div>


    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>