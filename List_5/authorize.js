function authorize() {
    let text;
    let system = window.prompt("What is your favourite operating system?");

    switch(system.toLowerCase()) {
        case "ios": case "macos": 
            text = "Yeah, it is also a good choice!";
            break;
        case "linux":
            text = "Mine too. It is the best operating system in the world!";
            break;
        case "windows":
            text = "seriously?";
            break;
        default:
            text = "I've never heard about this system, but it's definitely not as good as Linux!";
    }
    window.alert(text);
}

window.addEventListener("load", authorize());