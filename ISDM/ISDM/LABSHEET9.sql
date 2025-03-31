/* LABSHEET 9*/

/*. Insert the following data using INSERT SQL Statement for the tables you created in Lab sheet 8. (Hint: Here also you have to consider about 
the foreign keys, you can insert the values according to the order of table creation. Otherwise you may get errors) */


/*COURSE*/

INSERT INTO Course (CID,Cname,C_Description, C_fee) VALUES ('IT', 'Infromaton Technology', 'The programme is designed for technically focused students who capabilities in programming', 175000);

INSERT INTO Course VALUES ('SE' ,'Software Engineering Software ','engineering is the discipline of designing creating and maintaining',185000);

INSERT INTO Course VALUES ('CSNE',' Computer System And Network Engineering ','The programme aims to provide students with the knowledge, skills, planning, and designing',155000);

INSERT INTO Course VALUES ('DS', 'Data Scinece' ,'The meticulous curriculum focuses on the fundamentals of computer science, statistics, and applied mathematics',170000);

SELECT * FROM Course;


/*STUDENT*/
INSERT INTO  Student VALUES ('CN18384756','Kamal','No122, Rose street, matale', '1994-05-02', '946785467v', 'CSNE');

INSERT INTO  Student VALUES ('IT18234568','Ann','No12, Kings street, colombo', '1996-11-11', '961234587v', 'IT');

INSERT INTO  Student VALUES ('DS18234876','Pubudu','No678 , 3rd new lane, Maharahgama', '1994-11-08', '948763759v', 'DS');

INSERT INTO  Student VALUES ('SE19238567','Malith','No08, st.thomas street, Kandy', '1992-12-20', '922356785v', 'SE');

SELECT * FROM Student;


/*MODULE*/

INSERT INTO Module VALUES ('SE3050','User Experience Engineering','subject under SE',03);

INSERT INTO Module VALUES ('IT1010','Introduction to Programming','subject under IT',04);

INSERT INTO Module VALUES ('IT2050','Computer Networks','subject under IT',04);

INSERT INTO Module VALUES ('IT3051','Fundamentals of Data Mining','subject under DS',04)

SELECT * FROM Module;


/*OFFERS*/

INSERT INTO Offers VALUES ('SE',' SE3050',' Y3', 2);

INSERT INTO Offers VALUES ('IT',' IT1010',' Y1', 2);

INSERT INTO Offers VALUES ('IT',' IT2050',' Y2', 1);

INSERT INTO Offers VALUES ('DS',' IT3051',' Y3', 2);

SELECT * FROM Offers;




UPDATE Student SET Address='No15,Gamunupura,New Kandy Rd,Malabe' WHERE SID='IT18234568 ';DELETE FROM Module WHERE Mcode='SE3050 ';