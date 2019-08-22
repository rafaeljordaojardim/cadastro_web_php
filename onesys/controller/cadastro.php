<?php
   $name =  $_POST["_name"];
   $phone = $_POST["_phone"];
   $cpf = $_POST["_cpf"];
   $email = $_POST["_email"];

   if(isset($name) && isset($phone) && isset($cpf) && isset($email)){
        if(trim($name) == false){
            //tratar erro
        }else if(trim($phone) == false){
            //tratar erro
        }else if(trim($cpf)==false){
            //tratar erro
        }else if(trim($email)==false){
            //tratar erro
        }else{
            include "../connection.php";
            if($conn){
                $query = "INSERT INTO clientes (nome, telefone, cpf, email) 
                    VALUES ('$name', '$phone','$cpf', '$email')";
                if (mysqli_query($conn, $query)) {
                    echo "<script>alert('Cliente cadastro com sucesso');window.location='../index.php?page=register'</script>";
                    mysqli_close($conn);
                    exit;
                } else {
                   //colocar erro
                }
               
            }
        }
    }
    mysqli_close($conn);
?>