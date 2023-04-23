<?php
    $page_ID = 3;
    require("assets/header.php");
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
                            <?php if($h2[0] != '' ) echo "<h2>".$h2[0]."<span>".$span[0]."</span></h2>"; ?>
                            <?php if($p[0] != '' ) echo "<p>".$p[0]."</p>"; ?>
                            
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="heading_img">
                            <img src="<?=$imgPath?>our-past.png" alt="our past" class="img-fluid invisible" />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="heading_text w-100">
                        <?php
                           $getPage = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE flag=$page_ID ORDER BY page_order ASC");
                            while($fetchPage =  mysqli_fetch_array($getPage)){
                                $pageID = $fetchPage['page_ID'];
                                $pageName = $fetchPage['page_name'];
                                $pageUrl = $fetchPage['filename'];

                                $future_h2 = $fun_obj->TextArray($pageID, "h2");
                                $future_span = $fun_obj->TextArray($pageID, "span");
                                $future_p = $fun_obj->TextArray($pageID, "p");

                                $span = @$future_span[0] != '' ? "<span>".$future_span[0]."</span>" : "";
                                echo"<div class='our-future mt-5 mb-5 pt-5 pb-5'>";
                                    if($future_h2[0] != '' ) echo "<h2>".$future_h2[0].$span."</h2>";
                                    for($i = 0; $i <= count($future_p); $i++){
                                        if(@$future_p[$i] != '' ) echo "<p>".$future_p[$i]."</p>";
                                    }
                                echo"</div>";
                            }
                                
                            ?>
                        </div>
                    </div>

                    
                    <?php /* <div class="col-12">
                        <div class="cardWrap">
                            <div class="row">
                                <?php
                                $getPage_ = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE flag=2 ORDER BY page_order ASC");
                                while($fetchPage_ =  mysqli_fetch_array($getPage_)){
                                    $pageID_ = $fetchPage_['page_ID'];

                                    $__h4 = $fun_obj->TextArray($pageID_, "h4");
                                    $__p = $fun_obj->TextArray($pageID_, "p");
                                    $__span = $fun_obj->TextArray($pageID_, "span");

                                    $span_ = @$__span[0] != '' ? "<span>".$__span[0]."</span>" : "";
                                    $div = '<div class="col-12 col-lg-4 mb-4">';
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
                    </div> */?>
                </div>
            </div> 
        </section>
        
        <?php require("assets/footer-content.php"); ?>
        <?php require("assets/footer.php"); ?>
                   
           
        <?php /* <div class="animateText"> 
            <?php
                $getPageAnimate = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE flag=$page_ID ORDER BY page_order ASC limit 3");
                while($fetchPageAnimate =  mysqli_fetch_array($getPageAnimate)){
                    $pageIDAnimate = $fetchPageAnimate['page_ID'];

                    $animate_h2 = $fun_obj->TextArray($pageIDAnimate, "h2");
                    $animate_span = $fun_obj->TextArray($pageIDAnimate, "span");

                    $span_ = @$animate_span[0] != '' ? "<span>".$animate_span[0]."</span>" : "";
                    echo"<div class='our-future mt-5 mb-5 pt-5 pb-5 animateHeading cssClass'>";
                        if($animate_h2[0] != '' ) echo "<h2>".$animate_h2[0].$span_."</h2>";
                       
                    echo"</div>";
                }
                    
            ?>
        </div> */?>
    </body>
</html>
