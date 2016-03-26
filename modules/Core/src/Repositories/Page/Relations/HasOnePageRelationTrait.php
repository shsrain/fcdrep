<?php

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Core\Repositories\Page\Relations;

/**
 * 这是一个has one category trait。
 *
 * @author shsrain <shsrain@163.com>
 */
trait HasOnePageRelationTrait
{
    /**
     * 得到 page 的关系。
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function page()
    {
        return $this->hasOne('Core\Repositories\Page\Models\PageModel', 'id', 'id');
    }
}
