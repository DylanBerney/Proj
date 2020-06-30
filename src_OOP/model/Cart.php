<?php

/**
 * @file      Cart.php
 * @brief     This model is designed to implement the cart business logic
 * @author    Created by Nicolas.GLASSEY
 * @version   12-MAY-2020
 */

class Cart
{
    //region private attributes
    private float $totalPrice;
    private int $nbOfArticles;
    private array $items = array();
    //endregion private attributes

    //region constructor
    public function __construct(){}
    //endregion constructor

    //region private methods
    private function SetTotal($items)
    {
        $this->totalPrice = (double)0;
        foreach ($items as $CartItem) {
            $this->totalPrice += $CartItem->GetTotalPrice();
        }
    }

    private function SetNbOfArticles($items)
    {
        $this->nbOfArticles = 0;
        foreach ($items as $CartItem) {
            $this->nbOfArticles += $CartItem->getQuantity();
        }
    }

    private function UpdateTotals()
    {
        $this->SetNbOfArticles($this->items);
        $this->SetTotal($this->items);
    }
    //endregion private methods

    //region accessors and mutators
    /**
     * This method gets the cart's total (price)
     * @return float : Total Price of the Cart
     */
    public function GetTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * This method gets an array of all cart's items
     * @return array : All cart's items
     */
    public function GetItems()
    {
        return $this->items;
    }

    /**
     * This method gets the number cart's items
     * @return int : number of items in cart
     */
    public function GetNbOfArticles()
    {
        return $this->nbOfArticles;
    }
    //endregion accessors and mutators

    //region public methods
    /**
     * @brief This method add the item in the cart
     *        There are 2 ways:
     *        -Either the item alredy exist in the cart, we have to update
     *        the quantity of an existing item.
     *        -Or this is a new article to add in the cart
     * @param $cartItemToAdd : Item to add in the cart
     */
    public function AddItemInCart($cartItemToAdd)
    {
        $updated = false;
        if(count($this->items) != 0){
            foreach ($this->items as $cartItem) {
                if ($cartItem->GetArticleId() == $cartItemToAdd->GetArticleId()) {
                    //we update the quantity of the existing article
                    $cartItem->SetQuantity($cartItem->GetQuantity() + $cartItemToAdd->GetQuantity());
                    $updated = true;
                    break;
                }
            }
        }
        if(!$updated){
            //this is a new article to add
            require "articlesManager.php";
            $itemsAttributes = getArticleDetail($cartItemToAdd->GetArticleId());
            $cartItemToAdd->SetAttributes($itemsAttributes['description'], $itemsAttributes['photo'], $itemsAttributes['price']);
            $this->items[] = $cartItemToAdd;

        }
        $this->UpdateTotals();
    }
}
