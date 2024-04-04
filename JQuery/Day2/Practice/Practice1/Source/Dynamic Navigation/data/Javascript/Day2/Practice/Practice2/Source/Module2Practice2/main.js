function stringcheck() {
    let str = document.getElementById("user_string").value;
    document.getElementById("title_array_list").innerHTML = "";
    document.getElementById("array_show").innerHTML = "";


    let strregex = /^\s+$/;

    if (str == "" || strregex.test(str)) {
        document.getElementById("result_show").innerHTML = "String is Blanck";
    } else {
        let arr = str.split(" ");
        document.getElementById("title_array_list").innerHTML = "Here you can see the list of the array";
        arr.forEach(element => {
            
            document.getElementById("array_show").innerHTML += `${element}<br>`;
        });
    }

}


number = document.getElementById("number").value;
function check(){
    function checkpin(number){
        let numregex = /[0-9]{4,6}/
        return numregex.test(number);
    }

    document.getElementById("result").innerHTML = checkpin(number);
}




