<?php
    $page_ID = 5;
    require("assets/header.php");
?>
</head>
    <body>
        <?php require("assets/navbar.php"); ?>
        <section id="ourPastSection" class="roadMapSection">            
            <div class="roadMapWrapper">
                <div class="roadMapBox"> 
                    <div class="row d-flex w-100 m-0">  
                        <div class='col-12'>                            
                            <div class="heading_text mt-5 pt-5 scaleParaGraph">
                                
                            </div>
                        </div>                                
                        <div class='road'>    
                            <div class="roadMileStone">
                                <ul>
                                    <?php
                                        $item = 0;
                                        for($i = 0; $i < 5; $i++){
                                           
                                        }

                                    ?>
                                    <li class='in-view'>
                                        <div class="imgBlock"></div>                                       
                                        <div class="messageBox">
                                            <span class="closeBox">X</span>
                                            <h4>Digital Incorporation</h4>
                                            <p>Formation of DAO and it’s associated duties, benefits.</p>
                                            <button class="messageBtn"><span>View Details</span></button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="imgBlock"></div>
                                       
                                        <div class="messageBox">
                                            <span class="closeBox">X</span>
                                            <h4>Community Code Audit</h4>
                                            <p>The greatest companies in the world are accountable to those who adore them. We hold ourselves to the standards expected of us by our ideological partners.</p>
                                            <button class="messageBtn"><span>View Details</span></button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="imgBlock"></div>
                                       
                                    </li>
                                    <li>
                                        <div class="imgBlock"></div>
                                       
                                    </li>
                                    <li>
                                        <div class="imgBlock"></div>
                                       
                                    </li>
                                </ul>
                            </div>
                        </div>       
                    </div>
                </div>
            </div>
        </section>
        <section class="roadMapOnLoad">
            <div class="container">
                <div class="row">
                    <div class="col-12">                                                   
                        <div class="mt-5 pt-5 roadMapTypography">
                            <h2>Technology</h2>
                            <h3>doesn't solve problems,</h3>
                            <h4>Technique does.</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="paragraphScale">
            <div class="container">
                <div class="row">
                    <div class="col-12"> 
                        <?php if($p[0] != '' ) echo "<p>".$p[0]."</p>"; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php require("assets/footer.php"); ?>
        <script>
            $(document).ready(function(){
                let h4Fade = $(document).find(".roadMapTypography>h4");
                let fadeDiv = $(document).find(".roadMapTypography");
                let paragraphScale = $(document).find(".paragraphScale");
                let roadMapOnLoad = $(document).find(".roadMapOnLoad");

                $(h4Fade).animate({opacity: 1}, 1000, function(){
                        $(setTimeout(() => {
                                $(fadeDiv).fadeOut();
                            }, 2000)
                        )
                    }
                )
                $(setTimeout(() => {
                    $(paragraphScale).fadeIn();
                    }, 3500)
                ) 
                $(setTimeout(() => {
                        $(roadMapOnLoad).fadeOut();
                        $(paragraphScale).css({"top": "0%", "z-index": 999});
                        // $(paragraphScale).filter("p").css({"transform": "scale(0.85)"});
                        $(paragraphScale).find("p").css({"transform": "scale(0.85)"});
                    }, 5000)                
                )              
            })
        </script>
    </body>
</html>
