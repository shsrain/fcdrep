<?php

namespace Sns\Space;

interface Dynamic{

    // 发表说说动态
    public function publish();
    
    // 删除说说动态
    public function delete();    
    
}