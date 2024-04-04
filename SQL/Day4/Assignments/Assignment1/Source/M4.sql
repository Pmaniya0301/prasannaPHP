select * from (
select EmployeeID, FirstName, Salary, DENSE_RANK() OVER (ORDER BY Salary DESC) AS Ranking_column from Employees) as tempp
where Ranking_column = 4;
 
select e.departmentid, d.DEPARTMENT_NAME, sum(salary) as totalSalary from Employees e join departments d on e.DepartmentID = d.DEPARTMENT_ID group by departmentID;
select departmentid, sum(salary) as totalSalary from Employees group by departmentID order by sum(Salary) desc;
select departmentid, max(salary) as totalSalary from Employees group by departmentID order by sum(Salary) asc;
select departmentid, max(salary) as totalSalary from Employees group by departmentID order by min(Salary) asc;
select departmentid, sum(salary) as totalSalary from Employees group by departmentID having sum(salary)>50000 order by sum(Salary) desc;