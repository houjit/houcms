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
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
