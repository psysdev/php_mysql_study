select count(*) from STUDENTS;
+-----------+-------------+------+-----+---------+-------+
| Field     | Type        | Null | Key | Default | Extra |
+-----------+-------------+------+-----+---------+-------+
| id        | int(11)     | NO   | PRI | NULL    |       |
| dept_name | varchar(50) | NO   |     | NULL    |       |
+-----------+-------------+------+-----+---------+-------+

select STUDENTS.first_name, DEPARTMENTS.dept_name
from STUDENTS
INNER JOIN
DEPARTMENTS on STUDENTS.dept_id = DEPARTMENTS.id;
+------------+------------------+
| first_name | dept_name        |
+------------+------------------+
| Arkham     | Computer Science |
| Priya      | Business         |
+------------+------------------+
2 rows in set (0.003 sec)

idk why having is used instead of where