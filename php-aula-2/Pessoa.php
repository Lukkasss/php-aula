<?php 

include("Conexao.php");

class Pessoa extends Conexao implements JsonSerializable{

	private $altura;
	private $idade;
	private $peso;


	public function __CONSTRUCT($altura, $idade, $peso){
		$this->altura = $altura;
		$this->idade = $idade;
		$this->peso =$peso;
	}

	public function __toString(){

		return $string = "Peso: " . $this->peso . "<br />" .
							"Altura: " . $this->altura . "<br />" .
							"Idade: " . $this->idade . "<br />";

	}

	public function JsonSerialize(){
		return [
				"Idade"=>$this->idade,
				"Altura"=>$this->altura,
				"Peso"=>$this->peso
		];
	}

	public function getPeso(){
		return $this->peso;
	}

	public function getIdade(){
		return $this->peso;
	}

	public function getAltura(){
		return $this->peso;
	}

	public function setPeso($peso){
		$this->peso = $peso;
	}

	public function setAltura($altura){
		$this->altura = $altura;
	}

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function findall(){
		$sql = "SELECT * FROM conteudo";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}


?>