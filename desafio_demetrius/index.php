<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$telefone1 = $_POST['telefone1'];
$telefone2 = $_POST['telefone2'];
$email = $_POST['email'];
$email_recup = $_POST['email_recup'];
$data_nasc = $_POST['data_nasc'];
$cidade_nasc = $_POST['cidade_nasc'];
$bairro_nasc = $_POST['bairro_nasc'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$data_emi_rg = $_POST['data_emi_rg'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$logar = $_POST['logar'];
$senha = $_POST['senha'];
$profissao = $_POST['profissao'];
$nivel_escola = $_POST['nivel_escola'];
$estado_civil = $_POST['estado_civil'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];



$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,telefone1,telefone2,email,email_recup,data_nasc,cidade_nasc,bairro_nasc,cpf,rg,data_emi_rg,rua,numero,complemento,bairro,cidade,cep,logar,senha,profissao,nivel_escola,estado_civil,altura,peso) values('$nome','$telefone1','$telefone2','$email','$email_recup','$data_nasc','$cidade_nasc','$bairro_nasc','$cpf', '$rg','$data_emi_rg','$rua','$numero','$complemento','$bairro','$cidade','$cep','$logar','$senha','$profissao','$nivel_escola','$estado_civil','$altura','$peso')");

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Demetrius</title>
    <style>

        body {            
	/*---MUDAR O FUNDO E FIXÁ-LO COM ESSE COMANDO-----
    background-image: url("img/backvader.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed; -------------------*/

        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: green;
           
            display:flex;
            margin: 0 auto;
        }

               
        .superior {
            margin-top: 50px;
            justify-content: center;
            align-items: center;        
            display:flex;
            margin: 0 auto ;
            background-color: green;
        }

        .box {
            margin-top: 20px;
            background-color: black;
        }

        .field{
            border: 1px solid #fff;
            width: 500px;
            padding: 30px;
            align-items: center;
            margin: 20px;
            display: inline;
            border-radius: 36px 35px 35px 36px;
            -webkit-border-radius: 36px 35px 35px 36px;
            -moz-border-radius: 36px 35px 35px 36px;
        }

        .legend {
            color: #fff;
            text-align: center;
            display: flex;
            
        }
        .cadastrar {
            text-align: center;
            justify-content: center;
            align-items: center;
            margin: 0;
            display: flex;
            color: #fff;
            font-size: 29px;
        }

        .inputUser {
            border-radius: 10px;
            width: 500px;
            
        }

        .rua {
            border-radius: 10px;
            width: 240px;
            
        }
        
        .data_nasc {
            border-radius: 10px;
            width: 158px;
            ;
        }

        .data_emi_rg {
            border-radius: 10px;
            width: 155px;
            ;
        }

        .telefone {
            border-radius: 10px;
            width: 105px;
            ;
        }

        .nc {
            display: flex;
            gap: 10px
        }

        .numero {
            border-radius: 10px;
            width: 57px;
            
        }

        .complemento {
            border-radius: 10px;
            width: 165px;
        }


        .bairro {
            border-radius: 10px;
            width: 240px;
            
        }    


        .cidade {
            border-radius: 10px;
            width: 240px;
            
        }    

        .cep {
            border-radius: 10px;
            width: 155px;
            
        }
        
        .telefone1 {
            border-radius: 10px;
            width: 155px;
            
        }
        
        .telefone2 {
            border-radius: 10px;
            width: 155px;
            
        }
        
        .email {
            border-radius: 10px;
            width: 240px;
            
        }
        
        .email_recup {
            border-radius: 10px;
            width: 240px;
            
        }
        
        .cidade_nasc {
            border-radius: 10px;
            width: 240px;
            
        }

        .bairro_nasc {
            border-radius: 10px;
            width: 240px;
            
        }

        .cpf {
            border-radius: 10px;
            width: 155px;
            
        }
        
        .rg {
            border-radius: 10px;
            width: 155px;
            
        }

        .logar {
            border-radius: 10px;
            width: 240px;
            
        }

        .senha {
            border-radius: 10px;
            width: 240px;
            
        }

        .profissao {
            border-radius: 10px;
            width: 200px;
            
        }

        .nivel_escola {
            border-radius: 10px;
            width: 172px;
        }    
        
        .estado_civil {
            border-radius: 10px;
            width: 106px;
        } 

        .altura {
            border-radius: 10px;
            width: 155px;
            
        }

        .peso {
            border-radius: 10px;
            width: 155px;
            
        }

        .inputtext{
            color: #fff;
        }

        .submit-button {
            justify-content: center;
            border-radius: 15px;
            display: flex;
            padding: 5px;
            
        }

        
        
    </style>
</head>
<body>

<div class="superior">
    <form action="index.php" method="POST">

   
<br/>
        <div class="box">
        <fieldset class="field">
            <legend class="legend">Desafio Demetriuss</legend>
                <label class="cadastrar">Cadastre-se</label>
            <!----------PRIMEIRO BLOCO DO CADASTRO----------->    
                    <br>
                        <label for="nome" class="inputtext">Nome Completo</label>
                            <br>
                            <input type="text"  name="nome" id="nome" class="inputUser" required/>  
                            <br>
                            <br>                            
                    <!---        <label for="rua" class="inputtext">Endereço</label>
                            <br>                           
                            <input type="text"  name="rua" id="rua" class="inputUser" required/>  
                            <br>
                            <br>
            ----------SEGUNDO BLOCO DO CADASTRO-------->               
                <div class="nc">

                            <div>
                                <label for="rua" class="inputtext">Endereço</label>
                                <br>                           
                                <input type="text"  name="rua" id="rua" class="rua" required/>
                            </div>
                            <div>
                                <label for="numero" class="inputtext">Número</label>
                                    <br>                          
                                <input type="text"  name="numero" id="numero" class="numero" required/>
                            </div>
                            <div>
                                <label for="complemento" class="inputtext">Complemento</label>
                                    <br>
                                <input type="text"  name="complemento" id="complemento" class="complemento" required/>  
                                    <br>
                            </div>
                        </div>
                    <br>
                    
                        <div class="nc">
                            <div>    
                                <label for="cidade" class="inputtext">Cidade</label>
                                <br>
                                <input type="text"  name="cidade" id="cidade" class="cidade" required/>  
                                <br>
                            </div>
                            <div>
                                <label for="bairro" class="inputtext">Bairro</label>
                                <br>
                                <input type="text"  name="bairro" id="bairro" class="bairro" required/>  
                                <br>
                            </div>
                </div>                
                    <br>
            <!----------TERCEIRO BLOCO DO CADASTRO--------->
                <div class="nc">
                            <div>                             
                                <label for="cep" class="inputtext">CEP.:</label>
                                <br>    
                                <input type="text"  name="cep" id="cep" class="cep" required/>
                                <br>
                            </div>    
                            <div>                                
                                <label for="telefone1" class="inputtext">Telefone 1</label>
                                <br>    
                                 <input type="text"  name="telefone1" id="telefone1" class="telefone1" required/>
                                <br>
                            </div>
                            
                            <div>
                                <label for="telefone2" class="inputtext">Telefone 2</label>
                                <br>    
                                <input type="text"  name="telefone2" id="telefone2" class="telefone2" required/>
                                <br>
                            </div> 
                                <br>                
                </div>
                                <br>             
                <div class="nc">
                            <div>
                                <label for="email" class="inputtext">E-mail</label>
                                <br>
                                <input type="text"  name="email" id="email" class="email" required/>  
                                <br>
                            </div>
                             <div>                                           
                                <label for="email_recup" class="inputtext">E-mail de recuperação</label>
                                <br>
                                <input type="text"  name="email_recup" id="email_recup" class="email_recup" required/>  
                                <br>
                            </div>                           
                </div>
                            <br>
                <div> <hr> </div> 
                
                <!-----------------PRIMEIRO BLOCO DE DADOS IMPORTANTES------------------>
            
                    
                <label class="cadastrar">Dados Importantes</label>
                                <br>
                <div class="nc">
                            <div>                
                                <label for="data_nasc" class="inputtext">Data de Nascimento</label>
                                <br>    
                                <input type="date"  name="data_nasc" id="data_nasc" class="data_nasc" required/>
                                <br>
                            </div>    
                            <div>
                                <label for="altura" class="inputtext">Altura</label>
                                <br>
                                <input type="text"  name="altura" id="altura" class="altura" required/>  
                                <br>
                            </div>
                            <div>    
                                <label for="peso" class="inputtext">Peso</label>
                                <br>
                                <input type="text"  name="peso" id="peso" class="peso" required/>  
                                <br>
                            </div>
                </div>                              
                                <br>
                <div class="nc">
                            <div>
                                <label for="cidade_nasc" class="inputtext">Cidade de nascimento</label>
                                <br>
                                <input type="text"  name="cidade_nasc" id="cidade_nasc" class="cidade_nasc" required/>  
                                <br>
                            </div>
                            <div>
                                <label for="bairro_nasc" class="inputtext">Bairro de nascimento</label>
                                <br>
                                <input type="text"  name="bairro_nasc" id="bairro_nasc" class="bairro_nasc" required/>  
                                <br>
                            </div>
                </div>
                                <br>

                <div class="nc">
                            <div>
                                <label for="cpf" class="inputtext">CPF</label>
                                <br>
                                <input type="text"  name="cpf" id="cpf" class="cpf" required/>
                                <br>
                            </div>
                            <div>
                                <label for="rg" class="inputtext">Identidade</label>
                                <br>
                                <input type="text"  name="rg" id="rg" class="rg" required/>
                                <br>
                            </div>                                
                            <div>
                                <label for="data_emi_rg" class="inputtext">Data de emissão</label>
                                <br>    
                                <input type="date"  name="data_emi_rg" id="data_emi_rg" class="data_emi_rg" required/>
                                <br>
                            </div>
                </div>            
                                <br>
                <!-----------------SEGUNDO BLOCO DE DADOS IMPORTANTES------------------>

                
                <div class="nc">            
                            <div>
                                <label for="profissao" class="inputtext">Profissão</label>
                                <br>
                                <input type="text"  name="profissao" id="profissao" class="profissao" required/>  
                                <br>
                            </div>    
                            <div>
                                    <label for="nivel_escola" class="inputtext">Grau Escolar</label>
                                    <br>
                                    <select name="nivel_escola" type="test" id="nivel_escola" class="nivel_escola" required>
                                            <option value="empty" selected></option>
                                            <option value="basico">Ensino básico</option>
                                            <option value="medio_c" >Ensico médio Completo</option>
                                            <option value="medio_inc">Ensico médio Incompleto</option>
                                            <option value="superior_c">Superior Completo</option>
                                            <option value="superior_inc">Superior Inompleto</option>
                                            <option value="...">...</option>
                                    </select>  
                                    <br>
                            </div>
                            <div>
                                    <!--<p class="inputtext">Estado Civil</p> -->

                                    <label for="estado_civil" class="inputtext">Estado Civil</label>
                                    <br>
                                    <select name="estado_civil"  type="test" id="estado_civil" class="estado_civil" required>                                    
                                            <option value="empty" selected></option>
                                            <option value="soteiro">solteiro</option>
                                            <option value="casado">casado</option>
                                            <option value="viuvo">viúvo</option>
                                            <option value="desquitado">desquitado</option>
                                            <option value="juntado">juntado</option>
                                            <option value="...">...</option>
                                    </select>
                                <br>
                            </div>    
            </div>         
            <br>
            
            <div class="nc">
                            <div>    
                                <label for="logar" class="inputtext">Apelido para logar</label>
                                <br>
                                <input type="text"  name="logar" id="logar" class="logar" required/>  
                                <br>
                            </div>
                            <div>
                                <label for="senha" class="inputtext">Senha</label>
                                <br>
                                <input type="text"  name="senha" id="senha" class="senha" required/>  
                                <br>
                            </div>
                </div>
                            <br>
                            <br>
                        
                            <input type="submit" name="submit" id="submit" class="submit-button"/>
                           


        </fieldset>

                                           

        </div>
       
    </form>
    
    </div>
    

</body>
</html>