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