function setVisible(element, flag) {
    if (flag) {
        element.style.display = "inline-block";
    }
    else {
        element.style.display = "none";
    }
}

function startButtons() {
    setVisible(document.getElementById("restore-default"), false);
}

function getRandomInt(maxValue) {
    return Math.floor(Math.random() * maxValue);
}

function getRandomColor() {
    let red = getRandomInt(256);
    let green = getRandomInt(256);
    let blue = getRandomInt(256);

    return "rgb(" + red + ", " + green + ", " + blue + ")";
}

function changeColor(color) {
    let boxes = document.getElementsByClassName("box");

    for (let i = 0; i < boxes.length; i += 1) {
        boxes[i].style.color = color;
    }
}

function writeColor(color) {
    let text = (color == "") ?  "" : "Text color: " + color;
    document.getElementById("color-text").innerHTML = text;
}

function changeColorButtonClicked() {
    let randomColor = getRandomColor();
    changeColor(randomColor);
    writeColor(randomColor);
    setVisible(document.getElementById("restore-default"), true);
}

function restoreDefaultButtonClicked() {
    changeColor("black");
    writeColor("");
    setVisible(document.getElementById("restore-default"), false);
}

window.addEventListener("load", startButtons());
document.getElementById("set-color").addEventListener("click", changeColorButtonClicked);
document.getElementById("restore-default").addEventListener("click", restoreDefaultButtonClicked);