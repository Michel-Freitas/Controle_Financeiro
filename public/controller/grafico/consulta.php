<?php 

require_once "conexao.php";


/**
* Classe responsavel por fazer a consulta no banco de dados
*/
class Consulta extends Conexao{
	
	public function Buscar(){
		// SQL para a busca no banco de dados
		$sql = "SELECT nome, quant FROM venda";

		// Execução do SQL
		$consulta = Conexao::getBD()->query($sql);

		// Contagem das linhas que vai ser retonada na consulta feita
		$rows = $consulta->rowCount();

		//Array responsavel por armazenar os dados do banco com duas Chaves:
		// Chave "nomes": Vai armazenar em um array os nomes(Do campo "nome" da tabela "venda")
		// retornados na consulta.
		// Chave "quant": Vai armazenar em um array os valores(Do campo "quant" da tabela "venda")
		// retornados na minha consulta.
		$arrayDados = array(
			'nomes' => array(),
		 	'quant' => array(),
		 	);
		
		// Laço de retição que vai se repetir de acordo com a quantidade de linhas ($rows) que foi 
		//retornado na consulta.
		for ($i=0; $i < $rows; $i++) {
			// Vai transformar a consulta em um Array Assosiativo e armazena-la na variavel "$linhas"
			$linhas = $consulta->fetch(PDO::FETCH_ASSOC);

			// Vai preenchar o $ArrayDados na chave "nomes" na posição do "$i" com os dados da variavel
			// $linhas na chave "nome".
			$arrayDados['nomes'][$i] = $linhas['nome'];
			
			// Vai preenchar o $ArrayDados na chave "quant" na posição do "$i" com os dados da variavel
			// $linhas na chave "quant".
		 	$arrayDados['quant'][$i] = $linhas['quant'];
		}

		// Retorna o $arrayDados preenchido
		return $arrayDados;
	}
}

	 