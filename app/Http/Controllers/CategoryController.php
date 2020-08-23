<?php
/**
 * Class CategoryController
 *
 * @Controller(prefix="category")
 * @Middleware("auth")
 * @Middleware("category.owner", only={"check", "edit", "update", "delete"})
 * @package App\Http\Controllers
 */
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @var Guard
     */
    protected $auth;
    /**
     * @var CategoryRepositoryInterface
     */
    protected $Categories;
    /**
     * @param Guard $auth
     * @param CategoryRepositoryInterface $categories
     */
    public function __construct(Guard $auth, CategoryRepositoryInterface $categories)
    {
        $this->auth = $auth;
        $this->category = $category;
    }

    /**
     * Category一覧画面を表示する
     *
     * @Get("/", as="category.index")
     * @param CategoryRepositoryInterface $categories
     * @return Response
     */
    public function index(CategoryRepositoryInterface $categories)
    {
        $list = $categories->getCategoryPaginate($this->category()->id, 5);
        return view('categories/index')->with(compact('list'));
    }

    /**
     * Category作成画面を表示する
     *
     * @Get("create", as="category.create")
     * @return Response
     */
    public function create()
    {
        return view('categories/create');
    }

    /**
     * 新しく作成したCategoryを保存する
     *
     * @Post("store", as="category.store")
     * @param StoreRequest $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        $data = [
            'name' => $request->get('name'),
            'namejapa' => $request->get('namejapa'),
            'done' => false,
            'user_id' => $this->auth->user()->id
        ];
        $this->categories->create($data);
        return redirect('/category/index');
    }

    /**
     * Category編集画面を表示する
     *
     * @Get("{id}/edit", as="category.edit")
     * @param  int $id
     * @return Response
     */
    public function edit(Request $request)
    {
       $category = Category::find($request->id);
       return view('categories/edit', ['form' => $category]);
    }
 
    /**
     * Categoryを更新する
     *
     * @Post("{id}/update", as="category.update")
     * @param  int $id
     * @param UpdateRequest $request
     * @return Response
     */
    public function update(Request $request)
    {
     $category = Category::find($request->id);
     $form = $request->all();
     unset($form['_token']);
     $category->name = $request->name;
     $category->namejapa = $request->namejapa;
     $category->save();
     return redirect('/category/show');
    }
 
    /**
     * Categoryを削除する
     *
     * @Get("{id}/delete", as="category.delete")
     * @param  int $id
     * @return Response
     */
    public function delete($id)
    {
        $this->categories->destroy($id);
        return redirect('/category/index');
    }
 
    /**
     * Categoryをチェックする
     *
     * @Get("{id}/check", as="category.check")
     * @param $id
     * @return Response
     */
    public function check($id){
        $this->categorys->toggleDone($id);
        return redirect('/category/index');
    }
}
