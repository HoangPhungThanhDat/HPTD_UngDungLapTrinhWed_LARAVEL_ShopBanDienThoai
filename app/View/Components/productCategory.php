<?php

// namespace App\View\Components;

// use Closure;
// use Illuminate\Contracts\View\View;
// use Illuminate\View\Component;
// use App\Models\Product;
// use App\Models\Category;

// class productCategory extends Component
// {
//     public $cat_row=null;
//     public function __construct($catrow)
//     {
//         $this->cat_row=$catrow;
//     }

//     public function render(): View|Closure|string
//     {
//         $cat=$this->cat_row;
//         $listcatid=[];
//         array_push($listcatid,$cat->id);
//         $listcat1=Category::where([ ['parent_id','=',$cat->id],['status','=',1]])
//         ->select("id")->get();
//         if(count($listcat1)>0)
//         {
//             foreach($listcat1 as $cat1)
//             {
//                 array_push($listcatid,$cat1->id);
//                 $listcat2=Category::where([ ['parent_id','=',$cat1->id],['status','=',1]])
//                 ->select("id")->get();

//                 if(count($listcat2)>0)
//                 {
//                     foreach($listcat2 as $cat2)
//                     {
//                         array_push($listcatid,$cat2->id);
//                         $listcat3=Category::where([ ['parent_id','=',$cat2->id],['status','=',1]])
//                         ->select("id")->get();
        
//                         if(count($listcat3)>0)
//                         {
//                             foreach($listcat3 as $cat3)
//                             {
//                                 array_push($listcatid,$cat3->id);
//                             }
        
//                         }
//                     }

//                 }

//             }
//         }

//         $product_list=Product::where('status','=',1)
//         ->whereIn('category_id',$listcatid)
//         ->orderBy('created_at','desc')->limit(4)->get();
//         return view('components.product-category',compact('product_list'));
//     }
// }




namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;
use App\Models\Category;

class ProductCategory extends Component
{
    public $cat_row = null;

    public function __construct($catrow)
    {
        $this->cat_row = $catrow;
    }

    public function render(): View|Closure|string
    {
        $cat = $this->cat_row;
        $listcatid = $this->getCategoryIds($cat->id);

        $product_list = Product::where('status', '=', 1)
            ->whereIn('category_id', $listcatid)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        return view('components.product-category', compact('product_list'));
    }

    private function getCategoryIds($parentId)
    {
        $listcatid = [$parentId];
        $categories = Category::where('status', 1)->get();

        foreach ($categories as $category) {
            if ($category->parent_id === $parentId) {
                $listcatid[] = $category->id;
                $listcatid = array_merge($listcatid, $this->getCategoryIds($category->id));
            }
        }

        return $listcatid;
    }
}
