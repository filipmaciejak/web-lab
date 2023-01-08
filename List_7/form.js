let name = document.getElementById("name");
let surname = document.getElementById("surname");
let month = document.getElementById("month");
let mail = document.getElementById("mail");
let phone = document.getElementById("phone");

function focusInput(element) {
    element.style.backgroundColor = "#DFDFDF";
    element.placeholder = "";
}

function blurInput(element, text) {
    element.style.backgroundColor = "white";
    if (element.value.length == 0) {
        element.placeholder = text;
    }
}

//document.getElementById("name").addEventListener("focus", () => {focusInput(document.getElementById("name"))});
//document.getElementById("name").addEventListener("blur", () => {blurInput(document.getElementById("name"), "Name")});

//document.getElementById("surname").addEventListener("focus", () => {focusInput(document.getElementById("surname"))});
//document.getElementById("surname").addEventListener("blur", () => {blurInput(document.getElementById("surname"), "Surname")});

//document.getElementById("month").addEventListener("focus", () => {focusInput(document.getElementById("month"))});
//document.getElementById("month").addEventListener("blur", () => {blurInput(document.getElementById("month"), "Birth month")});

//document.getElementById("mail").addEventListener("focus", () => {focusInput(document.getElementById("mail"))});
//document.getElementById("mail").addEventListener("blur", () => {blurInput(document.getElementById("mail"), "E-mail address")});

//document.getElementById("phone").addEventListener("focus", () => {focusInput(document.getElementById("phone"))});
//document.getElementById("phone").addEventListener("blur", () => {blurInput(document.getElementById("phone"), "Phone number")});

