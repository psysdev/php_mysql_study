MariaDB [practice]> update STUDENTS 
    -> where id = 1
    -> set AGE = 24;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where id = 1
set AGE = 24' at line 2
MariaDB [practice]> update STUDENTS
    -> set AGE = 24
    -> where id = 1;
Query OK, 1 row affected (0.004 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [practice]> select * from STUDENTS;
+----+------------+------+
| id | first_name | age  |
+----+------------+------+
|  1 | Arkham     |   24 |
|  2 | Asylum     |   14 |
+----+------------+------+
2 rows in set (0.000 sec)

MariaDB [practice]> delete from STUDENTS
    -> where id = 2;
Query OK, 1 row affected (0.027 sec)

MariaDB [practice]> select * from STUDENTS;
+----+------------+------+
| id | first_name | age  |
+----+------------+------+
|  1 | Arkham     |   24 |
+----+------------+------+
1 row in set (0.000 sec)

MariaDB [practice]> 
