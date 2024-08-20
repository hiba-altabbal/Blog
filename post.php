<?php
require_once 'Database.php';

class Post {
    private $db;
    public $id;
    public $title;
    public $author;
    public $content;
    public $created_at;
    public $updated_at;

    public function __construct() {
        $this->db = new Database();
        $this->db->connect('localhost', 'root', '', 'blog_db');
    }

    // Method to create a new post
    public function create($title, $author, $content) {
        $query = "INSERT INTO posts (title, author, content) VALUES (?, ?, ?)";
        return $this->db->executeQuery($query, [$title, $author, $content]);
    }

    // Method to read a post by id
    public function read($id) {
        $query = "SELECT * FROM posts WHERE id = ?";
        $result = $this->db->executeQuery($query, [$id]);
        return $this->db->fetchArray($result);
    }

    // Method to update a post by id
    public function update($id, $title, $author, $content) {
        $query = "UPDATE posts SET title = ?, author = ?, content = ?, updated_at = CURRENT_TIMESTAMP WHERE id = ?";
        return $this->db->executeQuery($query, [$title, $author, $content, $id]);
    }

    // Method to delete a post by id
    public function delete($id) {
        $query = "DELETE FROM posts WHERE id = ?";
        return $this->db->executeQuery($query, [$id]);
    }

    // Method to list all posts
    public function listAll() {
        $query = "SELECT * FROM posts";
        $result = $this->db->executeQuery($query);
        return $this->db->fetchArray($result);
    }
}
?>