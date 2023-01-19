function desabilitar(id){
    // Manipulando o input do nome
    var nome = document.getElementById("nome" + id);
    nome.disabled = false

    var email = document.getElementById("email" + id);
    email.disabled = false

    // Manipulando o valor do botão de Salvar
    var button = document.getElementById('button' + id);
    button.style.display = "block";

    // Manipulando o botão do balor de Disabilitar
    var btnds = document.getElementById('btnds' + id);
    btnds.style.display = "none";
}

function atualiza(id, nome1, email1){

    // Manipulando o input do nome
    var nome = document.getElementById("nome" + id);
    nome.value = nome1;
    nome.disabled = true

    var email = document.getElementById("email" + id);
    email.value = email1
    email.disabled = true

    var user = document.getElementById("user" + id);
    console.log(user);
    user.innerText = nome1

    // Manipulando o valor do botão de Salvar
    var button = document.getElementById('button' + id);
    button.style.display = "none";

    // Manipulando o botão do balor de Disabilitar
    var btnds = document.getElementById('btnds' + id);
    btnds.style.display = "block";
}

function updateInfo(id){

    // Obtendo os valores dos inputs
    var nome = document.getElementById("nome" + id).value;
    var email = document.getElementById("email" + id).value;
        
    $.ajax({
        url: "script.php",
        type: "POST",
        data: "nome="+ nome + "&email="+email + "&id=" + id,
        dataType: "html"
        
    }).done(function(resposta) {
        console.log('to dentro do DONE');
        
        console.log("Função Atualiza");
        atualiza(id, nome, email);
        
    }).fail(function(jqXHR, textStatus ) {
        console.log('to dentro do FAIL');
        console.log("Request failed: " + textStatus);
        
    }).always(function() {
        console.log("completou");
    });
}