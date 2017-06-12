<?php require_once("header.php");?>

<form action="javascript:void[0]">
	<p>Login na Loja Virtual</p>
	<div><label for="eLogin">Email:</label><input type="text" id="eLogin" /></div>
	<div><label for="sLogin">Senha:</label><input type="text" id="sLogin" /></div>
	<div><button onclick="fctLogin()">Entrar</button></div>
	<span>msg</span>
</form>
<?php require_once("footer.php"); ?>
