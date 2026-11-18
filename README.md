# 🔗 Encurtador de Links

Backend desenvolvido em PHP com Laravel, com o objetivo de encurtar URLs, facilitando o compartilhamento de links menores e mais práticos.

# 🚀 Como executar o projeto

Siga os passos abaixo para configurar e executar o projeto em sua máquina.

### 1. Baixar o projeto

Baixe o arquivo ZIP do repositório e extraia o conteúdo em uma pasta de sua preferência.

### 2. Configurar o arquivo .env

Abra o terminal na pasta raiz do projeto e execute:

```bash
copy .env.example .env
```

### 3. Instalar as dependências

Execute o comando:

```bash
composer install
```

### 4. Gerar a chave da aplicação

Execute o comando:

```bash
php artisan key:generate
```

### 5. Configurar o banco de dados

Se estiver utilizando o XAMPP, abra o painel de controle e inicie o serviço MySQL.

Caso esteja utilizando outro ambiente, certifique-se de que o banco de dados esteja configurado e em execução.

Verifique também as configurações de conexão no arquivo .env:

env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=root
DB_PASSWORD=


Altere os valores conforme as configurações do seu banco de dados.

### 6. Executar as migrations

Com o banco de dados configurado e em execução, execute:

```bash
php artisan migrate
```

### 7. Iniciar o servidor

Para iniciar o servidor local do Laravel, execute:

```bash
php artisan serve
```


A aplicação estará disponível no endereço:

text
http://127.0.0.1:8000

🛠️ Tecnologias utilizadas
PHP – Linguagem de programação.
Laravel – Framework backend.
MySQL – Banco de dados relacional.
Composer – Gerenciador de dependências.
📌 Observações
É necessário ter o PHP instalado e configurado no ambiente.
O Composer deve estar instalado.
O MySQL precisa estar em execução.
Todas as configurações de ambiente devem ser realizadas no arquivo .env.
