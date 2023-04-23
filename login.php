<?php

    require("assets/header.php");
    
    session_start (); 
?>
<section id="homeSection" class="active HomeWrap login">    
    <div class="container">            
        <div class="row position-relative">                
            
            <div class="signatureBlock signatureImg col-12 d-flex justify-content-center">
                <img src="<?=$imgPath ?>goat.png" alt="Goat" class="img-fluid">
            </div>
            

            <div class="buttonWrap absolutePos buttonBorder" id="homeBtn">
                <a href="" class="linkButton">Welcome to the Realm</a>
            </div> 
            <div class="signUp">
                <div class="contact_form">
                    <form method="post">
                        <div class="mb-3">
                            <input type="password" class="form-control" name="signUpPassword" id="signUpPassword" placeholder="*****" />
                        </div>
                        <button type="submit" class="btn submit_btn" id="signup" name="entered">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</section>
<?php 
require("assets/footer.php");  

    if(isset($_POST['entered']) && $_POST['signUpPassword']){

        $signUpPassword = $_POST['signUpPassword'];
        if($signUpPassword == '123'){

            $_SESSION['start'] = time(); // Taking now logged in time.
            // Ending a session in 30 minutes from the starting time.
            $_SESSION['expire'] = $_SESSION['start'] + (20 * 60);

            $_SESSION['unique_id'] = session_regenerate_id(true);
            $_SESSION['passcode'] = $signUpPassword;
            header("location:index.php");
        }
        else{  
            echo"<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        session_destroy();
    }
?>