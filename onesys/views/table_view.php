<?php
    include "connection.php";
        if($conn){
            $query = "SELECT * from clientes";
            $result = mysqli_query($conn,$query);
            $linhas= mysqli_num_rows($result);
            mysqli_close($conn);
            if($linhas){
                echo "<table class='table table-striped'>";
                echo "<thead class='thead-light'>"
                    ."<tr>"
                    ."<th>Nome</th>"
                    ."<th>Telefone</th>"
                    ."<th>CPF</th>"
                    ."<th>E-mail</th>"
                    ."</tr>";
                echo "<tbody>";
                while($fetch = mysqli_fetch_row($result)){
                    echo "<tr><td>".$fetch[1]."</td><td>".$fetch[2]."</td>
                    <td>".$fetch[3]."</td><td>".$fetch[4]."</td></tr>";
                }
                echo "</tbody>
                </table>";
            }else{
                echo "<h3 class='mt-5 text-center'>Não há clientes cadastrados</h3>";
            }
        }
        
?>