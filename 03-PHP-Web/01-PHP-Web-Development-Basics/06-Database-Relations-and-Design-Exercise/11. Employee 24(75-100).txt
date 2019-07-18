SELECT employees.employee_id, employees.first_name, projects.`name` AS project_name
FROM employees
INNER JOIN employees_projects ON employees.employee_id = employees_projects.employee_id
INNER JOIN projects ON employees_projects.project_id = projects.project_id
WHERE employees_projects.employee_id = 24 AND projects.start_date >= '2005-01-01'
ORDER BY project_name;