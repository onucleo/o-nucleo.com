<p align="center">
  <img width="300" height="300" src="https://user-images.githubusercontent.com/30741312/56408398-b37e1f80-624a-11e9-8b48-bc3a3afd1c6f.png">
</p>

# **Site - O NÚCLEO**

Criado em meados do primeiro ciclo de 2018 **O Núcleo** é uma entidade identitária composta por Discentes do [curso de Bacharelado em Ciência da Computação][UFRPE] que surgiu pela necessidade de se suprir as deficiências sociais enfrentadas no ambiente acadêmico, tanto quanto para ceifar a doutrina de recorrentes declives ao recurso de avaliação, da prática de desenvolver disciplina, de recolher conhecimento específicos e gerais em volta da Computação.

**ACESSE:** [o-nucleo.com][SITE]

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

### 📋 Pré-requisitos

Para rodar o site será necessário ter:
```
PHP
Composer
MariaDB
```

### 🔧 Instalação

A partir daqui, haverão comandos úteis para a instalação dos pré-requisitos acima mencionados, afim de ter um ambiente de desenvolvimento em execução.

**Antes de tudo, como todo bom desenvolvedor, começaremos com o passo _zero_, que será o** [clone do nosso repositório][REPO] **:)**

**A primeira etapa é instalar o PHP, veja que será necessário a utilização da versão >= 7.0:**

- Baixe e instale o PHP 7.2:
```
$ sudo apt-get update && sudo apt-get -y upgrade && sudo apt-get -y dist-upgrade
$ sudo apt-get install software-properties-common python-software-properties curl
$ sudo apt-get install apache2
$ sudo add-apt-repository -y ppa:ondrej/php && sudo apt-get update
$ sudo apt-get install php7.2-cli libapache2-mod-php7.2 php7.2-mysql php7.2-curl php-memcached php7.2-dev php7.2-sqlite3 php7.2-mbstring php7.2-gd php7.2-json
```

**A segunda etapa é a configuração da extensão do php para utilização do MariaDB:**

- Observe a versão a ser utilizada
```
php -v
```

- Em ``/etc/php/[versao]/cli/php.ini``, será necessário descomentar (remover o ``;``) nas seguites linhas:
```
extension=pdo_mysql
extension=mysqli
```
> Nota: A depender do sistema, não existirá a pasta com a versão do php, dessa forma, basta entrar direto em ``/etc/php/`` e acessar o ``php.ini``

**A terceira etapa é a instalação do composer:**

- Baixe e instale o composer:
```
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php composer-setup.php
$ php -r "unlink('composer-setup.php');"
$ sudo mv composer.phar /usr/local/bin/composer
```
- Depois torne os serviços disponíveis no terminal (bash):
```
$ echo "export PATH=$PATH:~/.config/composer/vendor/bin/" >> ~/.bashrc
```
- Ou se usa zsh:
```
$ echo "export PATH=$PATH:~/.config/composer/vendor/bin/" >> ~/.bashrc
```
- Ou se usa fish:
```
$ echo "set -gx PATH ~/.config/composer/vendor/bin/ $PATH" >>  ~/.config/fish/config.fish
```

**A quarta etapa é a instalação e criação do banco de dados:**

- Baixe e instale uma implementação de algum Banco de Bados, por exemplo, no Linux Mint a instalação e configuração do MariaDB, criação de um usuario
chamado laravel, com uma base de dados chamada laravel e senha laravel:
```
$ sudo apt install mariadb-server
$ mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql
$ mysql -u root -p
Isto executará um novo prompt de comando
MariaDB [(none)]> CREATE DATABASE laravel;
MariaDB [(none)]> CREATE USER 'laravel'@'localhost' IDENTIFIED BY 'laravel';
MariaDB [(none)]> GRANT ALL PRIVILEGES ON laravel.* TO 'laravel'@'localhost';
MariaDB [(none)]> FLUSH PRIVILEGES;
MariaDB [(none)]> quit
```
- Após isso, edite o aquivo .env na pasta onucleo:

  Mude de:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
  Para:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

- Depois de tudo configurado, hora da criação das tabelas e esquemas:

    Dentro da pasta onucleo(raiz do projeto em laravel):
    ```
    $ php artisan migrate
    ```

**A quinta etapa é a inicialização do servidor:**

   - Para inicializar o servidor, é necessário ir até a pasta do projeto e executar o seguinte comando:
   ```
   $ php artisan serve
   ```
   E assim o servidor já estará executando.

   > Nota: Para acessar o servidor, basta ir até [http://127.0.0.1:8000][LOCALSERVER]


## ⚙️ Executando os testes

>Ainda não estamos trabalhando com testes automatizados! 😅

## 🛠️ Ferramentas utilizadas

As ferramentas que usamos para criar o projeto:

* [Atom][ATOM] - O melhor editor do século!
* [Composer][COMPOSER] - Ferramenta para o gerenciamento de dependências em PHP
* [DBeaver][DBEAVER] - Cliente SQL
* [Laravel][LARAVEL] - O framework web usado
* [MariaDB][MARIADB] - SGDB

## 🖇️ Colaborando

É estudante no curso de [Ciência da Computação na Universidade Federal Rural de Pernambuco - Unidade Acadêmica de Garanhuns][UFRPE] e quer nos ajudar no desenvolvimento? [Entre em contato com a gente!][EMAIL]

## ✒️ Autores

Todos aqueles que nos ajudaram a levantar o projeto desde o seu início:

* **Armstrong Lohãns** - *Desenvolvimento do site* - [lohhas (GitHub)](https://github.com/lohhans)
* **Mateus Baltazar** - *Desenvolvimento do site* - [MBaltz (GitHub)](https://github.com/MBaltz)
* **Matheus Machado** - *Desenvolvimento do site* - [Sekva (GitHub)](https://github.com/Sekva)
* **Gersonilo Oliveira** - *Documentação e Orientação* - [Gersonilo (email)](mailto:gersonilo@hotmail.com)

Você também pode ver a lista de todos os [colaboradores][COLABORADORES] que participaram deste projeto.

## 📄 Licença

Este projeto está sob a licença **MIT License** - veja o arquivo [LICENSE.md][LICENSA] para detalhes.

## 🎁 Expressões de gratidão

* Conte para outras pessoas sobre este projeto! 📢
* Convide alguém da equipe para uma cerveja! 🍺
* Acesse [nosso site][SITE] :)

---
⌨️ com ❤️ por [Armstrong Lohãns](https://gist.github.com/lohhans), [Mateus Baltazar](https://github.com/MBaltz) e [Matheus Machado](https://github.com/sekva) \😊/


<!-- Links -->
[ATOM]: https://atom.io/
[COLABORADORES]: https://github.com/onucleo/o-nucleo.com/graphs/contributors
[COMPOSER]: https://getcomposer.org/
[DBEAVER]: https://dbeaver.io/
[EMAIL]: mailto:contato@o-nucleo.com
[ESTRELA]: https://github.com/onucleo/o-nucleo.com/stargazers
[LARAVEL]: https://laravel.com/
[LICENSA]: https://github.com/onucleo/o-nucleo.com/blob/master/LICENSE
[LOCALSERVER]: http://127.0.0.1:8000
[MARIADB]: https://mariadb.org/
[REPO]: https://github.com/onucleo/o-nucleo.com.git
[SITE]: http://o-nucleo.com
[UFRPE]: http://bcc.uag.ufrpe.br/~portal/
