function addItem(top) {
    let textarea = document.getElementById("item-text");
    let text = textarea.value;
    let list = document.getElementById("list");
    if (text.length > 0) {
        let item = document.createElement("li");
        let textNode = document.createTextNode(text);
        item.appendChild(textNode);
        
        if (top) {
            list.insertBefore(item, list.children[0]);
        }
        else {
            list.appendChild(item);
        }
    }
    else {
        window.alert("Type something!");
    }
    textarea.value = "";
}

function removeItem() {
    let list = document.getElementById("list");

    if (list.children.length > 0) {
        let item_to_remove = document.getElementById("to-remove").value;

        if (item_to_remove <= list.children.length) {
            list.removeChild(list.children[item_to_remove-1]);
        }

        document.getElementById("to-remove").value = 1;
        document.getElementById("to-remove").setAttribute("max", list.children.length);
        console.log(list.children.length);
    }
    
    else {
        window.alert("No items on the list!");
    }
    
}

function changeFooter() {
    let footer = document.getElementById("authors").parentNode;
    let label = document.getElementById("change");

    if (footer.style.display == "none") {
        footer.style.display = "block";
        label.innerHTML = "Hide authors";
    }
    else {
        footer.style.display = "none";
        label.innerHTML = "Show authors";
    }
}

document.getElementById("add").addEventListener("click", () => {addItem(false)});
document.getElementById("add-top").addEventListener("click", () => {addItem(true)});
document.getElementById("remove").addEventListener("click", removeItem);
document.getElementById("change").addEventListener("click", changeFooter);