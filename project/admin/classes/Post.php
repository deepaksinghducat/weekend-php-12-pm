<?php

class Post
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAllPosts()
    {
        $stmt =  $this->connection->prepare("select * from posts order by id desc");

        $query = $stmt->execute();

        if ($query) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getPostById($id)
    {        
        $stmt =  $this->connection->prepare("select * from posts where id =:id");
        $stmt->bindParam(":id", $id);
        $query = $stmt->execute();

        if ($query) {
            return $stmt->fetchObject();
        }

        return null;
    }

    public function store($data)
    {
        $image_path = '';

        if($data['image']['name'] != '') {
            $image_path = $this->upload($data);
        }

        $stmt =  $this->connection->prepare("insert into posts(name,description,image_path) values(:name, :description, :image_path)");

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':image_path', $image_path);

        $query = $stmt->execute();

        if ($query) {
            return true;
        }

        return false;
    }

    public function update($id, $data)
    {
        $image_path = '';

        $previousImagePath = $data['previous_image_path'];

        $sql = "update posts set name=:name , description=:description where id=:id";

        if ($data['image']['error'] != UPLOAD_ERR_NO_FILE) {
            $image_path = $this->upload($data);
            unlink($previousImagePath); 
            $sql = "update posts set name=:name , description=:description, image_path =:image_path where id=:id";   
        }
        
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":description", $data['description']);
        if($image_path != '')
            $stmt->bindParam(":image_path", $image_path);

        $stmt->bindParam(":id", $id);

        $query = $stmt->execute();
        
        if ($query) {
            return true;
        }

        return false;        
    }

    public function delete($id)
    {
        
    }

    public function upload($data)
    {
        $imageName = $data['image']['name'];

        $tmpname = $data['image']['tmp_name'];

        $randomname = md5(rand(0, 20));

        $ext =  pathinfo($data['image']['name'], PATHINFO_EXTENSION);

        $dir = "uploads/" . $randomname . "." . $ext;

        $imagepath = '';

        if (move_uploaded_file($tmpname, $dir)) {
            $imagepath = $dir;
        }

        return $imagepath;
    }
}