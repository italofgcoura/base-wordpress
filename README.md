# base-wordpress
Tema base para adcionar novos temas do zero ao wordpress.



# **INSTRUÇÕES** #

**1 -** Clonar o projeto do git
**2 -** Criar banco vazio no phpmyadmin ou mysql workbench
**3 -** Alterar o nome do banco de dado em wp-config.php para o banco criado e rodar o projeto
**4 -** Seguir passos de instalação do wordpress
**5 -** Navegar até a pasta assets dentro do thema Iungo e rodar o comando npm i -> instalará todas dependências


**_EM DESENVOLVIMENTO_**
npm start -> para rodar o projeto 
	O projeto irá iniciar e será aberta uma tela com o projeto

**_PARA MINIFICAR PARA PRODUÇÃO_**
gulp build --prod


*para adcionar novas stylesheets:*
adcionar na pasta: assets/src/scss/components, e de seguida importar no bundle.scss


*para adcionar novos javascripts:*
adcionar na pasta: assets/src/js/components, e de seguida importar no bundle.scss


*para adcionar novas imagens:*
adcionar na pasta: assets/src/images, e de seguida importar no bundle.scss, que serão automaticamente copiadas para a pasta dist


**Todas alterações feitas nos arquivos .php e .js farão a tela do projeto ser atualizado automaticamente.**
**As alterações feitas no css serão injetadas automaticamente no projeto e não atualizará a tela.**
