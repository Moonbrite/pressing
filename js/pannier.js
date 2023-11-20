const btnSuprimer = document.querySelectorAll(".sup");
const divSuprmier = document.querySelectorAll(".carte");


for (let i = 0; i < btnSuprimer.length; i++) {
    btnSuprimer[i].addEventListener("click", function () {
        divSuprmier[i].classList.add("d-none");
        console.log("sup");
    });
}