
<?php
if (isset( $_GET['q'])){
    
    $query = $_GET['q'];
}
?><!DOCTYPE html>
   
   <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Intro Forms</title>
    </head>
    
    
    <body>        
        <p>INTRO FORMS </br>Post & Get</br>Post = hidden(veiliger) ---- </br>Get = URL (http://localhost:8080/les2/index.php?q=dvd) (zichtbaar maar niet veilig)</p>
        
<?php
    if (isset( $_GET['q']))
    {
    echo "Resultaten voor <em>" . $query . "</em>";
    }
?>
        
        
        <form action="" method="get">
          
          <label style="color:red" for="query">Search term</label>
           <input type="text" name="q" id="query" style="background-color:#00ac99;color:#FFF">
           
           <button type="submit">Go</button>
           
        </form>
   
    </body>
    
</html>


