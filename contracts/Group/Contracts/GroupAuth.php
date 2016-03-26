<?php

namespace Group\Contracts;

interface GroupAuth{

    public function addNodes($nodes = '');
    
    public function removeNodes($nodes = null);
    
    public function getNodes($nodes = null);
    
    public function checkAuthNodes($user,$nodes);
    
    public function createRoles();

    public function NodesAccreditRoles();
    
    public function userJoinRoles();

    public function createGroup();

    public function rolesAccreditGroup();
    
    public function groupJoinRoles();     
}