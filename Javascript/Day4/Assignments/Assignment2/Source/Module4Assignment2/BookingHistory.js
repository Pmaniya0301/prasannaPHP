localdata = localStorage.getItem("localdata")
localdata = JSON.parse(localdata);
console.log(localdata);
showInTOTable();

function showInTOTable() {
    document.getElementById("historyIdTable").innerHTML = ""
    localdata.forEach(element => {
        let DateOfBooking = new Date(element.DateOfBooking);
        DateOfBooking = DateOfBooking.getFullYear() + "-" + (DateOfBooking.getMonth() + 1) + "-" + DateOfBooking.getDate();
        let DateOfDeparture = new Date(element.DateOfDeparture);
        DateOfDeparture = DateOfDeparture.getFullYear() + "-" + (DateOfDeparture.getMonth() + 1) + "-" + DateOfDeparture.getDate();
        document.getElementById("historyIdTable").innerHTML += `<tr>
    <td>${element.PNRNumber}</td>
    <td>${element.FlightName}</td>
    <td>${element.TotalPrice}</td>
    <td>${element.NoofPerson}</td>
    <td>${DateOfBooking}</td>
    <td>${DateOfDeparture}</td>
    <td><button onclick="CancelBooking(${element.PNRNumber})" id="cancel${element.PNRNumber}">Cancel</button></td>
    </tr>`
    });

}

function CancelBooking(PNRNum) {

    if (confirm("Confirm Delete?")) {
        let element = localdata.findIndex(flight => {
            return flight.PNRNumber == PNRNum
        })
        localdata.splice(element, 1)
        localStorage.setItem("localdata", JSON.stringify(localdata))
        showInTOTable()
        console.log(element);
    } else {
        console.log("canceled in conformation");
    }

}
