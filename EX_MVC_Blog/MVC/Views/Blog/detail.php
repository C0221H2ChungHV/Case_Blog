<?php
require_once "MVC/Views/Layout/header.php";
require_once "MVC/Views/Layout/heardbar.php";
?>

<body>
<div class="container">
    <div class="row">
        <main class="post blog-post col-lg-8">
            <div class="container">
                <div class="post-single">
                    <div class="post-thumbnail"><img src="http://localhost/M2/LS21/EX_MVC_Blog/<?php echo $data['image']?>" alt="..." class="img-fluid"></div>
                    <div class="post-details">
                        <div class="post-meta d-flex justify-content-between">
                            <div class="category"><a href="http://localhost/M2/LS21/EX_MVC_Blog/index.php/?url=BlogController/getBlogByName/<?php echo $data['category_name'] ?>"><?php echo $data["category_name"]?></a></div>
                        </div>
                        <h1><?php echo $data['title']; ?><i class="fa fa-bookmark-o"></i></h1>
                        <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
                                <div class="title"><a href="http://localhost/M2/LS21/EX_MVC_Blog/index.php/?url=BlogController/getBlogByAuthor/<?php echo $data['name'] ?>"><span><?php echo $data['name'] ?></span></a></div>
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="date"><i class="icon-clock"></i><?php echo $data['created'] ?></div>
                                <div class="views"><i class="icon-eye"></i> 500</div>
                                <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                            </div>
                        </div>
                        <div class="post-body">
                            <?php echo $data['content'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>
</body>
<?php
include_once "MVC/Views/Layout/footer.php"
?>
