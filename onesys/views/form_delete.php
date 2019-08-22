<?php
     include "connection.php";
     if($conn){
            $query = "SELECT id, nome, cpf from clientes";
            $result = mysqli_query($conn,$query);
            $linhas= mysqli_num_rows($result);
            mysqli_close($conn);

     }
?>
<div>
    <form action="controller/deleta.php" method="post">
        <select name="_select_delete" class="custom-select">
            <option selected value="">Escolha</option>
            <?php
                if($linhas){
                    while($fetch = mysqli_fetch_row($result)){
                        echo "<option value=".$fetch[0].">".$fetch[1]." - CPF: ".$fetch[2]."</option>";
                    }
                }
            ?>
        </select>
        <hr>
        <input type="submit" class="btn btn-danger" value="Deletar">
    </form>
</div>