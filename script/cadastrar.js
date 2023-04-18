function Senha(){
    var checkbox = document.querySelector('#mostrar');
    var senha1 = document.querySelector('#password1');
    var senha2 = document.querySelector('#password2');

    if(checkbox.checked){
        senha1.type = 'text';
        senha2.type = 'text';
    }
    else{
        senha1.type = 'password';
        senha2.type = 'password';
    }
}