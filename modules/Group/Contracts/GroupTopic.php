<?php

namespace Group\Contracts;

interface GroupTopic{
    
    public function getGroupTopic($groupId);
    
    public function publish($userId);
    
    public function edit($topicId);
    
    public function delete($topicId);
    
    public function reply($userId,$topicId);
}