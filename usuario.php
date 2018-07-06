<?php

public class Usuario 
{
	private $nome;
	private $sobrenome;
	private $email;
	private $senha;

	public function __construct($nome, $sobrenome, $email, $senha) 
	{
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->email = $email;
		$this->senha = $senha;

	}

	public getNome()
	{
		return $this->nome;
	}

	public setNome($nome) 
	{
		$this->nome = $nome;
	}

	public getSobrenome()
	{
		return $this->sobrenome;
	}

	public setSobrenome($sobrenome) 
	{
		$this->sobrenome = $sobrenome;
	}

	public setUrlPersonalizada($nome, $sobrenome) 
	{
		$urlPadrao = 'http://localhost/www/2watch/';

		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		
		$novaUrl = $urlPadrao.''.$nome.''.$sobrenome;

		echo $novaUrl;

	}

}

?>