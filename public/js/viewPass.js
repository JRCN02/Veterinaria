function Viewpassword(){
    //Ve uno de los input el primero en este caso
    const passwordInput = document.getElementById('password');
    const password_new = document.getElementById('password-new');
    const password_repeat = document.getElementById('password-repeat');
    //btn
    const toggleButton = document.querySelector('.toggle-password')

    if(passwordInput.type === 'password'){
        passwordInput.type = 'text';
        password_new.type = 'text';
        password_repeat.type = 'text';
    }else{
        passwordInput.type = 'password';
        password_new.type = 'password';
        password_repeat.type = 'password';
    }
}