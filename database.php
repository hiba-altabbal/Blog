<?php
class Database {
    private $connection;

    // Method to connect to the database
    public function connect($host, $user, $password, $dbname) {
        $this->connection = new mysqli($host, $user, $password, $dbname);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Method to execute a query with prepared statements
    public function executeQuery($query, $params = []) {
        $stmt = $this->connection->prepare($query);
        if ($stmt === false){
            die("Prepare failed:".$this->connection->error);
        }

        if ($params) {
            $types = str_repeat('s', count($params)); //Assuming all params are strings
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();

        return $result;
    }

    // Method to fetch results as an array
    public function fetchArray($result) {
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Close the database connection
    public function close() {
        $this->connection->close();
    }
}
?>