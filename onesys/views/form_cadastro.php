
<h2 class="text-center mt-5">Cadastrar</h2>
<form action="controller/cadastro.php" method="post" onsubmit="return valida_form(this)">
    <div class="form-group">
        <label for="_name">Nome</label>
        <input type="text" class="form-control mb-1" id="_name" name="_name" placeholder="Seu nome...">
        
        <label for="_phone">Telefone</label>
        <input type="tel" class="form-control mb-1" id="_phone" name="_phone" placeholder="Ex. (99)999999999">

        <label for="_cpf">CPF</label>
        <input type="text" class="form-control mb-1" id="_cpf" name="_cpf">

        <label for="_email">E-mail</label>
        <input type="email" class="form-control mb-1" id="_email" name="_email">

    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar">
</form>