<?php
class Login
{
	private $vem,$vsh,$cpt,$crud,$email,$senha,$log,$dds;
	public function setLogin($email,$senha)
	{
		$this->vem=new ValidaEmail;
		$this->vsh=new ValidaSenha;
		$this->cpt=new Cripto;
		$this->crud=new CRUD;

		$this->email=$this->vem->setValidaEmail($email);
		$this->senha=$this->vsh->setValidaSenha($senha);

		$this->log=$this->senha==$senha?
		$this->crud->select('idUsuario','usuario','WHERE email=? && senha=?',
			array($this->email,$this->cpt->setCripto($this->senha))):
			FALSE;
			if($this->email!=$email)
			{
				return $this->email;
			}else
			if($this->senha<>$senha)
			{
				return $this->senha;
			}else
			{
				if($this->log && $this->log->rowCount()>0)
				{
					foreach($this->log as $this->dds)
					{
						$_SESSION['logado']=$this->dds;
						header('Location:../../admin/');
					}
				}else 
				{return 'Acesso negado.';}
			}
	}
}










?>