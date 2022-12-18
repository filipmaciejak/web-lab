function keyColors(e) {
    let divAlt = document.getElementById('key_alt');
    let divCtrl = document.getElementById('key_ctrl');
    let divShift = document.getElementById('key_shift');
    
    if (e.altKey) {
        divAlt.classList.add('active');
    } else {
        divAlt.classList.remove('active');
    }
    
    if (e.ctrlKey) {
        divCtrl.classList.add('active');
    } else {
        divCtrl.classList.remove('active');
    }
    
    if (e.shiftKey) {
        divShift.classList.add('active');
    } else {
        divShift.classList.remove('active');
    }
}

window.addEventListener('keyup', keyColors);
window.addEventListener('keydown', keyColors);
