### To create Database:

CREATE DATABASE databaseName;
e.g.

CREATE DATABASE tms;

### To create table
CREATE TABLE users (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  address varchar(100) NOT NULL,
  phone varchar(20) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(255) NOT NULL
)


