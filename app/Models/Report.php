<?php

declare(strict_types=1);

/*
 * +----------------------------------------------------------------------+
 * |                          ThinkSNS Plus                               |
 * +----------------------------------------------------------------------+
 * | Copyright (c) 2016-Present ZhiYiChuangXiang Technology Co., Ltd.     |
 * +----------------------------------------------------------------------+
 * | This source file is subject to enterprise private license, that is   |
 * | bundled with this package in the file LICENSE, and is available      |
 * | through the world-wide-web at the following url:                     |
 * | https://github.com/slimkit/plus/blob/master/LICENSE                  |
 * +----------------------------------------------------------------------+
 * | Author: Slim Kit Group <master@zhiyicx.com>                          |
 * | Homepage: www.thinksns.com                                           |
 * +----------------------------------------------------------------------+
 */

namespace Zhiyi\Plus\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function reportable()
    {
        return $this->morphTo('reportable');
    }

    /**
     * 举报者.
     *
     * @return hasOne
     * @author BS <414606094@qq.com>
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * 被举报者.
     *
     * @return hasOne
     * @author BS <414606094@qq.com>
     */
    public function target()
    {
        return $this->hasOne(User::class, 'id', 'target_user');
    }
}
