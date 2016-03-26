<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Core\Providers\EntitylProviders;

use Core\Repositories\UcenterMember\UcenterMemberRepository;
use Core\Repositories\Document\DocumentRepository;
use Core\Repositories\Category\CategoryRepository;
use Core\Repositories\Member\MemberRepository;
use Core\Repositories\Users\UsersRepository;
use Core\Repositories\Page\PageRepository;
use Illuminate\Support\ServiceProvider;

/**
 * 这是一个仓储服务提供者。
 *
 * @author shsrain <shsrain@163.com>
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * 引导任何应用服务。
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * 注册的任何应用程序的服务。
     *
     * @return void
     */
    public function register()
    {
		$this->registerDocumentRepository();
		$this->registerCategoryRepository();
		$this->registerMemberRepository();
		$this->registerUcenterMemberRepository();
		$this->registerUsersRepository();

    }

    /**
     * 注册 DocumentRepository 类
     *
     * @return void
     */
    protected function registerDocumentRepository()
    {
        $this->app->singleton('documentrepository', function ($app) {
            $model = 'Core\Repositories\Document\Models\DocumentModel';
            $document = new $model();

            $validator = $app['validator'];

            return new DocumentRepository($document, $validator);
        });

		// facade绑定
        $this->app->alias('documentrepository', 'Core\Repositories\Document\DocumentRepository');
    }

    /**
     * 注册 CategoryRepository 类
     *
     * @return void
     */
    protected function registerCategoryRepository()
    {
        $this->app->singleton('categoryrepository', function ($app) {
            $model = 'Core\Repositories\Category\Models\CategoryModel';
            $category = new $model();

            $validator = $app['validator'];

            return new CategoryRepository($category, $validator);
        });

		// facade绑定
        $this->app->alias('categoryrepository', 'Core\Repositories\Category\CategoryRepository');
    }

    /**
     * 注册 MemberRepository 类
     *
     * @return void
     */
    protected function registerMemberRepository()
    {
        $this->app->singleton('memberrepository', function ($app) {
            $model = 'Core\Repositories\Member\Models\MemberModel';
            $member = new $model();

            $validator = $app['validator'];

            return new MemberRepository($member, $validator);
        });

		// facade绑定
        $this->app->alias('memberrepository', 'Core\Repositories\Member\MemberRepository');
    }

    /**
     * 注册 UcenterMemberRepository 类
     *
     * @return void
     */
    protected function registerUcenterMemberRepository()
    {
        $this->app->singleton('ucentermemberrepository', function ($app) {
            $model = 'Core\Repositories\UcenterMember\Models\UcenterMemberModel';
            $ucentermember = new $model();

            $validator = $app['validator'];

            return new UcenterMemberRepository($ucentermember, $validator);
        });

		// facade绑定
        $this->app->alias('ucentermemberrepository', 'Core\Repositories\UcenterMember\UcenterMemberRepository');
    }

    /**
     * 注册 PageRepository 类
     *
     * @return void
     */
    protected function registerPageRepository()
    {
        $this->app->singleton('pagerepository', function ($app) {
            $model = 'Core\Repositories\Page\Models\PageModel';
            $page = new $model();

            $validator = $app['validator'];

            return new PageRepository($page, $validator);
        });

		// facade绑定
        $this->app->alias('pagerepository', 'Core\Repositories\Page\PageRepository');
    }

    /**
     * 注册 UsersRepository 类
     *
     * @return void
     */
    protected function registerUsersRepository()
    {
        $this->app->singleton('usersrepository', function ($app) {
            $model = 'Core\Repositories\Users\Models\UsersModel';
            $users = new $model();

            $validator = $app['validator'];

            return new UsersRepository($users, $validator);
        });

		// facade绑定
        $this->app->alias('usersrepository', 'Core\Repositories\Users\UsersRepository');
    }
}
