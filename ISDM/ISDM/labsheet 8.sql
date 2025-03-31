/* labsheet 8*/

/*Consider the following data types for the above schema, create the following  relational database using CREATE TABLE SQL statement. Ensure that appropriate  
referential integrity constraints (Foreign key) are met. Save the script as  “CreateDB.sql”.

Student(SID:CHAR(10), Sname:VARCHAR(50), Address:VARCHAR(50), dob:DATE, NIC:CHAR(10), CID:CHAR(6))
Offers (CID:CHAR(6) , Mcode:CHAR(6), Accadamic_year:CHAR(2), Semester:INTEGER)
Module (Mcode:CHAR(6), Mname:VARCHAR(50), M_Description:VARCHAR(200), NoOfCredits:INTEGER)
Course (CID:CHAR(6), Cname:VARCHAR(50), C_Description:VARCHAR(200), C_fee:INTEGER */

create table Course(
 CID CHAR(6), 
 Cname VARCHAR(50), 
 C_Description VARCHAR(200),
 C_fee INTEGER,
 constraint PK_CID primary key (CID));


 create table Student (
 SID CHAR(10), 
 Sname VARCHAR(50), 
 Address VARCHAR(50),
 dob DATE, 
 NIC CHAR(10), 
 CID CHAR(6),
 constraint PK_SID primary key (SID),
 constraint FK_CID FOREIGN KEY(CID) REFERENCES Course(CID),
 check (NIC like '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][v-V]'));


create table Module (
Mcode CHAR(6), 
Mname VARCHAR(50), 
M_Description VARCHAR(200), 
NoOfCredits INTEGER,
constraint PK_Mcode primary key(Mcode));

alter table  Module 
add constraint CHK_modu check (NoOfCredits  IN (1,2,3,4));

create table Offers (
CID CHAR(6) , 
Mcode CHAR(6), 
Accadamic_year CHAR(2), 
Semester INTEGER,
constraint PK_CID2 primary key (CID,Mcode),
constraint FK_CID2 FOREIGN KEY(CID) REFERENCES Course(CID),
constraint FK_Mcode FOREIGN KEY(Mcode) REFERENCES Module(Mcode));




select * from Student;
select * from Course;
select * from Offers;
select * from Module;



/*. Use CHECK constraint to enforce the following rules stated by modifying existing  Student and Module tables.
Hint: Use 
       'ALTER TABLE <table_name> ADD CONSTRAINT <constraint_name> CHECK(<condition>)' 
 Ensure that the Student’s NIC number contains 9 digits (0-9) and one character which is “V”or “v”.
 Ensure that number of credits for module should be one of the following 
:1,2,3,*/

drop table Offers;
drop table Module;
drop table Student;
drop table Course;


