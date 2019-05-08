CREATE DATABASE crud_php;

USE crud_php;

CREATE TABLE ws_user(
id_user INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(40)NOT NULL,
email VARCHAR(40),
login VARCHAR(80),
ativo INTEGER(1)DEFAULT 1,
senha VARCHAR(80),
create_at DATETIME DEFAULT NOW()
);

SELECT * FROM ws_user;

INSERT INTO ws_user(nome,email,login,senha)VALUES('carlos','carlos@email.com','carlos.admin',md5('123456')),('lucas','lucas@email.com','lucas.admin',md5('123456'));