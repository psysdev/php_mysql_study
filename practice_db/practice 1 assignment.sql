MariaDB [practice]> insert into STUDENTS(first_name,age) values('Priya',22);
Query OK, 1 row affected (0.028 sec)

MariaDB [practice]> select first_name,age from STUDENTS where age = 22;
+------------+------+
| first_name | age  |
+------------+------+
| Priya      |   22 |
+------------+------+
1 row in set (0.000 sec)

MariaDB [practice]> UPDATE STUDENTS
    -> where first_name = "Priya"
    -> set age = 23;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'where first_name = "Priya"
set age = 23' at line 2
MariaDB [practice]> UPDATE STUDENTS set age = 23
    -> where first_name = "Priya";
Query OK, 1 row affected (0.027 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [practice]> UPDATE STUDENTS
    -> set age = 23
    -> where id = 3;
Query OK, 0 rows affected (0.000 sec)
Rows matched: 1  Changed: 0  Warnings: 0

MariaDB [practice]> select * from STUDENTS;
+----+------------+------+
| id | first_name | age  |
+----+------------+------+
|  1 | Arkham     |   24 |
|  3 | Priya      |   23 |
+----+------------+------+
2 rows in set (0.000 sec)

MariaDB [practice]> 
Explain what would happen if you ran DROP TABLE students;
 instead of DELETE FROM students WHERE id = 3;.

 DROP TABLE eliminates the table and all of its data. (Correction :along with resetting the auto increment, -> only happens with truncate where data is eliminated not the table and its structure!).
 delete from where id eliminates the row / object for that specific id value.