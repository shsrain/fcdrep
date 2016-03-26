<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace User;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Route;
use View;

/**
 * 这是一个问答服务提供者。
 *
 * @author shsrain <shsrain@163.com>
 */
class UserServiceProvider extends LaravelServiceProvider {

    /**
     * 指示是否将提供程序的加载推迟。
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * 此命名空间适用于路由文件中的控制器路由。
     *
     * 此外，它被设置为网址生成器的根命名空间。
     *
     * @var string
     */
    protected $namespace = 'User\Http\Controllers';

    protected $namespace2 = 'User\Repositories\\';

    /**
     * 引导应用程序事件。
     *
     * @return void
     */
    public function boot() {
        $this->handleConfigs();
        $this->handleMigrations();
        $this->handleViews();
        $this->handleTranslations();
        $this->handleRoutes();
		$this->handleAssets();
        $this->bootComposer();
        $this->bootBlade();
        $user = $this->app->make('Users');
        if($user->checkLogin() == false)
        {
            echo $user->generateUserId();
            $user->userStatus = 0;
        }
    }

    /**
     * 注册服务提供者。
     *
     * @return void
     */
    public function register() {

        // 绑定任何实现。
        $this->registerUser();
    	$this->registerComment();
        $this->app->instance('phpBlade', new \Core\Presentations\BladeExtensions\PhpBladeExtension());
        
    }

    /**
     * 获得提供者提供的服务。
     *
     * @return array
     */
    public function provides() {

        return [];
    }

    /**
     * 发布并合并配置文件。
     *
     * @return void
     */
    private function handleConfigs() {

        $configPath = __DIR__ . '/../config/user.php';
        $this->publishes([$configPath => config_path('user.php')],'config');
        $this->mergeConfigFrom($configPath, 'config');
    }

    /**
     * 载入语言包。
     *
     * @return void
     */
    private function handleTranslations() {

        $this->loadTranslationsFrom( __DIR__.'/../lang','user');
    }

    /**
     * 载入视图并设置发布。
     *
     * @return void
     */
    private function handleViews() {

        $this->loadViewsFrom( __DIR__.'/../views','user');
        $this->publishes([__DIR__.'/../views' => base_path('resources/views/vendor/user')],'view');
    }

    /**
     * 发布迁移数据。
     *
     * @return void
     */
    private function handleMigrations() {

        $this->publishes([__DIR__ . '/../migrations' => database_path('/migrations')], 'migrations');
    }

    /**
     * 发布资源文件。
	 *
     * @return void
     */
    private function handleAssets() {

		   $this->publishes([__DIR__.'/../assets' => public_path('vendor/user'),], 'public');

    }

    /**
     * 发布路由。
     *
     * @return void
     */
    private function handleRoutes() {

        Route::group(['namespace' => $this->namespace], function ($router)
        {
            include __DIR__.'../Http/routes.php';
        });
    }

    /**
     * 注册 User 模块类
     *
     * @return void
     */
    protected function registerUser()
    {
        $services = [
            $this->namespace2 . 'UserInterface' => $this->namespace2 . 'User',
        ];

        foreach ($services as $interface => $instance)
        {
            $this->app->bind($interface, $instance);
        }
		    $this->app->tag([$this->namespace2 . 'UserInterface'], 'user');
    }

    /**
     * 注册 Comment 模块类
     *
     * @return void
     */
    protected function registerComment()
    {
        $services = [
            $this->namespace2 . 'CommentInterface' => $this->namespace2 . 'Comment',
        ];
        foreach ($services as $interface => $instance)
        {
            $this->app->bind($interface, $instance);
        }
		    $this->app->tag([$this->namespace2 . 'CommentInterface'], 'comment');
    }   
    
    /**
     * 注册 Composer 模块类
     *
     * @return void
     */
    protected function bootComposer()
    {

    }

    protected function bootBlade()
    {
      \Blade::extend(function($view, $compiler){
        $this->app->make('phpBlade')->php($view, $compiler);
        $this->app->make('phpBlade')->endphp($view, $compiler);
        $this->app->make('phpBlade')->datetime($view, $compiler);
        return $view;
      });
    }
}
