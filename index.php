<?php
require "dbBroker.php";
require "model/user.php";
session_start();
echo "PORUKA";
if(isset($_POST['username']) && isset($_POST['password'])){ // Kreiramo korisnika
    $uname = $POST['username'];
    $upass = $POST['password'];
    $conn = new mysqli();
    $korisnik = new User(null, $uname, $upass);
   // 1. nacin  $odg = $korisnik -> loginUser($uname, $upass, $conn);
    $odg = User::loginUser($korisnik, $conn); // 2. nacin - Posto je funkcija logUser staticka
    if($odg->num_rows==1){ // AKo je odg = true
       echo // ` - dugme na kome je ~, samo bez shift. Sluzi za pisanje stringa u vise linija
       `<script>
       console.log("Uspesno ste se prijavili");
       </script>`;
       $_SESSION['user_id'] = $korisnik->id;
       header('Location: home.php');
       exit();

    }else{
        
        echo // ` - dugme na kome je ~, samo bez shift. Sluzi za pisanje stringa u vise linija
       `<script>
       console.log("Niste se uspesno prijavili");
       </script>`;
    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FON: Zakazivanje kolokvijuma</title>

</head>
<body>
    <div class="login-form">
        <div class="main-div">
            <form method="POST" action="#">
                <div class="container">
                    <label class="username">Korisnicko ime</label>
                    <input type="text" name="username" class="form-control"  required>
                    <br>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" class="form-control" required>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div>

            </form>
        </div>

        
    </div>
</body>
</html>