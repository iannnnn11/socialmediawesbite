<?php
include("classes/index.php");
include("classes/signup.php");
    $first_name ="";
    $last_name ="";
    $gender ="";
    $email ="";
    
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $signup = new signup();
    $result = $signup->evaluate($_POST);

    
    if($result != "")
        {
        echo "<div style=' text-align:centre; font-size:12px;color:white;background-color:grey;'>";
        
         echo "<br>The following errors occured<br><br>";
         echo $result;
         echo "<br></div>";

        }else
        {
            header("Location: login.php");
            die;

        }
        $first_name =$_POST['first_name'];
        $last_name =$_POST['last_name'];
        $gender =$_POST['gender'];
        $email =$_POST['email'];
        $password =$_POST['password'];
      

    
   
}


    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAKE</title>
    <STYLE TYPE="TEXT/CSS">
        *{
            text-decoration: none  ;


        }
        .navbar{
            background: rgb(79, 79, 242); font-family: calibri; padding-right: 15px;padding: 15px;
            
        }
        .navdiv{
            display: flex; align-items: center; justify-content: space-between;       
         }
         .logo a{
            font-size:35px ;  font-weight: 600 ;color: white;
         }
         li{
            list-style: none;display: inline-block;
         }
         li a{
            color: white; font-size:18px ; font-weight: bold;margin-right: 25px;
         }
         button{
            background-color: black;margin-left: 10px; border-radius: 10px; padding: 10px;width: 90px;
         }
         button a{
            color: white;font-weight: bold;font-size:15px ; 
         }
         #bar2{
            background-color: rgb(124, 124, 136); width: 800px;height: 800px;margin: auto;margin-top: 50px;
            padding: 10px;text-align: center;padding-top: 60px;font-size: 35px;


         }
         #text{
            height: 40px;width: 300px;border-radius: 4px;border: solid 1px #888;
            padding: 4px;font-size: 14px;
         }
         #button{
            width: 300px;
            height: 40px;
            border-radius:4px ;
            font-weight: bold;
            border: none;
            background-color: rgb(183, 166, 144);
         }
       
    

        </style>
   
</head>
<body>
    <header>
      
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="#">STAKE</a></div>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">POST</a></li>
                    <li><a href="#">LIKES</a></li>
                    <button><a href="http://127.0.0.1:3000/profile.html">SIGN IN</a></button>
                </ul>


            </div>
        </nav>
    </header>
    <div id="bar2">
        SIGN UP TO CAMPUS HIVE<br><br>
        <form method="post" action="">


            <input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="FIRST NAME"><br><br>
            <input value="<?php echo $last_name ?>" name ="last_name" type="text" id="text" placeholder="LAST NAME"><br><br>
            
            <select id="text" name="gender">
                GENDER
                
                <option><?php echo $gender ?></option>    
                <option>male</option>
                <option>female</option>
                
            </select><br><br>
            <input value="<?php echo $email ?>" name="email"  type="text" id="text" placeholder="EMAIL"><br><br>
            
            <input name="password1" type="password" id="text" placeholder="PASSWORD"><br><br>
            <input name="password2" type="password" id="text" placeholder="RETYPE PASSWORD"><br><br>
            <input type="submit" id="button" value="sign up">


        </form>

    </div>
    
</body>
</html>