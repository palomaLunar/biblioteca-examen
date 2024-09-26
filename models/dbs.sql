-- Active: 1721375362536@@127.0.0.1@3306@tareas-examen
CREATE DATABASE libreria_mvc;

USE libreria_mvc;

CREATE TABLE usuario(
   id_usuario INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR (255) NOT NULL,
   apellido VARCHAR(255) NOT NULL,
   email VARCHAR(255) UNIQUE NOT NULL,
   direccion VARCHAR(255),
  telefono int(15),
  Fecha_inscripcion DATE
);
DROP Table usuario;





 CREATE TABLE libros(
    id_libro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255),
    genero VARCHAR(255) NOT NULL,
    año_publicacion DATE,
    isbn INT(50) NOT NULL,
    cantidad INT(50),
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
)

ALTER TABLE libros MODIFY isbn int;
ALTER TABLE libros MODIFY cantidad int;
ALTER Table libros MODIFY id_usuario int;

CREATE TABLE prestamos(
    id_prestamo INT AUTO_INCREMENT PRIMARY KEY,
    fecha_prestamo DATE,
    fecha_devolucion DATE,
    id_usuario INT NOT NULL,
    Foreign Key (id_usuario) REFERENCES usuario (id_usuario)
)
   





CREATE Table usuario_libros(
   id_usuario_libro INT AUTO_INCREMENT PRIMARY KEY,
   id_usuario int,
   id_libro int,
   Foreign Key (id_usuario) REFERENCES usuario (id_usuario),
   Foreign Key (id_libro) REFERENCES libros (id_libro)
)

drop table usuario_libros;
CREATE Table reserva_libros (
    id_reserva_libro INT AUTO_INCREMENT PRIMARY KEY,
    id_prestamo int,
    id_libro int,
    Foreign Key (id_prestamo) REFERENCES prestamos (id_prestamo),
    Foreign Key (id_libro) REFERENCES libros (id_libro)
)



INSERT INTO
    usuario (
        nombre,
        apellido,
        email,
        direccion,
        telefono,
        fecha_inscripcion
    )
VALUES (
        'Juan',
        'Pérez',
        'juan.perez@example.com',
        'Calle Falsa 123',
        '600123456',
        '2024-01-01'
    ),
    (
        'María',
        'García',
        'maria.garcia@example.com',
        'Avenida Siempre Viva 742',
        '600234567',
        '2024-01-02'
    ),
    (
        'Carlos',
        'López',
        'carlos.lopez@example.com',
        'Calle Luna 456',
        '600345678',
        '2024-01-03'
    ),
    (
        'Ana',
        'Martínez',
        'ana.martinez@example.com',
        'Calle Sol 789',
        '600456789',
        '2024-01-04'
    ),
    (
        'Luis',
        'Rodríguez',
        'luis.rodriguez@example.com',
        'Calle Estrella 101',
        '600567890',
        '2024-01-05'
    ),
    (
        'Laura',
        'Hernández',
        'laura.hernandez@example.com',
        'Calle Nube 202',
        '600678901',
        '2024-01-06'
    ),
    (
        'José',
        'González',
        'jose.gonzalez@example.com',
        'Calle Mar 303',
        '600789012',
        '2024-01-07'
    ),
    (
        'Elena',
        'Sánchez',
        'elena.sanchez@example.com',
        'Calle Río 404',
        '600890123',
        '2024-01-08'
    ),
    (
        'Miguel',
        'Ramírez',
        'miguel.ramirez@example.com',
        'Calle Lago 505',
        '600901234',
        '2024-01-09'
    ),
    (
        'Isabel',
        'Torres',
        'isabel.torres@example.com',
        'Calle Bosque 606',
        '601012345',
        '2024-01-10'
    ),
    (
        'Pedro',
        'Flores',
        'pedro.flores@example.com',
        'Calle Montaña 707',
        '601123456',
        '2024-01-11'
    ),
    (
        'Sofía',
        'Rivera',
        'sofia.rivera@example.com',
        'Calle Valle 808',
        '601234567',
        '2024-01-12'
    ),
    (
        'Javier',
        'Ortiz',
        'javier.ortiz@example.com',
        'Calle Colina 909',
        '601345678',
        '2024-01-13'
    ),
    (
        'Lucía',
        'Morales',
        'lucia.morales@example.com',
        'Calle Prado 1010',
        '601456789',
        '2024-01-14'
    ),
    (
        'Raúl',
        'Jiménez',
        'raul.jimenez@example.com',
        'Calle Jardín 1111',
        '601567890',
        '2024-01-15'
    ),
    (
        'Patricia',
        'Ruiz',
        'patricia.ruiz@example.com',
        'Calle Parque 1212',
        '601678901',
        '2024-01-16'
    ),
    (
        'Fernando',
        'Díaz',
        'fernando.diaz@example.com',
        'Calle Plaza 1313',
        '601789012',
        '2024-01-17'
    ),
    (
        'Marta',
        'Vega',
        'marta.vega@example.com',
        'Calle Camino 1414',
        '601890123',
        '2024-01-18'
    ),
    (
        'Alberto',
        'Castro',
        'alberto.castro@example.com',
        'Calle Sendero 1515',
        '601901234',
        '2024-01-19'
    ),
    (
        'Cristina',
        'Molina',
        'cristina.molina@example.com',
        'Calle Vereda 1616',
        '602012345',
        '2024-01-20'
    ),
    (
        'Ricardo',
        'Silva',
        'ricardo.silva@example.com',
        'Calle Arroyo 1717',
        '602123456',
        '2024-01-21'
    ),
    (
        'Beatriz',
        'Ramos',
        'beatriz.ramos@example.com',
        'Calle Fuente 1818',
        '602234567',
        '2024-01-22'
    ),
    (
        'Andrés',
        'Romero',
        'andres.romero@example.com',
        'Calle Pozo 1919',
        '602345678',
        '2024-01-23'
    ),
    (
        'Rosa',
        'Navarro',
        'rosa.navarro@example.com',
        'Calle Manantial 2020',
        '602456789',
        '2024-01-24'
    ),
    (
        'Manuel',
        'Aguilar',
        'manuel.aguilar@example.com',
        'Calle Cascada 2121',
        '602567890',
        '2024-01-25'
    ),
    (
        'Teresa',
        'Méndez',
        'teresa.mendez@example.com',
        'Calle Roca 2222',
        '602678901',
        '2024-01-26'
    ),
    (
        'Hugo',
        'Cruz',
        'hugo.cruz@example.com',
        'Calle Piedra 2323',
        '602789012',
        '2024-01-27'
    ),
    (
        'Clara',
        'Reyes',
        'clara.reyes@example.com',
        'Calle Arena 2424',
        '602890123',
        '2024-01-28'
    ),
    (
        'Diego',
        'Pena',
        'diego.pena@example.com',
        'Calle Dunas 2525',
        '602901234',
        '2024-01-29'
    ),
    (
        'Natalia',
        'Campos',
        'natalia.campos@example.com',
        'Calle Desierto 2626',
        '603012345',
        '2024-01-30'
    ),
    (
        'Adrián',
        'Soto',
        'adrian.soto@example.com',
        'Calle Oasis 2727',
        '603123456',
        '2024-01-31'
    ),
    (
        'Silvia',
        'Iglesias',
        'silvia.iglesias@example.com',
        'Calle Palmera 2828',
        '603234567',
        '2024-02-01'
    ),
    (
        'Pablo',
        'Núñez',
        'pablo.nunez@example.com',
        'Calle Cactus 2929',
        '603345678',
        '2024-02-02'
    ),
    (
        'Carmen',
        'Lara',
        'carmen.lara@example.com',
        'Calle Flor 3030',
        '603456789',
        '2024-02-03'
    ),
    (
        'Daniel',
        'Serrano',
        'daniel.serrano@example.com',
        'Calle Jardín 3131',
        '603567890',
        '2024-02-04'
    ),
    (
        'Eva',
        'Rojas',
        'eva.rojas@example.com',
        'Calle Bosque 3232',
        '603678901',
        '2024-02-05'
    ),
    (
        'Francisco',
        'Blanco',
        'francisco.blanco@example.com',
        'Calle Selva 3333',
        '603789012',
        '2024-02-06'
    ),
    (
        'Alicia',
        'Mora',
        'alicia.mora@example.com',
        'Calle Jungla 3434',
        '603890123',
        '2024-02-07'
    ),
    (
        'Sergio',
        'León',
        'sergio.leon@example.com',
        'Calle Sabana 3535',
        '603901234',
        '2024-02-08'
    ),
    (
        'Inés',
        'Cabrera',
        'ines.cabrera@example.com',
        'Calle Pradera 3636',
        '604012345',
        '2024-02-09'
    ),
    (
        'Roberto',
        'Herrera',
        'roberto.herrera@example.com',
        'Calle Pasto 3737',
        '604123456',
        '2024-02-10'
    ),
    (
        'Paula',
        'Marín',
        'paula.marin@example.com',
        'Calle Prado 3838',
        '604234567',
        '2024-02-11'
    ),
    (
        'Álvaro',
        'Santos',
        'alvaro.santos@example.com',
        'Calle Campo 3939',
        '604345678',
        '2024-02-12'
    ),
    (
        'Victoria',
        'Fuentes',
        'victoria.fuentes@example.com',
        'Calle Huerta 4040',
        '604456789',
        '2024-02-13'
    ),
    (
        'Jorge',
        'Vargas',
        'jorge.vargas@example.com',
        'Calle Granja 4141',
        '604567890',
        '2024-02-14'
    ),
    (
        'Raquel',
        'Cortés',
        'raquel.cortes@example.com',
        'Calle Rancho 4242',
        '604678901',
        '2024-02-15'
    ),
    (
        'Tomás',
        'Delgado',
        'tomas.delgado@example.com',
        'Calle Hacienda 4343',
        '604789012',
        '2024-02-16'
    ),
    (
        'Lorena',
        'Paredes',
        'lorena.paredes@example.com',
        'Calle Finca 4444',
        '604890123',
        '2024-02-17'
    );

INSERT INTO
    libros (
        titulo,
        autor,
        genero,
        año_publicacion,
        isbn,
        cantidad
    )
VALUES (
        'Cien años de soledad',
        'Gabriel García Márquez',
        'Realismo mágico',
        1967,
        '978-0307474728',
        5
    ),
    (
        'Don Quijote de la Mancha',
        'Miguel de Cervantes',
        'Novela',
        1605,
        '978-0060934347',
        3
    ),
    (
        'La sombra del viento',
        'Carlos Ruiz Zafón',
        'Misterio',
        2001,
        '978-0143126393',
        7
    ),
    (
        'El amor en los tiempos del cólera',
        'Gabriel García Márquez',
        'Romance',
        1985,
        '978-0307389732',
        4
    ),
    (
        '1984',
        'George Orwell',
        'Distopía',
        1949,
        '978-0451524935',
        6
    ),
    (
        'Crónica de una muerte anunciada',
        'Gabriel García Márquez',
        'Novela',
        1981,
        '978-1400034710',
        8
    ),
    (
        'Rayuela',
        'Julio Cortázar',
        'Novela',
        1963,
        '978-0394752846',
        2
    ),
    (
        'El nombre de la rosa',
        'Umberto Eco',
        'Misterio',
        1980,
        '978-0156001311',
        5
    ),
    (
        'La casa de los espíritus',
        'Isabel Allende',
        'Realismo mágico',
        1982,
        '978-0553383805',
        4
    ),
    (
        'Fahrenheit 451',
        'Ray Bradbury',
        'Ciencia ficción',
        1953,
        '978-1451673319',
        6
    );