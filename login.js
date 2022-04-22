const log = document.getElementById('Login');
const sign = document.getElementById('Signup');
const bttn = document.getElementById('btn');

function signup(){
    log.style.left = "-450px";
    sign.style.left = "20px";
    bttn.style.left = "110px";
}

function login(){
    log.style.left = "26px";
    sign.style.left = "450px";
    bttn.style.left = "0px";
}
