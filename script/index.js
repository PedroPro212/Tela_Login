function Senha(){
    var checkbox = document.querySelector('#mostrar');
    var senha = document.querySelector('#password');

    if(checkbox.checked){
        senha.type = 'text';
    }else{
        senha.type = 'password';
    }
}