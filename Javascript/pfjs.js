function divswitch(a){

        switch(a) {
            case 1:
            document.getElementById("div21").style.display = "block";
            document.getElementById("div22").style.display = "none";
            document.getElementById("div23").style.display = "none";
            document.getElementById("div24").style.display = "none";
            break;
            case 2:
            document.getElementById("div21").style.display = "none";
            document.getElementById("div22").style.display = "block";
            document.getElementById("div23").style.display = "none";
            document.getElementById("div24").style.display = "none";
            document.getElementById("div25").style.display = "none";
            break;
            case 3:
            document.getElementById("div21").style.display = "none";
            document.getElementById("div22").style.display = "none";
            document.getElementById("div23").style.display = "block";
            document.getElementById("div24").style.display = "none";
            document.getElementById("div25").style.display = "none";
            break;
            case 4:
            document.getElementById("div21").style.display = "none";
            document.getElementById("div22").style.display = "none";
            document.getElementById("div23").style.display = "none";
            document.getElementById("div24").style.display = "block";
            document.getElementById("div25").style.display = "none";
            break;
            case 5:
            if (document.getElementById("div25").style.display == "block"){
                document.getElementById("div25").style.display = "none";
            } else {
            document.getElementById("div25").style.display = "block";
            }
            break;
        }
}