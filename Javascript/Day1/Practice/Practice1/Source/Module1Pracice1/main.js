var num1 = prompt("enter first number");
    var num2 = prompt("enter second number");
    var num3 = prompt("enter third number");

    let numregex = /^[0-9]+$/;

    if (num1 == null || num2 == null || num3 == null || num1 == "" || num2 == "" || num3 == "" || !numregex.test(num1) || !numregex.test(num2)|| !numregex.test(num3)) {
        document.getElementById("number_error").innerHTML = `You missed to enter number(s). or your entered number(s) is in Wrong Formate.`

    } else {
        num1 = Number(num1);
        num2 = Number(num2);
        num3 = Number(num3);

        if (num1 > num2 && num1 > num3) {
            document.getElementById("maximum_number").innerHTML = `The maximum number is : ${num1}`
        } else if (num3 > num1 && num3 > num2) {
            document.getElementById("maximum_number").innerHTML = `The maximum number is : ${num3}`
        } else {
            document.getElementById("maximum_number").innerHTML = `The maximum number is : ${num2}`
        }

        var sum = 0;
        if (num1 >= 40) {
            sum = sum + num1;
        }
        if (num2 >= 40) {
            sum = sum + num2;
        }
        if (num3 >= 40) {
            sum = sum + num3;
        }

        document.getElementById("sum_of_over40").innerHTML = `The sum of over 40 value number is : ${sum}`
    }
