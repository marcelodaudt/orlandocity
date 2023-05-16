# Projeto Orlando City Soccer

Projeto de um *website* com loja virtual para o clube de futebol **Orlando City Soccer**, desenvolvido no curso de desenvolvedor *web* da **HCode**.


### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [HTML5](https://html.spec.whatwg.org/)
- [CSS3](http://www.w3.org/TR/css3-roadmap/)
- [JavaScript](https://developer.mozilla.org/en/JavaScript)
- [Slim Framework](https://www.slimframework.com/)


### Features

Recursos atualmente disponíveis:

- [x] Visualização de vídeos
- [x] Loja virtual básica
- [ ] Cadastro de produtos
- [ ] Cadastro e visualização de notícias
- [ ] Cadastro e visualização de agenda

## Banco de Dados

Executar os *scripts* abaixo, localizados na pasta "**sql**", para criar o banco de dados "**hcode_shop**", com suas respectivas tabelas e procedimentos.

**Criando as tabelas:**
- hcode_shop_tb_reviews.sql
- hcode_shop_tb_produtos.sql
- hcode_shop_tb_carrinhosprodutos.sql
- hcode_shop_tb_carrinhos.sql

**Criando as *procedures*:**
- hcode_shop_routines.sql

Para configurar o acesso do *website* ao banco de dados, alterar a linha abaixo no arquivo "**inc/configuration.php**":


```php
	function __construct()
	{

		return $this->conn = mysqli_connect("server", "user", "password", "hcode_shop");

	}
```

## Acesso

Visualização do projeto em funcionamento.

https://daudt.com.br/projetos/orlandocity
