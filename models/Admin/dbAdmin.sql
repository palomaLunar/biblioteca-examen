create DATABASE libreria_mvc;

USE libreria_mvc;

CREATE TABLE administradores (
    `id` int(11) NOT NULL key AUTO_INCREMENT,
    `admin` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL
);

INSERT INTO
    administradores (`admin`, `password`)
VALUES ('Dayana', 'passDayana'),
    ('David', 'passDavid'),
    ('Sergio', 'passSergio'),
    ('Paloma', 'passPaloma');