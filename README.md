
## Gerenciador de projetos Laravel

Desenvolvido como projeto prático na plataforma Treinaweb

### Instalando o projeto

#### Clonar o repositório

```
git clone https://github.com/treinaweb/treinaweb-gerenciador-de-projetos-laravel.git
```

#### Instalar as depencências

```
composer install
```

Ou em ambiente de desenvolvimento:

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto
configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```

## Lista de commits por aula
Aula | Video | Commit | Link 
------ | ------ | ------ | ------ 
Aula 03 | Criando o projeto Laravel | 02 - Criando o primeiro projeto laravel | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/20fcf4455b3803a272e33e2c3d9a1875757fbd33.zip) 
Aula 05 | Conhecendo o conceito de rota | 06 - Conhecendo o conceito de rotas | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/3edaeecb852952985f193e6475fa192944f02499.zip) 
Aula 05 | Trabalhando com parâmetros dinâmicos na rota | 07 - Trabalhando com parametros dinâmicos na rota | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/076e357602b9bdca61564e4b535da496cc75ed6d.zip) 
Aula 05 | Trabalhando com controllers | 08 - Thabalhando com controllers | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/b98e72173870469c17cac5a8b6ebc74f656e2dc4.zip) 
Aula 05 | Single Action Controller | 09 - Single Action Controller | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/8d6c3183cc93f04cc5284ef2482803ae905fb59c.zip) 
Aula 06 | Criando nossa primeira View | 10 - Criando a primeira View | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/5810afe4064420f92b53194002c65a8cb98ebe54.zip) 
Aula 06 | Passando informações do Controller para a View | 11 - Enviando informações para a view | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/73feee384de3bebb66ca65f8c8286faf82b69a95.zip) 
Aula 07 | Criando a primeira migration | 14 - Criando nossa primeira migration | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/943a8217bb27e10fc367cbc7cf6939b0e6fe9fe4.zip) 
Aula 07 | Criando o primeiro model e obtendo informações | 15 - Criando o primeiro Model | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/a8c176685f01a4e764e7de7ffacb533b8d68ed80.zip) 
Aula 08 | Criando a Action para exibir a página de listagem de Clientes | 16 - Criando controller e view para exibição dos clients | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/6a7c40fae23e8d1d6f773c2e05833ec3f1b31ff5.zip) 
Aula 08 | Listando os clientes na View | 17 - Listando os clientes | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/f1c1692bb181714decdaa6654e1ef384dbef4417.zip) 
Aula 08 | Mostrando a página de detalhes de cliente | 18 - Mostrando a página de detalhes do cliente | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/741ae20ac11a45bfd1d91881113bb37d9a2f965c.zip) 
Aula 08 | Usando recurso de template para evitar repetição de código | 19 - Usando extensão de template no projeto | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/6565a87234387803f1f2dee6802998cba7a8a9ca.zip) 
Aula 08 | Criando formulário de adição de cliente | 20 - Criando o formulário de criação de clientes | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/7ed77f27b7f4ee2eab23a94b462dfc03caa12d4d.zip) 
Aula 08 | Inserindo cliente no banco de dados | 21 - Criando o usuario no banco de dados | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/10cb3868b2da5ab9c7164e80a168580bd252579c.zip) 
Aula 08 | Criando formulário de alteração de clientes | 22 - Criando formulário de alteração de cliente | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/efa038bcd3c97e400a288c1462691d868a646f35.zip) 
Aula 08 | Atualizando o cliente no banco de dados | 23 - Atualizando usuário no banco | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/91abb50f2fb7c215d1373d3c22ddd73f25a79328.zip) 
Aula 08 | Excluindo cliente no banco de dados | 24 - Excluindo um cliente do banco de dados | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/427ae0e4719d6e72d59b987fee7778e851a953cb.zip) 
Aula 09 | Ajustando detalhes da aplicação | 25 - Definindo detalhes da aplicação | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/ab75f5bbedd0549c1a08fc09cbf5e48c71799396.zip) 
Aula 09 | Definindo tipo de retorno e documentando nosso controller | 26 - Definindo tipo de retorno e documentando | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/bdbdac95f73a2b7560ea7e60eb7108b05160b808.zip) 
Aula 09 | Resource Controller | 27 - Resource Controller | [Download](https://github.com/treinaweb/treinaweb-laravel-fundamentos/archive/675535f72d6ba676e6b87a364d89760d49f6a80b.zip) 
