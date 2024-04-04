
select FirstName, length(FirstName) as length 
from Employees 
where left(FirstName, 1) = 'A' OR left(FirstName, 1) = 'J' OR left(FirstName, 1) = 'M'
order by FirstName asc;

select LastName from Employees where LastName like "__%c%";
select LastName from Employees where insert(LastName, 1, 2, '') like "%c%";

select substring(PhoneNumber, (length(PhoneNumber) - 4), 4) as nums from Employees;

SELECT REPLACE(PhoneNumber, "123", "990") from Employees;

select employeeid, firstname, lastname, hiredate from Employees where dayofmonth(hiredate) = 7 or month(hiredate) = 7;

select round(((datediff(CURDATE(), HireDate))/365), 2) as exp from Employees;

select hiredate, firstname from Employees where hiredate between '1987-05-01' and '1987-07-30';

select FirstName, LastName, JobId, SUM(Salary) as sum from Employees group by rollup(FirstName, LastName);



select firstname, lastname from Employees where month(hiredate) = 6;

select firstname from Employees where year(hiredate) = 1987;

select hiredate from Employees where dayofweek(hiredate) = 2;

select sum(Salary), JobId from Employees group by JobId;

select lpad(Salary, 10, '$') as SALARY from Employees;

select concat(cast(TIME_FORMAT(CURRENT_TIMESTAMP(), "%h:%i %p") as char(20)), ' ', cast(DATE_FORMAT(CURRENT_TIMESTAMP(), "%M %d, %Y") as char(20)));
select date_format(CURRENT_TIMESTAMP(), '%h:%i %p %M %d, %Y');