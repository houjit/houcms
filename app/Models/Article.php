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

class Article extends Common
{
    protected $guarded = []; //不可以注入数据字段
    protected $table = 'articles';
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'article_id');
    }
    public function ArticleDetail()
    {
        return $this->hasOne(Article::class,'article_id');
    }
}