<?php
    $id = $_POST["_select_delete"];
    if(isset($id)){
        if(trim($id) == false){
            echo "<script>alert('Selecione algum cliente');window.location='../index.php?page=delete'</script>";
        }else{
            include "../connection.php";
            $query = "DELETE FROM clientes WHERE id='$id'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<script>alert('Cliente deletado com sucesso');window.location='../index.php?page=delete'</script>";
                mysqli_close($conn);
                exit;
            } else {
                mysqli_close($conn);
            }
        }
    }
?>