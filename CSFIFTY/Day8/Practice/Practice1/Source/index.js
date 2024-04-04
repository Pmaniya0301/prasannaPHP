function updateCity() {
    var x = document.getElementById("city_id");
    while (x.hasChildNodes()) {
        x.removeChild(x.firstChild);
    }

    if (document.getElementById("state_id").value == "Gujarat") {
        const city = ["Surat", "Ahmedabad"];
        city.forEach(addoption);

        function addoption(value, index, array) {
            var option = document.createElement("option");
            option.text = city[index];
            x.add(option);
        }
    } else if (document.getElementById("state_id").value == "Maharasthra") {
        const city = ["Mumbai", "Pune"];
        city.forEach(addoption);

        function addoption(value, index, array) {
            var option = document.createElement("option");
            option.text = city[index];
            x.add(option);
        }
    }
    else if (document.getElementById("state_id").value == "Select State") {
        const city = ["Select City"];
        city.forEach(addoption);

        function addoption(value, index, array) {
            var option = document.createElement("option");
            option.text = city[index];
            x.add(option);
        }
    }
    updateArea();

}

function updateArea() {
    var x = document.getElementById("area_id");
    while (x.hasChildNodes()) {
        x.removeChild(x.firstChild);
    }

    if (document.getElementById("city_id").value == "Surat") {
        const area = ["Varachha", "Katargam"];
        area.forEach(addoption);

        function addoption(value, index, array) {
            var option = document.createElement("option");
            option.text = area[index];
            x.add(option);
        }
    } else if (document.getElementById("city_id").value == "Ahmedabad") {
        const area = ["Thaltej", "Chharodi"];
        area.forEach(addoption);

        function addoption(value, index, array) {
            var option = document.createElement("option");
            option.text = area[index];
            x.add(option);
        }
    } else if (document.getElementById("city_id").value == "Mumbai") {
        const area = ["Mira Road", "Navi Mumbai"];
        area.forEach(addoption);

        function addoption(value, index, array) {
            var option = document.createElement("option");
            option.text = area[index];
            x.add(option);
        }
    } else if (document.getElementById("city_id").value == "Pune") {
        const area = ["Ram Nagar", "Sita Nagar"];
        area.forEach(addoption);

        function addoption(value, index, array) {
            var option = document.createElement("option");
            option.text = area[index];
            x.add(option);
        }
    } else if (document.getElementById("city_id").value == "Select City") {
        const area = ["Select Area"];
        area.forEach(addoption);

        function addoption(value, index, array) {
            var option = document.createElement("option");
            option.text = area[index];
            x.add(option);
        }
    }

}


function validate() {
    let user_name = document.getElementById("name_inputbox_id").value;
    let user_dob = document.getElementById("user_dob_id").value;
    let user_state = document.getElementById("state_id").value;
    let user_city = document.getElementById("city_id").value;
    let user_area = document.getElementById("area_id").value;
    // let user_hobby = document.querySelectorAll['input[name="hobby"]:checked'];

    let error = [];

    if (user_name == "") {
        document.getElementById("name_error").innerHTML = "Name Could not be an empty.";
        error.push("Empty name");
    }
    let regex = /^[a-zA-Z]+$/;
    if (regex.test(user_name) == false) {
        document.getElementById("name_error").innerHTML = "Name Should only contain chartacters.";
        error.push("Name must have character");
    }
    if (user_dob == "") {
        document.getElementById("date_error").innerHTML = "Date Could not be Empty.";
        error.push("Empty date");
    }
    if (user_state == "Select State") {
        document.getElementById("state_error").innerHTML = "Must select State";
        error.push("Empty state");
    }
    if (user_city == "Select City") {
        document.getElementById("city_error").innerHTML = "Must have to select City";
        error.push("Empty City");
    }
    if (user_area == "Select Area") {
        document.getElementById("area_error").innerHTML = "Must have to select Area";
        error.push("Empty Area");
    }

    var check_error = document.getElementById("hobby1").checked || document.getElementById("hobby2").checked || document.getElementById("hobby3").checked;
    if (check_error === false) {
        document.getElementById("hobby_error").innerHTML = "Please, Atleast select one hobby";
        error.push("Empty Hobby");
    }


    let today_date = new Date();
    let user_date = new Date(user_dob);

    if (today_date.getFullYear() - 18  < user_date.getFullYear()) { // 2024-18 = 2006 > 2007 flase so shows error
        document.getElementById("date_error").innerHTML = "You're age is less than 18 years";
        error.push("Date less than 18");
    } else if (today_date.getFullYear() - 18 === user_date.getFullYear()) { // 2024-18 = 2006 = 2006
        if (today_date.getMonth() - 1 > user_date.getMonth()) { //6 > 7 flase
            document.getElementById("date_error").innerHTML = "You're age is less than 18 years";
            error.push("Date less than 18");
        } else if (today_date.getMonth() - 1 === user_date.getMonth()) {
            if (today_date.getDate() < user_date.getDate()) { //15 < 10 flase
                document.getElementById("date_error").innerHTML = "You're age is less than 18 years";
                error.push("Date less than 18");
            }
        }
    }

    var check_array = [];
    if (document.getElementById("hobby1").checked === true) {
        check_array.push("Playing");
    } if (document.getElementById("hobby2").checked === true) {
        check_array.push("Travelling");
    } if (document.getElementById("hobby3").checked === true) {
        check_array.push("Photography");
    }

    if (document.getElementById("male").checked) {
        var user_gender = "Male"
    } else if (document.getElementById("female").checked) {
        var user_gender = "Female"
    }
    var entries = [];

    if (error.length === 0) {
        var entry = {
            name: user_name,
            state: user_state,
            city: user_city,
            area: user_area,
            dob: user_dob,
            gender: user_gender,
            hobby: check_array
        };

        entries.push(entry);

        displayEntry(entry);
    }

}

function displayEntry(entry) {

    var table = document.getElementById("table_show");
    var newRow = table.insertRow(-1);

    var namecell = newRow.insertCell(0);
    var statecell = newRow.insertCell(1);
    var citycell = newRow.insertCell(2);
    var areacell = newRow.insertCell(3);
    var dobcell = newRow.insertCell(4);
    var gendercell = newRow.insertCell(5);
    var hobbycell = newRow.insertCell(6);
    var deletecell = newRow.insertCell(7);

    namecell.innerHTML = entry.name;
    statecell.innerHTML = entry.state;
    citycell.innerHTML = entry.city;
    areacell.innerHTML = entry.area;
    dobcell.innerHTML = entry.dob;
    gendercell.innerHTML = entry.gender;
    hobbycell.innerHTML = entry.hobby;

    var deleteButton = document.createElement("button");
    deleteButton.innerHTML = "Delete";
    deleteButton.className = "deleteButton";
    deleteButton.onclick = function() {
        var rowIndex = newRow.rowIndex;
        table.deleteRow(rowIndex);
        entries.splice(rowIndex - 1,1);
    };
    deletecell.appendChild(deleteButton);   

    document.getElementById("name_error").innerHTML = "";
    document.getElementById("state_error").innerHTML = "";
    document.getElementById("city_error").innerHTML = "";
    document.getElementById("area_error").innerHTML = "";
    document.getElementById("hobby_error").innerHTML = "";
    document.getElementById("date_error").innerHTML = "";
}   
