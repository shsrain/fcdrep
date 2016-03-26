<?php

namespace Comment;

class Comment{

    public function createCommentGroup($commentName,$option = array())
    {
        return true;
    }

    public function bindCommentGroup($commentGroupId,$toId)
    {
        return true;
    }
    
    public function publicCommentTo($userId,$toId)
    {
        return true;
    }
    
    public function replyCommentTo($userId,$commentId)
    {
        return true;
    }
}