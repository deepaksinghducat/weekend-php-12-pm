<?php

/**
 * 
 * PHP Connect to PDOL
 * 
 */

/**
 * Open a Connection to MySQL
 * 
 * 
 * connect to the database
 * $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
 * 
 * set attributes
 * 
 * $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 * 
 * close the connection
 * $conn = null
 * 
 * 
 */

 $connection = new PDO("mysql:host=localhost;dbname=crud", 'root', '');

//  var_dump($connection);

//  $connection = null;

//  var_dump($connection);


/**
 * 
 * Create a Database
 * 
 * creates a new database
 * $sql = "CREATE DATABASE myDB";
 * $conn->exec($sql); if false generate exception
 *  
 */

//  $sql = "create database crud";

//  $query = $connection->exec($sql);

//  var_dump($query);


/**
 * 
 * Create a Table
 * 
 * 
 * creates a new table
 * 
 * $sql = "CREATE TABLE MyGuests ( 
 *   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 *   firstname VARCHAR(30) NOT NULL, 
 *   lastname VARCHAR(30) NOT NULL, 
 *   email VARCHAR(50),
 *   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 * )";
 * 
 * $conn->exec($sql); if false generate exception
 * 
 * 
 */

//  $sql = "create table students( id int auto_increment primary key, name varchar(50))";

//  $query =  $connection->exec($sql);

//  var_dump($query);


/**
 * 
 * Insert data in a Table
 *
 * 
 * insert new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * 
 * $conn->exec($sql) if false generate exception 
 * 
 * 
 */

//  $sql = "insert into students(name) values('John')";

//  $query = $connection->exec($sql);

//  var_dump($query);

 
/**
 * 
 * Get last id after Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert  new data
 * $sql = " INSERT INTO MyGuests ( firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
 * $conn->exec($sql) 
 * 
 * $id = $conn->lastInsertId()  
 * 
 * 
 */

// $sql = "insert into students(name) values('deepak')";

// $query = $connection->exec($sql);

// echo $connection->lastInsertId();

// var_dump($query);


/**
 * 
 * Multiple Insert data in a Table
 * 
 * Object-oriented
 * 
 * insert  new datas
 *
 * begin the transaction
 * $conn->beginTransaction();
 * 
 * $sql = "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('John', 'Doe', 'john@example.com');";
 * 
 * $conn->exec($sql);
 * 
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Mary', 'Moe', 'mary@example.com');";
 * 
 * $conn->exec($sql);
 * 
 * $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
 * VALUES ('Julie', 'Dooley', 'julie@example.com')";
 * 
 * $conn->exec($sql);
 * 
 * $conn->commit();
 * 
 * if any error occur
 * 
 * $conn->rollback() 
 * 
 * 
 */

//  $sql = "insert into students(name) values('jyoti'), ('dummy')";

//  $query = $connection->exec($sql);

//  var_dump($query);


/**
 * 
 * Select data in a Table
 * 
 * Object-oriented
 * 
 * Select data
 * $sql = "SELECT id, firstname, lastname FROM MyGuests";
 * $conn->prepare($sql); returns true or false 
 * 
 * $stmt->execute()
 * 
 * if true
 * $result = $stmt->fetchAll(PDO::FETCH_ASSOC)
 * 
 * 
 * 
 */

//  $sql = "select * from students";

//  $stmt = $connection->prepare($sql);

//  $query = $stmt->execute();

//  var_dump($query);

//  $data =  $stmt->fetchAll(PDO::FETCH_ASSOC);

//  echo "<pre>";
//  var_dump($data);



/**
 * 
 * Select data by where in a Table
 * 
 * Object-oriented
 * 
 * select data by where
 * 
 * $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
 * $conn->prepare($sql);
 * 
 * $stmt->execute() returns true or false 
 * 
 * if true
 * $result = $stmt->fetchAll(PDO::FETCH_ASSOC)
 * 
 */
 
//  $sql = "select * from students where id = 1";

//  $stmt = $connection->prepare($sql);

//  $query = $stmt->execute();

//  var_dump($query);

//  $data =  $stmt->fetchObject();

//  echo "<pre>";
//  var_dump($data);

/**
 * 
 * Select data by Order By in a Table
 * 
 * Object-oriented
 * 
 * select data by Order By
 * $sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
 * $conn->prepare($sql); 
 * 
 * $stmt->execute() returns true or false 
 * 
 * if true
 * $result = $stmt->fetchAll(PDO::FETCH_ASSOC)
 * 
 */

//   $sql = "select * from students order by id desc";

//  $stmt = $connection->prepare($sql);

//  $query = $stmt->execute();

//  $data =  $stmt->fetchAll(PDO::FETCH_ASSOC);

//  echo "<pre>";
//  print_r($data);


/**
 * 
 * Delete data  in a Table
 *
 * 
 * delete data
 * $sql = "DELETE FROM MyGuests WHERE id=3";
 * $conn->exec($sql); returns true or false 
 * 
 * 
 */

//  $sql = "delete from students where id = 1";

//  $query = $connection->exec($sql);

//  var_dump($query);


/**
 * 
 * Update data in a Table
 * 
 * 
 * Update new data
 * $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
 * $stmt = $conn->prepare($sql);
 * 
 * $stmt->execute(); returns true or false 
 * 
 * if true 
 * data is updated
 * 
 * 
 */

//  $sql = "update students set name = 'testing' where id = 2";

//  $stmt = $connection->prepare($sql);

//  $query = $stmt->execute();

// $query = $connection->exec($sql);

// var_dump($query);


/**
 * 
 * Prepared Statement
 * 
 * Object-oriented
 * 
 * creates a statement
 * $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)  VALUES (:firstname, :lastname, :email)");
 * 
 * bind parameters
 *  $stmt->bindParam(':firstname', $firstname);
 *  $stmt->bindParam(':lastname', $lastname);
 *  $stmt->bindParam(':email', $email);
 * 
 * execute statement
 * $stmt->execute();
 * 
 * fetch result
 * $myrow = $stmt->fetchAll();
 * 
 * 
 */

//  $id = 2;

//  $sql = "select * from students where id=:id";

//  $stmt =  $connection->prepare($sql);

//  $stmt->bindParam(":id", $id);

//  $query = $stmt->execute();

// var_dump($query);

// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $data = $stmt->fetchObject();

// echo '<pre>';

// var_dump($data);



