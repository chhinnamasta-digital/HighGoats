<?php
    session_start();
    if(!isset($_SESSION['blogUser']) && ($_SESSION['blogUser'] == "")){
        header("Location:login.php");
    }
?>
<?php include("header.php"); ?>
<body>
    <a href="logout.php">logout</a>
    <section class="blogHome">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blogContentBlck">
                        <div class="blogPostForm">
                            <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
                                <select name="blogName" id="blogName">
                                    <option value="">select</option>
                                    <option value="">blog1</option>
                                    <option value="">blog2</option>
                                    <option value="">blog3</option>
                                </select>
                                <input type="text" name="" id="" placeholder="Heading" />
                                <textarea name="" id="" cols="30" rows="10"></textarea>
                                <button type="submit">Add Blog</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>