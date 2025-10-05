CREATE DATABASE bd_comercial;

USE bd_comercial;

CREATE TABLE db_comecial.cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

mysql -u StivenRamos26 -p < bd_comercial.sql
