<?php

    class Connect{

        public static function conection(){
            
            try{
                $conection = new PDO('mysql:host=localhost; dbname=second_proyect', 'root', '');
                
                $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $conection->exec("SET CHARACTER SET UTF8");
                
                
            } catch (Exception $ex) {
                die("Error ". $ex->getMessage());
                echo "Linea del error " . $ex->getLine();
            }
            
            return $conection;
        }



    }
