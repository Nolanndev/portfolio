DROP TABLE IF EXISTS Cars;

CREATE TABLE IF NOT EXISTS Cars (
    id int NOT NULL AUTO_INCREMENT,
    constructor VARCHAR(80) NOT NULL,
    model VARCHAR(80) NOT NULL,
    year YEAR(4) NOT NULL,
    views int,
    PRIMARY KEY(id)
);

INSERT INTO Cars (constructor, model, year, views) VALUES ("peugeot","206","2002", 0);
INSERT INTO Cars (constructor, model, year, views) VALUES ("peugeot","207","2002", 0);
INSERT INTO Cars (constructor, model, year, views) VALUES ("peugeot","307","2002", 0);``

