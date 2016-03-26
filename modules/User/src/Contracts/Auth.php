<?php

namespace User\Auth;

interface Auth{

    //private static NODES_TYPE_MENU = 1;
    
    //private static NODES_TYPE_OBJECT = 2;
    
    //private static NODES_TYPE_RECORD = 3;
    
    public function addNodes($nodes = '')
    {
        return true;
    }
    
    public function removeNodes($nodes = null)
    {
        return true;
    }
    
    public function getNodes($nodes = null)
    {
        return true;
    }
    
    public function getNodesType($nodes = null)
    {
        return true;
    }
    
    public function checkAuthNodes($user,$nodes)
    {
        return true;
    }
}