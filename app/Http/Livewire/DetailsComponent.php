<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use Cart;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug= $slug;
    }
    public function store($product_id,$product_name,$product_price)
    {
      Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Producto');
      session()->flash('success_message','Item added in Cart');
      return redirect()->route('producto.cart');
    }
    public function render()
    {
        $product = Producto::where ('slug',$this->slug)->first();
        $popular_products = Producto :: inRandomOrder()->limit(3)->get();
        //$related_products= Producto ::where ('category_id',$product->category_id)->inrendomOrder()->limit(3)->get();
        return view('livewire.details-component',['product'=>$product,'popular_products'=>$popular_products])->layout('layouts.base');
    }
    //,'related_products'=>$related_products
}

