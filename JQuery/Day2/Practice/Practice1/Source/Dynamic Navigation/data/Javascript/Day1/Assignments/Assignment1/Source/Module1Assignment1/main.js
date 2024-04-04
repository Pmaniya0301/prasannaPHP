document.getElementById('getresult').addEventListener('click', function () {
    document.getElementById('firstnumber-error').innerText = '';
    document.getElementById('secondnumber-error').innerText = '';
    document.getElementById('operation-error').innerText = '';

    let firstNumber = document.getElementById('firstnumber').value;
    let secondNumber = document.getElementById('secondnumber').value;
    let operation = document.querySelector('input[name="operation"]:checked');
    // console.log(firstNumber);
    // console.log(operation.value);

    let isError = false;
    if (!firstNumber.trim()) {
        document.getElementById('firstnumber-error').innerText = 'Please enter first number';
        isError = true;
    } else if (isNaN(firstNumber)) {
        document.getElementById('firstnumber-error').innerText = 'Please enter valid number';
        isError = true;
    }
    if (!secondNumber.trim()) {
        document.getElementById('secondnumber-error').innerText = 'Please enter second number';
        isError = true;
    } else if (isNaN(secondNumber)) {
        document.getElementById('secondnumber-error').innerText = 'Please enter valid number';
        isError = true;
    }
    if (!operation) {
        document.getElementById('operation-error').innerText = 'Select any of the operation';
        isError = true;
    }

    if (!isError) {
        let result;
        let operator = operation.value;
        switch (operator) {
            case 'addition':
                result = parseFloat(firstNumber) + parseFloat(secondNumber);
                break;
            case 'subtraction':
                result = parseFloat(firstNumber) - parseFloat(secondNumber);
                break;
            case 'multiplication':
                result = parseFloat(firstNumber) * parseFloat(secondNumber);
                break;
            case 'division':
                if (parseFloat(secondNumber) === 0) {
                    result = 'Infinity';
                } else {
                    result = parseFloat(firstNumber) / parseFloat(secondNumber);
                }
                break;
        }
        document.getElementById('result').innerText = 'Result is: ' + result;
    } else {
        document.getElementById('result').innerText = '';
    }
});

document.getElementById('reset').addEventListener('click', function () {
    document.getElementById('firstnumber').value = '';
    document.getElementById('secondnumber').value = '';
    document.querySelector('input[name="operation"]:checked').checked = false;
    document.getElementById('result').innerText = '';
    document.getElementById('firstnumber-error').innerText = '';
    document.getElementById('secondnumber-error').innerText = '';
    document.getElementById('operation-error').innerText = '';
});
