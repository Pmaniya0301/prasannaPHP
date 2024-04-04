let flightLocalData = localStorage.getItem("flightLocalData")
let flightData = JSON.parse(flightLocalData);
let PNR
let total
let count = document.getElementById("Qty").value;
console.log(flightLocalData);

const searchParams = new URLSearchParams(window.location.search);
let id = searchParams.get("id");
console.log("this is", id);

document.getElementById("btnbook").addEventListener("click", function (event) {
    event.preventDefault()
    checkValidations();
  
    if (checkValidations()) {
        bookFlight();
    }
});

document.getElementById("FlightName").innerHTML = `Flight Name: ${flightData.fname}`
document.getElementById("FlightPrice").innerHTML = `Flight Price: ${flightData.fprice}`
document.getElementById("tax").innerHTML = `Tax on Total Fair: 10%`

function checkValidations() {
    let name = document.getElementById("Name").value;
    count = document.getElementById("Qty").value;

    document.getElementById("name_error").innerHTML = ""
    document.getElementById("count_error").innerHTML = ""

    let error = false;

    name = name.trim();
    count = count.trim();

    if (name == "") {
        document.getElementById("name_error").innerHTML = " Name is empty"
        error = true;
    }
    if (name.length < 4) {
        document.getElementById("name_error").innerHTML = " Minimum 4 required"
        error = true;
    } if (!(/^[a-zA-Z\s]+$/.test(name))) {
        document.getElementById("name_error").innerHTML = " Name is Wrong"
        error = true;
    }

    if (count == "") {
        document.getElementById("count_error").innerHTML = " Number Should not be Empty and Should Only Number"
        error = true;
    }
    if (!(/^[0-9]+$/.test(count))) {
        document.getElementById("count_error").innerHTML = "Only Number allowed"
        error = true;
    }
    if (count > 10 || count < 1) {
        document.getElementById("count_error").innerHTML = " Number Should be between 1 to 10"
        error = true;
    }

    if (!error) {
        showTheTotalPrice(count);
        return true;
    } else{
        return false;
    }
}

function showTheTotalPrice(count) {

    total = (flightData.fprice * count) + (((flightData.fprice * count) * 10) / 100);
    document.getElementById("totalPrice").value = total
}

function calculatePNR() {
    PNR = Math.floor(Math.random() * 1000000);
    console.log(PNR);

}

function bookFlight() {
    calculatePNR();
    today_date = new Date(2024, 0, 2);
    let dateOfDeparture = flightData.dod;
    dateofdep = new Date(dateOfDeparture);
    console.log(today_date)
    console.log(dateofdep);

    let booking = {
        PNRNumber: PNR,
        FlightName: flightData.fname,
        TotalPrice: total,
        NoofPerson: count,
        DateOfBooking: today_date,
        DateOfDeparture: dateofdep
    }

    let localdata = localStorage.getItem("localdata")

    if (!localdata) {
        localdata = [];
    } else {
        localdata = JSON.parse(localdata);
    }
    localdata.push(booking);
    localStorage.setItem("localdata", JSON.stringify(localdata))
    console.log(localdata);

    let baseurl = location.origin
    let url = new URL(`${baseurl}/BookingHistory.html`);
    location.assign(url);
}
