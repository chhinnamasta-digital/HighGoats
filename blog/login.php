<?php include("header.php"); ?>
<div class="blogLoginWrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact_form">
                    <form  method="post" id="blogForm" action="<?= $_SERVER['PHP_SELF'] ?>">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="blogusername" name="blogusername" placeholder="User Name" required />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="bloguserpassword" name="bloguserpassword"  placeholder="Password" required />
                        </div>
                        <button type="submit" class="btn submit_btn">Login</button>
                    </form>
                    <div class="errorMess"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#blogForm").on("submit", function(e){
            e.preventDefault();
            let blogusername = $("#blogusername").val();
            let bloguserpassword = $("#bloguserpassword").val();
            if(blogusername != "" && bloguserpassword != ""){
                // console.warn("blogusername", blogusername);
                // console.warn("bloguserpassword", bloguserpassword);
                $.post("ajax-response/loginSuccess.php", {blogusername: blogusername, bloguserpassword: bloguserpassword}, 
                    function(result){
                        let outPut = JSON.parse(result);
                        if(outPut.status == 1){
                            window.location.href = "index.php";//<- your url here
                        }
                        else{
                            $(".errorMess").html(`<p>${outPut.message}</p>`)
                        }
                    }
                )
            }
            else{
                console.warn("All fields are required");
            }
        })
    })
</script>