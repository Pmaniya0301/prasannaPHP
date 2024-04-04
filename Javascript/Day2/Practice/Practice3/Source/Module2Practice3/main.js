
function stringcheck() {
    let str = document.getElementById("user_string").value;
    let num = document.getElementById("user_number").value;
    let num2 = document.getElementById("user_number2").value;


    document.getElementById("number_error").innerHTML = "";
    document.getElementById("number_error2").innerHTML = "";
    document.getElementById("title_of_output").innerHTML = "";
    document.getElementById("output_show").innerHTML = "";


    let strregex2 = /^[a-zA-Z\s]/;
    let numregex = /^[0-9]+$/;
    let arr = [];
    if (str == "" || !strregex2.test(str)) {
        document.getElementById("string_error").innerHTML = "String is wrong";
        arr.push("string");
    } else if (str.length < Number(num) || str.length < Number(num2)) {
        if (str.length < Number(num)) {
            document.getElementById("number_error").innerHTML = "Number is High";
            arr.push("numberhigh");
        }
        if (str.length < Number(num2)) {
            document.getElementById("number_error2").innerHTML = "Number is High";
            arr.push("numberhigh2");
        }
    }

    if (num == "" || !numregex.test(num)) {
        document.getElementById("number_error").innerHTML = "Number is wrong";
        arr.push("number");
    }
    if (num2 == "" || !numregex.test(num2)) {
        document.getElementById("number_error2").innerHTML = "Number is wrong";
        arr.push("number2");
    }

    if (arr.length == 0) {

        let outstring = str.slice(num, num2);
        document.getElementById("title_of_output").innerHTML = "Here you can see the String";
        document.getElementById("output_show").innerHTML = `${outstring}<br>`;

    }

}
