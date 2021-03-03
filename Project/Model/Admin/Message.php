<?php

Mage::loadFileByClassName('model_admin_session');

class Model_Admin_Message extends Model_Admin_Session
{

    public function __construct()
    {
        parent::__construct();
    }

    public function setSuccess($message)
    {
        $this->success = $message;
        return $this;
    }

    public function getSuccess()
    {
        return $this->success;
    }

    public function setFailure($message)
    {
        $this->failure = $message;
        return $this;
    }

    public function getFailure()
    {
        return $this->failure;
    }
}
