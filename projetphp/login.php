<?php  


 
 include("cnx.php");
 session_start();  
 session_regenerate_id(true);  
    
           if((!empty($_POST["nomL"])) && (!empty($_POST["passe"])))  
           {  
           
            
           
                $query = "SELECT * FROM lecteurs WHERE lecnom = :username AND lecmotdepasse = :password";  
                $statement = $pdo->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["nomL"],  
                          'password'     =>     $_POST["passe"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                    
                     $_SESSION["nomL"] = $_POST["nomL"];  
                     $res=$statement->fetch(PDO::FETCH_BOTH);
                     $_SESSION["codL"] = $res[0];

                     header("location:GestionLecteur.php");  
                }  
                else  
                {  
                    header("location:GestionLecteur.php"); 
                    session_unset(); 
                } 
                
            }
                
             
        
 

 ?>