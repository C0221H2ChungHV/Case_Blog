<?php
require_once "MVC/Views/Layout/header.php";
require_once "MVC/Views/Layout/heardbar.php";
?>
<form action="" method="post" enctype="multipart/form-data">
    <h3>Add new BLog</h3>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">ID</label>
        <input type="number" class="form-control" name="id" id="formGroupExampleInput" placeholder="ID">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Title">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Teaser</label>
        <input type="text" class="form-control" name="teaser" id="formGroupExampleInput2" placeholder="Teaser">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Content</label>
        <input type="text" class="form-control" name="content" id="formGroupExampleInput2" placeholder="Content">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Created</label>
        <input type="date" class="form-control" name="created" id="formGroupExampleInput2" placeholder="Created">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Image</label>
        <input type="file" class="form-control" name="image" id="formGroupExampleInput2" placeholder="image">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Category_ID</label>
        <input type="number" class="form-control" name="category_id" id="formGroupExampleInput2" placeholder="Category">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Author_ID</label>
        <input type="number" class="form-control" name="author_id" id="formGroupExampleInput2" placeholder="Category">
    </div>
    <button class="btn btn-primary" name="addProduct"><a href="index.php?url=BlogController/displaylist"></a>Add</button>
</form>
<?php
include_once "MVC/Views/Layout/footer.php"
?>