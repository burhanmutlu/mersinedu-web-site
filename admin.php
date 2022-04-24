<!doctype html>          
<html lang="en">
  <head>

    <title>Lütfen Oturum Açınız</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="css/img/admin.ico">
    <style>
      
body {
  background-color: rgb(250, 250, 250);
}

.mb-3 {
  width: 100%;
}

input {
  height: 20%;
}

label {
  font-size: 80%;
}

.form-label {
  background-color: rgb(237, 235, 235);
}

.form-control {
  background-color: rgb(245, 248, 252);
}

#buton_bosluk {
  width: 50%;
  margin-left: 25%;
}

#ust_bosluk_form {
  margin-top: -2%;
  
}
#sabit_sayi {
  background-color: rgb(252, 215, 215);
  width: 100%;
  padding-left: 2%;
}

#tablo_deger_giris {
  width: 100%;
}

.tam_kutu {
  border-width: 1px;
  border-color: lightblue;
  border-style: solid;
  border-radius: 2%;
  box-shadow: 10px 10px 10px hsl(229, 100%, 97%);
  width: 40%;
  margin-left: 30%;
  padding: 1%;
  margin-top: 3%;
  background-color: white;
}

/*telefon*/
@media only screen and (max-width: 800px) {
  .tam_kutu {
    width: 100%;
    margin-left: 0%;
    margin-right: 0%;
    
  }

  #logo {
    width: 20%;
    margin-left: 70%;
    margin-bottom: -2%;
    margin-top: -1%;
  }

  .navbar-brand {
    margin: 0 auto;
  }
}

/*pc*/
@media only screen and (min-width: 800px){
  .tam_kutu {
    width: 40%;
    margin-left: 30%;
    margin-right: 30%;
    
  }

  #logo {
    width: 25%;
    margin-left: 70%;
    margin-bottom: -4%;
    margin-top: -3%;
  }

  .navbar-brand {
    margin: 0 ;
  }
}

.orta_metin {
  width: auto; /* içinde link var ona göre ayarla*/
  margin: 0 auto;
  text-align: center;
  margin-top: 2%;
  font-size: 80%;
}

a {
  text-decoration: none;
}

#klavye-kutu {
  width: 1400px;
  height: 450px;
  display: none;
  margin-top: -250px;
}
    </style>
    
  </head>
  <body>

  <a  id="bolum"></a>
<nav class="navbar navbar-light bg-light" >
  <div class="container-fluid" style="background-color:rgb(219, 222, 253);">
    <a class="navbar-brand" href="index.html">Mersin Üniversitesi</a>
  </div>
</nav>

<div class="tam_kutu">
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST" autocomplete="on">
      <img src="http://kimlik.mersin.edu.tr/simplesaml/module.php/mersinTheme/img/meuLogo.png" id="logo"></img>
  <div class="mb-3" id="ust_bosluk_form">
    <label for="exampleInputEmail1" class="form-label"> <i class="bi bi-person-fill"></i> Username / Kullanıcı Adı</label> 
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username@mersin.edu.tr">
    <div id="emailHelp" class="form-text">E-postanızı asla başkalarıyla paylaşmayacağız.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> <i class="bi bi-lock-fill"></i> Password / Parola</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="********">
  </div>
  <div class="mb-3">
    <table style="width: 100%;">
    <label for="exampleInputPassword1" class="form-label">Robot Olmadığınızı Doğrulayın</label>
      <tr >
        <td id="sabit_sayi" style="width: 40%;">
          <?php
          $sayi1; $sayi2;
          $sayi1 = rand()%50;
          $sayi2 = rand()%10;
          echo "$sayi1 + $sayi2 = ";
          ?>
        </td>
        <td style="60%"><input type="text" id="tablo_deger_giris" class="form-control" name="sonuc" autocomplete="off"></td>


        </td>
      </tr>
    </table>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Kullanıcı Adını Hatırla</label><br>
  </div>
  <button type="submit" class="btn btn-primary" id="buton_bosluk" ><a href="index.html"  style="color: white;">Login · Giriş</a></button>
  </form>
  <?php
/*
       if (isset($_POST["kontrol"])) {
     
             $sonuc=$_POST['sonuc'];
             $toplam = $sayi1 + $sayi2;
             if($sonuc == $toplam){
               echo "dogru";
             }else {
               echo "yanlış";
             }
       }*/
         ?>

  
  <div class="orta_metin">
    <a href="klavye.html" target="cerceve" onclick="goster()"><i class="bi bi-keyboard" style="font-size: 200%;"></i> Sanal Klavye - </a> <a href="">Şifreni mi Unuttun?</a>
  </div>
  </div>

  <script>
    function goster() {
      document.getElementById("klavye-kutu").style.display = "block";
    } 
    function gizle() {
      document.getElementById("klavye-kutu").style.display = "none";
    }
  </script>
       <iframe name="cerceve" id="klavye-kutu" onmouseout="gizle()"></iframe>
  <div class="orta_metin">
    <span>
    E-Posta Yardım İçin Dahili Numaralar : <a href="">34045</a>
     - <a href="">34043</a> - <a href="">13530</a> <br>
      <p style="font-weight: 200%;">Mersin University  Authentication Service</p><br><br>
    </span>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>