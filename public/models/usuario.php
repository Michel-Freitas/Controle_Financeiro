<?php

    include_once "conexao.php";

    class Usuario extends Conexao {

        private $nome;
        private $sobrenome;
        private $email;
        private $login;
        private $password;
        private $status;


        /**
         * Métodos Sets
         */
        public function setNome($nome)
        {
            $this -> nome = $nome;
        }

        public function setSobrenome($sobrenome)
        {
            $this->sobrenome = $sobrenome;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setLogin($login)
        {
            $this->login = $login;
        }

        public function setPassword($password)
        {
            $this->password = md5($password);
        }

        public function setStatus($status)
        {
            $this->status = $status;
        }


        /**
         * Métodos Gets
         */
        public function getNome()
        {
            return $this->nome;
        }

        public function getSobrenome()
        {
            return $this->sobrenome;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getLogin()
        {
            return $this->login;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function getStatus()
        {
            return $this->status;
        }



        public function CadastroUsuario()
        {
            $sql = ("INSERT INTO usuario VALUES( :codigo, :nome, :sobrenome, :email, :login, :senha, :status)");
            $cadastro = Conexao::getBD()->prepare($sql);
            $cadastro->bindValue(':codigo', '0');
            $cadastro->bindValue(':nome', $this->getNome());
            $cadastro->bindValue(':sobrenome', $this->getSobrenome());
            $cadastro->bindValue(':email', $this->getEmail());
            $cadastro->bindValue(':login', $this->getLogin());
            $cadastro->bindValue(':senha', $this->getPassword());
            $cadastro->bindValue(':status', $this->getStatus());
            if($cadastro->execute()){
                return true;
            }else{
                false;
            }
        }
    }