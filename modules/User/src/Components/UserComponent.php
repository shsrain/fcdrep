<?php

namespace User\Components;

use User\Contracts\User;
use User\Exceptions\NotFound;
use Session;
use Request;

class UserComponent implements User{
    
    public $userStatus = 1;
    
    public function login($userName,$password)
    {
        if($this->isSyncLogin())
        {
            $this->SyncLogin();
        }else{
            $loginType = $this->checkLoginType($userName);
            switch($loginType){
                case 'mobile':
                    $this->loginByMobile($userName,$password);
                    break;
                    
                case 'email':
                    $this->loginByEmail($userName,$password);
                    break;
                    
                case 'useId':
                    $this->loginById($userName,$password);
                    break;
                    
                case 'rember':
                    $this->loginByfast();
            }
        }
        
        if($this->checkLogin()){
            $this->afterLogin();
        }
        
        return true;
    }
    
    public function logout()
    {
        return true;
    }
    
    public function register()
    {
        return true;
    }
    
    public function checkLogin()
    {
        return false;
    }

    public function getUserId()
    {
        return true;
    } 
    
    public function changePassword($userName,$password)
    {
        if($this->checkLogin()){
            //TODO 通过登录状态下的用户名找回。
        }else{
            $changePasswordType = $this->changePasswordType($userName);
            switch($changePasswordType)
            {
                case 'mobile':
                    send_sms($userName,'找回您的密码');
                    break;
                case 'email':
                    send_email($userName,'找回您的密码');
                    break;
                case false:
                    throw NotFound;
                    break;
            }
        }
    }
    
    private function changePasswordType($userName)
    {
        if(is_mobile($userName))
        {
            return 'mobile';
        }elseif(is_email($userName))
        {
            return 'email';
        }     
    }
    
    
    public function generateUserId()
    {
        Session::put('user', md5(get_real_ip()));
        return Session::get('user');
    }
    
    public function getUserInfo($key)
    {
        if($this->userInfo == null)
        {
            // TODO
        }
        if($key == null)
        {
            return $this->userInfo;
        }else{
            return $this->userInfo[$key];
        }
    }     
    
    private function loginByMobile($userMobile,$password)
    {
        if(true)
        {
            
        }else{
            throw NotFound;
        }
        return true;
    }
    
    private function loginByEmail($userEmail,$password)
    {
        if(true)
        {
            
        }else{
            throw NotFound;
        }
        return true;        
    }
    
    private function loginByQRcode($userQRcode)
    {
        if(true)
        {
            
        }else{
            throw NotFound;
        }
        return true;
    }
    
    private function loginByfast()
    {
        if(true)
        {
            
        }else{
            throw NotFound;
        }
        return true;
    }
    
    private function loginByThird()
    {
        if(true)
        {
            
        }else{
            throw NotFound;
        }
        return true;        
    }
    
    private function loginById()
    {
        if(true)
        {
            
        }else{
            throw NotFound;
        }
        return true;        
    }

    // 是否同步登陆
    private function isSyncLogin(){
        
        return true;
    }
    
    // 同步登陆
    private function syncLogin()
    {
        
    }    
    
     //判断用户登录类型:手机登录，邮箱登陆，用户ID登录，二维码登录
    private function checkLoginType($userName)
    {
        if(is_mobile($userName))
        {
            return 'mobile';
        }elseif(is_email($userName))
        {
            return 'email';
        }elseif(is_user_name($userName))
        {
            return 'userId';
        }
    }
    
    // 获取用户登录选项,记住密码，隐身登录，登录角色。
    private function getLoginOption()
    {
        if($this->loginOption == null)
        {
            $this->loginOption = Request::input('loginOption');
        }
        return $this->loginOption;

    }
    
    private function afterLogin()
    {
        $loginOption = $this->getLoginOption();
        if($loginOption['remberPassword'] == 1)
        {
            //TODO
            $fastLogin = login_hash($this->getUserInfo('userid'),$this->getUserInfo('username'),$this->getUserInfo('password'));
        }
        if($loginOption['role']==2)
        {
            //TODO
        }
        // 生成登录hash
        $this->userHash = $this->generateUserId();
        // 获取用户信息
        $this->userInfo = $this->getUserInfo($userId);
    }
}