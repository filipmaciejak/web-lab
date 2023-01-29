CREATE TABLE users (
    ID SERIAL NOT NULL, 
    name varchar(255) NOT NULL,
    surname varchar(255) NOT NULL,
    pesel varchar(11) NOT NULL,
    date_of_birth date,
    gender varchar(1),
    email varchar(255) NOT NULL,
    phone_number varchar(255),
    role varchar(255) NOT NULL,
    login varchar(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    PRIMARY KEY (ID));

CREATE TABLE productcategories (
    ID SERIAL NOT NULL, 
    name varchar(255) NOT NULL UNIQUE,
    PRIMARY KEY (ID));

CREATE TABLE products (
    ID SERIAL NOT NULL, 
    productcategoryID integer NOT NULL REFERENCES productcategories,
    name varchar(255) NOT NULL,
    weight float4,
    price float4 NOT NULL,
    code varchar(255) NOT NULL,
    PRIMARY KEY (ID));

CREATE TABLE baskets (
    ID SERIAL NOT NULL, 
    userID integer NOT NULL REFERENCES users,
    PRIMARY KEY (ID));

CREATE TABLE baskets_products (
    basketID integer NOT NULL REFERENCES baskets,
    productID integer NOT NULL REFERENCES products,
    PRIMARY KEY (basketID, productID));
