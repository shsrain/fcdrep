<?php

namespace Group\Contracts;

interface GroupTask{
    
    
    public function publish($userId,$taskId);
    
    public function delete($taskId);
    
    public function accept($userId);
    
    public function giveup($userId);
}