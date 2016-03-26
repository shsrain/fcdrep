<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Core\Repositories\Page\Models;

use Core\Repositories\Models\BaseModel as Model;

/**
 * 这是一个 page 模型类。
 *
 * @author shsrain <shsrain@163.com>
 */
class PageModel extends Model
{


    /**
     * 存储的数据表名称。
     *
     * @var string
     */
    protected $table = 'document_page';

    /**
     * 模型名称。
     *
     * @var string
     */
    public static $name = 'page';

    /**
     * 对那些日期模型的属性。
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The revisionable columns.
     *
     * @var array
     */
    protected $keepRevisionOf = [];

    /**
     * 该列显示索引时选择。
     *
     * @var array
     */
    public static $index = ['id'];

    /**
     * 分页每页显示最大条数。
     *
     * @var int
     */
    public static $paginate = 10;

    /**
     * 列表索引排序字段。
     *
     * @var string
     */
    public static $order = 'id';

    /**
     * 列表索引排序。
     *
     * @var string
     */
    public static $sort = 'desc';

    /**
     * 验证规则。
     *
     * @var array
     */
    public static $rules = [
        'content'   => 'required',
    ];



    /**
     * 删除一个模型实例前的操作
     *
     * @return void
     */
    public function beforeDelete()
    {

    }

}
