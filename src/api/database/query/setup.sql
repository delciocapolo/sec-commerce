CREATE DATABASE IF NOT EXISTS mateus_seguranca CHARACTER SET utf8 COLLATE utf8_general_ci;

USE mateus_seguranca;

CREATE TABLE IF NOT EXISTS funcoes (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS permissoes (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS usuarios (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(300) NOT NULL,
    `email` VARCHAR(300) NOT NULL,
    `funcao_id` INT NOT NULL,
    `criado_em` DATETIME DEFAULT(NOW()),
    `atualizado_em` DATETIME DEFAULT(NULL),
    Foreign Key (funcao_id) REFERENCES funcoes (id)
);

CREATE TABLE IF NOT EXISTS funcao_tem_permissoes (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `permissao_id` INT NOT NULL,
    `funcao_id` INT NOT NULL,
    FOREIGN KEY (permissao_id) REFERENCES permissoes (id),
    FOREIGN KEY (funcao_id) REFERENCES funcoes (id)
);

CREATE TABLE IF NOT EXISTS usuario_tem_funcao (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `usuario_id` INT NOT NULL,
    `funcao_id` INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios (id),
    FOREIGN KEY (funcao_id) REFERENCES funcoes (id)
);

CREATE TABLE IF NOT EXISTS produtos (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(300) NOT NULL,
    `price` FLOAT NOT NULL,
    `sale` FLOAT,
    `image_path` TEXT,
    `description` TEXT,
    `criado_em` DATETIME DEFAULT(NOW()),
    `atualizado_em` DATETIME DEFAULT(NULL)
);

CREATE TABLE IF NOT EXISTS produto_avaliacoes (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `produto_id` INT,
    `valor` INT,
    `criado_em` DATETIME DEFAULT(NOW()),
    `atualizado_em` DATETIME DEFAULT(NULL),
    Foreign Key (produto_id) REFERENCES produtos (id)
);

CREATE TABLE IF NOT EXISTS produto_estrelas (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `produto_id` INT,
    `valor` INT,
    `criado_em` DATETIME DEFAULT(NOW()),
    `atualizado_em` DATETIME DEFAULT(NULL),
    Foreign Key (produto_id) REFERENCES produtos (id)
);

CREATE TABLE IF NOT EXISTS carrinho (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(300) NOT NULL,
    `usuario_id` INT NOT NULL,
    `estado` TINYINT DEFAULT(1),
    `criado_em` DATETIME DEFAULT(NOW()),
    `atualizado_em` DATETIME DEFAULT(NULL),
    FOREIGN KEY (usuario_id) REFERENCES usuarios (id)
);

CREATE TABLE IF NOT EXISTS carrinho_tem_produtos (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `cart_id` INT NOT NULL,
    `produto_id` INT NOT NULL,
    `criado_em` DATETIME DEFAULT(NOW()),
    `atualizado_em` DATETIME DEFAULT(NULL)
);