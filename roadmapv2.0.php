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
                                <li data-id="li-1">
                                    <img src="images/roadmap/federal.png" alt="" class="img-fluid" />                                    
                                    <!-- <div class='messageBox'>
                                        <h4>Community Code Audit</h4>
                                        <p>The greatest companies in the world are accountable to those who adore them. We hold ourselves to the standards expected of us by our ideological partners. </p>
                                    </div>                                            -->
                                </li>           
                                <li data-id="li-2">
                                    <img src="images/roadmap/first-store.png" alt="" class="img-fluid" />                                    
                                    <!-- <div class='messageBox'>
                                        <h4>2</h4>
                                        <p>The greatest companies in the world are accountable to those who adore them. We hold ourselves to the standards expected of us by our ideological partners. </p>
                                    </div>                                            -->
                                </li>           
                                <li class="active" data-id="li-3">
                                    <img src="images/roadmap/formulation.png" alt="" class="img-fluid" />                                    
                                    <!-- <div class='messageBox'>
                                        <h4>C3</h4>
                                        <p>The greatest companies in the world are accountable to those who adore them. We hold ourselves to the standards expected of us by our ideological partners. </p>
                                    </div>                                            -->
                                </li>
                            </ul>  
                        </div>                 
                    </div>
                </div>
            </div>
        </div>
    </section>
     
    <div class="messageBoxOutlet">
        <div class='messageBox' id="li-1">
            <h4>Community Code Audit</h4>
            <p>The greatest companies in the world are accountable to those who adore them. We hold ourselves to the standards expected of us by our ideological partners. </p>
            <a class="buttons" href="">view details</a>
        </div>  
        <div class='messageBox' id="li-2">
            <h4>Digital Incorporation</h4>
            <p>Formation of DAO and it’s associated duties, benefits.</p>
            <a class="buttons" href="">view details</a>
        </div>  
        <div class='messageBox' id="li-3">            
            <h4>Community Code Audit</h4>
            <p>The greatest companies in the world are accountable to those who adore them. We hold ourselves to the standards expected of us by our ideological partners. </p>
            <a class="buttons" href="">view details</a>
        </div>  
    </div>      
    <?php require("assets/footer.php"); ?>  
    
    <script>
        $(document).ready(function(){   

            let setScale = $(".mapMarkScroll>ul>li");
            let halfHeightDiv = $(".mapMarkScroll ul").outerHeight(); 
            console.warn("halfHeightDiv", halfHeightDiv);
            let windowScreen = $(window).height();
            let heightInPercentage = (halfHeightDiv / windowScreen) * 100;
        
            // OnClick icon            
            let toggleClassFun = () =>{
                // $(document).find(".roadMapBg").toggleClass("slideLeft");
                // $(".mapMarkScroll>ul>li.active> .messageBox").toggleClass("messageBoxMove");
            }

            $(document).on("click", ".mapMarkScroll>ul>li", function(){

                let offsetLi = $(this).offset().top;
                let setMarginTop = halfHeightDiv - offsetLi; 
                let getDataLiAttr = $(this).attr("data-id");
                $(document).find(".messageBoxOutlet #"+getDataLiAttr).addClass("active").siblings().removeClass("active");
                // console.warn("getDataLiAttr", getDataId);

                $(this).addClass("active").siblings().removeClass("active");                
                $(this).parents("ul").css({"margin-top":setMarginTop / 2 +"px"});
                $(this).siblings().css({"margin-top":"0px"})
                // if($(this).is('.active'))
                let prevSibligs = $(this).prev().length;
                // console.warn("prev siblings length", prevSibligs)

                if(prevSibligs > 0){
                    // $(this).prev().siblings().children("img").css({"transform":"scale(1)"})
                    $(this).prev().children("img").addClass("imgScale");                
                }
                else{
                    $(this).siblings().children("img").removeClass("imgScale");     
                }

                // roadMapBg move left
                // $(".roadMapBg").animate({left: "-20%"}, 100)
            })
        })
    </script>
</body>
</html>