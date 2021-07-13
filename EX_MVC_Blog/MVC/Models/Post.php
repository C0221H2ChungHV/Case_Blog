<?php

class Post
{
    public $id;
    public $title;
    public $teaser;
    public $content;
    public $created;
    public $image;
    public $category_id;
    public $author_id;


    public function __construct($id, $title, $teaser, $content, $created,$image,$category_id, $author_id)
    {
        $this->id = $id;
        $this->title = $title;
        $this->teaser = $teaser;
        $this->content = $content;
        $this->created = $created;
        $this->image = $image;
        $this->category_id = $category_id;
        $this->author_id = $author_id;
    }
}

?>