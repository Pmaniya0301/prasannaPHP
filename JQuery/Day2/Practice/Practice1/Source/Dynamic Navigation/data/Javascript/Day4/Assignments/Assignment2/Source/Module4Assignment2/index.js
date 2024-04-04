const data = {
    "destinations": [
        {
            "id": 1,
            "name": "City B"
        },
        {
            "id": 2,
            "name": "City D"
        },
        {
            "id": 3,
            "name": "City F"
        },
        {
            "id": 4,
            "name": "City M"
        },
        {
            "id": 5,
            "name": "City P"
        }
    ],
    "sources": [
        {
            "id": 1,
            "name": "City A"
        },
        {
            "id": 2,
            "name": "City C"
        },
        {
            "id": 3,
            "name": "City E"
        },
        {
            "id": 4,
            "name": "City T"
        },
        {
            "id": 5,
            "name": "City U"
        },
        {
            "id": 6,
            "name": "City K"
        }
    ],
    "flights": [
        {
            "flightID": 1,
            "name": "Flight 1",
            "price": 300,
            "sourceID": 1,
            "destinationID": 2,
            "departureDate": "2023-12-15"
        },
        {
            "flightID": 2,
            "name": "Flight 2",
            "price": 250,
            "sourceID": 3,
            "destinationID": 4,
            "departureDate": "2023-12-18"
        },
        {
            "flightID": 3,
            "name": "Flight 3",
            "price": 400,
            "sourceID": 5,
            "destinationID": 6,
            "departureDate": "2023-12-20"
        },
        {
            "flightID": 4,
            "name": "Flight 4",
            "price": 350,
            "sourceID": 2,
            "destinationID": 1,
            "departureDate": "2023-12-22"
        },
        {
            "flightID": 5,
            "name": "Flight 5",
            "price": 280,
            "sourceID": 4,
            "destinationID": 3,
            "departureDate": "2023-12-25"
        },
        {
            "flightID": 6,
            "name": "Flight 6",
            "price": 420,
            "sourceID": 6,
            "destinationID": 5,
            "departureDate": "2023-12-28"
        },
        {
            "flightID": 7,
            "name": "Flight 7",
            "price": 320,
            "sourceID": 1,
            "destinationID": 3,
            "departureDate": "2023-12-30"
        },
        {
            "flightID": 8,
            "name": "Flight 8",
            "price": 260,
            "sourceID": 3,
            "destinationID": 5,
            "departureDate": "2024-01-02"
        },
        {
            "flightID": 9,
            "name": "Flight 9",
            "price": 380,
            "sourceID": 5,
            "destinationID": 1,
            "departureDate": "2024-01-05"
        },
        {
            "flightID": 10,
            "name": "Flight 10",
            "price": 310,
            "sourceID": 2,
            "destinationID": 4,
            "departureDate": "2024-01-08"
        }
    ]
}


// let data;


// (function fetachData(){
//     fetch("./data.json").then( res => {
//         return res.json();
//     }).then( data => {
//         helper(data);
//     })
// })();

// function helper(result){
//     data = result
// }   


console.log(data);

let sources = data.sources;
let destination = data.destinations;
let flights = data.flights;
showSources(sources)
showDestination(destination);

function showSources(sources) {
    sources.forEach(source => {
        let optionSource = document.getElementById("Source");
        optionSource.innerHTML += `<option value="${source.name}">${source.name}</option>`
    })
}

function showDestination(destination) {
    destination.forEach(destination => {
        let optionDestination = document.getElementById("Destination");
        optionDestination.innerHTML += `<option value="${destination.name}">${destination.name}</option>`
    })
}

document.getElementById("btnSearch").addEventListener("click", function (event) {
    event.preventDefault()
    checkData();
    filterData();
});
document.getElementById("txtSearch").addEventListener("keyup", function(event) {
    filterData()
    checkData()
})
document.getElementById("txtSearch").addEventListener("change", function(event) {
    filterData()
})
document.getElementById("Source").addEventListener("change", function(event) {
    checkData()
})
document.getElementById("Destination").addEventListener("change", function(event) {
    checkData()
})
document.getElementById("departureDate").addEventListener("change", function(event) {
    checkData()
})

function filterData() {
    console.log("hello");
    document.getElementById("txtsearch_error").innerHTML = ""
    var flightName = document.getElementById("txtSearch").value;
    var source = document.getElementById("Source").value;
    var destination = document.getElementById("Destination").value;
    var dateFull = document.getElementById("departureDate").value

    flightName = flightName.trim();
    dateFull = dateFull.trim();
    if (source == "" || destination == "" || dateFull == "") {
        let fifteenDayFlight = defaultData();
        let FilteredData = filterDataForTable(fifteenDayFlight)
        showDataIntoTable(FilteredData);
    } else {
        let searchedData = searchData()
        let FilteredData = filterDataForTable(searchedData)
        showDataIntoTable(FilteredData);
    }
}

function defaultData() {

    let fifteenDayFlight = flights.filter(flight => {
        let depDate = new Date(flight.departureDate);
        let today_date = new Date(2024, 0, 2);
        let dateAfterFifteenDay = new Date(today_date.getTime() + 15 * 24 * 3600 * 1000)
        if (depDate.getTime() >= today_date.getTime() && depDate.getTime() <= dateAfterFifteenDay.getTime()) {
            return flight;
        }
    })
    return fifteenDayFlight;
}
let fifteenDayFlight = defaultData();
showDataIntoTable(fifteenDayFlight);

function checkData() {

    var source = document.getElementById("Source").value;
    var destination = document.getElementById("Destination").value;
    var flightName = document.getElementById("txtSearch").value;
    var dateFull = document.getElementById("departureDate").value;

    flightName = flightName.trim();
    dateFull = dateFull.trim();

    if (source == "" && destination == "" && flightName == "" && dateFull == "") {
        let fifteenDayFlight = defaultData();
        showDataIntoTable(fifteenDayFlight);
    }

    document.getElementById("source_error").innerHTML = ""
    document.getElementById("destination_error").innerHTML = ""
    document.getElementById("txtsearch_error").innerHTML = ""
    document.getElementById("date_error").innerHTML = ""
    document.getElementById("globalError").innerHTML = "";


    let error = false;

    if (source == "") {
        document.getElementById("source_error").innerHTML = "Source is Empty"
        error = true;
    }
    if (destination == "") {
        document.getElementById("destination_error").innerHTML = "Destination is Empty"
        error = true;
    }
    if (source != "" && destination != "") {
        if (source == destination) {
            document.getElementById("source_error").innerHTML = "Source and Destination Should not be same"
            document.getElementById("destination_error").innerHTML = "Source and Destination Should not be same"
            error = true;
        }
    }

    if (dateFull == "") {
        document.getElementById("date_error").innerHTML = "Date is Empty"
        error = true;
    }

    if (dateFull != "") {

        if (!(/^(19|20)\d\d\-(0[1-9]|1[0-2])\-(0[1-9]|[12][\d]|3[01])$/.test(dateFull))) {
            document.getElementById("date_error").innerHTML = "Departure Date is in Wrong Formate"
            error = true;
        }

        let today_date = new Date(2024, 0, 2);
        let user_date = new Date(dateFull);

        if (today_date.getTime() > user_date.getTime()) {
            document.getElementById("date_error").innerHTML = "You're date is less than today";
            error = true;
        }
    }
    if (!error) {
        let searchedData = searchData()
        showDataIntoTable(searchedData);
    }
}

function searchData() {
    var source = document.getElementById("Source").value;
    var destination = document.getElementById("Destination").value;


    let srcId = data.sources.find(src => {
        return src.name == source
    })

    let dstId = data.destinations.find(dest => {
        return dest.name == destination
    })

    const searchedData = data.flights.filter(flight => {
        let depDate = new Date(flight.departureDate);
        depDate.setHours(0,0,0,0);
        let today_date = new Date(2024, 0, 2);
        var dateFull = document.getElementById("departureDate").value;
        let userDepDate = new Date(dateFull)
        userDepDate.setHours(0,0,0,0);

        console.log("origional", depDate);
        console.log("user Enterd", userDepDate);
        console.log("today", today_date);

        return flight.sourceID === srcId.id && flight.destinationID === dstId.id && depDate.getTime() >= today_date.getTime() && depDate.getTime() == userDepDate.getTime() 

    })
    return searchedData;
}

function filterDataForTable(searchedData) {
    var flightName = document.getElementById("txtSearch").value


    const FilteredData = searchedData.filter(flight => {
        if (flightName != "") {
            return (flight.name).toLowerCase() == flightName.toLowerCase()
        }
    })
    return FilteredData;
}

function showDataIntoTable(searchedData) {
    let table = document.getElementById("theadOfFlight")
    table.innerHTML = "";

    if (searchedData.length == 0) {
        let abc = 0;
    } else {
        searchedData.forEach(availableFlight => {
            let srcName = data.sources.find(src => {
                return src.id == availableFlight.sourceID
            })

            let destName = data.destinations.find(dest => {
                return dest.id == availableFlight.destinationID
            })
            let departureDate = new Date(availableFlight.departureDate)
            departureDate = departureDate.toString()

            table.innerHTML += `<tr id="item${availableFlight.flightID}">
        <td>${availableFlight.name}</td>
        <td>${srcName.name}</td>
        <td>${destName.name}</td>
        <td>${availableFlight.price}</td>
        <td><button onclick="bookFlight(${availableFlight.flightID},'${availableFlight.name}' ,${availableFlight.price}, '${departureDate}')" id="btnBook${availableFlight.flightID}">Book</button></td>
        </tr>`

        })
    }
}



function bookFlight(id, name, price, dateofD) {

    let flightLocalData = {
        fname: name,
        fprice: price,
        dod: dateofD
    }

    console.log(flightLocalData);
    localStorage.setItem("flightLocalData", JSON.stringify(flightLocalData))

    // let baseurl = location.origin
    // let url = new URL(`${baseurl}/BookFlight.html`);
    // /?id=${id}&price=${pri
    // location.assign(url);   
    
    let baseurl = location.origin
    console.log(baseurl);
    let url = new URL(`${baseurl}/BookFlight.html?id=${id}`);
    location.assign(url);

    localStorage.setItem("flightDetails", JSON.stringify(flights));

}
