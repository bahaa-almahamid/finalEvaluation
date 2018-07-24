-- Here is the SQL queris exercise with only SQL queries 

CREATE DATABASE letsJoin;

CREATE TABLE users (
    id INT(3) NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    role INT(3) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB ;


----We set The length of picture VARCHAR in articles up to 200 in case that we hash the picture name and prepare it to go along with the title in case of engine search improvment.
CREATE TABLE articles (
    id INT(3) NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    content LONGTEXT NOT NULL,
    picture VARCHAR(200) NOT NULL,  
    date_publish DATE NOT NULL,
    id_user INT(3) NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES users(id)
) ENGINE=InnoDB ;

--We use JOIN to display different columns from different tables, Thanks to FOREIGN KEY who can link datas from different tables and create a relationship between them 

SELECT title, content, picture, date_publish, firstname, lastname FROM articles INNER JOIN users ON articles.id_user=users.id WHERE articles.id=10;
