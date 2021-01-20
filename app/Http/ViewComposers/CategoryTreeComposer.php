<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Services\CategoryService;

class CategoryTreeComposer
{
    protected $categoryService;

    // 使用 Laravel 的依赖注入，自动注入我们所需要的 CategoryServiec 类
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    // 当演染指定的模版时， Laravel 会调用 composer 方法
    public function compose(View $view)
    {
        // 使用 with 方法注入变量
        return $view->with('categoryTree', $this->categoryService->getCategoryTree());
    }
}
