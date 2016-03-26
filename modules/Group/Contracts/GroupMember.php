<?php

namespace Group\Contracts;

interface GroupMember{
    
    
    public function hasMember($userId);
    
    public function getMember($userId);
    
    public function mute($userId,$startTime,$endTime);
    
    public function unMute($userId);
    
    public function agree($userId);
    
    public function refuse($userId,$reason);
    
    public function join($userId);
    
    public function quit($memberId,$groupId);
    
}