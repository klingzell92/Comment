--
-- Creating a User table.
--



--
-- Table User
--
DROP TABLE IF EXISTS User;
CREATE TABLE User (
    "id" INTEGER PRIMARY KEY NOT NULL,
    `acronym` VARCHAR(80) UNIQUE NOT NULL,
    `email` VARCHAR(80) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    "created" TIMESTAMP,
    "updated" DATETIME,
    "deleted" DATETIME,
    "active" DATETIME
);
INSERT INTO User ("id", "acronym", "email", "password") VALUES (1, "doe", "doe@gmail.com", "$2y$10$2kraKnucDXhoicOCm89Ge.KkXNcjMVNUtuFQhldZAkOrZ5CVtCzIe")
