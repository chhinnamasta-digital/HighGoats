<?php
include("../../webdesignbank-admin/php-function/function.php");
$tokenId = $_GET['pageId'];

$tokenPage_sel = $fun_obj->commonSelect_table("cms_pages", "page_ID^page_name^filename", "WHERE page_ID=$tokenId");
while($token_fetchPage =  mysqli_fetch_array($tokenPage_sel)){

    $token_pageID = $token_fetchPage['page_ID'];
    $token_pageName = $token_fetchPage['page_name'];
    $token_pageUrl = $token_fetchPage['filename'];
    $token_nameTrim = str_replace(" ", "-", strtolower($token_pageName));

    $token_future_h4 = $fun_obj->TextArray($token_pageID, "h4");
    $token_future_p = $fun_obj->TextArray($token_pageID, "p");
    
    if($token_future_h4[0] != '' ) { $token_h_4 = $token_future_h4[0]; }
    if($token_future_p[0] != '' ) { $token_future_p = $token_future_p[0]; }

    $token_img_select = $fun_obj->commonSelect_table(" cms_gallery ", "page_id^small_img", "WHERE page_id=$token_pageID AND flag='1' ORDER BY img_order ASC");
    $token_img_fetch = mysqli_fetch_array($token_img_select);
    $token_img_name = $token_img_fetch['small_img'];

    $token = '<div class="cardFlex grid_token">';
    $token .= '<img src="images/'.$token_nameTrim ."/".$token_img_name.'" alt="'.$token_pageName.'" />';
    $token .= "<h4>". $token_h_4 ."<h4>";
    $token .= "<p>". $token_future_p ."<p>";
    $token .= '</div>';
    echo $token;
}
?>