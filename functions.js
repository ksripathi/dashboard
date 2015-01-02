
function showLabs(str) 
{
    if (str == "")
    {
        document.getElementById("labs").innerHTML = "";
        return;
    } 
    else 
    {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("labs").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getlabs.php",true);
        xmlhttp.send();
    }
}
function showInstitutes(str) 
{
    if (str == "")
    {
        document.getElementById("institutes").innerHTML = "";
        return;
    } 
    else 
    {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("institutes").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getinstitutes.php",true);
        xmlhttp.send();
    }
}

function showDisciplines(str) 
{
    if (str == "")
    {
        document.getElementById("disciplines").innerHTML = "";
        return;
    } 
    else 
    {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("disciplines").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getdisciplines.php",true);
        xmlhttp.send();
    }
}

function showlabsbyinstitute(str) {
    if (str.length == 0) {
        document.getElementById("test").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("test").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "getlabsbyinstitute.php?q=" + str, true);
        xmlhttp.send();
    }
}


function showlabsbydiscipline(str) {
    if (str.length == 0) {
        document.getElementById("test").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("test").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "getlabsbydiscipline.php?q=" + str, true);
        xmlhttp.send();
    }
}

function showlabsbystatus(str) {
    if (str.length == 0) {
        document.getElementById("test").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("test").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "getlabsbystatus.php?q=" + str, true);
        xmlhttp.send();
    }
}
function showlabsbyintegration(str) {
    if (str.length == 0) {
        document.getElementById("test").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("test").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "getlabsbyintegration.php?q=" + str, true);
        xmlhttp.send();
    }
}
