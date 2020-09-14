<?php


class CartItem
{
    //region private attributes
    private string $articleId;
    private string $description;
    private string $imgPath;
    private float $price;
    private int $quantity;
    private float $totalPrice;
    //endregion private attributes

    //region constructor
    /**
     * @brief CartItem constructor.
     * @param $articleId : the unique identifer of an article
     * @param $quantity : the quantity presents in the cart
     */
    public function __construct($articleId, $quantity)
    {
        $this->articleId = $articleId;
        $this->quantity = $quantity;
    }
    //endregion constructor

    //region private methods
    private function updateTotal(){
        $this->totalPrice = $this->price * $this->quantity;
    }
    //endregion private methods

    //region accessors and mutators
    /**
     * @breief This method gets the value of the private attribute "ArticleId"
     * @return string : articleId (B101, T202)
     */
    public function GetArticleId()
    {
        return $this->articleId;
    }

    /**
     * @brief This method gets the value of the private attribute "Description"
     * @return string
     */
    public function GetDescription()
    {
        return $this->description;
    }

    /**
     * @brief This method gets the value of the private attribute "GetImgPath"
     * @return string : path to the product image
     */
    public function GetImgPath()
    {
        return $this->imgPath;
    }

    /**
     * @brief This method gets the value of the private attribute "Quantity"
     * @return int : quantity of this article in the cart
     */
    public function GetQuantity()
    {
        return $this->quantity;
    }

    /**
     * @brief This method sets the value of the private attribute "Quantity"
     * @param $quantity : new quantity to set
     */
    public function SetQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->updateTotal();
    }

    /**
     * @brief This method gets the value of the private attribute "Price"
     * @return float : price of the article
     */
    public function GetPrice()
    {
        return $this->price;
    }

    /**
     * @brief This method gets the article's total price
     * @return float : total price of this article in the cart (quantity * unity price)
     */
    public function GetTotalPrice()
    {
        return $this->totalPrice;
    }
    //endregion accessors and mutators

    //region public methods
    /**
     * @brief This method set a set of private attributes (refer to parameters)
     * @param $description : article description
     * @param $imgPath : path to the article image
     * @param $price : unity price of the article
     */
    public function SetAttributes($description, $imgPath, $price){
        $this->description = $description;
        $this->imgPath = $imgPath;
        $this->price = $price;
        $this->updateTotal();
    }
    //endregion public methods
}

