function getRental(areaid) {
    var cityid = document.getElementById('cityid').value;
    console.log(cityid);
    console.log(areaid);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let response = this.response;
            console.log(response);
            if (response === "notfound") {
                document.getElementById("nocars").style.display = "block";
                document.getElementById("rentalscars").style.display = "none";


            } else {

                document.getElementById("nocars").style.display = "none";
                document.getElementById("rentalscars").style.display = "block";
                document.getElementById("rentalscars").innerHTML = response;

            }
        }
    }

    xhttp.open("GET", "userview2wheeler.php?aid=" + areaid + "&cid=" + cityid, true);
    xhttp.send();
}

// Get Areas To City
function getAreasToCity(id) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            if (this.response === "noservice") {
                document.getElementById("result2").innerHTML = "";

                document.getElementById("result1").style.display = "block";
                document.getElementById("result1").style.fontSize = "18px";
                document.getElementById("result1").innerHTML = "<i class='fas fa-exclamation-triangle'></i> No service available in this area !!";
            }
            if (this.response !== "noservice") {
                document.getElementById("result1").style.display = "none";
                document.getElementById("result2").innerHTML = this.response;
            }
        }
    };
    request.open("GET", "getAreasToCity.php?id=" + id, true);
    request.send();
}