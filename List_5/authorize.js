function authorize() {
    var text;
    var system = window.prompt("What is your favourite operating system");

    switch(system.toLowerCase()) {
        case "windows":
            text = "Are you stupid?";
            break;
        case "linux":
            text = "Mine too. It is the best operating system in the world!";
            break;
        case "macos": case "ios":
            text = "Yeah, it is also a good choice!";
            break;
        default:
            text = "I've never heard about this system, but it's definitely not as good as Linux!";
            break;
    }
    window.alert(text);
}

window.addEventListener("load", authorize());