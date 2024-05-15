<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
require_once("header.php");
?>
<link rel="stylesheet" href="styles.css">
<article class="content3">
	<div class="col-md-12">
		<h2>Obrigado por nos enviar o seu feedback!</h2>
		<p class="bg-success">Seus dados foram enviados com sucesso. Confira abaixo:</p>

		<p>
			<strong>Nome:</strong><br>
			<?= $name; ?>			
		</p>		

		<p>
			<strong>Email:</strong> <br>
			<?= $email; ?>
		</p>

		<p>
			<strong>Assunto:</strong> <br>
			<?= $subject; ?>
		</p>

		<p>
			<strong>Mensagem:</strong> <br>
			<?= $message; ?>
		</p>		
		<a href="./index.php" title="" class="botao" >Inicio </a>

	</div>
</article>		

<?php require_once("footer.php"); ?>