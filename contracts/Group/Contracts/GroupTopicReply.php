<?php

namespace Group\Contracts;

class GroupTopicReply{
    
    public function allow($topicId);
    
    public function publish($userId,$replyData);
    
    public function delete($userId);
    
    public function getTopicReply($topicId);
}