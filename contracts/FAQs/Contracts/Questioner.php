<?php

namespace FAQs\Questioner;

interface Questioner{
    
    // 题主是否在线
    public function isOnLine();
    
    // 关注题主
    public function follow();
    
    // 取消关注题主
    public function unfollow();
    
    // 题主采纳率
    public function adoptionRate(); 
    
    // 提问数
    public function queriesNumber();
    
    // 回答数
    public function answerNumber();
    
    // 赞同数
    public function agreeNumber();
    
    // 题主经验
    public function exp();
    
    // 题主等级
    public function level();    
    
    // 题主财富
    public function treasure();
    
    // 关注题主的人
    public function follower();
    
    // 题主关注的人
    public function focused();
    
    // 题主被采纳的回答
    public function adoptedAnswer();
    
    // 题主推荐问题领域设置
    public function recommend();
}