<?php

class User {
    private $id;
    private $name;
    private $email;
    private $profile_picture;

    public function __construct($name, $email, $profile_picture = 'src/images/profile_picture/default.png') {
        $this->name = $name;
        $this->email = $email;
        $this->profile_picture = $profile_picture;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getProfilePicture() {
        return $this->profile_picture;
    }

    public function save($db) {
        if ($this->id) {
            // Update existing user
            $stmt = $db->prepare("UPDATE users SET name = ?, email = ?, profile_picture = ? WHERE id = ?");
            return $stmt->execute([$this->name, $this->email, $this->profile_picture, $this->id]);
        } else {
            // Create new user
            $stmt = $db->prepare("INSERT INTO users (name, email, profile_picture) VALUES (?, ?, ?)");
            if ($stmt->execute([$this->name, $this->email, $this->profile_picture])) {
                $this->id = $db->lastInsertId();
                return true;
            }
            return false;
        }
    }

    public function delete($db) {
        if ($this->id) {
            $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
            return $stmt->execute([$this->id]);
        }
        return false;
    }

    public static function findById($db, $id) {
        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $instance = new self($user['name'], $user['email'], $user['profile_picture']);
            $instance->id = $user['id'];
            return $instance;
        }
        return null;
    }
}