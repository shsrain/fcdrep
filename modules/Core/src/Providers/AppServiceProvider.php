<?php

namespace Core\Providers;

use Illuminate\Support\ServiceProvider;
use User\Components\UserComponent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $user = $this->app->make('Users');
        if($user->checkLogin()){
            $user->userStatus = 1;
        }else{
            $user->userStatus = 0;
        }
        
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->registerUserComponent();
    }
    
    /**
     * 注册 UserComponent 组件类
     *
     * @return void
     */
    protected function registerUserComponent()
    {
        $this->app->singleton('Users', function($app)
        {
            return new UserComponent();
        });
    }     
}
