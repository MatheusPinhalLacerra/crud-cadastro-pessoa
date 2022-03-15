<h3>CRUD Cadastro de Pessoa</h3>

<h6>Ferramentas de Desenvolvimento</h6>
<p>Framework Laravel 9</p>
<p>Estrutura do projeto MVC</p>
<p>Jetstream e Livewire</p>


<h6>Banco de Dados</h6>
<p>MySQL</p>

<h6>Servidor e Sistema</h6>
<p>Apache</p>
<p>PHP 8</p>
<p>Windows</p>

<h6>Configurando o projeto na máquina</h6>
<p>1º Instale o Laragon para rodar o banco de dados localmente.</p>
<p>2º Realize o download .zip do projeto e mova para dentro da pasta www do Laragon</p>
<p>3º Abra o projeto em um editor de código (Ex: Visual Studio Code)</p>
<p>4º No terminal rode o comando composer install</p>
<p>5º Renomear arquivo .env.example para .env somente</p>
<p>6º No terminar rode  seguinte comando php artisan key:generate</p>

<h4>Configurando Banco de Dados</h4>
No Phpmyadmin, acessado via Laragon, crie um novo banco de dados.
Voltando ao Laravel, adicione no arquivo .env/DB_DATABASE o nome do banco de dados criado.
A partir desse momento, rode este comando no terminal de seu projeto: php artisan migrate. Ele fará
com que as tabelas sejam criadas no banco.
