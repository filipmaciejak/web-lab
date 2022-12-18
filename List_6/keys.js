function keyColors(e) {
    // special keys
    let divAlt = document.getElementById('key_alt');
    if (e.altKey) {
        divAlt.classList.add('active');
    } else {
        divAlt.classList.remove('active');
    }
    
    let divCtrl = document.getElementById('key_ctrl');
    if (e.ctrlKey) {
        divCtrl.classList.add('active');
    } else {
        divCtrl.classList.remove('active');
    }
    
    let divShift = document.getElementById('key_shift');
    if (e.shiftKey) {
        divShift.classList.add('active');
    } else {
        divShift.classList.remove('active');
    }
}

function keyStyle(e) {
    let text = document.getElementById('text');

    if (e.keyCode == 81) {text.style.fontFamily = 'monospace';} // Q
    if (e.keyCode == 87) {text.style.fontFamily = 'serif';} // W
    if (e.keyCode == 69) {text.style.fontFamily = 'sans-serif';} // E
    if (e.keyCode == 82) {text.style.color = 'red';} // R
    if (e.keyCode == 84) {text.style.color = 'green';} // T
    if (e.keyCode == 89) {text.style.color = 'blue';} // Y
    if (e.keyCode == 85) {text.style.backgroundColor = 'red';} // U
    if (e.keyCode == 73) {text.style.backgroundColor = 'green';} // I
    if (e.keyCode == 79) {text.style.backgroundColor = 'blue';} // O
    if (e.keyCode == 80) {
        text.style.fontFamily = '';
        text.style.color = '';
        text.style.backgroundColor = '';
    } // P
}

window.addEventListener('keyup', keyColors);
window.addEventListener('keydown', keyColors);
window.addEventListener('keydown', keyStyle);
