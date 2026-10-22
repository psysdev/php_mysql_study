Question 1 (PHP/Java Comparison):
"You mentioned you have a background in Java. In Java, comparing two strings is
done using .equals(). In PHP, we use ===. Can you explain why we use three
equals signs in PHP instead of two (==), and what problem it prevents?"

<!-- In php we use three equals signs because with just two equals sign php
 performs type juggling, as in it will type cast / convert the 2nd element to be
 the same data type as the first one, however, with three equals sign php compares
 both the value and the data type performing type checking. -->

Question 2 (Database Architecture):
"We have a students table and a departments table. Why do we separate this data
 into two tables instead of just adding a department_name column directly into the
  students table?"

<!-- Because they are two objects with independent and related attributes. -->

Question 3 (Web Security):
"Walk me through what SQL Injection is. How exactly does an attacker execute it
 through an HTML form, and what specific PHP mechanism do we use to stop it?"

 <!-- In a SQL Injection attack, the attacker abuses unprotected input fields to
  input and execute sql queries, this will be seen in cases of where the program
  expects simple inputs however does not check the input so when the input is taken
  and blindly trusted and prepared statements are not used => so when the user input
  is directly appended to sql queries written in code, attackers can append malicious
   queries which then get executed server side. -->


