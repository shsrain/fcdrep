<?php

namespace FileDownload;

interface FileDownload{

    // 文件信息
    public function downloadFileInfo();
    
    // 文件验证
    public function validate();    
    
    //文件下载
    public function downloads();
    
    // 下载一个
    public function downloadOne();
    
    // 下载多个
    public function downloadMultiple();
    
    // 文件下载文件名
    public function fileDownloadName();   
}