var form = document.querySelector(".form");
var inBtn = form.querySelector(".inBtn");
var inName = form.querySelector(".inName");
var inEmail = form.querySelector(".inEmail");
var inPhone = form.querySelector(".inPhone");


form.addEventListener("submit", function() {
    if(!inName.value){
        alert("Введите имя");
    }
    validEmail();
    validPhone();
})

function validEmail(){
    var reg = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
    var valid = reg.test(inEmail.value);
    if(!valid) alert("Проверьте правильность заполнения почты!");  
}

function validPhone(){
    var reg = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
    var valid = reg.test(inPhone.value);
    if(!valid) alert("Проверьте правильность заполнения телефона!");  
}