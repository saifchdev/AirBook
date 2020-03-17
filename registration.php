<?php
include 'header.php';
?>
     <h1 style="padding-left:9%;">Enter Details</h1>
        <div class="container">
            <div class="row">
               
         
            <div class="col-3">
            <form action="js/submit.php" method="POST">
                
                    Username:<br> <input id="username" type="text" name="username" required><br>
        
                    Password:<br> <input type="password" id="pass" name="pass" ><br>
        Email:<br> <input type="email" id="useremail" name="useremail" ><br>
        Phone:<br><input type="text" id="phone" name="phone" >


        
                    
</div>
<div class="col-9">
Gender: <br> <input id="gender" type="radio" name="gender" value="male"> Male
<input id="gender" type="radio" name="gender" value="female"> Female


<br>
First Name:<br><input type="text" id="f_name" name="f_name" ><br>
                    Last Name:<br><input type="text" id="l_name" name="l_name" ><br>

        DOB: <br><input type="date" id="dob" name="dob" ><br>
</div>
<br><br>   <center><input id="submit-btn" type="submit" value="submit"></center>

                    </form>
        

     
</body>
</html>