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
</head>

<!--<link rel="icon" type="imagem/png" href="imgs\logo2.png" width ="50%"; heigth ="50%";>-->

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico"/>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/ButtonLogin.css">

<style type="text/css">
	input[type=text]{
		border-radius: 30px;
	}
	#descricao{
		border-radius: 30px;
	}
	#descricao:focus{
		border-color: #FED001;
			box-shadow: 0 0 0 4px #FED001;
	}
	input[type=text]:focus{
			border-color: #FED001;
			box-shadow: 0 0 0 4px #FED001;
	}
	#categoria:focus{
		border-color: #FED001;
			box-shadow: 0 0 0 4px #FED001;
	}
	#categoria{
		border-radius: 30px;
	}
	input[type=file]{
			border-radius: 30px;
	}
	input[type=number]{
			border-radius: 30px;
	}
	input[type=number]:focus{
			border-color: #FED001;
			box-shadow: 0 0 0 4px #FED001;
	}
	input[type=file]:focus{
			border-color: #FED001;
			box-shadow: 0 0 0 4px #FED001;
	}
</style>

<body>   
	<?php 

		include('menu.php');
	?>
	

	<div class="form-group">
	          	<form action="meusprodutos.php" method="POST">
				<label for="categoria" style="width: 81%; text-align: center; font-size: 22px;"><font face="Pacifico" color="#fff">Listagem por Categoria:</font></label>
			    <select class="form-control" style="border-radius: 30px;display: inline;width: 20%;display: block; margin-left: 410px; margin-right: auto;"  id="categoria" name="pcategoria" >
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
			    <div class="btns">

			   	 <button type="submit" style="display: inline-grid;width: 20%; height: 35px;display: block; margin-left: 410px; margin-right: auto; border-radius: 30px;" class="efeito efeito-3" name="pesquisar"><font face="Pacifico">Listar</font></button>
			   	 </div> 
			   	
			</form>
			
				<label style="position:absolute;width: 87%; text-align: center; font-size: 22px; top:90px; left:19.5%;"><font face="Pacifico" color="#fff">Anunciar um novo produto:</font></label>
					<button style="position: absolute;display: block;width: 20%;left:53%;top:131.1px; height: 35px;" class="efeito efeito-3" name="logar" data-toggle="modal" data-target="#modalcadastrar" data-whatever="@getbootstrap" ><font face="Pacifico">Anunciar Produto</font></button>
				
		</div>	    

	<!--Modal do Cadastrar-->
	<div class="modal fade" id="modalcadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">O que você irá vender?</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" name="titulo"id="recipient-name" >
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B"color="#0B614B">Preço:</font></label>
	            <input type="number" step="0.01" class="form-control" name="preco" id="recipient-name" min="0">
	          </div>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao" name="descricao"></textarea>
	          </div>
	          <div class="form-group">
	          	
				<label for="categoria"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
			    <select class="form-control"  id="categoria" name="categoria">
			      <option value="1" selected>Imóveis</option>
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
				
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao">
	          </div>          
	          <div class="form-group">
	          	
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="" placeholder="função será implementada na próxima atualização!" readonly="true">
	          </div>
	          
	         <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="Anunciar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -30px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Anunciar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>

	<font face="Pacifico"></font>
	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
</body>
</html>

<?php

	if($_POST){
		if(isset($_POST['Anunciar'])){
			$usuario = $_SESSION['email'];
			$titulo = $_POST['titulo'];
			$preco = $_POST['preco'];
			$descricao = $_POST['descricao'];
			$categoria = $_POST['categoria'];
			$localizacao = $_POST['localizacao'];
			$foto = "foto.png";
				
				
			$existe = mysqli_query($con, "insert into produto(titulo, preco, descricao, categoria, localizacao, foto, usuario) values ('$titulo', '$preco', '$descricao', '$categoria', '$localizacao', '$foto', '$usuario');");

				echo "<script>document.location='meusprodutos.php'</script>;";
			
			}
			
			

		}		

?>
<?php
	if($_POST){
		if(isset($_POST['remover'])){
			$id = $_POST['remover'];

			$excluir = mysqli_query($con,"delete from produto where id='$id';");
			
			echo "<script>document.location='meusprodutos.php'</script>;";
			
		}
	}
?>

<?php
	if($_POST){
		if(isset($_POST['alterar'])){
			$id = $_POST['alterar'];
			$titulo = $_POST['titulo'];
			$preco = $_POST['preco'];
			$descricao = $_POST['descricao'];
			$categoria = $_POST['pcategoria'];
			$localizacao = $_POST['localizacao'];
			

			$existe = mysqli_query($con,"update produto set id = '$id', titulo = '$titulo', preco = '$preco', descricao = '$descricao', categoria = '$categoria', localizacao = '$localizacao', foto = 'PIMBA' WHERE id='$id'");
			
			echo "<script>document.location='meusprodutos.php'</script>;";
			
		}
	}

?>

<?php
	if($_POST){
		if(isset($_POST['pesquisar'])){
			$pCategoria = $_POST['pcategoria'];
			$usuario = $_SESSION['email'];

			if($pCategoria == 0){
				$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where usuario='$usuario'");
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

		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>

	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
			}
			if($pCategoria == 1){
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 1 and usuario='$usuario'");
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
		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>

	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
		   	}
		   	else if ($pCategoria == 2) {
		   		$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 2 and usuario='$usuario'");
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
		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>

	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 3) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 3 and usuario='$usuario'");
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

		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>

	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 4) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 4 and usuario='$usuario'");
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

		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>
	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 5) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 5 and usuario='$usuario'");
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

		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>
<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 6) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 6 and usuario='$usuario'");
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

		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>

	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 7) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 7 and usuario='$usuario'");
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
		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>
	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 8) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 8 and usuario='$usuario'");
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
		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>

	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 9) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 9 and usuario='$usuario'");
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

		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>

	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div>
						<?php
							}
						}		
		   	}
		   	elseif ($pCategoria == 10) {
		   	 	$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where categoria = 10 and usuario='$usuario'");
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

		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>

	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
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
			$usuario = $_SESSION['email'];
			$lista = mysqli_query($con,"select id, titulo, descricao, categoria, preco, localizacao, foto from produto where usuario='$usuario'");
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

		   				 
   				<button type="button" data-toggle="modal" data-target="#modaleditar<?php echo $listagem['id']; ?>" data-whatever="@getbootstrap" class="efeito efeito-3" style="display: block; margin-left: auto; margin-right: auto; width:70% ;color: #fff; height: 35px"><font face="Pacifico" style="font-size: 22px;">Editar</font></button>
   				 <a type="button" class="btn btn-danger" data-toggle="modal"  data-target="#modalExcluir<?php echo $listagem['id']; ?>" style="display: block; margin-left: auto; margin-right: auto; border-radius: 30px; width:70%;color: #fff;"><font face="Pacifico" style="font-size: 19px;">Excluir</font></a>
   				 
 				</div>
				</div>

	<!--Modal de Excluir-->
	<div class="modal fade" id="modalExcluir<?php echo $listagem['id']; ?>" style="top: 200px; " tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	         <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Você deseja mesmo exluir este anúncio?</font></h5>
	      </div>
	        <form action="meusprodutos.php" method="POST">
	          <div class="modal-footer">
		        <a type="button" class="btn btn-danger" data-dismiss="modal" style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Não</font></a>
		        <button type="submit" class="efeito efeito-3" style=" display: block; margin-top: 13px;  margin-left: 5px; margin-right: auto;" name="remover" value="<?php echo $listagem['id']; ?>"><font face="Pacifico" color="#fff" style="font-size: 22px;">Remover</font></button>
		      </div>
	        </form>	      
	    </div>
	  </div>
	</div>

	<!--Modal do Editar-->
	<div class="modal fade" id="modaleditar<?php echo $listagem['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><font face="Pacifico" color="#0B614B">Alterar Anúncio!</font></h5>
	      </div>
	      <div class="modal-body">
	        <form action="meusprodutos.php" method="POST">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Título do anúncio(nome):</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?php echo $listagem['titulo'];?>">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Preço:</font></label>
	            <input type="text" class="form-control" name="preco" id="recipient-name" value="<?php echo $listagem['preco'];?>">
	          </div>
	          <div class="form-group">
	            <label for="descricao" class="col-form-label"><font face="Pacifico" color="#0B614B">Descrição:</font></label>
	            <textarea class="form-control" id="descricao"  name="descricao"><?php echo $listagem['descricao'];?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Categoria:</font></label>
	           <?php 
   				 if($listagem['categoria'] == 1){?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" selected>Imóveis</option>
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
   				 <?php	
   				 }
   				 else if ($listagem['categoria'] == 2) {?>
   				 	<select class="form-control" style="display: inline;display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2" selected>Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 3) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3" selected>Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 4) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4" selected>Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 5) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5" selected>Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 6) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6" selected>Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 7) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7" selected>Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 8) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8" selected>Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 9) {?>
   				 <select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1" >Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9" selected>Moda e Beleza</option>
			      <option value="10">Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
   				 elseif ($listagem['categoria'] == 10) {?>
   				 	<select class="form-control" style="display: inline; display: block; margin-left: auto; margin-right: auto; border-radius: 30px;"  id="categoria" name="pcategoria" >
			      <option value="1">Imóveis</option>
			      <option value="2">Autos e Peças</option>
			      <option value="3">Para a sua casa</option>
			      <option value="4">Eletrônicos e Games</option>
			      <option value="5">Música e Hobbies</option>
			      <option value="6">Esporte e Lazer</option>
			      <option value="7">Artigos Infantis</option>
			      <option value="8">Doação de Animais</option>
			      <option value="9">Moda e Beleza</option>
			      <option value="10" selected>Comércio e Ecritório</option>
			    </select>
   				 <?php	
   				 }
					?>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Localização:</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="localizacao" value="<?php echo $listagem['localizacao'];?>">
	          </div>          
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><font face="Pacifico" color="#0B614B">Foto</font></label>
	            <input type="text" class="form-control" id="recipient-name" name="foto" value="<?php echo $listagem['foto'];?>">
	          </div>
	          
	          <div class="modal-footer">
		        <a type="button" class="btn btn-secondary" data-dismiss="modal"style="border-radius: 30px; padding-left: 80px; padding-right: 80px; "><font face="Pacifico" color="#fff" style="font-size: 22px;">Cancelar</font></a>
		        <button type="submit" class="efeito efeito-3"  name="alterar" value="<?php echo $listagem['id']; ?>" style=" display: block; margin-top: 13px;  margin-left: auto; margin-right: -22px;padding-left: 80px; padding-right: 80px;"><font face="Pacifico" color="#fff" style="font-size: 22px;">Alterar</font></button>
		      </div>
	        </form>
	      </div>
	      
	    </div>
	  </div>
	</div> 
				<?php
			}
		}		
		}
	  				 
?>