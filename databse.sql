create database users;
use users;
create table users(userid INT primary key auto_increment,name VARCHAR(255),Email_address VARCHAR(255) UNIQUE, Password VARCHAR(255));