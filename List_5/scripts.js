function writeHeader() {
    let location = window.location.pathname;
    let log;

    if (location.endsWith("index.html")) {
        log = "This site contains the most important information about Islam.";
    }

    else if (location.endsWith("history.html")) {
        log = "A brief history of Islam.";
    }

    else if (location.endsWith("pillars.html")) {
        log = "Description of The Five Pillars of Islam.";
    }
    
    else if (location.endsWith("society.html")) {
        log = "Information about society of Islam.";
    }
    document.writeln("<h2>" + log + "</h2>");
}

window.addEventListener("load", writeHeader());