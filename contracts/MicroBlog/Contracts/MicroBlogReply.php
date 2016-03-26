<?php

namespace MicroBlog\Contracts;

interface MicroBlogReply{

    // 评论一条微博
    public function comment();
    
    // 删除一条微博评论
    public function delete();
    
    // 举报一条微博评论
    public function report();
    
    // 回复一条微博评论
    public function reply();
    
    // 微博评论来源
    public function source();
}