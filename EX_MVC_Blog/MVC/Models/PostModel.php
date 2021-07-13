<?php

class PostModel extends DB
{
    public function getAll()
    {
        $sql = "SELECT * FROM `ViewList`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add($blog)
    {
        $sql = "INSERT INTO Blog(`title`,`teaser`,`content`,`created`, `image`, `category_id`, `author_id`) VALUES (:title,:teaser,:content,:created, :image, :category_id, :author_id)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':title', $blog->title);
        $statement->bindParam(':teaser', $blog->teaser);
        $statement->bindParam(':content', $blog->content);
        $statement->bindParam(':created', $blog->created);
        $statement->bindParam(':image', $blog->image);
        $statement->bindParam(':category_id', $blog->category_id);
        $statement->bindParam(':author_id', $blog->author_id);
        $statement->execute();
    }

    public function edit($blog)
    {
        $sql = "UPDATE Blog SET `title` = :title, `teaser` = :teaser, `content` = :content, `created` = :created, `image` = :image, `category_id`= :category_id, `author_id`= :author_id WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':title', $blog->title);
        $statement->bindParam(':teaser', $blog->teaser);
        $statement->bindParam(':content', $blog->content);
        $statement->bindParam(':created', $blog->created);
        $statement->bindParam(':image', $blog->image);
        $statement->bindParam(':category_id', $blog->category_id);
        $statement->bindParam(':author_id', $blog->author_id);
        $statement->bindParam(':id', $blog->id);
        $statement->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM Blog WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        return $row;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM Blog WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function search($title)
    {
        $sql = "SELECT * FROM `ViewList` WHERE `title` LIKE '%$title%'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function getBlogByName($category_name)
    {
        $sql = "SELECT * FROM ViewList WHERE category_name = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$category_name);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getBlogByAuthor($name)
    {
        $sql = "SELECT * FROM ViewList WHERE name = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$name);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getdetail($id)
    {
        $sql = "SELECT * FROM ViewList WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        return $row;
    }
}

?>
