DROP DATABASE IF EXISTS academia_excelencia;

CREATE DATABASE academia_excelencia
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE academia_excelencia;

CREATE TABLE cursos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100) NOT NULL,

    descripcion TEXT NOT NULL,

    categoria VARCHAR(100) NOT NULL,

    duracion VARCHAR(50) NOT NULL,

    precio DECIMAL(10,2) NOT NULL,

    imagen VARCHAR(255) NOT NULL,

    disponible BOOLEAN DEFAULT TRUE

);

INSERT INTO cursos
(nombre, descripcion, categoria, duracion, precio, imagen, disponible)
VALUES

(
'HTML y CSS',
'Aprenda a crear páginas web modernas y responsivas.',
'Desarrollo Web',
'8 semanas',
95000.00,
'curso-html-css.jpg',
1
),

(
'JavaScript',
'Desarrolle sitios web dinámicos e interactivos.',
'Desarrollo Web',
'10 semanas',
110000.00,
'curso-javascript.jpg',
1
),

(
'Desarrollo Frontend',
'Construya interfaces modernas para aplicaciones web.',
'Desarrollo Web',
'12 semanas',
125000.00,
'curso-frontend.jpg',
1
),

(
'SQL Básico',
'Aprenda consultas SQL y modelado de bases de datos.',
'Bases de Datos',
'6 semanas',
80000.00,
'curso-sql.jpg',
1
),

(
'MySQL Avanzado',
'Optimización y administración profesional de MySQL.',
'Bases de Datos',
'10 semanas',
120000.00,
'curso-mysql.jpg',
1
),

(
'Administración de Bases de Datos',
'Gestione bases de datos empresariales de forma segura.',
'Bases de Datos',
'14 semanas',
145000.00,
'curso-adminbd.jpg',
1
);