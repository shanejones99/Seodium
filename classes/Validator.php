<?php
namespace App;

class Validator {
    public function validate($data) : array {
        $errors = [];
        $db = new Database();

        if (empty($data['name'])) {
            $errors['name'] = 'Name is required';
        }

        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Valid email is required';
        }elseif($db->checkIfEmailExists($data['email'])) {
            $errors['email'] = 'You can only sign up once for this raffle';
        }

        if (empty($data['date_of_birth'])) {
            $errors['date_of_birth'] = 'Date of birth is required';
        }

        return $errors;
    }
}
?>
