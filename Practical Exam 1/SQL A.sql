SELECT e.name, e.date_hired, d.department, s.salary FROM employees AS e
INNER JOIN departments AS d ON e.department_id = d.id
INNER JOIN salary AS s ON e.salary_id = s.id
WHERE e.salary_id = 3