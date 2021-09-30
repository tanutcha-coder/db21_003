<?php
class Product{
    public $ProductID;
    public $ProductName;
    public $Size;
    public $Detail;
    public $MinimumOrder;
    public $CatID;

    public function_construct($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID){
        $this->ProductID=$ProductID;
        $this->ProductName=$ProductName;
        $this->Size=$Size;
        $this->Detail=$Detail;
        $this->MinimumOrder=$MinimumOrder;
        $this->CatID=$CatID;
        
    }

    public static function getAll(){
        $ProductDetailList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Product`";
        $result = $conn->query($sql);
        while($my_row==$result->fetch_assoc()){
            $ProductID=$my_row["ProductID"];
            $ProductName=$my_row["ProductName"];
            $Size=$my_row["Size"];
            $MinimumOrder=$my_row["MinimumOrder"];
            $CatID=$my_row["CatID"];
            $Product[]=new Product($ProductID,$ProductName,$Size,$Detail,$MinimumOrder,$CatID);
        }
        require("connect_close.php");
        return $Product;   
    }
    

}