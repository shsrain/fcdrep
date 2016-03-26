<?php

namespace FAQs\Question;

interface Question{

    // 发表一个问题
    public function publish();
    
    // 悬赏发表一个问题
    public function rewardPublish();
    
    // 匿名发表一个问题
    public function anonymityPublish();
    
    // 向某用户求助发表一个问题
    public function helpPublish();
    
    // 关注一个问题
    public function follow();
    
    // 取消关注一个问题，有新回答则提醒
    public function unfollow(); 

    // 已解决
    public function resolved();
    
    // 待解决
    public function toBeSolved();
    
    // 审核中
    public function inReview();
    
    // 已过期
    public function haveExpired();    
}