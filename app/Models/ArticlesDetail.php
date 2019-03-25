<?php
// +----------------------------------------------------------------------
// | HOUCMS [ 厚典科技 专注建站 APP PC 微站 小程序 WAP ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2017 http://houjit.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Amos <amos@houjit.com> http://www.houjit.com
// +----------------------------------------------------------------------
namespace App\Models;

class ArticlesDetail extends Common
{
    protected $guarded = []; // 不可以注入数据字段
    protected $table = 'articles_detail';
    public $timestamps = false;

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}