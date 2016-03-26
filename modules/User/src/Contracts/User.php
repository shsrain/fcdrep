<?php

namespace User\Contracts;

interface User{

    public function login($userName,$password);
    
    public function logout();
    
    public function register();
    
    public function generateUserId();

    public function checkLogin();

    public function getUserId();
    
    public function getUserInfo($key);    
}