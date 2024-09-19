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
    <title>CampusHive (sign up page)</title>
    <STYLE TYPE="TEXT/CSS">
        *{
            text-decoration: none  ;


        }
        .navbar{
            background: #a37946; font-family: calibri; padding-right: 15px;padding: 15px;
            border-radius: 15px; opacity: 0.8;
            
        }
        .navdiv{
            display: flex; align-items: center; justify-content: space-between;       
         }
         .logo a{
            font-size:35px ;  font-weight: 600 ;color: white; transition: all 0.2s ease-in;
         }

         .logo:hover{
            transform: scale3d(1.1, 1.1,1) ;
        
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
            color: white;font-weight: bold;font-size:15px ; transition: all 0.2s ease-in;
         }

         button:hover{
            transform: scale3d(1.1, 1.1,1) ;
            background-color: rgb(210, 46, 46);
         } 
         #bar2{
            background-color: khaki; width: 800px;height: 800px;margin: auto;margin-top: 50px;
            padding: 10px;text-align: center;padding-top: 60px;font-size: 35px; margin-bottom: 50px;
            border-radius: 30px; opacity: 0.8;
         }

         #bar2:hover{
            /*transf orm: translateY(50px); 
            transform: scale3d(1.1, 1.1,1); */
            opacity: 1;

         }
         body{
            background-image: url(sign\ up\ background.jpeg);
            background-size: cover;
         }
         #text{
            height: 40px;width: 300px;border-radius: 4px;border: solid 1px #888;
            padding: 4px;font-size: 14px;font-family: fantasy;
         }
         #button{
            width: 200px;
            height: 40px;
            border-radius:8px ;
            font-weight: bolder;
            border: solid 4px black;
            background-color: rgb(138, 129, 116);
            transition: all s ease-in;
         }

         #button:hover{
            transform: scale3d(1.1, 1.1,1) ;
            transform: translateY(-10px)
         }
       
    

        </style>
   
</head>
<body>
    <form method="post" action="">
        <header>
            
              <nav class="navbar">
                  <div class="navdiv">
                      <div class="logo"><a href="#">Campus'Hive &#9990;</a></div>
                      <ul>
                          <!-- <li><a href="#">HOME</a></li>
                          <li><a href="#">POST</a></li>
                          <li><a href="#">LIKES</a></li> -->
                          <button><a href="http://localhost/CAMPUSHIVE/login.html">SIGN IN</a></button>
                      </ul>
      
      
                  </div>
              </nav>
          </header>
          <div id="bar2">
              SIGN UP TO Campus'Hive &#9990;<br><br>
              <input name ="FIRST_NAME" type="text" id="text" placeholder="FIRST NAME"><br><br>
              <input name ="LAST_NAME" type="text" id="text" placeholder="LAST NAME"><br><br>
              GENDER<br>
              <select id="text" name ="GENDER">
                  <option>
                      male
      
                  </option>
                  <option>female</option>
      
              </select><br><br>
              <input name = "EMAIL" type="text" id="text" placeholder="EMAIL"><br><br>
              
              <input name ="PASSWORD" type="password" id="text" placeholder="PASSWORD"><br><br>
              <input name ="PASSWORD2" type="password" id="text" placeholder="CONFIRM PASSWORD"><br><br>
              <input type="submit" id="button" value="sign up">
      
          </div>
    </form>
</body>
</html>
