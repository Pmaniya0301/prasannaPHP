const students = [
    {
        "UserName": "Viral Patel",
        "Department": "Computer Science",
        "MarksObtained": {
            "ComputerNetworks": 85,
            "DBMS": 89,
            "AI": 90,
            "Pyhton Programming": 86
        }
    },
    {
        "UserName": "Krunal Chauhan",
        "Department": "Information Technology",
        "MarksObtained": {
            "ComputerNetworks": 85,
            "DBMS": 83,
            "AI": 82,
            "Pyhton Programming": 81
        }
    },
    {
        "UserName": "Saumya Shah",
        "Department": "Computer Science",
        "MarksObtained": {
            "ComputerNetworks": 69,
            "DBMS": 65,
            "AI": 67,
            "Pyhton Programming": 72
        }
    },
    {
        "UserName": "Nisarg Patel",
        "Department": "Information Technology",
        "MarksObtained": {
            "ComputerNetworks": 50,
            "DBMS": 45,
            "AI": 35,
            "Pyhton Programming": 40
        }
    }
];

function CalculatePercentage(CN, DBMS, AI, PP){
    let result = ((CN + DBMS + AI + PP)/4).toFixed(2);
    return result;
}

function CalculateGrade(percent){
    if (percent >= 85) {
        return `<span style="color:#1b9737">A</span>`;
    } else if (percent >= 70 && percent <85) {
        return `<span style="color:#1a15a9">B</span>`;
    }else if (percent >= 50 && percent <70) {
        return `<span style="color:#ff6e00">C</span>`;
    }else if (percent < 50) {
        return `<span style="color:#ff0000">D</span>`;
    }
}

const tableBody = document.getElementById('table-body');
students.forEach(index =>{
    let fullName = index.UserName;
    fullName = fullName.split(" ")
    let firstname = fullName[0]
    const row = document.createElement('tr');
    row.setAttribute('id', `row-${firstname}`);
    let percentage = CalculatePercentage(index.MarksObtained.ComputerNetworks, index.MarksObtained.DBMS, index.MarksObtained.AI, index.MarksObtained["Pyhton Programming"]);
    let grade = CalculateGrade(percentage);
    row.innerHTML = `<td class = "tabledata">${index.UserName}</td>
    <td class = "tabledata">${index.Department}</td>
    <td class = "tabledata">${index.MarksObtained.ComputerNetworks}</td>
    <td class = "tabledata">${index.MarksObtained.DBMS}</td>
    <td class = "tabledata">${index.MarksObtained.AI}</td>
    <td class = "tabledata">${index.MarksObtained["Pyhton Programming"]}</td>
    <td class = "tabledata">${percentage}</td>
    <td class = "tabledata">${grade}</td>`;
    tableBody.appendChild(row);
});