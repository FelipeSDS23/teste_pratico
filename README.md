# Projeto Laravel com MySQL

Este é um projeto desenvolvido com Laravel e MySQL.

## Pré-requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados em sua máquina:

- **PHP** (versão 8.0 ou superior)
- **Composer** (gerenciador de dependências para PHP)
- **MySQL** (ou outro banco de dados compatível)
- **Laravel** (pode ser instalado globalmente via Composer)

## Instalação

Siga as etapas abaixo para configurar o projeto em sua máquina local:

### 1. Clone o repositório

Clone este repositório para sua máquina local:

```bash
git clone https://github.com/FelipeSDS23/teste_pratico.git
cd teste_pratico
```

### 2. Instale as dependências do Laravel

Execute o seguinte comando para instalar as dependências do projeto:

```bash
composer install
```

### 3. Crie e configure o banco de dados

Certifique-se de que o MySQL esteja em funcionamento. Crie um banco de dados para o projeto e configure as credenciais no arquivo .env.

Exemplo de configuração no arquivo .env:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 4. Execute as migrações

Execute as migrações para criar as tabelas no banco de dados:
```bash
php artisan migrate
```

### 5. Inicie o servidor

Inicie o servidor embutido do Laravel com o comando:

```bash
php artisan serve
```

Como usar
Depois de iniciar o servidor, você pode acessar a aplicação em seu navegador pelo link: http://127.0.0.1:8000/