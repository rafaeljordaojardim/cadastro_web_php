<?php
   $id = $_POST["_id"];
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
                $query = "UPDATE clientes
                        SET nome= '$name', telefone = '$phone', 
                        cpf = '$cpf', email = '$email' WHERE id = '$id'";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    echo "<script>alert('Cliente alterado com sucesso');window.location='../index.php?page=update'</script>";
                    mysqli_close($conn);
                    exit;
                } else {
                //colocar erro
                }
                
            }else{
                echo "<script>alert('Erro ao conectar com o banco.');window.location='../index.php'</script>";
            }
         }
    }
    mysqli_close($conn);
?>