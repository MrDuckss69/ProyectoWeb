create database Operadora_Turistica;

use Operadora_Turistica;

CREATE TABLE Empleado (
    Id_Empleado INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Apellido VARCHAR(45),
    Tipo VARCHAR(45),
    Fecha_Nacimiento DATE,
    CURP VARCHAR(45),
    Genero VARCHAR(45),
    Telefono VARCHAR(45),
    Correo VARCHAR(45)
);

CREATE TABLE Cliente (
    Id_Cliente INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Apellido VARCHAR(45),
    Telefono VARCHAR(45),
    Correo VARCHAR(45),
    CURP VARCHAR(45)
);

CREATE TABLE Chat (
    Id_Chat INT AUTO_INCREMENT PRIMARY KEY,
    Id_Cliente INT,
    Id_Empleado INT,
    Id_Mensaje INT,
    Contenido VARCHAR(150),
    Fecha_Hora DATETIME,
    FOREIGN KEY (Id_Cliente) REFERENCES Cliente(Id_Cliente),
    FOREIGN KEY (Id_Empleado) REFERENCES Empleado(Id_Empleado)
);

CREATE TABLE TipoServicios (
    Id_TipoServicios INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45)
);

CREATE TABLE Servicios (
    Id_Servicios INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Descripcion VARCHAR(45),
    Id_TipoServicios INT,
    Costo DECIMAL(10, 2),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios)
);

CREATE TABLE Paquete (
    Id_Paquete INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Costo DECIMAL(10, 2)
);

CREATE TABLE DetallePaquete (
    Id_DetallePaquete INT AUTO_INCREMENT PRIMARY KEY,
    Id_Paquete INT,
    Id_Servicios INT,
    Id_TipoServicios INT,
    Hora_Salida TIME,
    Hora_Llegada TIME,
    Fecha DATE,
    Cupo INT,
    FOREIGN KEY (Id_Paquete) REFERENCES Paquete(Id_Paquete),
    FOREIGN KEY (Id_Servicios) REFERENCES Servicios(Id_Servicios),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios)
);

CREATE TABLE Reserva (
    Id_Reserva INT AUTO_INCREMENT PRIMARY KEY,
    Fecha DATETIME,
    Pasajeros INT,
    Estatus VARCHAR(45),
    Id_Cliente INT,
    Precio DECIMAL(10, 2),
    Id_Servicios INT,
    Id_TipoServicios INT,
    Id_Paquete INT,
    FOREIGN KEY (Id_Cliente) REFERENCES Cliente(Id_Cliente),
    FOREIGN KEY (Id_Servicios) REFERENCES Servicios(Id_Servicios),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios),
    FOREIGN KEY (Id_Paquete) REFERENCES Paquete(Id_Paquete)
);

CREATE TABLE Notificaciones (
    Id_Notificaciones INT AUTO_INCREMENT PRIMARY KEY,
    Aviso VARCHAR(50),
    Id_Cliente INT,
    Id_DetallePaquete INT,
    Id_Paquete INT,
    Id_Servicios INT,
    Id_TipoServicios INT,
    FOREIGN KEY (Id_Cliente) REFERENCES Cliente(Id_Cliente),
    FOREIGN KEY (Id_DetallePaquete) REFERENCES DetallePaquete(Id_DetallePaquete),
    FOREIGN KEY (Id_Paquete) REFERENCES Paquete(Id_Paquete),
    FOREIGN KEY (Id_Servicios) REFERENCES Servicios(Id_Servicios),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios)
);

-- Insertar registros en la tabla Empleado
INSERT INTO Empleado (Nombre, Apellido, Tipo, Fecha_Nacimiento, CURP, Genero, Telefono, Correo) VALUES
('Juan', 'Perez', 'Administrador', '1985-07-23', 'JUAP850723HDFLNS01', 'Masculino', '5551234567', 'juan.perez@empresa.com'),
('Ana', 'Gonzalez', 'Vendedor', '1990-03-10', 'AANG900310MDFLRS02', 'Femenino', '5559876543', 'ana.gonzalez@empresa.com'),
('Carlos', 'Ramirez', 'Gerente', '1982-01-15', 'CARR820115HDFLNS03', 'Masculino', '5551122334', 'carlos.ramirez@empresa.com'),
('Lucia', 'Martinez', 'Vendedor', '1995-09-05', 'LUMA950905MDFLRS04', 'Femenino', '5556677889', 'lucia.martinez@empresa.com'),
('David', 'Lopez', 'Administrador', '1988-12-22', 'DALO881222HDFLNS05', 'Masculino', '5554455667', 'david.lopez@empresa.com');

-- Insertar registros en la tabla Cliente
INSERT INTO Cliente (Nombre, Apellido, Telefono, Correo, CURP) VALUES
('Mario', 'Sanchez', '5567891234', 'mario.sanchez@cliente.com', 'MASA901225HDFLNS06'),
('Sofia', 'Diaz', '5543210987', 'sofia.diaz@cliente.com', 'SODI950730MDFLRS07'),
('Pedro', 'Mendoza', '5512345678', 'pedro.mendoza@cliente.com', 'PEME870215HDFLNS08'),
('Laura', 'Vega', '5532109876', 'laura.vega@cliente.com', 'LAVE910812MDFLRS09'),
('Miguel', 'Ortiz', '5556789123', 'miguel.ortiz@cliente.com', 'MIOR890314HDFLNS10');

-- Insertar registros en la tabla Chat
INSERT INTO Chat (Id_Cliente, Id_Empleado, Id_Mensaje, Contenido, Fecha_Hora) VALUES
(1, 1, 1, 'Consulta sobre disponibilidad de paquetes', '2024-10-20 10:30:00'),
(2, 2, 2, 'Información sobre precios', '2024-10-20 11:00:00'),
(3, 3, 3, 'Consulta sobre destinos recomendados', '2024-10-20 12:00:00'),
(4, 4, 4, 'Solicitud de cambio de reserva', '2024-10-21 09:30:00'),
(5, 5, 5, 'Consulta de promociones', '2024-10-21 10:45:00');

-- Insertar registros en la tabla TipoServicios
INSERT INTO TipoServicios (Nombre) VALUES
('Transporte'),
('Hospedaje'),
('Alimentación'),
('Excursiones'),
('Guía');

-- Insertar registros en la tabla Servicios
INSERT INTO Servicios (Nombre, Descripcion, Id_TipoServicios, Costo) VALUES
('Transporte Aéreo', 'Vuelo nacional', 1, 200.00),
('Hotel 5 Estrellas', 'Habitación doble', 2, 500.00),
('Buffet Todo Incluido', 'Comida y bebidas', 3, 100.00),
('Tour Ciudad', 'Visita a lugares de interés', 4, 50.00),
('Guía Turístico', 'Guía en español', 5, 75.00);

-- Insertar registros en la tabla Paquete
INSERT INTO Paquete (Nombre, Costo) VALUES
('Paquete Familiar', 1000.00),
('Paquete Romántico', 1200.00),
('Paquete de Aventura', 1500.00),
('Paquete Económico', 800.00),
('Paquete VIP', 2000.00);

-- Insertar registros en la tabla DetallePaquete
INSERT INTO DetallePaquete (Id_Paquete, Id_Servicios, Id_TipoServicios, Hora_Salida, Hora_Llegada, Fecha, Cupo) VALUES
(1, 1, 1, '09:00:00', '11:00:00', '2024-12-01', 20),
(2, 2, 2, '15:00:00', '12:00:00', '2024-12-05', 15),
(3, 3, 3, '12:00:00', '14:00:00', '2024-12-10', 30),
(4, 4, 4, '08:00:00', '10:00:00', '2024-12-15', 25),
(5, 5, 5, '13:00:00', '15:00:00', '2024-12-20', 10);

-- Insertar registros en la tabla Reserva
INSERT INTO Reserva (Fecha, Pasajeros, Estatus, Id_Cliente, Precio, Id_Servicios, Id_TipoServicios, Id_Paquete) VALUES
('2024-10-22 09:00:00', 2, 'Confirmada', 1, 1500.00, 1, 1, 1),
('2024-10-23 14:30:00', 4, 'Pendiente', 2, 2500.00, 2, 2, 2),
('2024-10-24 16:00:00', 1, 'Cancelada', 3, 1000.00, 3, 3, 3),
('2024-10-25 10:30:00', 3, 'Confirmada', 4, 1800.00, 4, 4, 4),
('2024-10-26 08:00:00', 5, 'Pendiente', 5, 3000.00, 5, 5, 5);

-- Insertar registros en la tabla Notificaciones
INSERT INTO Notificaciones (Aviso, Id_Cliente, Id_DetallePaquete, Id_Paquete, Id_Servicios, Id_TipoServicios) VALUES
('Confirmación de reserva', 1, 1, 1, 1, 1),
('Actualización de itinerario', 2, 2, 2, 2, 2),
('Promoción disponible', 3, 3, 3, 3, 3),
('Recordatorio de pago', 4, 4, 4, 4, 4),
('Actualización de cupo', 5, 5, 5, 5, 5);

-- Consultar todas las tablas
SELECT * FROM Empleado;
SELECT * FROM Cliente;
SELECT * FROM Chat;
SELECT * FROM TipoServicios;
SELECT * FROM Servicios;
SELECT * FROM Paquete;
SELECT * FROM DetallePaquete;
SELECT * FROM Reserva;
SELECT * FROM Notificaciones;