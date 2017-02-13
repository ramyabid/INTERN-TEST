IDE used : Netbeans 8.2
framework Symfony 3
*******Setup*******
*open command line prompt
*write the commandbelow
*php -r "readfile('https://symfony.com/installer');" > symfony
then move the file downloaded to folder in envirement PATH or project folder
# EX:, if WAMP is used...
c:\> move symfony c:\wamp\bin\php
# ... then, execute the command 
c:\> symfony

# Move the folder of your projects
c:\> move symfony c:\projects

# ... then, execute the following line 
c:\> cd projects
c:\projects\> php symfony

*Import the file DATABASE.sql in your database server