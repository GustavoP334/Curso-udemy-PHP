USE dbphp7;

CREATE TABLE tb_usuarios(
idusuarios INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
desloguin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios (desloguin, dessenha) VALUES('root', '!@#$%');

select * from tb_usuarios;

UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuarios=1;

DELETE from tb_usuarios WHERE idusuarios=1;

TRUNCATE TABLE tb_usuarios;

