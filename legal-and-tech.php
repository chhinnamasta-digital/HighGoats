<?php
    $page_ID = 6;
    require("assets/header.php");
?>
</head>
    <body>
        <?php require("assets/navbar.php"); ?>
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
                            <img src="<?=$imgPath?>legal.png" alt="our past" class="img-fluid" />
                        </div>
                        <div class="heading_text">
                            <?php if($p[1] != '' ) echo "<p>".$p[1]."</p>"; ?>
                            <?php if($p[2] != '' ) echo "<p>".$p[2]."</p>"; ?>
                            
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="heading_text w-100">
                        <?php
                           /* $getPage = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE flag=$page_ID ORDER BY page_order ASC");
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
                              */  
                            ?>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section>
            <div class="container">
                <div class="row filterMainGrid">
                    <div class="col-12 col-lg-4">
                        <div class="contentIndex">
                            <h4>Contents</h4>
                            <ul>
                                <li class="active">News From Us</li>
                                <li>Covid-19 Contents</li>
                                <li>Legal Mail</li>
                                <li>Legal Developments</li>
                                <li>Podcasts</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="contenttext">
                            <ul>
                                <li>
                                    <div class="textLeft">
                                        <p>Illegible Enterprises: DAOs, Unwrapped (Part 2)</p>
                                    </div>
                                    <div class="textRight">
                                        <p>Illegible Enterprises: DAOs,</p>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="textLeft">
                                        <p>Illegible Enterprises: DAOs, Unwrapped (Part 2)</p>
                                    </div>
                                    <div class="textRight">
                                        <p>Illegible Enterprises: DAOs,</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="textLeft">
                                        <p>Illegible Enterprises: DAOs, Unwrapped (Part 2)</p>
                                    </div>
                                    <div class="textRight">
                                        <p>Illegible Enterprises: DAOs,</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require("assets/footer-content.php"); ?>
        <?php require("assets/footer.php"); ?>
    </body>
</html>
