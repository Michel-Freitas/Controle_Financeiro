<?php
    include_once "../models/usuario.php";

    if(isset($_POST['cadastrar']) == "cadastro"){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $status = 1;

        $cadastro_usuario = new Usuario;

        $cadastro_usuario -> setNome($nome);
        $cadastro_usuario -> setSobrenome($sobrenome);
        $cadastro_usuario -> setEmail($email);
        $cadastro_usuario -> setLogin($login);
        $cadastro_usuario -> setPassword($password);
        $cadastro_usuario -> setStatus($status);

        if($cadastro_usuario -> CadastroUsuario()){
            echo "
                <script>
                    alert('Usuário Cadastrado com sucesso!');
                    location.href='../views/';
                </script>
            ";
        }
    }else{
        header('Location:../views/FormularioUsuario.php');
    }
