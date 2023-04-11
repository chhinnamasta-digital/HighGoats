<?php
    $page_ID = 5;
    require("assets/header.php");
?>
</head>
<body>
    <?php require("assets/navbar.php"); ?>
        <video autoplay muted loop id="ourPast_video" width='100%' class="roadMapBgVideo">
            <source src="<?=$imgPath?>video/roadVideo.mp4" type="video/mp4">
        </video>
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
                                            $activeLi = "";
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
                        </div>
                        
                        <div class='messageBox'>
                                <h4>Community Code Audit</h4>
                                <p>The greatest companies in the world are accountable to those who adore them. We hold ourselves to the standards expected of us by our ideological partners. </p>
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
                    if(elmLiOffset <= halfHeightDiv){ //find the center of Ul div when scroll 350px                 
                        $(values).addClass("active").siblings().removeClass("active");                
                    }
                })
            })

            // OnClick icon
            
            let toggleClassFun = () =>{
                $(document).find(".roadMapBg").toggleClass("slideLeft");
                $(".messageBox").toggleClass("messageBoxMove");
            }

            $(document).on("click", ".active>h2", function(){
                toggleClassFun();
            })
        })
    </script>
</body>
</html>