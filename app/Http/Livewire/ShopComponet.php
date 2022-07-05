<?php

namespace App\Http\Livewire;
use App\Models\Producto;
use Livewire\Component;
//use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;
//use App\Http\Livewire\Producto;
use Cart;

class ShopComponet extends Component
{
  public function store($product_id,$product_name,$product_price)
   {
      Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Producto');
      session()->flash('success_message','Item added in Cart');
      return redirect()->route('producto.cart');
   }
    //use WithPagination;
    public function render()
    {
        $products =Producto::paginate(3);
        return view('livewire.shop-componet',['products'=>$products])->layout('layouts.base');

      // products = Producto::get ();
        //return view('livewire.shop-componet',compact('products'));
    }
}
