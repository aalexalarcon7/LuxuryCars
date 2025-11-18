CREATE DATABASE IF NOT EXISTS luxurycars;
USE luxurycars;

DROP TABLE IF EXISTS compras;
DROP TABLE IF EXISTS autos;
DROP TABLE IF EXISTS usuarios;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE autos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    anio INT NOT NULL,
    precio DECIMAL(12,2) NOT NULL
);

CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    auto_id INT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (auto_id) REFERENCES autos(id)
);

ALTER TABLE compras
ADD COLUMN direccion VARCHAR(255) NULL;

ALTER TABLE compras
ADD COLUMN ciudad_cp VARCHAR(100) NULL;

ALTER TABLE compras
ADD COLUMN notas TEXT NULL;


ALTER TABLE autos
ADD COLUMN imagen VARCHAR(100) NULL;

INSERT INTO autos (marca, modelo, anio, precio, imagen) VALUES
('Aston Martin', 'Vantage', 2023, 300000, 'vantage.jpg'),
('Aston Martin', 'DB11 V8', 2022, 250000, 'db11.jpg'),
('Aston Martin', 'DBX 707', 2023, 310000, 'dbx707.jpg'),

('Bentley', 'Continental GT', 2023, 330000, 'continental.jpg'),
('Bentley', 'Bentayga', 2022, 340000, 'bentayga.jpg'),
('Bentley', 'Flying Spur', 2023, 305000, 'flyingspur.jpg'),

('Ferrari', 'Roma', 2024, 270000, 'roma.jpg'),
('Ferrari', 'SF90 Stradale', 2023, 520000, 'sf90.jpg'), 
('Lamborghini', 'Aventador Ultimae', 2022, 500000, 'aventador.jpg'), 
('Lamborghini', 'Urus', 2024, 260000, 'urus.jpg'), 
('Porsche', '911 Turbo S', 2023, 230000, '911turbo.jpg'), 
('Mercedes-AMG', 'G 63 AMG', 2024, 180000, 'gwagon.jpg'), 
('Rolls-Royce', 'Cullinan', 2024, 370000, 'cullinan.jpg'); 

ALTER TABLE autos ADD COLUMN nombre_imagen VARCHAR(255) NOT NULL DEFAULT 'default.jpg';

SET SQL_SAFE_UPDATES = 0;

-- Ferrari SF90 Stradale
UPDATE autos SET nombre_imagen = 'sf90.jpg' WHERE modelo = 'SF90 Stradale';

-- Lamborghini Urus 
UPDATE autos SET nombre_imagen = 'urus.jpg' WHERE modelo = 'Urus';

-- Aston Martin DB11 
UPDATE autos SET nombre_imagen = 'db11.jpg' WHERE modelo LIKE 'DB11%'; -- Usar LIKE por si tiene 'V8' o 'Volante'

-- Rolls-Royce Cullinan 
UPDATE autos SET nombre_imagen = 'cullinan.jpg' WHERE modelo = 'Cullinan';

-- Lamborghini Aventador 
UPDATE autos SET nombre_imagen = 'aventador.jpg' WHERE modelo = 'Aventador Ultimae';

-- Bentley Continental GT 
UPDATE autos SET nombre_imagen = 'continental.jpg' WHERE modelo = 'Continental GT';

-- Porsche 911 Turbo 
UPDATE autos SET nombre_imagen = '911turbo.jpg' WHERE modelo LIKE '911 Turbo%';

-- Mercedes-AMG G 63 
UPDATE autos SET nombre_imagen = 'gwagon.jpg' WHERE modelo LIKE 'G 63%';

-- Bentley Bentayga 
UPDATE autos SET nombre_imagen = 'bentayga.jpg' WHERE modelo = 'Bentayga';

-- Bentley Continental GT 
UPDATE autos SET nombre_imagen = 'continental.jpg' WHERE modelo = 'Continental GT';

-- Aston Martin DBX707 
UPDATE autos SET nombre_imagen = 'dbx707.jpg' WHERE modelo = 'DBX707';

-- Bentley Flying Spur 
UPDATE autos SET nombre_imagen = 'flyingspur.jpg' WHERE modelo = 'Flying Spur';

-- Bugatti 
UPDATE autos SET nombre_imagen = 'hero.jpg' WHERE marca = 'Bugatti'; 

-- Ferrari Roma 
UPDATE autos SET nombre_imagen = 'roma.jpg' WHERE modelo = 'Roma';

-- Aston Martin Vantage 
UPDATE autos SET nombre_imagen = 'vantage.jpg' WHERE modelo = 'Vantage';

SET SQL_SAFE_UPDATES = 1;

ALTER TABLE autos ADD COLUMN stock INT NOT NULL DEFAULT 1;

ALTER TABLE compras ADD COLUMN direccion_envio VARCHAR(255) NOT NULL;

ALTER TABLE compras ADD COLUMN metodo_pago VARCHAR(50) NOT NULL;

ALTER TABLE compras ADD COLUMN fecha_compra TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;