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
namespace App\Admin\Controllers;
use App\Models\Article;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Support\MessageBag;
use Encore\Admin\Facades\Admin;
use App\Models\ArticlesDetail;
use Illuminate\Http\Request;
use App\Api\Handlers\ImageUploadHandler;

class ArticleController extends BaseController
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('列表')
            ->description(' ')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('详情')
            ->description(' ')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑')
            ->description(' ')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建')
            ->description(' ')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article);

        $grid->id('ID');
        $grid->title('标题');
        $grid->sort('排序');
        $grid->column('status','状态')->display(function ($status) {
            return ($status == 0)?'未通过':'通过';
        });
        $grid->created_at('创建时间');
        $grid->updated_at('更新时间');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Article::findOrFail($id));

        $show->author('作者信息', function ($author) {
            $author->setResource('/admin/users');
            $author->id();
            $author->name();
        });

        $show->comments('评论', function ($comments) {
            $comments->resource('/admin/comments');
            $comments->id();
            $comments->content()->limit(10);
            $comments->created_at();
            $comments->updated_at();
            $comments->filter(function ($filter) {
                $filter->like('content');
            });
        });
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $article_id = request()->route()->parameters();
        $form = new Form(new Article);

        $categoryModel = config('admin.database.category_model');
        $form->select('cate_id', '分类')->options($categoryModel::selectOptions(),'根目录');
        $form->text('title', '标题');
        if($article_id){
            $detail = ArticlesDetail::where('article_id',$article_id['article'])->first();
            $form->simditor('body', '内容')->default($detail->body);
        } else {
            $form->simditor('body', '内容');
        }
        $form->tags('tags','标签');
        $form->number('sort', '排序');
        $form->radio('status', '审核状态')->options(['1' => '通过', '0'=> '未通过'])->default('1');
        //保存前回调
        $form->saving(function (Form $form) {
            $articleInsert = [
                'cate_id'    => $form->cate_id,
                'title'      => $form->title ?: "",
                'view'       => $form->view ? : 0,
                'tags'       => $form->tags ? json_encode($form->tags) : "",
                'author_id'  => Admin::user()->id,
                'sort'       => $form->sort?:0,
                'status'     => $form->status?:0,
                'created_at' => date("Y-m-d H:i:s",time()),
                'updated_at' => date("Y-m-d H:i:s",time())
            ];
            $articleId = Article::insertGetId($articleInsert);
            ArticlesDetail::insert(['article_id'=>$articleId,'body'=>$form->body]);
            admin_toastr('返回列表页....', 'success', ['timeOut' => 5000]);
            return redirect('/admin/articles');
        });

        return $form;
    }
    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        // 初始化返回数据，默认是失败的
        $data = [
            'success'   => false,
            'msg'       => '上传失败!',
            'file_path' => ''
        ];
        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->upload_file) {
            // 保存图片到本地
            $result = $uploader->save($request->upload_file, 'topics', 'admin_'.\Auth::id(), 1024);
            // 图片保存成功的话
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg']       = "上传成功!";
                $data['success']   = true;
            }
        }
        return $data;
    }
}
