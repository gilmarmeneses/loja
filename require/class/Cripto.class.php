<?php
	class Cripto
{
	public function setCripto($param)
	{
		return hash('whirlpool',hash('sha512',hash('sha384', hash('sha256', sha1(md5($param))))));
	}
}	

?>