<?php require_once("header.php"); ?>

<?php
$page = "content"; // Página padrão, caso o parâmetro "page" não seja definido ou o arquivo não exista

if(isset($_GET["page"])) {
		$requested_page = $_GET["page"];
		if(file_exists($requested_page . ".php")) {
				$page = $requested_page;
		} else {
				$error = 1; // Defina algum indicador de erro aqui, se necessário
		}
}

require_once($page . ".php");
?>

<BR><BR><BR><BR>
<?php require_once("footer.php"); ?>
