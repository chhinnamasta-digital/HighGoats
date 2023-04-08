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
                                            
                                        echo"<li class='".$activeLi."'><h2 class='text-center'>".$i."</h2></li>";
                                    }
                                ?>  
                            </ul>        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require("assets/footer.php"); ?>  
    
    <script>
        $(document).ready(function(){
            
        })
    </script>
</body>
</html>