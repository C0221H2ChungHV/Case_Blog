<?php
require_once "MVC/Views/Layout/header.php";
require_once "MVC/Views/Layout/heardbar.php";
?>
    <body>
    <div class="container">
        <div class="row">
            <!-- Latest Posts -->
            <main class="posts-listing col-lg-8">
                <div class="container">
                    <div class="row">
                <?php for ($i = 0; $i < count($data); $i++): ?>
                        <!-- post -->
                        <div class="post col-xl-6">
                            <div class="post-thumbnail"><a href="http://localhost/M2/LS21/EX_MVC_Blog/index.php/?url=BlogController/BlogDetail/<?php echo $data[$i]['id'] ?>"><img src="http://localhost/M2/LS21/EX_MVC_Blog/<?php echo $data[$i]['image'] ?>" alt="..." class="img-fluid"></a></div>
                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="date meta-last"><?php echo $data[$i]["created"]; ?></div>
                                    <div class="category"><a href="http://localhost/M2/LS21/EX_MVC_Blog/index.php/?url=BlogController/getBlogByName/<?php echo $data[$i]['category_name'] ?>"><?php echo $data[$i]['category_name'] ?></a></div>
                                </div><a href="http://localhost/M2/LS21/EX_MVC_Blog/index.php/?url=BlogController/BlogDetail/<?php echo $data[$i]['id'] ?>">
                                    <h3 class="h4"><?php echo $data[$i]['title']; ?></h3></a>
                                <p class="text-muted"><?php echo $data[$i]["teaser"]; ?></p>
                                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="title"><a href="http://localhost/M2/LS21/EX_MVC_Blog/index.php/?url=BlogController/getBlogByAuthor/<?php echo $data[$i]['name'] ?>"><span><?php echo $data[$i]['name'] ?></span></div></a>
                                        <div class="date"><a href="index.php/?url=BlogController/updateBlog/<?php echo $data[$i]['id'] ?>" class="btn btn-success btn-sm">Update</a></div>
                                        <div class="date"><a href="index.php/?url=BlogController/deleteBlog/<?php echo $data[$i]['id'] ?>" class="btn btn-danger btn-sm">Delete</a></div>
                                </footer>
                            </div>
                        </div>

                    <?php endfor; ?>
                    <!-- Pagination --> </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-template d-flex justify-content-center">
                            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a href="#" class="page-link active">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>

                </div>
            </main>
    <!-- Page Footer-->

    </body>
<?php
include_once "MVC/Views/Layout/footer.php"
?>