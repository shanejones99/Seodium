<?php
namespace App;

require 'Validator.php';
require 'Database.php';

class FormHandler {
    private $validator;
    private $database;

    public function __construct() {
        $this->validator = new Validator();
        $this->database = new Database();
    }

    public function processForm($data) {
        $errors = $this->validator->validate($data);

        if (empty($errors)) {
            $insertedId = $this->database->save($data);
        }
        
        return ['errors' => $errors, 'insertedID' => $insertedId ?? null];
    }
}
?>
