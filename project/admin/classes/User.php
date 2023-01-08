<?php

class User
{
    public  $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAllUsers()
    {
        $stmt =  $this->connection->prepare("select * from users order by id desc");

        $query = $stmt->execute();

        if ($query) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getUserById($id)
    {
        $stmt =  $this->connection->prepare("select * from users where id =:id");
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

        if ($data['image']['name'] != '') {
            $image_path = $this->upload($data);
        }

        $stmt =  $this->connection->prepare("insert into users(first_name,last_name,email, password,image_path) values(:first_name, :last_name, :email, :password, :image_path)");

        $stmt->bindParam(':first_name', $data['first_name']);
        $stmt->bindParam(':last_name', $data['last_name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
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

        $sql = "update users set first_name=:first_name , last_name=:last_name , email=:email where id=:id";

        if ($data['image']['error'] != UPLOAD_ERR_NO_FILE) {
            $image_path = $this->upload($data);
            unlink($previousImagePath);
            $sql = "update users set first_name=:first_name , last_name=:last_name , email=:email, image_path =:image_path where id=:id";
        }

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":first_name", $data['first_name']);
        $stmt->bindParam(":last_name", $data['last_name']);
        $stmt->bindParam(":email", $data['email']);
        if ($image_path != '')
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
        $stmt =  $this->connection->prepare("delete from users where id =:id");
        $stmt->bindParam(":id", $id);
        $query = $stmt->execute();

        if($query)
            return true;

        return false;
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
