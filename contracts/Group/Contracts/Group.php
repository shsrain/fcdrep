<?php

namespace Group\Contracts;

interface Group{

    public function build($userId,$groupData);

    public function dissolve($userId,$groupId);
    
    public function getGroup($groupId);
}