<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

/**
 * 您的扩展包的路由将走到这里
 */

 /**
 * 过滤器
 */
include __DIR__.'../filters.php';

/**
 * 博客
 */
Route::group([
	'domain' => '',
	'prefix' => 'blog',
	'before' => 'home.maintenance',
	'middleware' => []
	], function(){

	Route::get('/', [
		'as' => 'blog.index',
		'uses' => 'IndexController@index'
	]);
	Route::get('cate/{categoryid}', [
		'as' => 'blog.lists',
		'uses' => 'IndexController@lists'
	]);
	Route::match(['get', 'post'],'message', [
		'as' => 'message.post',
		'uses' => 'IndexController@message'
	]);
	Route::match(['get', 'post'],'search', [
		'as' => 'blog.search',
		'uses' => 'IndexController@search'
	]);
	Route::get('{id}', [
		'as' => 'blog.detail',
		'uses' => 'IndexController@detail'
	]);
});

Route::get('/', [
	'as' => 'index',
	'uses' => 'IndexController@index'
]);
