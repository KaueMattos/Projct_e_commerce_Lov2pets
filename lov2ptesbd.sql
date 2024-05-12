create database bdLov2pets
default char set utf8
default collate utf8_general_ci;

use bdLov2pets;

 -- create table tbl_descri
-- (	
--  cd_descri int primary key auto_increment,
--  ds_Racao varchar(25) not null    
-- )
-- default charset utf8;

create table tbl_marca
(	
    cd_marca int primary key auto_increment,
    nm_marca varchar(45) not null    
)
default charset utf8;

create table tbl_Racao
(	
    cd_Racao int primary key auto_increment,
    nm_Racao varchar(70) not null,
    cd_marca int not null,
    
    vl_preco decimal(6,2) not null,
    qt_estoque int not null,
    ds_Racao text not null,
    
    ds_img varchar(255) not null,
    sg_lancamento enum('S','N') not null,

    constraint fk_marca foreign key(cd_marca) references tbl_marca(cd_marca)
)  
default charset utf8;

insert into tbl_marca
values(default,'Gran Plus'),	
(default, 'Whiskas'),				
(default, 'Golden'),				
(default, 'Premier'),				
(default, 'Joy');

-- insert into tbl_descri
-- values(default,'Camiseta de Manga Longa'),
-- (default, 'Camiseta Regata'),
-- (default, 'Camiseta Oversized'),
-- (default, 'Camisa De Botão'),
-- (default, 'Camisa Manga Curta'),
-- (default, 'Camiseta Básica');

insert into tbl_Racao
values
(Default,
'Ração GranPlus Choice Cães Adultos Frango e Carne 10,1 kg',
'1',
'109.90',
'35',
'<p>A Ração GranPlus Choice Frango e Carne Cães Adultos possui uma fórmula que foi 
especialmente desenvolvida para atender aos paladares mais exigentes, na nutrição e ajudar a manter a saúde de seu cão em dia. Saiba mais!</p>',
'Choice_Frango_e_Carne_Caes_Adultos_Frente',
'S');

insert into tbl_Racao
values
(Default,
'Ração Úmida GranPlus Gourmet Gatos Castrados Salmão e Frango 85 g',
'1',
'3.09',
'15',
'<p>O processo de castração traz hábitos novos para os gatos e precisam de uma alimentação que seja adequada a suas características especiais.
 A Ração Úmida GranPlus Gourmet Gatos Castrados Salmão e Frango é um alimento High Premium 100% completo e balanceado.
</p>',
'alimento_umido_gran_plus_gourmet_gatos_salmao_e_frango-frente',
'S');

insert into tbl_Racao
values
(Default,
'Ração GranPlus Gourmet Cães Adultos Médio e Grande Ovelha e Arroz 3kg',
'1',
'55.98',
'30',
'<p>A ração GranPlus Gourmet para cães adultos de porte médio e grande é ideal para o tutor preocupado em oferecer uma 
alimentação saudável ao pet. Com sabor de ovelha e arroz, a ração se destaca por não ter ingredientes transgênicos, corantes 
e aromas artificiais em sua fórmula.
</p>',
'Gourmet_Caes_Adultos_Medio_e_Grande_Ovelha_e_Arroz_Frente',
'N');

insert into tbl_Racao
values
(Default,
'Ração GranPlus Choice Gatos Adultos Frango e Carne 10,1 kg',
'1',
'133.11',
'25',
'<p>A Ração GranPlus Choice Gatos é um alimento Super Premium, desenvolvido com ingredientes nobres,
 rico em proteínas e nutrientes essenciais para manter o seu pet sempre forte e saudável. Saiba mais!
</p>',
'Choice_Gatos_Adultos_Frango_e_Carne_Frente',
'N');

insert into tbl_Racao
values
(Default,
'Ração GranPlus Menu Cães Sênior Portes Médio e Grande Frango e Arroz 3 kg',
'1',
'53.91',
'15',
'<p>A ração GranPlus Sênior porte médio e grande sabor frango e arroz é um alimento Premium Especial perfeito para o seu pet. Só ele oferece os nutrientes necessários para que o seu cão idoso possa ter
 qualidade de vida e uma nutrição balanceada nessa etapa da vida.
</p>',
'Menu_Caes_Senior_Portes_Medio_e_Grande_Frango_e_Arroz_Frente',
'N');

insert into tbl_Racao
values
(Default,
'Ração GranPlus Menu Cães Adultos Carne e Arroz 3 kg',
'1',
'51.21',
'55',
'<p>A Ração Gran Plus Menu cães adultos sabor carne e arroz é o alimento ideal para raças médias e grandes. Sua composição Premium Especial 
oferece nutrientes naturais que garantem uma dieta rica e balanceada do jeito que o seu pet merece.
</p>',
'racao_gran_plus_adulto_carne_e_arroz_frente',
'N');
 SELECT * FROM tbl_Racao;
 
 create view vw_Racoes
as select
 tbl_Racao.cd_Racao,
 tbl_marca.nm_marca,
 tbl_Racao.nm_Racao,
 tbl_Racao.vl_preco,
 tbl_Racao.qt_estoque,
 tbl_Racao.ds_Racao, 
 tbl_Racao.ds_img,
 tbl_Racao.sg_lancamento
 
 from tbl_Racao inner join tbl_marca 
 on tbl_Racao.cd_marca = tbl_marca.cd_marca;
 
 select * from vw_Racoes;
 
 select cd_Racao, nm_Racao ,vl_preco,ds_Racao,ds_img,qt_estoque from vw_Racoes;


