function openPage() {
    var x = document.getElementById("search").value;

    if (x.toLowerCase() === "Prishtina".toLowerCase()) {
        window.open("../Pershkrimi-i-Kosoves/prishtine.html ", "_self");
    }

    if (x.toLowerCase() === "Ferizaj".toLowerCase()) {
        window.open("../Pershkrimi-i-Kosoves/ferizaj.html", "_self");
    }

    if (x.toLowerCase() === "Gjakova".toLowerCase()) {
        window.open("../Pershkrimi-i-Kosoves/gjakova.html ", "_self");
    }

    if (x.toLowerCase() === "Prizren".toLowerCase()) {
        window.open("../Pershkrimi-i-Kosoves/prizren.html ", "_self");
    }

    if (x.toLowerCase() === "Gjilan".toLowerCase()) {
        window.open("../Pershkrimi-i-Kosoves/gjilan.html ", "_self");
    }

    if (x.toLowerCase() === "Peja".toLowerCase()) {
        window.open("../Pershkrimi-i-Kosoves/peja.html ", "_self");

    }

    else {
        window.open("../Pershkrimi-i-Kosoves/others.html ");
    }
}

        

