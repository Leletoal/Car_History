

<?php
    include('config.php');
    
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>CRUD - Cadastrar </title>
    <link rel="stylesheet" href="style/form.css">
</head>

<body>
    <div class="form.cd">
        <?php

        if(isset($_POST['acao']) && $_POST ['form'] == 'f_form'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha =$_POST ['senha'];

        if($nome ==''){
            echo "NOME ESTÁ VAZIO";
        } else if ($email==''){
            echo "EMAIL ESTÁ VAZIO";

        }
        elseif($senha =''){
            echo "SENHA ESTÁ VAZIA";
        }else{
        echo "Cadastrar($nome, $email, $senha)";
        echo "('erro', 'usuario' .$nome. 'cadastr'ado com sucesso')";
        
        }
        }
        ?> 
    
    
    <h2>Cadastro de usuario</h2>
<form method="POST">
   <div><input type="text" name="nome" placeholder="Nome"></div>
   <div><input type="text" name="email" placeholder="E-mail"></div>
   <div><input type="text" name="senha" placeholder="Cadastrar"></div>
   <input type="submit" name="acao" value="Cadastrar">
   <input type="hidden" name="form" value="f_form">
   
</form> 
</div>   
    

 

</body>
</html>



