<?php


class login
{
    private $error ="";
    
    public function evaluate($data)
    

    {
        
        $email = addslashes($data['email']) ;
        $password = addslashes($data['password']);

         //create
         $query = "select * from users where email ='email' limit 1";
        
        
        $DB = new Database();
        $result=$DB->read($query);
      
        
        if($result)
        {
            $row = $result[0];
            if($password == $row['password'])
            {
                $_SESSION['myhive_userid'] = $row['userid'];

            }else{
                $this->error .= "wrong password<br>";
            }

        }else{
            $this->error .= "no such email was found<br>";
        }
        return $this->error;
        

    }
    public function check_login($id){

    
    
        $query = "select userid from users where userid ='$id' limit 1";
        
        
        $DB = new Database();
        $result=$DB->read($query);
      
        
        if($result)
        {
            return true;

        }
        return false;

        

    }

}