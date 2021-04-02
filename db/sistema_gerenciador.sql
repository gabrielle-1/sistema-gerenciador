create database sistemaGerenciador;
use sistemaGerenciador;

CREATE TABLE `sistemagerenciador`.`estudante` (
  `codigo_estudante` INT(3) NOT NULL auto_increment,
  `nome_estudante` VARCHAR(70) NOT NULL,
  `cpf_estudante` VARCHAR(12) NOT NULL,
  `data_nascimento_estudante` DATE NOT NULL,
  `codigo_disciplina_estudante` INT(3) NOT NULL ,
  CONSTRAINT codigo_disciplina_estudante FOREIGN KEY (codigo_disciplina_estudante) REFERENCES disciplina_estudante (codigo_disciplina_estudante),
  PRIMARY KEY  (codigo_estudante)
);

CREATE TABLE `sistemagerenciador`.`professor` (
  `codigo_professor` INT(3) NOT NULL auto_increment,
  `nome_professor` VARCHAR(70) NOT NULL,
  `cpf_professor` VARCHAR(12) NOT NULL,
  `data_nascimento_professor` DATE NOT NULL,
  PRIMARY KEY  (codigo_professor)
);

CREATE TABLE `sistemagerenciador`.`disciplina` (
  codigo INT(3) NOT NULL auto_increment,
  nome VARCHAR(70) NOT NULL,
  codigo_professor INT(3) NOT NULL,
  codigo_estudante INT(3) NOT NULL,
  PRIMARY KEY (codigo),
  CONSTRAINT codigo_professor FOREIGN KEY (codigo_professor) REFERENCES professor (codigo),
  CONSTRAINT codigo_estudante FOREIGN KEY (codigo_estudante) REFERENCES estudante (codigo)
);

CREATE TABLE `sistemagerenciador`.`disciplina_estudante` ( 
 `codigo_disciplina_estudante` INT(3) NOT NULL,
 `codigo_disciplina` INT(3) NOT NULL,
 `codigo_estudante` INT(3) NOT NULL , 
 PRIMARY KEY (codigo_disciplina_estudante),
 CONSTRAINT codigo_disciplina FOREIGN KEY (codigo_disciplina) REFERENCES disciplina (codigo),
 CONSTRAINT codigo_estudante FOREIGN KEY (codigo_estudante) REFERENCES estudante (codigo_estudante)
 );

 -- INSERINDO DADOS NO BANCO
INSERT INTO `disciplina` (`codigo`, `nome`, `codigo_professor`, `codigo_estudante`)
VALUES ('1', 'Lógica de Programação', '1', '1'), 
('2', 'Banco de Dados', '2', '1'), 
('3', 'Desenho Instrumental e Vetorial', '3', '1'), 
('4', 'Programação I', '4', '2'), 
('5', 'Inteligência Artificial', '5', '3'), 
('6', 'Lógica Matemática', '6', '2');

INSERT INTO `disciplina_estudante` (`codigo_disciplina_estudante`, `codigo_disciplina`, `codigo_estudante`) 
VALUES ('1', '1', '1'), 
('2', '2', '1'), 
('3', '3', '1'), 
('4', '4', '2'), 
('5', '5', '3'), 
('6', '6', '2');

INSERT INTO `estudante` (`codigo_estudante`, `nome_estudante`, `cpf_estudante`, `data_nascimento_estudante`, `codigo_disciplina_estudante`) 
VALUES ('1', 'André Luis de Barros', '41456555454', '2001/01/23', '1'), 
('2', 'Luzivania Soares', '74475748750', '1998/03/21', '2'), 
('3', 'Letícia dos Santos', '44548476548', '2002/06/08', '3');

INSERT INTO `professor` (`codigo_professor`, `nome_professor`, `cpf_professor`, `data_nascimento_professor`) 
VALUES ('1', 'Luiz Carlos', '45444542454', '1975/03/05'), 
('2', 'Lurdes Medeiros', '65322641423', '1899/06/21'), 
('3', 'Gabriel Fernandes', '56487898789', '1993/07/04'), 
('4', 'Michelle Matos', '48798787898', '1989/08/09'), 
('5', 'Fernando Fontanella', '12332354523', '1984/06/07'), 
('6', 'Fabiana Câmara', '16598897849', '1980/09/15');





