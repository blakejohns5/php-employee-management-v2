DROP DATABASE IF EXISTS v2_employees;
CREATE DATABASE IF NOT EXISTS v2_employees;

USE v2_employees;

CREATE TABLE employees (
  id INT(11) UNSIGNED AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  lastName VARCHAR(50),
  email VARCHAR(100) NOT NULL,
  gender VARCHAR(10) NOT NULL,
  age INT(11) NOT NULL,
  streetAddress INT(11),
  city VARCHAR(20),
  state VARCHAR(5),
  postalCode INT(11),
  phoneNumber INT(11) NOT NULL,
  PRIMARY KEY(id)
); 

INSERT INTO employees (id, name, lastName, email, gender, age, streetAddress, city, state, postalCode, phoneNumber) 
VALUES 
  (1, "javier", "garcia", "javier@gmail.com", "M", 32, 122, "Oviedo", "AST", 222333, 674899000),
  (2, "Rack", "Lei", "jackon@network.com", "man", 24, "126", "San Jone", "CA", 394221, 7383627627),
  (3, "John", "Doe", "jhondoe@foo.com", "man", 34, "89", "New York", "WA", 09889, 1283645645),  
  (4, "Leila", "Mills", "mills@leila.com", "woman", 29, "55", "San Diego", "CA", 098765, 9983632461),
  (5, "Richard", "Desmond", "dismond@foo.com", "man", 30, "90", "Salt lake city", "UT", 457320, 90876987654), 
  (6, "Susan", "Smith", "susanmith@baz.com", "woman", 28, "43", "Louisville", "KNT", 445321, 224355488976),
  (7, "Brad", "Simpson", "brad@foo.com", "man", 40, "128", "Atlanta", "GEO", 394221, 6854634522),
  (8, "Neil", "Walker", "walkerneil@baz.com", "man", 42, "1", "Nashville", "TN", 90143, 45372788192),
  (9, "Robert", "Thomson", "jackon@network.com", "man", 24, "126", "New Orleans", "LU", 63281, 91232876454);


CREATE TABLE users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL
); 

INSERT INTO users (name, password, email)
VALUES
("admin", "$2y$10$nuh1LEwFt7Q2/wz9/CmTJO91stTBS4cRjiJYBY3sVCARnllI.wzBC", "admin@assemblerschool.com");

