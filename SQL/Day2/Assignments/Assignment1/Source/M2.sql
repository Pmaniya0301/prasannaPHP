
update Employees set salary = (salary*1.2), CommissionPct = (CommissionPct * 1.1) where JobId = 'PU_CLERK';

update Employees set email = 'not available';

update Employees set email = 'not available', CommissionPct = 0.10;

update Employees set email = 'not available', CommissionPct = 0.10 where departmentid = 110;

update Employees set email = 'not available' where departmentid = 80 and CommissionPct < 0.20;

-- assignment 5
update Employees e join department d on e.department_id = d.department_id set email = 'not available' having d.department_name = 'Accouning';

update Employees set salary = 8000 where employeeid = 105 and salary < 5000;

update Employees set jobid = 'SH_CLERK' where employeeid = 118 and departmentid = 30 and jobid not like 'SH%';

-- assignment 8

update Employees set salary = case when EmployeeID = 40 then (salary*1.25) when EmployeeID = 90 then (salary*1.15) when EmployeeID = 207 then (salary*1.10) end;

update Employees set salary = (salary*1.2), CommissionPct = (CommissionPct*1.1) where jobid = 'PU_CLERK';

select firstname as 'Employee Name', lastname from Employees;

select firstname as 'Employee Name', lastname from Employees where firstname = 'Steven';

select firstname as 'Employee Name', lastname from Employees where firstname != 'Neena' or firstname != 'Neena';
select * from Employees;
select DISTINCT departmentid, firstname, lastname, salary from Employees where firstname like 'N%';

select firstname, lastname, salary from Employees order by salary desc;

select salary from Employees order by salary desc limit 2;