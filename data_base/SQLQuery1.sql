USE db_travel_agency;

DROP TABLE IF EXISTS cities;

DROP TABLE IF EXISTS countries;

DROP TABLE IF EXISTS trips;

DROP TABLE IF EXISTS themes;

DROP TABLE IF EXISTS benefits;

DROP TABLE IF EXISTS clients;

DROP TABLE IF EXISTS sales_people;





CREATE TABLE countries(
country_code INT PRIMARY KEY IDENTITY(1,1),
country_name VARCHAR(128) NOT NULL,
);





CREATE TABLE cities(
city_code INT PRIMARY KEY IDENTITY (1,1),
city_name VARCHAR(128) NOT NULL,
country_code INT FOREIGN KEY REFERENCES countries (country_code)
);





CREATE TABLE trips(
trip_code INT PRIMARY KEY IDENTITY (1,1),
trip_title VARCHAR(128) NOT NULL,
trip_available INT NOT NULL,
trip_start DATETIME NOT NULL,
trip_end DATETIME NOT NULL,
trip_price DECIMAL (7,2) NOT NULL,
trip_overview TEXT NOT NULL,
trip_description TEXT,
);



CREATE TABLE themes(
theme_code INT PRIMARY KEY IDENTITY (1,1),
theme_name VARCHAR(32) NOT NULL,
theme_description TEXT
);

CREATE TABLE benefits(
benefit_code INT PRIMARY KEY IDENTITY (1,1),
benefit_name VARCHAR (32) NOT NULL,
benefit_description TEXT,
benefit_score TINYINT,
benefit_commentaire VARCHAR (255)
);

CREATE TABLE sales_people(
com_code CHAR (5) PRIMARY KEY,
com_name VARCHAR (64) NOT NULL,
com_password VARCHAR (60) NOT NULL,
com_code_1 CHAR (5) FOREIGN KEY REFERENCES sales_people (com_code)
);



CREATE TABLE clients(
client_id INT PRIMARY KEY IDENTITY (1,1),
client_lastname VARCHAR (32) NOT NULL,
client_firstname VARCHAR (32) NOT NULL,
client_email VARCHAR (128) NOT NULL,
client_phone VARCHAR (16) NOT NULL,
client_added DATE NOT NULL,
client_passeword VARCHAR (60) NOT NULL,
com_code CHAR (5) FOREIGN KEY REFERENCES sales_people (com_code)
);

