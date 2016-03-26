<?php

namespace User\Session;

interface Session{
    
    //private static SESSION_STORAGE_TYPE_FILE = 1;
    
    //private static SESSION_STORAGE_TYPE_DATABASE = 2;
    
    //private static SESSION_STORAGE_TYPE_COOKIE = 3;    
    
    public function start($user)
    {
        return true;
    }
    
    public function over($user)
    {
        return true;
    }
    
    public function get($sessionID)
    {
        return true;
    }
    
    public function storage()
    {
        return true;
    }
}