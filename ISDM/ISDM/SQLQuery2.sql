select * from Course;
select * from Student;

SELECT CID, COUNT(SID) AS 'NUMBER OF STUDENT'
FROM Student
GROUP BY CID;

/* Display the total number of modules in each course?*/

SELECT CID,COUNT (Mcode) AS 'TOTAL NUMBER OF MODULES'
FROM Offers
GROUP BY CID;


/*  How many students are there for each course? Re name the count as ‘Number of Student’ */

SELECT CID, COUNT(SID) AS 'NUMBER OF STUDENT'
FROM Student
GROUP BY CID;

/* What is the number of Modules offered by each course in each academic year? */

SELECT CID, Accadamic_year,COUNT(Mcode)
FROM Offers
GROUP BY CID, Accadamic_year;

/* What is the number of Modules in Semester 02 only? */

SELECT Mcode, COUNT (Mcode) AS 'NUMBER OF MODULES'
FROM Offers
WHERE Semester=2
GROUP BY Mcode
ORDER BY Mcode;


/*----------------------------------------------------------------------------------------------------------------------------------*/


/* Display the number of students for each course? List the Course_ID of courses only if there are less than 10 students for the course.*/

SELECT CID, COUNT(SID) AS 'NUMBER OF STUDENT'
FROM Student
GROUP BY CID
HAVING COUNT(SID)<10;

/* List the Course_ID and the number of modules offered for each course. Display only the course ids which have more than 3 modules offered in it. Sort the result according to the ascending order of the module count*/

SELECT CID ,COUNT(Mcode)
FROM Offers
GROUP BY CID
HAVING COUNT(Mcode)>3
ORDER BY COUNT(Mcode);



/* Display the course id, academic year and the number of modules offered. The number of modules offered should be less than 10.*/

SELECT CID, Accadamic_year,COUNT(Mcode) AS 'NUMBER OF MODELS'
FROM Offers
GROUP BY CID, Accadamic_year
HAVING COUNT(Mcode) <10;



/*   List the courses that offer more than 2 modules for year 3 students?*/

SELECT CID , COUNT(Mcode) AS 'NUMBER OF MODULES'
FROM Offers
WHERE Accadamic_year='Y3'
GROUP BY CID
HAVING COUNT(Mcode)> 2;