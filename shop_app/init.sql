CREATE TABLE "Users" (
    ID SERIAL NOT NULL, 
    Name varchar(255) NOT NULL, 
    Surname varchar(255) NOT NULL, 
    Pesel varchar(11) NOT NULL, 
    "Date_of_birth" date,
    Gender varchar(1), 
    Email varchar(255) NOT NULL, 
    "Phone_number" varchar(255),
    PRIMARY KEY (ID));

CREATE TABLE ProductCategories (
    ID SERIAL NOT NULL, 
    Name varchar(255) NOT NULL UNIQUE, 
    PRIMARY KEY (ID));

CREATE TABLE Products (
    ID SERIAL NOT NULL, 
    ProductCategoryID integer NOT NULL REFERENCES ProductCategories, 
    Name varchar(255) NOT NULL, 
    Weight float4, 
    Price float4 NOT NULL, 
    Code varchar(255) NOT NULL, 
    PRIMARY KEY (ID));

CREATE TABLE Baskets (
    ID SERIAL NOT NULL, 
    UserID integer NOT NULL REFERENCES "Users", 
    PRIMARY KEY (ID));

CREATE TABLE Baskets_Products (
    BasketID integer NOT NULL REFERENCES Baskets, 
    ProductID integer NOT NULL REFERENCES Products, 
    PRIMARY KEY (BasketID, ProductID));
