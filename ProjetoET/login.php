<?php session_start();
include('conexao/conexao.php'); ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Login EmpireTeste</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="bootstrap/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="sweetalert2.all.min.js"></script>	
</head>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.js"/>
<script src="sweetalert2.all.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/login2.css">
<link rel="stylesheet" type="text/css" href="css/ButtonLogin.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico"/>
<link rel="stylesheet" type="text/css" href="css/redeSociais.css">

<body>
	<center>
		<img id="logotipo" Style="top: 5px; left: 39%;" src="imgs/logo2_2_1.png">
		<div class="container-xl" >
			<form class="form-signin" style=" text-align: center;" method="POST" action="login.php">
			
				<p style="display: inline; top: 270px; font-size: 21px; position: absolute;left: 36.3%;
				color: white;font-family:Pacifico;color: #fff; ">Para começar, faça login no EmpireTeste.</p> <br><br>
			
				<div class="form-group" style="display:flex;justify-content:center;align-items:center;">
					<input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Endereço de e-mail" style="height: 40px; border-radius: 50px; background-color: #ffff; width: 30%;font-family:Pacifico;" autofocus="autofocus" required autofocus>
				</div>

				<div class="form-group"style="display:flex;justify-content:center;align-items:center;">
					<input type="password" id="senha" name="senha" class="form-control" placeholder="Senha"  style="height: 40px; border-radius: 50px; position: absolute; top: 375px; width: 30%; background-color: #ffff; font-family:Pacifico;"  required>
				</div>
				
				<div class="btns"><br>
					<button type="submit" style="position: absolute; top: 435px; left: 40.5%;" class="efeito efeito-3" name="logar"><font face="Pacifico">Entrar</font></button>
				</div>

				<div class="form-check">
					<p style="color: #fff; font-size: 17px; position: absolute; left: 535px;top:380px;"><font face="Pacifico">Ainda não tem uma conta?<a href="cadastro.php" style="color: #FED001	">Inscreva-se.</a></font></p>
				</div>
            </form>
		</div> 
		<link rel="shortcut icon" href="imgs/logo1_2.ico" type="image/x-icon" />
		<h3><font id="font" face="Script"></font></h3>

		<div style=" width: 1366px; top: 547px;height: 110px; position: absolute; background-color: #FED001;" >
  			<p style="color: #fff; font-size: 16px; left: 585px; top: 50px;position: absolute;"><font face="Pacifico">&copy; 2020  EmpireTeste Enterprise.</font></p>

  			<p style="color: #fff; font-size: 16px; left: 625px; top: 70px;position: absolute;"><font face="Pacifico">Por Rafael Jesus.</p></font>

  			<div class="footer-social-icons" style="position: absolute; top:2px; left: 488px;">
    		<ul class="social-icons">
        		<li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        		<li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        		<li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        		<li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        		<li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        		<li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
    		</ul>
			</div>

		</div>

				
	</center>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</body>
</html>

<?php 
	if($_POST){
		if(isset($_POST['logar'])){
			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$existe = mysqli_query($con,"select email, senha from usuario where email = '$email' and senha='$senha';");
			$linhas = mysqli_num_rows($existe);
			if($linhas == 1){
				$nome = mysqli_query($con,"select nome from usuario where email = '$email' and senha='$senha';");
				foreach ($nome as $n){
					$_SESSION['email'] = $email;
					$_SESSION['senha'] = $senha;
					$_SESSION['nome'] = $n['nome'];
				}
				
				echo "<script>document.location='inicio.php'</script>;";
			}
			else{
			function alerta($typer, $title, $msg){
				echo "<script type='text/javascript'>
					Swal.fire({
						icon: '$typer',
						title: '$title',
						text: '$msg',
						showConfirmButton: false,
						width: '300px',
						timer: 1800,
						background: '#fff'
					});					
				</script>";
			}
				alerta("error", "", "Email ou senha inválidos");
					
			}	
		}
	}
?>