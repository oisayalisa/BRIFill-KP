<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PasswordHash
{
    public function hash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function verify($password, $hash)
    {
        return password_verify($password, $hash);
    }
}
