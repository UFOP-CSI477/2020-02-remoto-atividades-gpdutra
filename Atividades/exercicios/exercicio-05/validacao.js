function checkFields() {
    nome  = document.getElementById("name");
    user  = document.getElementById("user");
    staticEmail  = document.getElementById("staticEmail");
    cpf  = document.getElementById("cpf");

    if(nome.value == "") {
        alert("Preencha o campo de nome");
    }

    if(user.value == "") {
        alert("Preencha o campo de usuário");
    }

    if(staticEmail.value == "") {
        alert("Preencha o campo de E-mail");
    }

    if(cpf.value == "") {
        alert("Preencha o campo CPF");
    }

}