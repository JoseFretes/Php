CREATE DATABASE blogdb;


CREATE TABLE blog(
    ID INT AUTO_INCREMENT;
    nombre varchar(15) NOT NULL;
    mesaje varchar(200)NOT NULL;
    primary key(ID);
)
