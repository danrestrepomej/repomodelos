CREATE TABLE profesores(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
	cedula INT(5) NOT NULL,
	nombre VARCHAR(255) NOT NULL
);

INSERT INTO profesores VALUES (1001, 'Daniel');
INSERT INTO profesores VALUES (1002, 'Hilda');