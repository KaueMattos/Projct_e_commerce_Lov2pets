create database db_EAD2
default char set utf8
default collate utf8_general_ci;

use db_EAD;

create table tbl_descri
(	
    cd_descri int primary key auto_increment,
    ds_roupa varchar(25) not null    
)
default charset utf8;

create table tbl_marca
(	
    cd_marca int primary key auto_increment,
    nm_marca varchar(45) not null    
)
default charset utf8;

create table tbl_camiseta
(	
    cd_camiseta int primary key auto_increment,
	cd_descri int not null,
    nm_camiseta varchar(70) not null,
    cd_marca int not null,
    tam_camiseta varchar(3) not null,
    vl_preco decimal(6,2) not null,
    qt_estoque int not null,
    ds_camiseta text not null,
    cor_camiseta varchar(20) not null,
    ds_img varchar(255) not null,
    sg_lancamento enum('S','N') not null,
    constraint fk_descri foreign key(cd_descri) references tbl_descri(cd_descri),
    constraint fk_marca foreign key(cd_marca) references tbl_marca(cd_marca)
)  
default charset utf8;

insert into tbl_marca
values(default,'Thunder God Co'),	
(default, 'Kace'),				
(default, 'Ciena'),				
(default, 'Nephew'),				
(default, 'Adidas');

select * from tbl_marca;
select * from tbl_descri;
select * from tbl_camiseta;

 -- inserindo dados
insert into tbl_descri
values(default,'Camiseta de Manga Longa'),
(default, 'Camiseta Regata'),
(default, 'Camiseta Oversized'),
(default, 'Camisa De Botão'),
(default, 'Camisa Manga Curta'),
(default, 'Camiseta Básica');

 -- camiseta oversized
insert into tbl_camiseta
values
(Default,'3','Eagle Index Tee','3','S','199.00','35',
'<p>Confeccionada em Suedine preto 100% algodão 220GSM (alta gramatura) 
na modelagem CIENA®, nossa t-shirt conta com estampa frontal em silk e patch 
“EMPLOYERS ONLY”.</p>','preto','imgEagle Index Tee','S');

insert into tbl_camiseta
values
(Default,'3','Horse Index Tee','3','S','199.00','25',
'<p>Confeccionada em Suedine preto 100% algodão 220GSM (alta gramatura) na modelagem CIENA®, 
nossa t-shirt conta com estampa frontal em silk.
Modelo mede 1,74 e veste M.</p>','preto','imgHorse Index Tee','N'),

(Default,'3','Oversized Beaver Tee','3','S','219.00','10',
'<p>Confeccionada em Suedine preto 100% algodão 220GSM (alta gramatura) 
na modelagem CIENA®, nossa t-shirt conta com estampa frontal/traseira em silk 
puff e patches “LE CIENA FACTORY” & “EMPLOYERS ONLY” em sua frente.</p>',
'preto','imgOversized Beaver Tee','N'),

(Default,'3','Moça Bonita Tee','3','S','279.00','0',
'<p>Camiseta confeccionada em malha Suedine 220GSM (alta gramatura) na cor branca.
 O modelo é feito com policromia na estampa frontal, serigrafia na estampa traseira 
 e possui patch “CIENA CUP” costurado nas costas.</p>','branco','imgMoça Bonita Tee','N'),

(Default,'3','Camiseta Oversized Preta Thunder God Greca','1','G','199.00','35',
'<p>A Camiseta Oversized Stoned Thunder God Co. é um produto com estética Streetwear e 
acabamento de alta qualidade. Produzida em malha 100% algodão, possui 180g/cm².  Por se 
tratar de um produto Premium, proporciona um toque super macio e confortável. Fabricada 
com a tecnologia LOW-S, a meia-malha é pré-encolhida, garantindo 
a menor variação de medidas após as lavagens.</p>','preto','imgCamiseta Oversized Preta Thunder God Greca','S');

 -- camiseta regata
insert into tbl_camiseta
values
(Default,'2','Regata Canelada Slim Lisa Preta Kace','2','P','109.00','25',
'<p>A Regata Canelada Slim Lisa Preta Kace é confeccionada artesanalmente, 
com tecido minimamente selecionado, excelente acabamento, shape e corte que
 visam estilo, conforto e funcionalidade.</p>','preto','imgRegata Canelada Slim Lisa Preta Kace','N'),
 
 (Default,'2','Regata Básica Lisa Preta Kace','2','P','70.00','25',
'<p>A Regata Básica Lisa Preta Kace é confeccionada artesanalmente, com tecido 
minimamente selecionado, excelente acabamento, shape e corte que visam estilo e conforto.</p>',
'preto','imgRegata Básica Lisa Preta Kace','N'),
 
 (Default,'2','Regata Canelada Slim Lisa Branca Kace','2','M','109.00','25',
'<p>A Regata Canelada Slim Lisa Branca Kace é confeccionada artesanalmente, 
com tecido minimamente selecionado, excelente acabamento, shape e corte que
 visam estilo, conforto e funcionalidade.</p>','branco','imgRegata Canelada Slim Lisa Branca Kace','N');
 
  -- Camiseta de manga longa
insert into tbl_camiseta
values
(Default,'1','Crewneck Ciena Sportclub','3','M','369.00','15',
'<p>Confeccionado em moletom sem felpa na cor branca com recortes em tricot canelado verde (ambos 50% poliéster 50% algodão),
 com modelagem ampla e estampa frontal em silk.</p>','branco','imgCrewneck Ciena Sportclub','S'),
 
 (Default,'1','Moletom Careca Branco Logo Bordada Kace','2','M','293.00','15',
'<p>O Moletom Careca Branco Logo Bordada Kace é confeccionado artesanalmente, com tecidos 
minimamente selecionados, excelente acabamento, shapes e cortes que visam estilo e conforto. 
Barra e Punhos feito em ribana canelada de alta gramatura. Gola grossa e rebatida.</p>',
'branco','imgMoletom Careca Branco Logo Bordada Kace','S'),
 
 (Default,'1','Blusa de Moletom Gola Alta Acrônimo Marrom Kace','2','G','209.00','15',
'<p>A Blusa de Moletom Gola Alta Acrônimo Marrom Kace, também conhecida como High Neck, 
é confeccionada artesanalmente, com matéria prima minimamente selecionada e acabamentos de 
alto padrão. Gola e punhos em ribana confortável. O tecido possui elasticidade, garantindo caimento 
diferenciado.</p>','marrom','imgBlusa de Moletom Gola Alta Acrônimo Marrom Kace','N'),
 
 (Default,'1','Blusa de Moletom Gola Alta Acrônimo Branca Kace','3','S','209.00','15',
'<p>A Blusa de Moletom Gola Alta Acrônimo Branca Kace, também conhecida como High Neck, 
é confeccionada artesanalmente, com matéria prima minimamente selecionada e acabamentos 
de alto padrão. Gola e punhos em ribana confortável. O tecido possui elasticidade, 
garantindo caimento diferenciado.</p>','branco','imgBlusa de Moletom Gola Alta Acrônimo Branca Kace','N');

select * from tbl_camiseta;	

-- Camiseta de botao
insert into tbl_camiseta
values
(Default,'4','Camisa Nephew Fluted Preta','4','M','259.00','15',
'<p>Camisa Nephew Fluted Preta possui texturas com nervuras que cria linhas elevadas ou 
sulcos ao longo da superfície do tecido, dando à roupa um apelo visual único e interessante. 
Seu tecido em moletom canelado proporciona conforto e flexibilidade, além de um caimento incrível 
no corpo. Com um design clássico e elegante, a blusa canelada pode ser usada em diversas ocasiões.</p>',
'preto','imgCamisa Nephew Fluted Preta','N'),

(Default,'4','Camisa Nephew Fluted Off White','4','G','259.00','15',
'<p>Camisa Nephew Fluted Branca possui texturas com nervuras que cria linhas elevadas ou 
sulcos ao longo da superfície do tecido, dando à roupa um apelo visual único e interessante. 
Seu tecido em moletom canelado proporciona conforto e flexibilidade, além de um caimento incrível no corpo. 
Com um design clássico e elegante, a blusa canelada pode ser usada em diversas ocasiões.</p>','branco','imgCamisa Nephew Fluted Off White','S'),

(Default,'4','Camisa Canelada Anticool 23 Preto','4','M','250.00','15',
'<p>Camisa Canelada Anticool 23 Preto</p>','preto','imgCamisa Canelada Anticool 23 Preto','N'),

(Default,'4','Camisa Canelada Anticool 23 Rosa','4','M','250.00','15',
'<p>Camisa Canelada Anticool 23 Rosa</p>','rosa','imgCamisa Canelada Anticool 23 Rosa','S');

-- Camiseta Basica
insert into tbl_camiseta
values
(Default,'6','Camiseta Básica Bolso Zíper ON Inter x Nephew','4','M','99.90','15',
'<p>Camisa básica com detalhe de zíper no bolso.Etiqueta emborrachada na frente.</p>',
'preto','imgCamiseta Básica Bolso Zíper ON Inter x Nephew','N'),

(Default,'6','Camiseta Nephew Clássica Goluda Caramelo','4','M','159.00','15',
'<p>As goludas são as principais camisetas da Nëphëw. Produzidas em malha 100% algodão sustentável
 com uma gramatura muito pesada que dá um caimento perfeito no corpo, porém de trama aberta elas são
 frescas e não esquentam. Modelagem com caimento de ombro e detalhe de etiqueta bordada na manga</p>',
'marrom','imgCamiseta Nephew Clássica Goluda Caramelo','N'),

(Default,'6','Camiseta Nephew Verdinha 23','4','M','129.00','15',
'<p>Nossa camiseta básica, carinhosamente chamada por nós de verdinha. 
Possui gola ribana de 2,5cm na cor preta. Detalhe da etiqueta Nephew na manga.
Tecido de malha 100% algodão</p>',
'verde','imgCamiseta Nephew Verdinha 23','N');


-- Camiseta manga curta
insert into tbl_camiseta
values
(Default,'5','Camiseta Adicolor Classics 3-Stripes','5','M','159.99','0',
'<p>Camiseta Adicolor Classics 3-Stripes</p>',
'branco','imgCamiseta Adicolor Classics 3-Stripes','N'),

(Default,'5','Camiseta Adicolor Classics 3-Stripes','5','M','159.99','15',
'<p>Camiseta Adicolor Classics 3-Stripes</p>',
'azul','imgCamiseta Adicolor Classics 3-Stripesazul','N'),

(Default,'5','Camiseta Adicolor Classics 3-Stripes','5','M','159.99','0',
'<p>Camiseta Adicolor Classics 3-Stripes</p>',
'vermelho','imgCamiseta Adicolor Classics 3-Stripesvermelho','N');

-- Usando comando inner join e criação
create view vw_camisetas
as select
 tbl_camiseta.cd_camiseta,
 tbl_descri.ds_roupa,
 tbl_marca.nm_marca,
 tbl_camiseta.nm_camiseta,
 tbl_camiseta.tam_camiseta,
 tbl_camiseta.vl_preco,
 tbl_camiseta.qt_estoque,
 tbl_camiseta.ds_camiseta,
 tbl_camiseta.cor_camiseta, 
 tbl_camiseta.ds_img,
 tbl_camiseta.sg_lancamento
 
 from tbl_camiseta inner join tbl_marca 
 on tbl_camiseta.cd_marca = tbl_marca.cd_marca
 inner join tbl_descri
 on tbl_camiseta.cd_descri = tbl_descri.cd_descri;
 
CREATE USER 'ead'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
 GRANT ALL PRIVILEGES ON db_ead2.* TO 'ead'@'localhost' WITH GRANT OPTION;
 
 




