<?php
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


?>