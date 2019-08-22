function valida_form(form) {

    if(form._name.value == "" || form._name.value == null){
        alert("Digite seu nome");
        form._name.focus();
        return false;
    }else if(form._phone.value == "" || form._phone.value == null){
        alert("Digite seu telefone");
        form._phone.focus();
         return false;
    }else if(form._cpf.value == "" || form._cpf.value == null){
        alert("Digite seu CPF");
        form._cpf.focus();
         return false;
    }else if(form._email.value == "" || form._email.value == null){
        alert("Digite seu Email");
        form._email.focus();
         return false;
    }
}