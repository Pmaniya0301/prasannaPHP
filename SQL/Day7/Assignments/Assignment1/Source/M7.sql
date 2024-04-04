-- using CTE
with cteassignment (EmployeeID, FirstName, Salary, Ranking_column) as (select * from (
select Employee_ID, First_Name, Salary, DENSE_RANK() OVER (ORDER BY Salary DESC) AS Ranking_column from employees) as tempp
where Ranking_column = 4)
select * from cteassignment;

with cte2 (department_id, totalSalary) as (
select department_id, sum(salary) as totalSalary from employees group by department_ID order by sum(Salary) desc)
select * from cte2;

with cte3 (departmentid, DEPARTMENT_NAME, totalSalary) as (
select e.department_id, d.DEPARTMENT_NAME, sum(salary) as totalSalary from employees e join departments d on e.Department_ID = d.DEPARTMENT_ID group by department_ID)
select * from cte3;

with cte4 (department_id, totalSalary) as (
select department_id, max(salary) as totalSalary from employees group by department_ID order by sum(Salary) asc)
select * from cte4;

with cte5 (department_id, totalSalary) as (
select department_id, max(salary) as totalSalary from employees group by department_ID  having sum(salary)>50000 order by sum(Salary) desc)
select * from cte5;

select * from (
select Employee_ID, First_Name, Salary, DENSE_RANK() OVER (ORDER BY Salary DESC) AS Ranking_column from employees) as tempp
where Ranking_column = 4;

-- using derived Table

select * from (select department_id, sum(salary) as totalSalary from employees group by department_ID) as tempp order by totalSalary desc;

select * from (
select e.department_id, d.DEPARTMENT_NAME, sum(salary) 
as totalSalary 
from employees e 
join departments d 
on e.Department_ID = d.DEPARTMENT_ID 
group by department_ID ) 
as tempp;

select * from (select department_id, max(salary) as totalSalary from employees group by department_ID order by sum(Salary) asc) as tempp;

select * from (select department_id, max(salary) as totalSalary from employees group by department_ID  having sum(salary)>50000 order by sum(Salary) desc) as tempp;