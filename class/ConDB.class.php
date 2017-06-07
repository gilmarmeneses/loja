<?php
function __autoload($class){require_once"{$class}.class.php";}

abstract class ConDB{

	private $cnx;
	private function setConn()
	{
		return
		is_null($this->cnx)?
				$this->cnx=new PDO("mysql:host=localhost;dbname=loja","root",""):
				$this->cnx;
	}
	public function getConn()
	{return $this->setConn();}
}
$vle = new Validaemail;
var_dump($vle->setValidaEmail('gilmar@hotmail'));



?>