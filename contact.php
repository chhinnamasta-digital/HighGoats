<?php
    session_start();

    $page_ID = 7;
    require("assets/header.php");
    if(!isset($_SESSION['passcode']))  {
        header("Location:login.php");
    }
    else{
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
            header("Location:login.php");
        }
    }
?>
<script src="https://www.google.com/recaptcha/api.js?render=6LfUeK8jAAAAAJUphVIBmo9jKXSTm-VJIyUHft5s"></script>

</head>
    <body>
        <?php require("assets/navbar.php"); ?>
        <section id="ourTokenSection" class="HomeWrap contact-us-form">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_text">
                            <?php if($h2[0] != '' ) echo "<h2>".$h2[0]."</h2>"; ?>
                            <?php if($p[0] != '' ) echo "<p>".$p[0]."</p>"; ?>
                            
                            <div class="contact_form">
                                <form  method="post" id="formId" action="<?= $_SERVER['PHP_SELF'] ?>">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name*" />
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="inpuEmail" name="inpuEmail"  placeholder="Email*" />
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="InputPhone" name="InputPhone" placeholder="Phone Number*" />
                                    </div>
                                    <div class="mb-3">
                                    <input type="hidden" id="token_generate" name="token_generate">
                                    <input type="text" class="form-control" id="Message" placeholder="Message*" />
                                    </div>
                                    <button type="submit" class="btn submit_btn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        
        <?php require("assets/footer-content.php"); ?>
        <?php require("assets/footer.php"); ?>
        
        <script> 
            grecaptcha.ready(function() {
            grecaptcha.execute('6LfUeK8jAAAAAJUphVIBmo9jKXSTm-VJIyUHft5s', {action: 'submit'}).then(function(token) {
                let response = document.getElementById('token_generate');
                response.value = token;
            });
            });
        
        </script>
    </body>
</html>