<!-- Create databse -->
CREATE DATABASE classwork;

<!-- create table -->
CREATE TABLE user(id int(11) PRIMARY KEY NOT NULL AUTO_INCMENT,
                        fullname varchar(225),
                        address varchar(225),
                        email varchar(225)
                        password varchar(225),
                        user_role varchar(12));