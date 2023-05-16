# Projeto Orlando City Soccer

Projeto de um *website* com loja virtual para o clube de futebol **Orlando City Soccer**, desenvolvido no curso de desenvolvedor *web* da **HCode**.


### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [HTML5](https://expo.io/)
- [CSS3](https://nodejs.org/en/)
- [JavaScript](https://pt-br.reactjs.org/)
- [Slim Framework](https://reactnative.dev/)


### Features

Recursos atualmente disponíveis

- [x] Visualização de vídeos;
- [x] Loja virtual básica;
- [ ] Cadastro de produtos;
- [ ] Agenda;
- [ ] Notícias.


## Banco de Dados

Executar os *scripts* abaixo, localizados na pasta "**sql**", para criar o banco de dados "hcode_shop", com suas respectivas Tabelas e Procedimentos:

**TABELAS**
- hcode_shop_tb_reviews.sql
- hcode_shop_tb_produtos.sql
- hcode_shop_tb_carrinhosprodutos.sql
- hcode_shop_tb_carrinhos.sql

**PROCEDURES**
- hcode_shop_routines.sql

Para configurar o acesso do *website* ao banco de dados, alterar a linha abaixo no arquivo "inc/configuration.php":

...php
	function __construct()
	{

		return $this->conn = mysqli_connect("server", "user", "password", "hcode_shop");
		
	}
...

## Acesso

Visualização do projeto em funcionamento.

*link*: https://daudt.com.br/orlandocity/
