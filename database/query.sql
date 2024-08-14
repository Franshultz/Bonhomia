CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

INSERT INTO categorias (nombre) VALUES
('Buzos'),
('Remeras'),
('Pantalones'),
('Shorts');

CREATE TABLE materiales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

INSERT INTO materiales (nombre) VALUES
('Algodón'),
('Poliester'),
('Lana'),
('Denim'),
('Lino'),
('Nylon'),
('Cuero');

CREATE TABLE colores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

INSERT INTO colores (nombre) VALUES
('Rojo'),
('Azul'),
('Verde'),
('Negro'),
('Blanco'),
('Amarillo'),
('Gris'),
('Marrón');

CREATE TABLE tallas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(10) NOT NULL
);

INSERT INTO tallas (nombre) VALUES
('S'),
('M'),
('L'),
('XL');

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    descripcion TEXT,
    foto VARCHAR(255),
    foto2 VARCHAR(255),
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    categoria_id INT,
    material_id INT,
    color_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id),
    FOREIGN KEY (material_id) REFERENCES materiales(id),
    FOREIGN KEY (color_id) REFERENCES colores(id)
);

INSERT INTO productos (nombre, precio, descripcion, foto, foto2, fecha_creacion, categoria_id, material_id, color_id)
VALUES
('Ilusion', 29.99, 'Descripción del producto Ilusion', '1723603113.jpg', '1723603113_2.jpg', NOW(), 1, 1, 4),
('Asteroid', 34.99, 'Descripción del producto Asteroid', '1723603155.jpg', '1723603155_2.jpg', NOW(), 1, 2, 2),
('Culture', 39.99, 'Descripción del producto Culture', '1723603167.jpg', '1723603168_2.jpg', NOW(), 1, 3, 3),
('Starlight', 24.99, 'Descripción del producto Starlight', '1723603182.jpg', '1723603182_2.jpg', NOW(), 1, 1, 5),
('Faded', 32.99, 'Descripción del producto Faded', '1723603196.jpg', '1723603196_2.jpg', NOW(), 1, 1, 7),
('Air', 36.99, 'Descripción del producto Air', '1723603207.jpg', '1723603207_2.jpg', NOW(), 1, 2, 1);

-- Remeras
('Remera básica', 14.99, 'Remera básica de algodón, cómoda para el uso diario.', 'remera_basica.jpg', NOW(), 2, 1, 5),
('Remera deportiva', 19.99, 'Remera deportiva de poliester, ideal para el gimnasio.', 'remera_deportiva.jpg', NOW(), 2, 2, 4),
('Remera estampada', 21.99, 'Remera con estampado gráfico atractivo.', 'remera_estampada.jpg', NOW(), 2, 1, 1),
('Remera sin mangas', 18.99, 'Remera sin mangas, perfecta para el verano.', 'remera_sin_mangas.jpg', NOW(), 2, 1, 6),

-- Pantalones
('Pantalón jeans', 49.99, 'Pantalón de denim clásico, versátil y duradero.', 'pantalon_jeans.jpg', NOW(), 3, 5, 7),
('Pantalón cargo', 39.99, 'Pantalón cargo con múltiples bolsillos, ideal para actividades al aire libre.', 'pantalon_cargo.jpg', NOW(), 3, 1, 8),
('Pantalón deportivo', 29.99, 'Pantalón deportivo de poliester, cómodo y flexible.', 'pantalon_deportivo.jpg', NOW(), 3, 2, 3),

-- Shorts
('Short de playa', 24.99, 'Short ideal para la playa, ligero y cómodo.', 'short_playa.jpg', NOW(), 4, 2, 6),
('Short deportivo', 19.99, 'Short deportivo cómodo, adecuado para actividades físicas.', 'short_deportivo.jpg', NOW(), 4, 2, 2);

CREATE TABLE stock (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto_id INT,
    cantidad INT NOT NULL,
    talla_id INT,
    FOREIGN KEY (producto_id) REFERENCES productos(id),
    FOREIGN KEY (talla_id) REFERENCES tallas(id)
);

INSERT INTO stock (producto_id, cantidad, talla_id) VALUES
-- Buzos
(1, 50, 1), -- Buzo con capucha, talla S
(1, 40, 2), -- Buzo con capucha, talla M
(1, 30, 3), -- Buzo con capucha, talla L
(1, 20, 4), -- Buzo con capucha, talla XL
(2, 60, 1), -- Buzo deportivo, talla S
(2, 55, 2), -- Buzo deportivo, talla M
(2, 45, 3), -- Buzo deportivo, talla L
(2, 35, 4), -- Buzo deportivo, talla XL
(3, 40, 1), -- Buzo de lana, talla S
(3, 35, 2), -- Buzo de lana, talla M
(3, 30, 3), -- Buzo de lana, talla L
(3, 25, 4), -- Buzo de lana, talla XL
(4, 50, 1), -- Buzo básico, talla S
(4, 45, 2), -- Buzo básico, talla M
(4, 40, 3), -- Buzo básico, talla L
(4, 30, 4), -- Buzo básico, talla XL
(5, 55, 1), -- Buzo con estampado, talla S
(5, 50, 2), -- Buzo con estampado, talla M
(5, 45, 3), -- Buzo con estampado, talla L
(5, 35, 4), -- Buzo con estampado, talla XL
(6, 45, 1), -- Buzo de cremallera, talla S
(6, 40, 2), -- Buzo de cremallera, talla M
(6, 35, 3), -- Buzo de cremallera, talla L
(6, 30, 4), -- Buzo de cremallera, talla XL

-- Remeras
(7, 70, 1), -- Remera básica, talla S
(7, 65, 2), -- Remera básica, talla M
(7, 55, 3), -- Remera básica, talla L
(7, 50, 4), -- Remera básica, talla XL
(8, 60, 1), -- Remera deportiva, talla S
(8, 50, 2), -- Remera deportiva, talla M
(8, 45, 3), -- Remera deportiva, talla L
(8, 40, 4), -- Remera deportiva, talla XL
(9, 55, 1), -- Remera estampada, talla S
(9, 50, 2), -- Remera estampada, talla M
(9, 45, 3), -- Remera estampada, talla L
(9, 35, 4), -- Remera estampada, talla XL
(10, 65, 1), -- Remera sin mangas, talla S
(10, 60, 2), -- Remera sin mangas, talla M
(10, 50, 3), -- Remera sin mangas, talla L
(10, 45, 4), -- Remera sin mangas, talla XL

-- Pantalones
(11, 40, 1), -- Pantalón jeans, talla S
(11, 35, 2), -- Pantalón jeans, talla M
(11, 30, 3), -- Pantalón jeans, talla L
(11, 25, 4), -- Pantalón jeans, talla XL
(12, 30, 1), -- Pantalón cargo, talla S
(12, 25, 2), -- Pantalón cargo, talla M
(12, 20, 3), -- Pantalón cargo, talla L
(12, 15, 4), -- Pantalón cargo, talla XL
(13, 35, 1), -- Pantalón deportivo, talla S
(13, 30, 2), -- Pantalón deportivo, talla M
(13, 25, 3), -- Pantalón deportivo, talla L
(13, 20, 4), -- Pantalón deportivo, talla XL

-- Shorts
(14, 50, 1), -- Short de playa, talla S
(14, 45, 2), -- Short de playa, talla M
(14, 40, 3), -- Short de playa, talla L
(14, 35, 4), -- Short de playa, talla XL
(15, 45, 1), -- Short deportivo, talla S
(15, 40, 2), -- Short deportivo, talla M
(15, 35, 3), -- Short deportivo, talla L
(15, 30, 4); -- Short deportivo, talla XL

CREATE TABLE descuentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto_id INT,
    porcentaje DECIMAL(5,2) NOT NULL,
    fecha_inicio DATETIME,
    fecha_fin DATETIME,
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);

INSERT INTO descuentos (producto_id, porcentaje, fecha_inicio, fecha_fin) VALUES
-- Descuentos para Buzos
(1, 10.00, '2024-08-01 00:00:00', '2024-08-31 23:59:59'), -- Buzo con capucha, 10% descuento
(2, 15.00, '2024-08-05 00:00:00', '2024-09-05 23:59:59'), -- Buzo deportivo, 15% descuento
(3, 20.00, '2024-08-10 00:00:00', '2024-09-10 23:59:59'), -- Buzo de lana, 20% descuento
(4, 5.00, '2024-08-15 00:00:00', '2024-08-30 23:59:59'), -- Buzo básico, 5% descuento
(5, 25.00, '2024-08-20 00:00:00', '2024-09-20 23:59:59'), -- Buzo con estampado, 25% descuento
(6, 10.00, '2024-08-25 00:00:00', '2024-09-25 23:59:59'), -- Buzo de cremallera, 10% descuento

-- Descuentos para Remeras
(7, 10.00, '2024-08-01 00:00:00', '2024-08-15 23:59:59'), -- Remera básica, 10% descuento
(8, 12.00, '2024-08-05 00:00:00', '2024-08-20 23:59:59'), -- Remera deportiva, 12% descuento
(9, 15.00, '2024-08-10 00:00:00', '2024-08-30 23:59:59'), -- Remera estampada, 15% descuento
(10, 8.00, '2024-08-15 00:00:00', '2024-09-15 23:59:59'), -- Remera sin mangas, 8% descuento

-- Descuentos para Pantalones
(11, 20.00, '2024-08-01 00:00:00', '2024-08-31 23:59:59'), -- Pantalón jeans, 20% descuento
(12, 15.00, '2024-08-10 00:00:00', '2024-09-10 23:59:59'), -- Pantalón cargo, 15% descuento
(13, 18.00, '2024-08-15 00:00:00', '2024-09-15 23:59:59'); -- Pantalón deportivo, 18% descuento

-- Descuentos para Shorts
(14, 10.00, '2024-08-01 00:00:00', '2024-08-31 23:59:59'), -- Short de playa, 10% descuento
(15, 12.00, '2024-08-10 00:00:00', '2024-09-10 23:59:59'); -- Short deportivo, 12% descuento