<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico"/>

<style type="text/css">
	input[type=search]:focus{
			border-color: #FED001;
			box-shadow: 0 0 0 4px #FED001;
	}	
</style>

<link rel="stylesheet" type="text/css" href="css/submenu.css">
<nav class="navbar navbar-expand-lg " style="background-color: #FED001;">
	  <a class="navbar-brand" href="inicio.php" style="color: #fff; "><font face="Pacifico">E.T.</font></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="inicio.php"  style="color: #fff;"><font face="Pacifico">Início</font><span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="meusprodutos.php" style="color: #fff;"><font face="Pacifico">Meus Produtos</font></a>
	      </li>
	    </ul>
	    
	   	<form class="form-inline my-2 my-lg-0">
	    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" style="border-radius: 20px;">
	    <a href="" type="submit"><img style="width: 25px; height: 25px;" src="imgs/search.png"></a>
	    </form>
	   	
	   <div id="navigationbar">
		<ul id='navigationcss'> 
		<li><a href="LINK2" style="display: inline-flex; text-decoration: none;"><img style="width: 30PX; height: 30px; left: 50px;" src="imgs/user.png"><font face="Pacifico" style="color: #fff;"><?php echo $_SESSION['nome'];?></font></a>
		<ul>
		<li><a href="meusprodutos.php" style="text-decoration: none;"><hr style="background-color: #0B614B"><font face="Pacifico" style="color: #fff;">Meus Produtos</font></a></li>

		<li><a href="sair.php" style="text-decoration: none;"><hr style="background-color: #0B614B; text-decoration: none;"><font face="Pacifico" style="color: #fff;">Sair</font></a></li>
		</ul>
		</li>
		</ul>
	   </div>   

	  	</div>
	</nav>
