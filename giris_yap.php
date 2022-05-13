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
            <a class="nav-link" href="ilgialani.html">İLGİ ALANLARIM</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="iletisim.html">İLETİŞİM</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="giris_yap.php">GİRİŞ YAP</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<br><br><br>

           



<!----------menulerin bittiği konum !!!!!!! ----------->

<main>

		<div class="container">
				
			<form action="giris_yap_kontrol.php" method="POST">

				<div class="form-group">
					<label for="email">Lütfen e-mail adresinizi giriniz.</label>
					<input type="text" name="email" class="form-control" placeholder="Email 'G211210380@sakarya.edu.tr'" required="required">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre 'G211210380'" required="required">
				</div>

				<button  type="submit">Gönder</button>

				<br><br><br>

			</form>

		</div>

	</main>





    
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