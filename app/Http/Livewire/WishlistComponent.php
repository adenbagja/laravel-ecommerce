<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class WishlistComponent extends Component
{
    public function render()
    {
        return view('livewire.wishlist-component')->layout('layouts.base');
    }
}
