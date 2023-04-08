<?php
    session_start();

    $page_ID = 1;
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
</head>
    <body>
        <video autoplay muted loop id="video_1" width='100%'>
            <source src="<?=$imgPath?>video/CryptoCronic1.mp4" type="video/mp4">
        </video>
        <main class="position_main_div">
            <?php require("assets/navbar.php"); ?>
            <section id="homeSection" class="active HomeWrap session_">    
                <div class="container">            
                    <div class="row position-relative">                
                        <div class="signatureBlock signatureText col-12">
                            <?php if($h1[0] != '' ) echo "<h1>".$h1[0]."</h1>"; ?>
                            <?php if($h2[0] != '' ) echo "<h2>".$h2[0]."</h2>"; ?>
                            <?php if($h3[0] != '' ) echo "<h3>".$h3[0]."</h3>"; ?>
                        </div>
                        <div class="signatureBlock signatureImg col-12 d-flex justify-content-center">
                            <img src="<?=$imgPath ?>goat.png" alt="Goat" class="img-fluid">
                        </div>
                        <div class="signatureBtnBlock">
                            <div class="buttonWrap">
                                <a href="" class="btnBg">Explorer</a>
                                <a href="" class="transparentBg buttonBorder">Create</a>
                            </div> 
                        </div>

                        <div class="buttonWrap absolutePos buttonBorder" id="homeBtn">
                            <a href="" class="linkButton">Welcome to the Realm</a>
                        </div>
                    </div>
                </div> 
            </section>
            
            <?php require("assets/footer.php"); ?>
        </mian>
        
        <video autoplay muted loop id="video_2" width='100%'>
            <source src="<?=$imgPath?>video/CryptoCronic2.mp4" type="video/mp4">
        </video>
    </body>
</html>
<?php
?>


