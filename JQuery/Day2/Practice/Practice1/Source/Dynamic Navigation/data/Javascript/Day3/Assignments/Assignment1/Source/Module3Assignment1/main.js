function validate() {
    let user_id = document.getElementById("empid").value;
    let user_name = document.getElementById("empname").value;
    let user_age = (document.getElementById("age").value).toString();
    let user_designation = document.getElementById("designation").value;
    let user_salary = document.getElementById("salary").value;
    let user_location = document.getElementById("location").value;
    let user_email = document.getElementById("email").value;
    let user_doj = document.getElementById("joiningDate").value;
    let user_contactno = document.getElementById("contact").value;

    let user_gender2 = document.querySelector(`input[name = "gender"]:checked`).value;

    document.getElementById("spanEmpid").innerHTML = "";
    document.getElementById("spanEmpname").innerHTML = "";
    document.getElementById("spanAge").innerHTML = "";
    document.getElementById("spanDesignation").innerHTML = "";
    document.getElementById("spanSalary").innerHTML = "";
    document.getElementById("spanContactNo").innerHTML = "";
    document.getElementById("spanDateOfJoining").innerHTML = "";
    document.getElementById("spanEmail").innerHTML = "";


    let error = [];

    if (user_id == "") {
        document.getElementById("spanEmpid").innerHTML = "empid is required.";
        error.push("id");
    }
    if (user_location == "") {
        document.getElementById("spanLocation").innerHTML = "location is required.";
        error.push("location");
    }
    if (user_name == "") {
        document.getElementById("spanEmpname").innerHTML = "empname is required.";
        error.push("name");
    }
    if (user_age == "") {
        document.getElementById("spanAge").innerHTML = "age is required.";
        error.push("age");
    }
    if (user_designation == "") {
        document.getElementById("spanDesignation").innerHTML = "designation is required.";
        error.push("designation");
    }
    if (user_salary == "") {
        document.getElementById("spanSalary").innerHTML = "salary is required.";
        error.push("salary");
    }
    if (user_contactno == "") {
        document.getElementById("spanContactNo").innerHTML = "contact is required.";
        error.push("contact");
    }
    if (user_doj == "") {
        document.getElementById("spanDateOfJoining").innerHTML = "joiningDate is required.";
        error.push("doj");
    }
    if (user_email == "") {
        document.getElementById("spanEmail").innerHTML = "email is required.";
        error.push("email");
    }

    if(user_id != ""){
    if (user_id.length <= 5) {
        document.getElementById("spanEmpid").innerHTML = "EmployeeID should be at least 5 characters long.";
        error.push("id size");
    }
}

if(user_age != ""){
    if (!(/^[\d]+$/.test(user_age))) {
        document.getElementById("spanAge").innerHTML = "Age should be a number";
        error.push("age wrong");
    }
    if (user_age <= 0) {
        document.getElementById("spanAge").innerHTML = "Age should not be less than or equal to zero. ";
        error.push("age less than 0");
    }

}




    if(user_email != ""){
    let emailRegex = /^[a-zA-Z.]+@[a-zA-Z]+\.[a-zA-Z]+$/
    if (!(emailRegex.test(user_email))) {
        document.getElementById("spanEmail").innerHTML = "Email format is wrong";
        error.push("Email Formate");
    }
}

if(user_name != ""){
    let regex = /^[a-zA-Z\s]+$/;
    if (!(regex.test(user_name))) {
        document.getElementById("spanEmpname").innerHTML = "Name Should only contain chartacters.";
        error.push("Name must have character");
    }
}

if(user_contactno != ""){
    let contactRegex = /[\d]{10}/;
    if (!(contactRegex.test(user_contactno))) {
        document.getElementById("spanContactNo").innerHTML = "Phone number is in formate";
        error.push("Contact Length");
    }
}

if(user_doj != ""){

    let today_date = new Date();
    let user_date = new Date(user_doj);

    if (today_date.getTime() < user_date.getTime()) { // 2024-18 = 2006 > 2007 flase so shows error
        document.getElementById("spanDateOfJoining").innerHTML = "You're adding date more than today";
        error.push("Date less than 18");
    }
}

if(error.length == 0){
showDataInTable(user_id, user_name, user_age, user_designation, user_salary, user_location, user_email, user_doj, user_contactno, user_gender2);
}
    
}

function showDataInTable(user_id, user_name, user_age, user_designation, user_salary, user_location, user_email, user_doj, user_contactno, user_gender2){
    let nodeintable = document.querySelector("#dataShow tbody");
            nodeintable.innerHTML += `<tr>
            <td>${user_id}</td>
            <td>${user_name}</td>
            <td>${user_age}</td>
            <td>${user_gender2}</td>
            <td>${user_designation}</td>
            <td>${user_salary}</td>
            <td>${user_location}</td>
            <td>${user_email}</td>
            <td>${user_doj}</td>
            <td>${user_contactno}</td>  
            </tr>`;
}
