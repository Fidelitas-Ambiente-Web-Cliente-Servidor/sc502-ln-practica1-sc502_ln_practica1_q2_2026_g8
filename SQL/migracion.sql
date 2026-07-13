Create table IF NOT EXISTS cursos_destacados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    Precio DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(50) ,
    imagen VARCHAR(255),
    disponible TINYINT(1) DEFAULT 1
    destacado TINYINT(1) DEFAULT 1

);

INSERT INTO cusos_destacados (nombre, descripcion, Precio, categoria, imagen, disponible, destacado) VALUES
('HTML, CSS', 'Aprende a crear sitios web con HTML y CSS', 49.99, 'Desarrollo Web', 'html_css.jpg', 1, 1),
('JavaScript ', 'Domina JavaScript y crea aplicaciones interactivas', 59.99, 'Desarrollo Web', 'javascript_avanzado.jpg', 1, 1),
('Desarrollo frontend', 'Aprende a crear interfaces de usuario modernas y responsivas', 69.99, 'Desarrollo Web', 'frontend.jpg', 1, 1);