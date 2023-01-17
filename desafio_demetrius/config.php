<?php
//Servidor (com sua porta), nome de usuario no cadastro, senha, schema
$conexao = new mysqli("localhost:3306", "root", "", "desafio_demetrius");

if($conexao->connect_errno){
    echo "Erro. Tente novamente.";
}else {
    echo " ";
}

?>