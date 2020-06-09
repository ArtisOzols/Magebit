<?php
class Login extends Controller{

    //Tests if email address and password is in database
    public static function test() {           
        
        // Gets post values
        $i = 0;
        foreach($_POST as $value){
            $i++;
            if($i == sizeof($_POST)){
                $password = $value;
                break;
            }
            $email = $value;
        };

        // redirects to addinfo page if email and password is correct
        $query = "SELECT email, password FROM users WHERE email='$email' AND password='$password'";
        if(!empty(self::query($query))){   
            // Makes global values and sends them to view         
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $id = $_SESSION["email"];

            header('Location: add-info-'.$id);
            exit();
        } else {
            // Makes global values and sends them to view
            $_SESSION["loginError"] = true;
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;

            header('Location: login');
            exit();
        }
    }

    // registers new user
    public function registration() {   
        
        // Gets post values
        $i = 0;
        foreach($_POST as $value){
            $i++;
            if($i == sizeof($_POST)){
                $RegPassword = $value;
                break;
            }
            if($i == sizeof($_POST)-1){
                $RegEmail = $value;
                continue;
            }
            $RegName = $value;
        };
        
        //checks if email is not already registrated
        if ((empty(self::query("SELECT email FROM users WHERE email='$RegEmail'")))) {
            
            // registers new user if email is not already registrated
            $query = "INSERT INTO users (name, email, password) VALUES ('$RegName', '$RegEmail', '$RegPassword')";
            self::query($query);

            // Makes global values and sends them to view
            $_SESSION["RegName"] = $RegName;
            $_SESSION["RegEmail"] = $RegEmail;
            $_SESSION["RegPassword"] = $RegPassword;

            $id = $_SESSION["RegEmail"];
            header('Location: add-info-'.$id);
            exit();

        } else {          
            // Makes global values and sends them to view
            $_SESSION["RegError"] = true;
            $_SESSION["RegName"] = $RegName;
            $_SESSION["RegEmail"] = $RegEmail;
            $_SESSION["RegPassword"] = $RegPassword;

            header('Location: login');
            
        }
    }
}

?>