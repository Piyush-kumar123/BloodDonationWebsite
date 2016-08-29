create database interchange;
use interchange;
create table siteuser
(
username varchar(30) primary key,
pwd varchar(20),
firstname varchar(10),
lastname varchar(20),
dob date,
gender varchar(6),
email varchar(30),
contact  varchar(10),
hintq  varchar(250),
hinta  varchar(50),
role  varchar(10),
active  varchar(3)
);

insert into siteuser values ('admin','123','atma','ram','1990-1-21','male','atma@ram.com','1212112','naam','ram','admin','yes');