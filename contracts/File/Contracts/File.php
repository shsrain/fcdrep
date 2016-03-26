<?php

namespace File;

interface File{

    // 文件验证
    public function validate();
    
    public function create();
    
    public function read();
    
    public function save();
    
    public function delete();
}