The voice and video call whould work with no issues when clicking on it from the (Marvel App) prototype.
It has been hardcoded to call Jonathan Brownlee's phone.


The text messages require a bit of setup, as a MySql database is needed if you want to test the response page.
The response page will connect to a locally hosted MySql database with the login:

  User: "root"
  Pass: "root"
  
If you want to test this exactly this will need to be setup first. As well as a database called texting and a table called texts.

The code is here:

  CREATE DATABASE texting;
  USE texting;
  CREATE TABLE texts (name varchar(255), message varchar(255));

I will continue hosting the website on my private server for the remainder of 2018 if you would like to test the already setup
project.

The link is here:

http://178.128.214.80/DECO3500/text.html
