<?php

class AddInfo extends Controller{
    
    //Adds aditional info to user
    public function add()        
    {                
        // Gets user id (email address)
        if(isset($_SESSION['email']) || isset($_SESSION['RegEmail']) ){
            if(isset($_SESSION["RegEmail"])){
                $id =  $_SESSION["RegEmail"];
            } else if( isset($_SESSION["email"])){
                $id =  $_SESSION["email"];
            }
        }

        // Gets post values
        $i = 0;
        foreach($_POST as $value){
            $i++;     
            if($i == sizeof($_POST)){$AddStreet = $value; break;}
            if($i == sizeof($_POST)-1){$AddCity = $value; continue;}
            if($i == sizeof($_POST)-2){$AddCountry = $value; continue;}
            if($i == sizeof($_POST)-3){$AddPhoneNr = $value; continue;}
            if($i == sizeof($_POST)-4){$AddGender = $value; continue;}
            $AddAge = $value;
        };        

        // Adds info in database
        $query = "INSERT INTO info (age, gender, phoneNr, country, city, street, email) VALUES ('$AddAge', '$AddGender', '$AddPhoneNr', '$AddCountry', '$AddCity', '$AddStreet', '$id ')";
        self::query($query);
        
        // Makes global values and sends them to view
        $_SESSION["AddAge"] = $AddAge;
        $_SESSION["AddGender"] = $AddGender;
        $_SESSION["AddPhoneNr"] = $AddPhoneNr;
        $_SESSION["AddCountry"] = $AddCountry;
        $_SESSION["AddCity"] = $AddCity;
        $_SESSION["AddStreet"] = $AddStreet;
        $_SESSION["Added"] = true;

        header('Location: add-info-'.$id);
        exit();
        
  
    }

}
?>