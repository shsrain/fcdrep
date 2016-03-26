<?php

namespace MicroBlog\Contracts;

interface MicroBlog{

    // 发表一条微博
    public function publish();
    
    // 删除一条微博
    public function delete();
    
    // 转发一条微博
    public function reprint();
    
    // 收藏一条微博
    public function collect();
    
    // 点赞一条微博
    public function like();
}