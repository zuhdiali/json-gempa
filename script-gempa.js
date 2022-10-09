var jsonResponse;
var xhttp;
var link = "https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json";


function loadXML(){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if ((xhttp.readyState == 4)&&(xhttp.status==200)){
            showFeed();
            console.log("Berhasil");
        }
    }

    xhttp.open("GET", link, true);
    xhttp.send(null);
}

function showFeed(){
    jsonResponse = JSON.parse(xhttp.responseText);
    var dummy;
    var konten="";
    for (let i = 0; i < 15; i++) {
        dummy = jsonResponse.Infogempa.gempa[i];
        konten += "<tr><th scope=\"row\">" + (i+1) + "</th>";
        konten += "<td>" + dummy.Tanggal + "</td>";
        konten += "<td>" + dummy.Jam + "</td>";
        konten += "<td>" + dummy.DateTime + "</td>";
        konten += "<td>" + dummy.Coordinates + "</td>";
        konten += "<td>" + dummy.Lintang + "</td>";
        konten += "<td>" + dummy.Bujur + "</td>";
        konten += "<td>" + dummy.Magnitude + "</td>";
        konten += "<td>" + dummy.Kedalaman + "</td>";
        konten += "<td>" + dummy.Wilayah + "</td>";
        konten += "<td>" + dummy.Dirasakan + "</td>";
    }
    document.getElementById("content").innerHTML = konten;
}