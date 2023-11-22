CREATE DATABASE adocao_animais;
USE adocao_animais;

create table cachorros
(id int key,
nome varchar (50), 
descricao varchar(200),
 nome_arqcachorros varchar(100),
 ext_arq varchar(5));



INSERT INTO cachorros VALUES
    ('1', 'Cachorro Fofo', 'Esse é um cachorro muito fofo e brincalhão.', 'cachorro_fofo', 'jpg'),
    ('2', 'Cachorro Amigável', 'Um cachorro amigável e adora brincar com crianças.', 'cachorro_amigo', 'jpg'),
    ('3', 'Cachorro Filhote', 'Esse é um cachorro muito manhoso, adora carinho e brincar.', 'cachorro_filhote', 'jpg');
