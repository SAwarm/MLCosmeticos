/* Lógico correção sandra: */

CREATE TABLE Cliente (
    cod INTEGER PRIMARY KEY,
    endereco_cod INTEGER,
    nome VARCHAR,
    login VARCHAR,
    senha VARCHAR,
    telefone VARCHAR,
    email VARCHAR
);

CREATE TABLE Endereco (
    cod INTEGER PRIMARY KEY,
    bairro VARCHAR,
    cidade VARCHAR,
    rua VARCHAR,
    numero VARCHAR,
    CEP VARCHAR,
    estado VARCHAR
);

CREATE TABLE Produto (
    cod INTEGER PRIMARY KEY,
    nome VARCHAR,
    descricao VARCHAR,
    preco VARCHAR,
    imagem DOUBLE,
    tamanho DECIMAL,
    cor VARCHAR,
    marca VARCHAR,
    dimensoes INTEGER,
    obs VARCHAR
);

CREATE TABLE Dimensoes (
    cod INTEGER PRIMARY KEY,
    altura DECIMAL,
    largura DECIMAL,
    peso DOUBLE,
    profundidade DECIMAL,
    obs VARCHAR
);

CREATE TABLE Carrinho (
    cod INTEGER PRIMARY KEY,
    cod cliente INTEGER,
    cod produto INTEGER,
    data  DATE,
    hora TIME,
    quantidade INTEGER,
    Campo VARCHAR
);

CREATE TABLE Pedido (
    cod INTEGER,
    forma pagto INTEGER,
    frete VARCHAR,
    hora TIME,
    data DATE,
    data_entrega DATE,
    cod carrinho INTEGER,
    obs VARCHAR,
    PRIMARY KEY (cod, cod carrinho)
);

CREATE TABLE Forma de Pagamento (
    cod INTEGER PRIMARY KEY,
    obs VARCHAR
);
 
ALTER TABLE Cliente ADD CONSTRAINT FK_Cliente_2
    FOREIGN KEY (endereco_cod???)
    REFERENCES ??? (???);
 
ALTER TABLE Produto ADD CONSTRAINT FK_Produto_2
    FOREIGN KEY (dimensoes)
    REFERENCES Dimensoes (cod);
 
ALTER TABLE Produto ADD CONSTRAINT FK_Produto_3
    FOREIGN KEY (cod???)
    REFERENCES ??? (???);
 
ALTER TABLE Carrinho ADD CONSTRAINT FK_Carrinho_1
    FOREIGN KEY (cod cliente)
    REFERENCES Cliente (cod);
 
ALTER TABLE Carrinho ADD CONSTRAINT FK_Carrinho_3
    FOREIGN KEY (cod produto)
    REFERENCES Produto (cod);
 
ALTER TABLE Pedido ADD CONSTRAINT FK_Pedido_2
    FOREIGN KEY (cod carrinho)
    REFERENCES Carrinho (cod);
 
ALTER TABLE Pedido ADD CONSTRAINT FK_Pedido_3
    FOREIGN KEY (forma pagto)
    REFERENCES Forma de Pagamento (cod);