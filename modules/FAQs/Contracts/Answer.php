<?php

namespace FAQs\Question;

interface Answer{

    // 回答一个问题
    public function solution();
    
    // 赞同一个回答
    public function agree();
    
    // 举报一个回答
    public function report();
    
    // 回复一个回答
    public function reply();
    
    // 问题的满意答案
    public function best();
}