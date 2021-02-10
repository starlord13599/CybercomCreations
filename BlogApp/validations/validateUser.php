<?php
// phpcs:disable;
class ValidateUser
{

    public $fname;
    public $lname;
    public $phone;
    public $email;
    public $password1;
    public $password2;
    private $errors = [];

    public function __construct($data)
    {
        $this->fname = $data['fname'];
        $this->lname = $data['lname'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->password1 = $data['password1'];
        $this->password2 = $data['password2'];
    }

    public function validate()
    {
        $this->validateName();
        $this->validateEmail();
        $this->validatePhone();
        $this->validatePassword();
        return $this->errors;
    }

    public function validateName()
    {
        $val = trim($this->fname);
        if (empty($val)) {
            $this->addError('name', 'This field cannot be empty');
        } elseif (!preg_match("/^([a-zA-Z' ]+)$/", $val)) {
            $this->addError('name', 'Please enter your name in alphabets only');
        }
    }

    public function validateEmail()
    {
        $val = trim($this->email);

        if (empty($val)) {
            $this->addError('email', 'Email cannot be empty');
        } elseif (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
            $this->addError('email', 'Please enter a proper email with @');
        }
    }

    public function validatePhone()
    {
        $val = trim($this->phone);

        if (empty($val)) {
            $this->addError('phone', 'Phone number cannot be empty');
        } elseif (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $val)) {
            $this->addError('phone', 'Please enter and valid phone number');
        }
    }

    public function validatePassword()
    {
        $val1 = trim($this->password1);
        $val2 = trim($this->password2);

        if (empty($val1) or empty($val2)) {
            $this->addError('password', 'THis field cannot be empty');
        } elseif ($val1 != $val2) {
            $this->addError('password', 'The password didnt match in the both fields');
        }
    }

    public function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
}
