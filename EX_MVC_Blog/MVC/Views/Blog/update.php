<?php
require_once "MVC/Views/Layout/header.php";
require_once "MVC/Views/Layout/heardbar.php";
?>



<form action="http://localhost/M2/LS21/EX_MVC_Blog/index.php?url=BlogController/updateBlog/<?php echo $data['blog']['id'] ?>" method="post" enctype="multipart/form-data">
    <h3>Update Blog</h3>
    <div>
        <label>Title</label>
        <input type="text" name="title"  value="<?php echo $data['blog']['title'] ?>" placeholder="Blog Title">
    </div>
    <div>
        <label>Teaser</label>
        <input type="text" name="teaser" value="<?php echo $data['blog']['teaser'] ?>" placeholder="teaser">
    </div>
    <div>
        <label>Content</label>
        <input type="text" name="content" value="<?php echo $data['blog']['content'] ?>" placeholder="content">
    </div>
    <div>
        <label>Created</label>
        <input type="date" name="created" value="<?php echo $data['blog']['created'] ?>" placeholder="created">
    </div>
    <div>
        <label >Image</label>
        <input type="file" name="image" value="<?php echo $data['blog']['image'] ?>"placeholder="image">
    </div>
    <div>
        <label >Category_ID</label>
        <input type="number" name="category_id" value="<?php echo $data['blog']['category_id'] ?>"placeholder="category_id">
    </div>
    <div>
        <label >Author_ID</label>
        <input type="number" name="author_id" value="<?php echo $data['blog']['author_id'] ?>"placeholder="author_id">
    </div>
    <button name="addBlog" type="submit">Update</button>
</form>
<?php
include_once "MVC/Views/Layout/footer.php";
?>