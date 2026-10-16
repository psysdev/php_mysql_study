
MariaDB [practice]> select * from students;
ERROR 1146 (42S02): Table 'practice.students' doesn't exist
MariaDB [practice]> describe students;
ERROR 1146 (42S02): Table 'practice.students' doesn't exist
MariaDB [practice]> select * from STUDENTS;
+----+------------+------+
| id | first_name | age  |
+----+------------+------+
|  1 | Arkham     |   20 |
|  2 | Asylum     |   14 |
+----+------------+------+
2 rows in set (0.000 sec)

MariaDB [practice]> select * from STUDENTS where age > 18;
+----+------------+------+
| id | first_name | age  |
+----+------------+------+
|  1 | Arkham     |   20 |
+----+------------+------+
1 row in set (0.000 sec)

MariaDB [practice]> 
