<section id="menuPosition">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="menuNav">
                    <div id="iconBar" class="<?= $page_ID === 1 ? 'opacityClass' : ''; ?>">
                        <a href="#">
                            <img src="<?=$imgPath ?>bar-icon.png" alt="Menu" class="img-fluid d-block ms-auto" />                            
                        </a>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
    <div class="menuItems">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <ul>
                        <?php
                            $navItems = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE for_menu='active' ORDER BY page_order ASC");
                            while($fetchAll =  mysqli_fetch_assoc($navItems)){
                                $pageName = $fetchAll['page_name'];
                                $pageUrl = $fetchAll['filename'];
                                if($fetchAll['page_name'] == "index"){
                                    $pageName ="Home";
                                }
                            
                        ?>
                            <li class="itemLinks">
                                <a data-text="<?=$pageName?>" href="<?=$website_domain.$pageUrl?>" ><?=$pageName?></a>
                            </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-4 d-none d-lg-block">
                    <img src="<?=$imgPath?>menuBg.png" alt="Globe" class='img-fluid w-75'>
                </div>
            </div>
        </div>
    </div>    
</section>
               
                