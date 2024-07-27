<?php
namespace App;

class Database {
    private $pdo;

    public function __construct() {
        $this->pdo = new \PDO('db host name', 'enter_user_name_here', 'this_is_not_my_real_password');
    }

    public function save($data) : int {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email_address, date_of_birth) VALUES (:name, :email, :date_of_birth)");
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':date_of_birth', $data['date_of_birth']);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

    public function checkIfEmailExists($email) : int {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM users WHERE email_address = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        
        return $count > 0;
    }
}
?>
