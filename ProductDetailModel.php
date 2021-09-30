<?php class ProductDetail{
    public $MinQuantity,$Price,$Screen,$MaxQuantity;
    public function_construct($ProductID,$ProductDID,$MinQuantity,$Price,$Screen,$MaxQuantity){
        $this->ProductID=$ProductID;
        $this->ProductDID=$ProductDID;
        $this->MinQuantity=$MinQuantity;
        $this->Price=$Price;
        $this->Screen=$Screen;
        $this->MaxQuantity=$MaxQuantity;
    }
    public static function getAll(){
        $ProductDetailList = [];
        require("connection_connect.php");
        $sql="SELECT *FROM `ProductDetail`";
        $result = $conn->query($sql);
        while($my_row==$result->fetch_assoc()){
            $ProductID=$my_row["ProductID"];
            $ProductName=$my_row["ProductName"];
            $MinQuantity=$my_row["MinQuantity"];
            $Price=$my_row["Price"];
            $Screen=$my_row["Screen"];
            $MaxQuantity=$my_row["MaxQuantity"];
            $ProductDetailList[]=new ProductDetail($ProductID,$ProductName,$MinQuantity,$Price,$Screen,$MaxQuantity);
        }
        require("connection_close.php");
        return $ProductDetailList;
    }
    public static function get($ProductID){
        require("connection_connect.php");
        $sql = "SELECT * FROM Product,ProductDetail WHERE Product.ProductID=ProductDetail.ProductID";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $ProductID=$my_row["ProductID"];
        $ProductName=$my_row["ProductName"];
        $MinQuantity=$my_row["MinQuantity"];
        $Price=$my_row["Price"];
        $Screen=$my_row["Screen"];
        $MaxQuantity=$my_row["MaxQuantity"];
        return new ProductDetail($ProductID,$ProductName,$MinQuantity,$Price,$Screen,$MaxQuantity);

    }
}?>