<?php
    $page_ID = 5;
    require("assets/header.php");
?>
</head>
<body>
    <?php require("assets/navbar.php"); ?>
    <section class="roadMapMain">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="roadMapBg">
                        <div class="mapMarkScroll">
                            <ul>
                                <?php
                                    $activeLi = "";
                                    for($i = 0; $i < 5; $i++){
                                        if($i === 0){
                                            $activeLi = "active";
                                        } 
                                        else{
                                            $activeLi = "";
                                        }                                       
                                            
                                        echo"<li class='".$activeLi."'>
                                            <h2 class='text-center'>".$i."</h2>                                            
                                        </li>";
                                    }
                                ?>  
                            </ul> 
                            <div class='messageBox'>
                                <h4>Community Code Audit</h4>
                                <p>The greatest companies in the world are accountable to those who adore them. We hold ourselves to the standards expected of us by our ideological partners. </p>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require("assets/footer.php"); ?>  
    
    <script>
        $(document).ready(function(){   

            let setScale = $(".mapMarkScroll>ul>li");
            let halfHeightDiv = $(".mapMarkScroll ul").outerHeight() / 2; 

            $(".mapMarkScroll ul").scroll(function(){
                $(setScale).each(function(index, values){
                    let elmLiOffset = $(values).offset().top;
                    if(elmLiOffset <= halfHeightDiv + 50){ //find the center of Ul div when scroll 350px                 
                            $(values).addClass("active").siblings().removeClass("active");                
                    }
                })
            })

            // OnClick icon
            $(document).on("click", ".active>h2", function(){
                $(document).find(".roadMapBg").animate({left: -100}, 500);

            })
        })
    </script>
</body>
</html>