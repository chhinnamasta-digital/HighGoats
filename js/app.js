$(function(){
	
	// $(".heading_img>img").css({"top":0, "right": 0});
	if($(window).width() > 767){
		setTimeout(() =>{
			$(".login .signatureImg img").animate({top: 0}, 700,  function(){
				$("#homeBtn, #video_1").fadeIn();})
			
		}, 1500);
	
	
		$(document).on("click", ".linkButton", function(e){
			e.preventDefault();

			let this_ = $(this);
			let signatureImg = $(".session_ .row>.signatureImg");
			let signatureText = $(".session_ .row>.signatureText");
			$(".signUp").fadeIn();
			$(this).closest("#homeBtn").fadeOut();

		})
			$("#iconBar").animate({opacity: 1}, 1000);
			$(".session_ .row>.signatureImg>img").animate({marginLeft: 640}, 1000);
			$(".session_ .row>.signatureText").animate({left: 0, zIndex: 999}, 1000, function(){
			$(this).css({"opacity": 1, "transition":"all linear 0.5s"});
				});

			$(".row>.signatureBtnBlock").animate({bottom: 0, opacity: 1}, 1000);
			$("#video_2").fadeIn();

		$(".animateText>.animateHeading:first-child").addClass("active");	

		function changeClass() {
			if ($(".animateText>.animateHeading.active").next(".cssClass").length > 0) {
				$(".animateText>.animateHeading.active").removeClass("active").next(".cssClass").addClass("active");
			}
			else {
				$(".animateText, #ourFuture_video").fadeOut();
				
			// 	$(".animateText>.animateHeading.active").removeClass("active");
			// 	$(".cssClass").first().addClass("active");
			}

			setTimeout(changeClass, 1500); // 2000ms = 1sec
		}
		setTimeout( () =>{

			changeClass();
		}, 3000)
	}

	// Icon bar function
	$(document).on("click", "#iconBar>a", function(e){
		e.preventDefault();
	  $("#iconBar>a>img").toggleClass("iconRotate");
	  $(".menuItems").fadeToggle();
	})
	
	


	
	$(document).on("click", ".cardInnerOutlet >.grid_token", function(){
		$(".tokenPup_up").fadeIn();

		let _curentId = $(this).attr("data-id");
		$.ajax({
			url: "assets/ajax/tokenData.php",
			type: "GET",
			data: {pageId: _curentId},
			success: function(result){
			$(".tokentContent").html(result);

				console.log(result);
			}
		})
	});

	// close grid
	$(document).on("click", ".token_data>img.close", function(){
		$(".tokenPup_up").fadeOut();
	})

	
    // Contact us form
    $("#formId").on("submit", function(e){       

        let inputName = $("#inputName").val();
        let inpuEmail = $("#inpuEmail").val();
        let Message = $("#Message").val();
        let _htmlBody = $("html, body");

        // validation
        if(inputName == "" || inpuEmail == "" || Message == ""){
            if(inputName == ""){
                $("#inputName").addClass("boxShadow");
                $(_htmlBody).animate({scrollTop: $("#inputName").offset().top - 80+"px"}, 1000);          

                return false;
            }
            else{
                $("#inputName").removeClass("boxShadow");
            }
            
            if(inpuEmail == ""){
                $("#inpuEmail").addClass("boxShadow");
                $(_htmlBody).animate({scrollTop: $("#inpuEmail").offset().top - 80+"px"}, 1000);
                return false;
            }
            else{
                $("#inpuEmail").removeClass("boxShadow");
            }
            
            if(Message == ""){
                $("#Message").addClass("boxShadow");
                $(_htmlBody).animate({scrollTop: $("#Message").offset().top - 80+"px"}, 1000);
                return false;
            }
            else{
                $("#Message").removeClass("boxShadow");
            }
        }
        else{
			$.ajax({
				type: "POST",
				url: "assets/form-submit-ajax.php",
				data: {
					fname: inputName,
					email: inpuEmail,
					message: Message,
					token_generate: $("#token_generate").val()
				},                    

				success: function(response){
					if(response == 1){
						$(".contact-us-form .row>.col-6").css({"opacity" : 0});
						$(".contact-us-form .row>.col-6").animate({width: "0px", height: "0px"}, 2000, function(){							
							$(".allRight").fadeIn();
						});
						$("#formId").trigger('reset');
						
					}
					else{
						alert(response);
						//$(".contact-us-form .row>.col-6").removeClass("reduceHeight");						
					}
				}
				
			})
        }
        e.preventDefault();
    }) 
	let ParentUl = $(document).find(".roadMileStone>ul").children("li");
	let menuNav = $(document).find(".menuNav");
	let roadOveflow = $(document).find(".road");

	for(let i = 0; i < ParentUl.length; i++){
		$(ParentUl[i]).on("click", ".imgBlock", function(){
			let messageBoxLenght = $(this).next(".messageBox");
			if(messageBoxLenght.length > 0 ){
				$(ParentUl[i]).addClass("active").siblings().removeClass("active");
				$(menuNav).css({"z-index": 99});
				$(roadOveflow).css({"overflow-y": "hidden"});
			}
			
			$(this).parents("ul").children("li").each(function(index, value){
				let getImgBlock = $(value).find(".imgBlock");
				if($(value).is(".active")){
					OnMouseOver(getImgBlock);
				}
				else{
					OnMouseLeave(getImgBlock);
				}
			})
		})
		
		
		$(document).on("click", ".closeBox", function(){
			$(ParentUl[i]).removeClass("active");
			$(menuNav).css({"z-index": 10000});
			$(roadOveflow).css({"overflow-y": "scroll"});

			OnMouseLeave(".imgBlock");
		})
	}
	
	function OnMouseOver(elmnt){
		$(elmnt).css({"background": "url('images/mapmarkGreen.png') no-repeat top center", "width": "80px", "width": "80px", "background-size": "contain"})
	}
	function OnMouseLeave(elmnt){
		$(elmnt).css({"background": "url('images/mapmark.png') no-repeat top center"})
	}


	// Road Map icon on Scroll
	let onScrollMapElm = $(document).find(".roadMileStone>ul").children("li");
	

	$(".road").scroll(function(){
		let scrollTop = $(".road").scrollTop();
		// console.warn("scrollTop", scrollTop);

		for(let i = 0; i < onScrollMapElm.length; i++){
			let offsetElem =  $(onScrollMapElm[i]).offset().top;
			let outerHeightElm =  $(onScrollMapElm[i]).outerHeight();

			// console.warn(i,"onScrollMapElm", offsetElem);
			// console.warn(i,"outerHeightElm", outerHeightElm + offsetElem);
		}
	})
})