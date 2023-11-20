function myFunction() {
    var x = document.getElementById("pswd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function myFunctionDeOuf() {
    var y = document.getElementById("pswd-confirm");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
}

const eye = document.getElementById("eye");
const eyeClose = document.getElementById("eyeClose");

eye.addEventListener("click", function () {
    myFunction();
    eyeClose.classList.remove("d-none");
    eye.classList.add("d-none");
});

eyeClose.addEventListener("click", function () {
    myFunction();
    eyeClose.classList.add("d-none");
    eye.classList.remove("d-none");
});

const eye1 = document.getElementById("eye1");
const eyeClose1 = document.getElementById("eyeClose1");
eye1.addEventListener("click", function () {
    myFunctionDeOuf();
    eyeClose1.classList.remove("d-none");
    eye1.classList.add("d-none");
});

eyeClose1.addEventListener("click", function () {
    myFunctionDeOuf();
    eyeClose1.classList.add("d-none");
    eye1.classList.remove("d-none");
});
