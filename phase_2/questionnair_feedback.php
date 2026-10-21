Interview Feedback

Question 1 (PHP === vs ==)Grade: A+
Using the exact term "type juggling" is the golden ticket here. It immediately signals to a senior developer that you understand PHP's internal quirks. You correctly identified that === checks both value and type, which is the exact answer we want.

Question 2 (Database Architecture)Grade: B
Your answer ("Because they are two objects with independent and related attributes") is a great Object-Oriented Programming answer. It shows you think in terms of entities.
However, for a database question, an interviewer is looking for the concept of Normalization.How to improve it: Mention the practical consequences. If you put the department name directly in the students table for 10,000 students, you waste disk space (Data Redundancy). Worse, if the "Computer Science" department changes its name to "Software Engineering", you have to safely update 10,000 rows instead of just updating one row in the departments table.

Question 3 (SQL Injection)Grade: A
Flawless explanation. You identified the vulnerability (blindly trusting and directly appending input) and immediately named the industry-standard solution (Prepared Statements).
The Final Whiteboard Challenge

This is it. The final boss of the bootcamp. We are going to combine PDO, SQL, and PHP/HTML template rendering into one script.

The Scenario:
You have an active PDO connection stored in the variable $pdo.
Your database has a table named books with the columns: id, title, and author.

Your Task:
Write a single PHP script that does the following:

    Write a Prepared Statement to SELECT all books where the author is "J.K. Rowling". (Use a placeholder for the author's name).

    Execute the statement and fetch the results as an Associative Array.

    Drop out of pure PHP and write a <ul> HTML tag.

    Inside the <ul>, use the PHP foreach shorthand (: and endforeach;) to loop over your fetched array and display each book's title inside an <li> tag.