<?php

namespace Group\Contracts;

interface GroupExp{
    
    public function add($exp);
    
    public function level($levelName,$exp);
    
    public function getExp($userId);
}