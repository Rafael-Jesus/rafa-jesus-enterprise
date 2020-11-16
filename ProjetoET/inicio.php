<?php session_start(); 
include('conexao/conexao.php');?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio Empire Teste</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="bootstrap/bootstrap-4.4.1-dist/bootstrap-4.4.1-dist/js/bootstrap.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="sweetalert2.all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<!--<link rel="icon" type="imagem/png" href="imgs\logo2.png" width ="50%"; heigth ="50%";>-->

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico"/>
<link rel="stylesheet" type="text/css" href="css/ButtonLogin3.css">

<style type="text/css">
	select.#categoria:focus{	
			border-color: #FED001;
			box-shadow: 0 0 0 4px #FED001;
	}
</style>

<body>

	<?php include('menu.php');?>

		<div class="form-group">
	          	<form action="inicio.php" method="POST">
				<label for="categoria" style="width: 100%; font-size: 25;text-align: center;"><font face="Pacifico" color="#fff">Listagem por Categoria:</font></label>
			    <select class="form-control" style="display: inline;width: 30%;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="0" selected>Todas</option>
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
			   	 <button type="submit" style="display: inline;width: 30%;display: block; margin-left: auto; margin-right: auto;  --light: #FED001;
  --dark: #0B614B;" class="efeito efeito-3" name="pesquisar">Pesquisar</button> 
			</form>
		</div>	    

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

<?php
	if($_POST){
		if(isset($_POST['pesquisar'])){
			$pCategoria = $_POST['pcategoria'];

			if($pCategoria == 0){
				$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>

		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
			}
			if($pCategoria == 1){
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 1");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		   	else if ($pCategoria == 2) {
		   		$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 2");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 3) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 3");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 4) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 4");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 5) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 5");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 6) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 6");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 7) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 7");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 8) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 8");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 9) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 9");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 10) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 10");
				$linhas = mysqli_num_rows($lista);
				if($linhas > 0 ){
					foreach ($lista as $listagem) {
					?>
						<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>

		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
						<?php
							}
						}		
		   	}
		}
	}
		else{
			$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto");
			$linhas = mysqli_num_rows($lista);
		
			if($linhas > 0 ){
			foreach ($lista as $listagem) {
			?>
				<div class="card" style="width: 18rem; color:#FED001; background-color: #fff; display: inline-block;">
		  				<div class="card-body">
		   				 <h5 class="card-title"><font face="Pacifico" color="#0B614B">Titulo:</font> <font face="Pacifico"> <?php echo $listagem['titulo'];?></font></h5>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Preço:</font> <font face="Pacifico"><?php echo $listagem['preco'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Descrição:</font> <font face="Pacifico"><?php echo $listagem['descricao'];?></font></p>
		   				 <p class="card-text"><font face="Pacifico" color="#0B614B">Categoria:</font> <?php 
   				 if($listagem['categoria'] == 1){
   				 	echo "<font face='Pacifico'>Imóveis</font>";
   				 }
   				 else if ($listagem['categoria'] == 2) {
   				 	echo "<font face='Pacifico'>Autos e Peças</font>";
   				 }
   				 elseif ($listagem['categoria'] == 3) {
   				 	echo "<font face='Pacifico'>Para a sua casa</font>";
   				 }
   				 elseif ($listagem['categoria'] == 4) {
   				 	echo "<font face='Pacifico'>Eletrônicos e Games</font>";
   				 }
   				 elseif ($listagem['categoria'] == 5) {
   				 	echo "<font face='Pacifico'>Música e Hobbies</font>";
   				 }
   				 elseif ($listagem['categoria'] == 6) {
   				 	echo "<font face='Pacifico'>Esporte e Lazer</font>";
   				 }
   				 elseif ($listagem['categoria'] == 7) {
   				 	echo "<font face='Pacifico'>Artigos Infantis</font>";
   				 }
   				 elseif ($listagem['categoria'] == 8) {
   				 	echo "<font face='Pacifico'>Doação de Animais</font>";
   				 }
   				 elseif ($listagem['categoria'] == 9) {
   				 	echo "<font face='Pacifico'>Moda e Beleza</font>";
   				 }
   				 elseif ($listagem['categoria'] == 10) {
   				 	echo "<font face='Pacifico'>Comércio e Escritório</font>";
   				 }
					?></p>
		   				 <p class="card-text"><font face="Pacifico"><font face="Pacifico" color="#0B614B">Localização:</font> <?php echo $listagem['localizacao'];?></font></p>


		   				 <button type="button" data-toggle="modal" data-target="#modalComprar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "><font face="Pacifico">Comprar</font></button> 	 
		 				</div>
						</div>

						<div class="modal fade" id="modalComprar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 200px; ">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Está função virá na próxima atualização, aguarde!</font></h5>
						         
						        </button>
						      </div>
						        <form action="meusprodutos.php" method="POST">
						          <div class="modal-footer">
							        <button type="button" style="width:70%;display: block; margin-left: auto; margin-right: auto; color: #fff; "class="efeito efeito-3" data-dismiss="modal"><font face="Pacifico">Voltar</font></button> 
							      </div>
						        </form>	      
						    </div>
						  </div>
						</div>
				<?php
			}
		}		
		}
	  				 
?>