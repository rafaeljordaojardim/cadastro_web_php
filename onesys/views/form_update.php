<?php
    $msg = null;
     if(isset($_POST["_select_delete"])){
        $id = $_POST["_select_delete"];
        if(trim($id) == false){
            $msg = "Selecione algum cliente.";
        }else{
            include "connection.php";
            if($conn){
                $query = "SELECT nome, telefone, cpf, email from clientes where id='$id'";
                $result = mysqli_query($conn,$query);
                $row = mysqli_fetch_row($result);
            }
        }
     }
?>
<div class="select">
     <?php echo isset($msg) ? "<span class='text-center text-danger'>$msg</span>":"";?>
    <form action="index.php?page=update" method="post">
        <select name="_select_delete" class="custom-select">
            <option selected value="">Escolha</option>
            <?php
                include "connection.php";
                if($conn){
                    $query = "SELECT id, nome, cpf from clientes";
                    $result = mysqli_query($conn,$query);
                    $linhas= mysqli_num_rows($result);
                    mysqli_close($conn);
                 }
                if($linhas){
                    while($fetch = mysqli_fetch_row($result)){
                        echo "<option value=".$fetch[0].">".$fetch[1]." - CPF: ".$fetch[2]."</option>";
                    }
                }
            ?>
        </select>
        <hr>
        <input type="submit" class="btn btn-primary" value="Selecionar">
    </form>
</div>
<div id="form">
    <form action="controller/altera.php" method="post" onsubmit="return valida_form(this)">
        <div class="form-group">
            <label for="_name">Nome</label>
            <input type="text" class="form-control mb-1" 
            id="_name" name="_name" placeholder="Seu nome..." 
            value="<?php echo isset($row[0]) ?  $row[0]:''?>">
            
            <label for="_phone">Telefone</label>
            <input type="tel" class="form-control mb-1" id="_phone" 
            name="_phone" placeholder="Ex. (99)999999999"
            value="<?php echo isset($row[1]) ?  $row[1] : ''?>">

            <label for="_cpf">CPF</label>
            <input type="text" class="form-control mb-1" id="_cpf" name="_cpf"
            value="<?php echo isset($row[2]) ? $row[2]:''?>">

            <label for="_email">E-mail</label>
            <input type="email" class="form-control mb-1" id="_email" name="_email"
            value="<?php echo isset($row[3]) ? $row[3] : ''?>">
            
            <input type="hidden" value="<?php echo $id?>" name="_id">
        </div>
        <input type="submit" class="btn btn-warning" value="Alterar" >
    </form>
</div>