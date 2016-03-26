<?php

namespace FileUpload;

interface FileUpload{
    
    // 文件信息
    public function uploadFileInfo();
    
    // 文件验证
    public function validate();    
    
    //文件上传
    public function uploads();
    
    // 上传一个
    public function uploadOne();
    
    //上传多个
    public function uploadMultiple();
    
    //文件上传保存路径
    public function savePath();
    
    //文件上传临时路径
    public function tempPath();
    
    //保存后的文件信息
    public function saveInfo();
    
    // 文件保存文件名
    public function fileSaveName();
    
    // 删除保存文件
    public function deleteSavefiles();
    
    // 删除临时文件
    public function deleteTempfiles();    
    
}