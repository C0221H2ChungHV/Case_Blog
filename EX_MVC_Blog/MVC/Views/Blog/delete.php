<?php
require_once "MVC/Views/Layout/header.php";
require_once "MVC/Views/Layout/heardbar.php";
?>


<form action="" method="post">
    <h3>Do you want delete this blog ?</h3>
    <div class="mb-3">
        <input type="number" class="form-control" name="id" id="formGroupExampleInput" placeholder="ID" value="<?php echo $data->id ?>" hidden>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Tile</label>
        <input type="text" class="form-control" name="title"  value="<?php echo $data->title ?>" id="formGroupExampleInput" placeholder="Product's name">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Teaser</label>
        <input type="text" class="form-control" name="teaser" value="<?php echo $data->teaser ?>" id="formGroupExampleInput2" placeholder="Price">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Content</label>
        <input type="text" class="form-control" name="content" value="<?php echo $data->content ?>" id="formGroupExampleInput2" placeholder="Describe">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Created</label>
        <input type="date" class="form-control" name="created" value="<?php echo $data->created ?>" id="formGroupExampleInput2" placeholder="Producer">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">categoryid</label>
        <input type="number" class="form-control" name="category_id" value="<?php echo $data->category_id ?>" id="formGroupExampleInput2" placeholder="category_id">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">categoryid</label>
        <input type="number" class="form-control" name="author_id" value="<?php echo $data->author_id ?>" id="formGroupExampleInput2" placeholder="author_id">
    </div>
    <button class="btn btn-danger" name="deleteProduct">Delete</button>
    <a href="index.php?url=BlogController/displaylist" class="btn btn-primary">Cancel</a>
</form>
<?php
include_once "MVC/Views/Layout/footer.php"
?>
