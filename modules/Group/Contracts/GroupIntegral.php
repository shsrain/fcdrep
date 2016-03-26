<?php

namespace Group\Contracts;

interface GroupIntegral{
    
    public function add($userId,$num);
    
    public function reduce($userId,$num);
    
    public function exchange($integral,$goods);
    
    public function getUserIntegral($userId);
}