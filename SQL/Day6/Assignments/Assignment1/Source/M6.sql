create view employee
as
select e.first_name, e.last_name, e.JOB_ID, e.department_id, d.department_name, d.location_id
from employees e join departments d
on e.department_id = d.department_id
having d.location_id = (select l.location_id 
						from locations l join departments d 
						on d.location_id = l.location_id 
                        where l.city = 'london');

select Employee_id, job_id, department_id, datediff(end_date, start_date) from job_history where department_id = 90;

create view assignment3_1 as (
select d.department_name, e.first_name, l.city from (departments d join locations l on d.location_id = l.location_id) join employees e on e.employee_id = d.manager_id );

create view assignment3_2 as (
select d.department_name, e.first_name, e.last_name, e.hire_date, e.salary from departments d inner join employees e on d.manager_id = e.employee_id );

