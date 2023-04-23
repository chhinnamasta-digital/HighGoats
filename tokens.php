<?php
    $page_ID = 4;
    require("assets/header.php");
?>
</head>
    <body>
        <?php require("assets/navbar.php"); ?>
        <section id="ourTokenSection" class="HomeWrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_text">
                            <?php if($h2[0] != '' ) echo "<h2>".$h2[0]."</h2>"; ?>
                            <?php if($p[0] != '' ) echo "<p>".$p[0]."</p>"; ?>
                            
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="heading_img">
                            <img src="<?=$imgPath?>token.png" alt="our past" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="heading_text">                            
                            <?php if($p[1] != '' ) echo "<p>".$p[1]."</p>"; ?>      
                            <?php if($p[2] != '' ) echo "<p>".$p[2]."</p>"; ?>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="cardWrap w-75 mx-auto">
                            <div class="row">                                
                            <?php
                                $getPage = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE flag=$page_ID ORDER BY page_order ASC");
                                while($fetchPage =  mysqli_fetch_array($getPage)){
                                    $pageID = $fetchPage['page_ID'];
                                    $pageName = $fetchPage['page_name'];
                                    $pageUrl = $fetchPage['filename'];

                                    $nameTrim = str_replace(" ", "-", strtolower($pageName));
                                    // echo $nameTrim;
                                    $future_h4 = $fun_obj->TextArray($pageID, "h4");
                                    $future_p = $fun_obj->TextArray($pageID, "p");
                                    
                                    if($future_h4[0] != '' ) { $h_4 = $future_h4[0]; }

                                    // get images
                                    $img_select = $fun_obj->commonSelect_table(" cms_gallery ", "page_id^small_img", "WHERE page_id=$pageID AND flag='1' ORDER BY img_order ASC");
                                    $img_fetch = mysqli_fetch_array($img_select);
                                    $img_name = $img_fetch['small_img'];

                                    $div = '<div class="col-12 col-lg-6 mb-4">';
                                    $div .= '<div class="cardInnerOutlet justify-content-center">';
                                    $div .= '<div class="cardFlex grid_token" data-id="'.$pageID.'">';
                                    $div .= '<img src="'.$imgPath.$nameTrim ."/".$img_name.'" alt="'.$pageName.'" />';
                                    $div .= "<h4>". $h_4 ."<h4>";
                                    $div .= '</div>';
                                    $div .= '</div>';
                                    $div .= '</div>';
                                    echo $div;
                                }                                
                            ?>
                            </div>           
                        </div>
                    </div>
                    <div class="tokenPup_up">
                        <div class="token_data">                            
                            <img src='<?=$imgPath?>cancel.png' class='close img-fluid' alt='Cancle' />
                            <div class="tokentContent">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="heading_text w-100 text-start"> 
                            <?php if($h2[1] != '' ) echo "<h2 class='text-left'>".$h2[1]."</h2>"; ?>
                            <?php if($p[3] != '' ) echo "<p>".$p[3]."</p>"; ?>
                            <?php if($p[4] != '' ) echo "<p>".$p[4]."</p>"; ?>
                            <?php if($p[5] != '' ) echo "<p>".$p[5]."</p>"; ?>
                        </div>
                    </div>
                    
                    
                </div>
            </div> 
        </section>
        
        <?php require("assets/footer-content.php"); ?>
        <?php require("assets/footer.php"); ?>
        
    </body>
</html>