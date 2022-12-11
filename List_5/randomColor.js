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
    var red = getRandomInt(256);
    var green = getRandomInt(256);
    var blue = getRandomInt(256);

    return "rgb(" + red + ", " + green + ", " + blue + ")";
}

function changeColor(color) {
    var boxes = document.getElementsByClassName("box");

    for (i = 0; i < boxes.length; i++) {
        boxes[i].style.color = color;
    }
}

function writeColor(color) {
    var text = (color == "") ?  "" : "Text color: " + color;
    document.getElementById("color-text").innerHTML = text;
}

function changeColorButtonClicked() {
    var randomColor = getRandomColor();
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