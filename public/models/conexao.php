<?php

    class Conexao{
        const root = "michel";
        const senha = "";

        private static $instancia = null;

        private static function Conectar(){
            try{
                if(self::$instancia == null){
                    $query = "mysql:host=localhost;dbname=controle_gastos_pessoal";
                    self::$instancia = new PDO($query, self::root, self::senha);
                    self::$instancia -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
            }catch (Exception $e){
                echo "Erro " . $e->getMessage();
            }

            return self::$instancia;
        }

        protected static function getBD(){
            return self::Conectar();
        }
    }