<?php

include("Pessoa.php");

class Filho extends Pessoa {
	private $timeDoCoracao;

	public function getTimeDoCoracao(){
		return $this->timeDoCoracao;
	}

	public function setTimeDoCoracao($time){
		$this->timeDoCoracao = $time;
	}
}



?>