<?php

namespace MicroBlog\Contracts;

interface MicroBlogger{

    
    // 关注博主
    public function follow();
    
    // 取消关注
    public function unfollow();
    
    // 博主昵称
    public function nickName();    
    
    // 博主签名
    public function signature();
    
    // 博主标签
    public function label();
    
    // 博主积分
    public function integral();
    
    // 博主等级
    public function level();
    
    // 博主粉丝
    public function fans();        
    
}