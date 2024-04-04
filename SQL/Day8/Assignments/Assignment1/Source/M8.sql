select Salary, first_name from employees where department_id = 80;
create index indexSalary on employees (salary, first_name);

alter table employees drop index indexSalary;