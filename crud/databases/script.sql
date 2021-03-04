CREATE DATABASE crud;

use crud;

CREATE TABLE clientes (
  id_cliente int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  identificacion varchar(255) NOT NULL,
  nombre varchar(255) not null,
  telefono varchar(10) not null
);

-- CREATE TABLE compras(
--   id_compra int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
--   id_cliente int(4) NOT NULL,
--   articulo varchar(255),
--   cantidad varchar(255),
--   total varchar(255)
-- );

-- ALTER TABLE clientes ADD FOREIGN KEY (id_cliente) REFERENCES compras(id_cliente);
