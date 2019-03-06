Christian Gomez

###### **HOW TO CONNECT TO WORDPRESS VIA PHPStorm**

1) Install PHP Storm and the latest version on PHP

Download PHP Storm: https://www.jetbrains.com/phpstorm/download/
**Disclaimer**
   You must have a license to use PHP Storm. You can receive a student license through your NJIT email. 
    
Download PHP: https://secure.php.net/downloads.php
**Disclaimer**
    It is recommended to Extract your /php folder into your C:\ drive. Always remember where
    you extracted this folder. 


2) Install MySQL

Link: https://dev.mysql.com/downloads/installer/

###### **MySQL Set Up**
1) Select _Standalone MySQL Server/Classic MySQL Replication_
2) Config Type = Development Computer
   TCP/IP Should be Checked
   Port = 3306 or 80
3) USE LEGACY AUTHORIZATION METHOD 
    ALWAYS REMEMBER YOUR MYSQL PASSWORD
    4) Finalize Setup & Execute Configurations

###### **Create Web Server Database**
1) Create New PHP Empty Project in PHPStorm
2) When in New Project, on the top right corner of PhpStorm click "Add Configuration"....
3) You will be taken to this screen, you are to drop down the menu on the left and select PHP Built-In Web Server
	- When Setting this up, the document root is the directory of the current project you are in

###### **wp-config-sample.php ----> wp-config.php**
Take wp-config-sample.php and copy that into a new .php file names wp-config.php.
Read the Documentation... then follow instructions
	DB_NAME = 'wordpress'
	DB_USER = 'root'
	DB_PASSWORD = 'password'
		DISCLAIMER: IT DEPENDS ON WHAT USERNAME/PASSWORD YOU USED FOR YOUR MYSQL LOGIN. WE RECOMMEND KEEPING IT SIMPLE WITH JUST......
		username = root
		password  = password
	DB_HOST = 'localhost' or '127.0.0.1'
	
###### **Connect to MySQL**
1) Click on the Database tab on the right of PHP Storm
2) Click on the '+' button, under the Data Source drop-down menu, click on MySQL
3) It is time to connect to your MySQL Database. Enter your respective Credentials...
	Name = localhost or Wordpress
		***Doesnt Matter***
	Host = localhost
	Database = wordpress 
		***Whatever you want to call this is fine. Just remember to name the database such when writing your MySQL Code***
	User = root
	Password = ***Your MySQL Database Password*** We recomment it just being 'password'..

*Test the connection and make sure it succesfully passes then click 'OK'* 

###### **Create MySQL Database & Permissions**
Click on the same Database tab on the right of the window. Right click on the Data Source and click 'Open Console'. Here is where you will be writing your MySQL code. 

You will execute the following....


CREATE DATABASE wordpress;
CREATE USER "wordpress"@"localhost" IDENTIFIED WITH mysql_native_password BY 'password';
GRANT ALL PRIVILEGES ON wordpress.* TO "wordpress"@"localhost";
FLUSH PRIVILEGES;

***YOU ARE NOT TO EXECUTE ENTIRE BLOCK OF CODE MORE THAN ONCE. EXECUTE 'FLUSH PRIVILEGES' FOR EVERY INSTANCE.***

Run this code and you should connect to localhost. 
    

###### **OH SNAP, it doesn't let me connect..**

You may need to modify your php.ini file

Uncomment the MySQli line and change maximum_execution_time = 90

Reason being.... php.ini is the initialization file of Php. Out of the box, Php does not support the execution of MySQL. Since you are merely using Php as a compiler for MySQL... you need to increse the execution time for your Php programs to be able to connect to your database. 

If you keep getting an error connecting to WordPress... try re-running the MySQL script by creating a new database like 'wordpressXYZ'...





