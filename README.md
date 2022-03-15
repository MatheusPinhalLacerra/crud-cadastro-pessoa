<h3>CRUD Cadastro de Pessoa</h3>

<h6>Desenvolvimento</h6>
Framework PHP Laravel 9
MVC
Jetstream e Livewire

<h6>Banco de Dados</h6>
MySQL

<h6>Servidor e Sistema</h6>
PHP 8


<h6>Configurando o projeto na máquina</h6>
1º Instale o Laragon para rodar o banco de dados localmente.
2º Realize o download .zip do projeto e mova para dentro da pasta www do Laragon
3º Abra o projeto em um editor de código (Ex: Visual Studio Code)
4º No terminal rode o comando composer install


<h6>Configurando Banco de Dados</h6>
No Phpmyadmin, acessado via Laragon, crie um novo banco de dados.
Voltando ao Laravel, adicione no arquivo .env/DB_DATABASE o nome do banco de dados criado.
A partir desse momento, rode este comando no terminal de seu projeto: php artisan migrate. Ele fará
com que as tabelas sejam criadas no banco.
