<?php
	require_once('dados/produtos.php');
?>
<style type="text/css">
	.card_produto img{
		width: 200px;
		height: 200px;		
	}
	.card_produto{
		width: 200px;
		//display: flex;
		//justify-content: center;
		text-align: center;
		margin-left: 30px;
		margin-right: 30px;
	}
</style>
<?php
	foreach ($produtos as $id =>$produto) :
?>
<a href="index.php?page=produto&id=<?php echo $id?>">
	<div class="card_produto">
		<img src="images/<?php echo $produto['imagem']?>" alt="<?php echo $produto['nome']?>">
		<h3><?php echo $produto['nome']?></h3>
	</div>
</a>
<?php
	endforeach
?>
