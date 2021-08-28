<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/page.css">
	<style type="text/css">
		body{
			margin: 0;
			background-color: #e0ffff;
		}
		a {
			text-decoration: none;
			color: inherit;
		}
		a:hover{
			color: #919191;
		}
		header{
			height: 100px;
			background-color: #ff0000;
			text-align: center;
		}
		.logo {
			height: 90px;
		}
		nav{
			background-color: #d8bfd8;
			margin: 0;
		}
		nav ul{
			list-style: none;
			width: 100%;
			margin: 0px;
			padding: 0;
			display: flex;
			justify-content: center;
		}
		nav ul li{
			padding: 12px;
			padding-left: 20px;
			padding-right: 20px;
		}
		.content{
			min-height: 400px;
		}
		footer{
			background-color: #ffa500;
			min-height: 60px;
			padding: 40px;
		}
		.container{
			max-width: 800px;
			display: flex;
			justify-content: space-between;
			margin: auto;
			padding-top: 25px;
			flex-wrap: wrap;
		}
	</style>
</head>
<body>
	<header>
		<img src="images/banner.png" alt="texto" class="logo">
	</header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?page=quem_somos">Quem somos</a></li>
			<li><a href="index.php?page=contato">Contatos</a></li>
			<li><a href="https://www.google.com.br/maps/@-12.3879857,-38.9571724,191m/data=!3m1!1e3?hl=pt-PT">Localização</a></li>
		</ul>
	</nav>
	<div class="content">
		<div class="container">
			<?php
				$page ="home";
				if(isset($_GET['page'])){
	
					if(file_exists("pages/".$_GET['page'].".php")){
						$page = $_GET['page'];
					}
				}
				include("pages/$page.php");
				?>
		</div>
	</div>
	<footer>
		Maurício Ramalho dos Santos. RA: 20032838-5. Polo: Novo Cruzeiro-MG
	</footer>
</body>
</html>