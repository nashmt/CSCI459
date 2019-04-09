# Create the sample database
create database 459db;

# Create a table in the database
create table 459db.firsttable (
 house_ID int NOT NULL AUTO_INCREMENT,
 street varchar(32) NOT NULL,
 city varchar(16) NOT NULL,
 state char(2) NOT NULL,
 sq_ft int,
 num_beds int,
 num_baths int,
 PRIMARY KEY(house_ID));




# Load some data into the database
insert into 459db.firsttable (house_ID, street, city, state, sq_ft, num_beds, num_baths) values (01, "33 King St", "Charleston", "SC", 3000, 4, 3);
insert into 459db.firsttable (house_ID, street, city, state, sq_ft, num_beds, num_baths) values (02, "40 Meeting St", "Charleston", "SC", 4000, 5, 4);
insert into 459db.firsttable (house_ID, street, city, state, sq_ft, num_beds, num_baths) values (03, "13 Tradd St", "Charleston", "SC", 3500, 3, 4);
