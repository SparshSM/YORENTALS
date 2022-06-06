function showButton(value) {
    if (value !== "") {
        document.getElementById("buttonDiv").style.display = "block";
    } else {
        document.getElementById("buttonDiv").style.display = "none";
    }
}

// Get Areas To City for Rental
function getAreasToCityRental(id) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            if (this.response === "noservice") {
                document.getElementById("result2").innerHTML = "";

                document.getElementById("result1").style.display = "block";
                document.getElementById("result1").style.fontSize = "18px";
                document.getElementById("result1").innerHTML = "<i class='fas fa-exclamation-triangle'></i> No areas available !!";
            }
            if (this.response !== "noservice") {
                document.getElementById("result1").style.display = "none";
                document.getElementById("result2").innerHTML = this.response;
            }
        }
    };
    request.open("GET", "getAreasToCityRental.php?id=" + id, true);
    request.send();
}