
<?php 
 /*Defining the database information through constants*/ 
 /*Definindo as informações do banco através de constantes*/ 
 	 define('DB_HOST', 'YourHostHere');
 	 define('DB_NAME', 'YourDbNameHere'); 
 	 define('DB_USER', 'YourUserHere');
 	 define('DB_PASS', 'YourPasswordHere');  
 	 class YourClassHere{
 		 private static $instance; 
 		  		 public static function getInstance(){ 
 			 if(!isset(self::$instance)){ 
 				 try {
                   		 self::$instance = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS); 
 						 self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 						 self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
 				}catch (PDOException $e) {
 					 echo $e->getMessage();
 				}
 			}
 			 return self::$instance; 
 		}
 		 public static function prepare($sql){ 
 			 return self::getInstance()->prepare($sql); 
 		 } 
 	 }
 ?>