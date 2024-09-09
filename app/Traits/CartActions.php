<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait CartActions
{
    protected function user()
    {
        return Auth::user();
    }

    public function cartItems()
    {
        $user = $this->user();

        if ($user && $user->cart) {
            return explode(',', $user->cart);
        }

        return [];
    }

    public function addToCart($item)
    {
        $cartItems[] = $item;
    }

    public function toggleToCart($item)
    {
        $cartItems = $this->cartItems();
        
        // Check if item is already in cart
        if (in_array($item, $cartItems)) {
            // Remove item from cart
            $cartItems = array_filter($cartItems, function($cartItem) use ($item) {
                return $cartItem != $item;
            });

        } else {
            // Add item to cart
            $cartItems[] = $item;
        }

        // Convert array back to comma-separated string
        $cartItemsString = !empty($cartItems) ? implode(',', $cartItems) : null;

        // Update the cart in the database
        $user = $this->user();
        if ($user) {
            $user->update(['cart' => $cartItemsString ?? null]);
        }

        return $cartItems;
    }
}
