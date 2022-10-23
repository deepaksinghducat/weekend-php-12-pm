function buttonFun() {
    console.log("button called");
}

let button = document.getElementById('button')

button.addEventListener("click", buttonFun)