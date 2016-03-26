<?php

namespace Sns\Friends;

interface Friends{

    // 用户关注的人
    public function focus();
    
    // 用户的粉丝
    public function fans();    

    // 用户的好友
    public function friend();

    // 好友请求
    public function friendRequest();
    
    // 同意好友请求
    public function addBuddy();     
}