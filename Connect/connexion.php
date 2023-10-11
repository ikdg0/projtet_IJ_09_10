<?php
session_start();
require("PDO.php");

if (isset($_POST['bout'])) {
    $pseudo = $_POST["email"];
    $pass = $_POST["pass"];
   
    $requete = "SELECT * FROM `connexion` WHERE mdp=:pass and mail=:pseudo";
    $execute = $db->prepare($requete);
    $execute->bindParam(':pass',$pass);
    $execute->bindParam(':pseudo',$pseudo);
    $execute->execute();

    if ($execute->rowCount() > 0) {  
        $resultat = $execute->fetchAll();
        var_dump($resultat);    
            echo "connexion";   
            $_SESSION['username'] = $pseudo; 
            $_SESSION['id_user'] = $resultat[0][0];
            header('Location: ../index.php');
    }else{
        $erreur = " Mot de passe Oublié !!😒";
       // header('Location: connexion.php');
       var_dump($resultat);    

    }
   
    

}

?>
?>
<!-- Le reste du code HTML reste inchangé -->


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form action="" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="pass" class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button id="bout"name="bout" type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#sign">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
<?php  
if (isset($_POST['sign'])) {
    $nom = $_POST["name"];
    $email = $_POST["email2"];
    $pass1 = $_POST["password2"];
    $pass2 = $_POST["password3"];
    if($pass1 == $pass2){

       $sql = "INSERT INTO `connexion`(`username`, `mdp`, `mail`) VALUES (':name', ':pass', ':email')";
        $stmt = $db->prepare($sql);
		$stmt->bindParam(':name',$nom);
		$stmt->bindParam(':pass',$pass1);
		$stmt->bindParam(':email',$email);
        $stmt->execute();
    }else{
        echo "Les mots de passe ne sont pas identique";
    }
}?>

		    <div id="sign" class="loform signup">
                <div class="loform-content">
                    <header class="login100-form-title">Signup</header><br><br>
                    <form action="" method="post">
                       
                    <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="name" placeholder="Name" class="input100">
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="email" name="email2" data-validate = "Valid email is required: ex@abc.xyz" placeholder="Email" class="input">
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input type="password" name="password2"  placeholder="Create password" class="input100">
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input type="password" name="password3" placeholder="Confirm password" class="input100">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button class="login100-form-btn" name="sign" style="margin-top: 35px;">Signup</button>
                        </div>
                    </form>

                    <div class="form-link" style="margin-top: 35px;">
                        <span>Already have an account? <a href="#" class="txt2">Login</a></span>
                    </div>
                </div>

                <div class="line">
					
				</div>

            </div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>