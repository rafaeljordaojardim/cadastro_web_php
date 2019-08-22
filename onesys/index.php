<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/estilo.css " rel="stylesheet" >
    <title>Clientes</title>
</head>
<body >
    <div class="container">
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg justify-content-center  navbar-light"  >
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="?page=register">Cadastrar</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="?page=view">Visualizar</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="?page=update">Atualizar</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="?page=delete">Deletar</a>
                    </li>
                </ul>
        </nav>
    </header>
        <main class="main bg-light">
        <?php
            if(isset($_GET['page'])){
                switch($_GET['page']) 
                    { 
                        case 'register' : 
                            include 'views/form_cadastro.php'; 
                        break; 
                        case 'view':
                            include 'views/table_view.php';
                        break;
                        case 'delete':
                            include 'views/form_delete.php';
                        break;
                        case 'update':
                            include 'views/form_update.php';
                        break;
                        default:
                            include 'views/boas_vindas.php';
                    } 
                
            }else{
                include 'views/boas_vindas.php';
            }
        ?>   
        </main>
        <footer class="text-center mt-5 footer bg-light">
            footer
        </footer>
       
    </div>
    <script src="js/valida_form.js"></script>
</body>
</html>