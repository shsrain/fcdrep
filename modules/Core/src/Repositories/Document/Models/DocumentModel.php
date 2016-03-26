<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Core\Repositories\Document\Models;

use Core\Repositories\Category\Relations\BelongsToCategoryRelationTrait;
use Core\Repositories\Member\Relations\BelongsToMemberRelationTrait;
use Core\Repositories\Article\Relations\HasOneArticleRelationTrait;
use Core\Repositories\Page\Relations\HasOnePageRelationTrait;
use Core\Repositories\Models\BaseModel as Model;

/**
 * 这是一个 document 模型类。
 *
 * @author shsrain <shsrain@163.com>
 */
class DocumentModel extends Model
{
	use HasOneArticleRelationTrait,
		HasOnePageRelationTrait,
		BelongsToCategoryRelationTrait,
		BelongsToMemberRelationTrait;

	protected $table = 'document';

	public $timestamps = false;
}
