/*LABSHEET 7*/

/*How many Students are there in each course? List the CID and the number of students*/

SELECT  C.CID,COUNT(S.SID) AS 'NO OF STUDENT' FROM Student S , Course C WHERE S.CID= C.CID group by C.CID;

/*How many Students are there in each course? List the course name and the number of Students. */

SELECT C.Cname , COUNT(S.SID) AS 'NO OF STUDENT' FROM Student S , Course C WHERE S.CID= C.CID group by C.Cname;

/*What are the courses which offer more than 2 modules for year 1 students*/

SELECT C.Cname, COUNT (M.Mcode) FROM Course C , Offers O , Module M   WHERE M.Mcode=O.Mcode AND C.CID=O.CID AND Accadamic_year='Y1' GROUP BY  C.Cname HAVING COUNT (M.Mcode) >2;

/*What are the courses which offer more than 2 modules for any academic year?  List the course names, academic year and the no of modules offered. Sort the  result according to the no of modules*/


SELECT C.Cname,O.Accadamic_year  ,COUNT(M.Mcode) FROM Course C , Offers O , Module M   WHERE M.Mcode=O.Mcode AND C.CID=O.CID  GROUP BY  C.Cname, O.Accadamic_year   HAVING COUNT (M.Mcode) >2 ORDER BY  COUNT (M.Mcode);