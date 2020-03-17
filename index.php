


<?php
$title = 'Login';

//include header template
include 'header.php';


?>

    <main> 
   
        <div class="row">
                <div class="col-12">
                <article class="login">
            <div class="card">
            <?php
            

            if (isset($_SESSION["user"])) {
               

   ?>
             <h1>LOGGED IN! </h1>
            <h2> <a href="bookticket.php"> Click here to start booking</a></h2>

                    
      <?php
            }
            else{
                ?>
                <h1>Please login</h1>
                <form  action="" method="POST">
                    Username:
                    <input type="username" name="username" id="username" placeholder="username" required /><br><br>
                    Password:
                    <input type="password" name="password" id="password" placeholder="password" required /><br><br>
                    <input type="submit" name="submit" id="submit" value="login" onclick="verify()" ><br>
                 
            </form>
            <?php
            }
               
        ?>
            
            </div>
         </main>
            </article>

  </div>
 
                    

                    
                
              
       <div class="sidebar col-3  ">      
    
     
</div>
<script type="application/javascript">
	 function verify(){
     <?php
            include("db_connect.php");
                if($_POST)
                {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                   
                    $sql="select * from passenger where username='$username' and password='$password'";
                    $result=$conn->query($sql);
                    if($result->num_rows == 1)
                         {
                          
                    $_SESSION["user"]=$username;
                    header("location:bookticket.php");
                    
             }
                else
                {   
                    echo("login failed!!");
                    
                }
                }
   ?>
 
            }

</script>




            </div>

           
        
    </div>
    


   

        </main>
    <footer>&copy;Copyright 2019 All Rights Reserved   </footer>
</body>

</html>


