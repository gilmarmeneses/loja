<?php
class ValidaEmail
{
	public function setValidaEmail($email)
	{
		$ext=array('.com','.br','.net','.gov','.org','.tv');


		if(strlen($email)<1)
			return 'Informe o email';
		else
		if(!preg_match('/^[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\-]+\.[a-z]{2,3}$/i',$email))
		return 'Email invalido';
		else
		if(!in_array(strrchr($email, '.'), $ext))
		return 'Email invalido 2'
		else
		return $email;

	}



}

?>