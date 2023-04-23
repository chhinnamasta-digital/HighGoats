<?php
    session_start();

    $page_ID = 2;
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
        <?php require("assets/navbar.php"); ?>
            <video autoplay muted loop id="ourPast_video" width='100%'>
                <source src="<?=$imgPath?>video/CryptoCronic1.mp4" type="video/mp4">
            </video>
        <section id="ourPastSection" class="HomeWrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_text">
                            <?php if($h2[0] != '' ) echo "<h2>".$h2[0]."<span>&nbsp;".$span[0]."</span></h2>"; ?>                            
                            <?php if($p[0] != '' ) echo "<p>".$p[0]."</p>"; ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="heading_img">
                            <img src="<?=$imgPath?>our-past.png" alt="our past" class="img-fluid pastImgPos" />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="heading_text w-100">
                            <?php if($p[1] != '' ) echo "<p>".$p[1]."</p>"; ?>

                            <?php if($p[2] != '' ) echo "<p>".$p[2]."</p>"; ?>

                            <?php if($p[3] != '' ) echo "<p>".$p[3]."</p>"; ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cardWrap">
                            <div class="row">
                            <?php
                                $getPage_ = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE flag=$page_ID ORDER BY page_order ASC");
                                while($fetchPage_ =  mysqli_fetch_array($getPage_)){
                                    $pageID_ = $fetchPage_['page_ID'];

                                    $__h4 = $fun_obj->TextArray($pageID_, "h4");
                                    $__p = $fun_obj->TextArray($pageID_, "p");
                                    $__span = $fun_obj->TextArray($pageID_, "span");

                                    $span_ = @$__span[0] != '' ? "<span>".$__span[0]."</span>" : "";
                                    $div = '<div class="col-12 col-lg-12 mb-4">';
                                    $div .= '<div class="cardInnerOutlet">';
                                    $div .= '<div class="cardFlex">'; 
                                    $div .= '<h4>'. $__h4[0].'<span class="w-100 d-block">'.$span_.'</span></h4>';
                                    for($i = 0; $i < count($__p); $i++){
                                        $div .= "<p>".$__p[$i]."</p>";
                                    }
                                    $div .= '</div>';
                                    $div .= '</div>';
                                    $div .= '</div> ';                                   
                                    
                                    echo $div;
                                }
                                    
                            ?>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        
        <?php require("assets/footer-content.php"); ?>
        <?php require("assets/footer.php"); ?>
    </body>
</html>
