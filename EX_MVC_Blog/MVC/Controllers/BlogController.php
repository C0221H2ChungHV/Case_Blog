<?php


class BlogController extends Controller
{
    public function displaylist()
    {
        $list = $this->model("PostModel")->getAll();
        $this->view("Blog/list", $list);
    }

    public function addBlog()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $target = "Upload/";
            $file_name = basename($_FILES["image"]["name"]);
            $target_file = $target.$file_name;
            move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
            $blog = new Post($_POST['id'],$_POST['title'], $_POST['teaser'], $_POST['content'], $_POST['created'], $target_file, $_POST['category_id'], $_POST['author_id']);
            $this->model("PostModel")->add($blog);
        }
        $this->view("Blog/addBlog");
    }

    public function updateBlog($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $blog = $this->model("PostModel")->get($id);
            $this->view("Blog/update", ['blog' => $blog]);
        } else {
            $target = "Upload/";
            $file_name = basename($_FILES["image"]["name"]);
            $target_file = $target.$file_name;
            move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
            $blog = new Post($id, $_POST['title'], $_POST['teaser'], $_POST['content'], $_POST['created'], $target_file, $_POST['category_id'], $_POST['author_id']);
            $this->model("PostModel")->edit($blog);
            header('Location: index.php/?url=BlogController/displaylist');
        }
    }

    public function deleteBlog($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $blog = $this->model("PostModel")->get($id);
            $this->view("Blog/delete", $blog);

        } else {
            $this->model("PostModel")->delete($_POST['id']);
            header('Location: index.php/?url=BlogController/displaylist');
        }
    }

    public function BlogDetail($id)
    {
            $blog = $this->model("PostModel")->getdetail($id);
            $this->view("Blog/detail", $blog);
    }

    public function searchBlog()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST["title"];
            $result = $this->model("PostModel")->search($title);
            $this->view("Blog/list", $result);
        }
    }
    public function getBlogByName($name)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $blog = $this->model("PostModel")->getBlogByName($name);
            $this->view("Blog/list", $blog);
        }
    }
    public function getBlogByAuthor($name)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $blog = $this->model("PostModel")->getBlogByAuthor($name);
            $this->view("Blog/list", $blog);
        }
    }
}

