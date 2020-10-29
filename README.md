# base-wordpress
Tema base para adcionar novos temas do zero ao wordpress.



# **INSTRUÇÕES** #

**1 -** Clonar o projeto e instalar o wordpress (alterar o nome do banco de dado em wp-config.php, o nome atual está como iungo)

**2 -** npm i -> instalará todas dependências

**3 -**

**EM DESENVOLVIMENTO**
npm start -> para rodar o projeto

**PARA MINIFICAR PARA PRODUÇÃO**
gulp build --prod


*para adcionar novas stylesheets:*
adcionar na pasta: assets/src/scss/components, e de seguida importar no bundle.scss


*para adcionar novos javascripts:*
adcionar na pasta: assets/src/js/components, e de seguida importar no bundle.scss


*para adcionar novas imagens:*
adcionar na pasta: assets/src/images, e de seguida importar no bundle.scss, que serão automaticamente copiadas para a pasta dist
