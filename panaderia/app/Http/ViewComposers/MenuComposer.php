<?php
use Illuminate\Contracts\View\View;
use App\Category;
use App\Product;

class MenuComposer
{
    public function compose(View $view)
    {
        $menu = Category::wherePortada(1)->get(['id','name']);
        $blog = Product::get(['id','product_name', 'product_description','product_photo',
        'product_price']);
        $view->with('menu', $menu)->with('blog',$blog);
    }
}

?>
