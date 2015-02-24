
<?php

    function isLoggedIn()
    {
        // als er een cookie is
        if (isset ($_COOKIE['loginCookie']))
        {
            $cookie = $_COOKIE['loginCookie'];
            $cookie_exploded = explode(",", $cookie);
            
            if(md5($cookie_exploded[0] . $salt) == $cookie_exploded[1])
            
            return true;   
        }
        else
        {
            return false;   
        }
    }


    function canLogin($p_username, $p_password)
    {
        if($p_username == "ello" && $p_password == "letmein")
           {
                return true;   
           }
           else{
                return false;   
           }
    }

    function doLogin($p_username)
    {
        //cookie plaatsen (onthouden)
        $salt = "DSQFDQS93!!..cddsfm";
        
        
        $content = $p_username . "," . md5($p_username.$salt);
        setCookie("loginCookie", $content, time()+60*60);
    
        //ga naar andere pagina
    }




// controleer of er gepost is
if (!empty($_POST))
{
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;


// check if user can login
    if( canLogin ($username, $password))
       {
            doLogin($username);
            $feedback = "welcome back!";
       }
    else
    {
        $feedback = "Wrong password";   
    }

}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
  
  
  <p>Info..
  </br>
  Inloggen: 
</br>1.Form uitlezen via $_POST["name"]
  </br>2.Controle (scope!) can login - true/false
  </br>3. -cookie
          </br> - session
          
          </br> Server & cookies... 
          
    </br>4. Logout
    
    </p>
    
    
    <?php
        if(isset($feedback)):
    ?>
    <p class="feedback"><?php echo $feedback; ?></p>
     <?php endif; ?>
       
         
    <?php
        if (!isLoggedIn()):?>
               
    <form action="" method="post" style="background-color:#00ac99;height: 100px;width:400px;text-align:center">
       
       <label for="username">Username</label>
       <input type="text" id="username" name="username">
       </br>
       
       <label for="password">Password</label>
       <input type="password" id="password" name="password">
       
        </br>
    
        <button type="submit">Log in</button>
   </form>
    
    <?php else: ?>
        <p>welcome back</p>
        <a href="logout.php">Logout</a>
    <?php endif; ?>
    
</body>
</html>