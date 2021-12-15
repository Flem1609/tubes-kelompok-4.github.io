document.getElementsByClassName("toggler-navbar")[0].addEventListener("click", toogleClass);

function toogleClass() {
    document.getElementsByClassName("hamburger-menu")[0].classList.toggle('open')
    document.getElementsByClassName("sidebar")[0].classList.toggle('open')
}

var state= false;
function toggle(){
    if(state){
        document.getElementById(
            "password").
            setAttribute("type", "password");
        document.getElementById(
            "eye").style.color='#7a797e';
            state=false;
    } else {
        document.getElementById(
            "password").
            setAttribute("type", "text");
        document.getElementById(
            "eye").style.color='#5887ef'
            state= true;

    }
} 