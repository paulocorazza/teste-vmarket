c


insert into usuarios (nome,email,senha)
	values('paulo','paulo@vbmarket.com.br', '$2y$12$FYxBB2U2VdnXvl4U9gf.iujkpj4rJCHmYkuJ01JT96xp0.QWr4ope')

	
	select * from usuarios


/*/
*create the database
*/
CREATE SCHEMA vbmarket


/*/
*use the database
*/
use vbmarket



/*/
*create products table
*/
create table if not exists produto(
	id int not null primary key auto_increment,
	valor decimal(6,2),
	cod_barras varchar(45),
	icms int(3),
	ipi  int(3),
	descricao varchar(100)
);


/* table users */
create table usuarios(
	id int not null primary key auto_increment,
	nome varchar(50),
	email varchar(50),
	senha varchar(255)
)



select * from usuario

alter table usuario add column nome varchar(50)

/* insert usuario*/

insert into usuario  (email,senha) 
values ('paulo@vbmarket.com.br', '$2y$12$FYxBB2U2VdnXvl4U9gf.iujkpj4rJCHmYkuJ01JT96xp0.QWr4ope');



update usuario set nome = 'Pedro Malazarte' where email = 'pedro@vbmarket.com.br'



insert into produto (valor,cod_barras,icms,ipi,descricao)
	values (1200.00,'78912415678398823',18, 5, 'airpods pro apple');



SELECT * from produto p 
