CREATE DATABASE foro;
USE foro;


CREATE TABLE usuarios (
       id_usuario int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       nombre varchar(50) NOT NULL,
       password varchar(50) NOT NULL,
       email varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE temas (
       id_tema int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       id_usuario int(10) DEFAULT NULL,
       id_comentario int(10) DEFAULT NULL,
       tema varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE comentarios (
       id_comentario int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       id_usuario int(10) DEFAULT NULL,
       id_tema int(10) DEFAULT NULL,
       comentario varchar(500) DEFAULT NULL,
       respuestas varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE temas
    ADD CONSTRAINT fk_usuario_temas FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT fk_comentario_temas FOREIGN KEY (id_comentario) REFERENCES comentarios (id_comentario) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

ALTER TABLE comentarios
    ADD CONSTRAINT fk_comentario_tema FOREIGN KEY (id_tema) REFERENCES temas (id_tema) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT fk_comentario_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario) ON DELETE CASCADE ON UPDATE CASCADE;


INSERT INTO usuarios (id_usuario, password, email) VALUES ('Isabel', '12234', 'isabelcortes@gmail.com');
INSERT INTO usuarios (id_usuario, password, email) VALUES ('Sandra', '2222', 'sandra@hotmail.com');

INSERT INTO temas (tema) VALUES ('Libros');
INSERT INTO temas (tema) VALUES ('Juegos');
INSERT INTO temas (tema) VALUES ('Música');
INSERT INTO temas (tema) VALUES ('Películas');