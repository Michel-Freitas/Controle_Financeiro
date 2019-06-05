<?php 
	/**
	* Classe de conexão com o banco
	*/
	class Conexao{
		
		const root = "michel";
		const senha = "";

		private static $instancia = null;

		private static function Conectar(){
			try {
				if (self::$instancia == null) {
					$sql = "mysql:host=localhost;dbname=grafico";
					self::$instancia = new PDO($sql, self::root, self::senha);
					self::$instancia -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				
			} catch (Exception $e) {
				echo "Erro " . $e->getMessage();
			}
			return self::$instancia;
		}

		protected static function getBD(){
			return self::Conectar();
		}
		
	}
