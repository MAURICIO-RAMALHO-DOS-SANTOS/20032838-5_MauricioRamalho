<style type="text/css">
	.form-contact{
		width: 100%;
	}
	.form-contact input, textarea{
		font-family: inherit;
		font-size: 16px;
		margin-top: 20px;
		padding: 14px;
		width: 100%;
		border: 1px solid #dd6a00;
		border-radius: 7px;
		background-color: #fff5f2 ;
	}
	.form-title{
		text-align: center;
	}
	.form-contact button{
		text-decoration: none;
		color: #fff;
		background-color: #ff7143;
		padding: 12px;
		magin: 20px;
		font-weight: bold;
		border-radius: 7px;
		border: 0;
		cursor: pointer;
	}
</style>
<form action="index.php" method="POST" class="form-contact">
	<div class="form-title"><h1>Contato e pedidos</h1></div>
	<div>
		<input type="text" name="nome" placeholder="Nome">
	</div>
	<div>
		<input type="email" name="email" placeholder="Email">
	</div><div>
		<input type="text" name="telefone" placeholder="Telefone">
	</div>
	<div>
		<textarea name="mensagem" placeholder="Descreva o seu pedido" rows="10"></textarea>
	</div>
	<div>
		<button>Enviar</button>
	</div>
</form>