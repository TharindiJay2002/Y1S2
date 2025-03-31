
/* LAB SHEET 6*/


/*Make a list of the student ID, name and the name of the course the student is 
following.*/

SELECT S.SID ,S.Sname, C.Cname FROM Student S, Course C WHERE S.CID=C.CID;


/*Make a list of the CIDs and the names of the modules offered by those courses.*/

SELECT C.CID ,M.Mname FROM Offers O ,Module M , Course C WHERE O.CID=C.CID AND O.Mcode=M.Mcode;

/*Make a list of course names and the names of modules offered*/

SELECT C.Cname ,M.Mname FROM Offers O ,Module M , Course C WHERE O.CID=C.CID AND O.Mcode=M.Mcode;

/*What are the ID and names of the students who have registered for the course by paying a registration fee of more than 1 Lak?*/

SELECT S.SID , S.Sname ,C.CID FROM Student S , Course C WHERE S.CID= C.CID  AND C.C_fee > 100000; 

/*What are the names of modules offered to year I students by the Information Technology Course*/

SELECT  M.Mname   FROM Offers O ,Module M , Course C WHERE O.CID=C.CID AND O.Mcode=M.Mcode and C.Cname='Infromaton Technology' AND O.Accadamic_year='Y1';
select *from Course;