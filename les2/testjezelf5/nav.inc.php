<?php




    function canLogin($p_username, $p_password)
	{
	       if($p_username == "didi2894" && $p_password == "didifootpc65")
           {
                return true;   
           }
           else{
                return false;   
           }
    }

if (!empty($_POST))
{
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;


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
    


	function isLoggedIn()
	{
		// check if a user has previously logged in
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

	function doLogin($p_user)
	{
		// this function sets the cookie required for subsequent logins
          $salt = "DSQFDQS93!!..cddsfm";
        
        
        $content = $p_user . "," . md5($p_user.$salt);
        setCookie("loginCookie", $content, time()+60*60);
	}


		
	
	

?>

<nav>


<?php if (isLoggedIn()):?>
	
	<p class="welcome">Welcome back! <a href="logout.php">Log out?</a></p>

<?php else: ?>						
			
	<form action="" method="post">
		<input class="input" type="text" name="username" placeholder="Your username">
		<input class="input" type="password" name="password" placeholder="Your password">
		<button class="button" type="submit">Log in</button>
	</form>
	
<?php endif; ?>	
	
	<p><?php echo $feedback; ?></p>
	
</nav>