#Task 2.2
-- drop database if exists weconnect;
use heroku_7c5b6c3bdf49a1f;

#Strong entities

create table  Dev(
DevID int(11) not null primary key AUTO_INCREMENT,
Fname varchar(40) not null,
Lname varchar(40),
Uname varchar(60),
Dev_email varchar(50),
Dev_password varchar(30),
Category varchar(40),
LinkedInUrl varchar(60),
job_experience varchar(300),
skills varchar(80),
Bio varchar(200)

);

create table Customer(
CustomerID int(11) not null primary key,
Fname varchar(60) not null,
Lname varchar(60),
Uname varchar(60),
Customer_email varchar(50),
Customer_password varchar(20) not null

);


create table Administrator(
Admin_ID int(11) not null primary key,
Admin_name text not null, 
Admin_email varchar(50),
Admin_password varchar(30)

);


create table Portfolio(
file_name varchar(30) primary key,
file_new_name varchar(30),
bio varchar(300),
DevID int(11) unique not null,
Category varchar(40),
email varchar (50),
contactNo varchar(50),
LinkedInUrl varchar(60),
objective varchar(50),
skills varchar(80),
job_experience varchar(300),
education varchar(300),
volunteer varchar(300),

foreign key (DevID) references Dev(DevID) on update cascade on delete restrict
);

create table Feedback(
CustomerID int(11) not null,
Feedbackcomment varchar(100) primary key,
DateWritten date

);






















