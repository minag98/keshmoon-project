<?php
include_once 'dbh.class.php';
class Model extends Dbh{
    protected $store_info=[];
    protected $leftJoin;
    protected $rightJoin;
    protected function setStore($cityName,$StoreName,$Address){
        $sql="INSERT INTO store (cityName, StoreName, Address)VALUES (?, ?, ?);";
        $conn=$this->connect();
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../store.form.php?error=statementFailed");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "sss", $cityName,$StoreName, $Address);
            mysqli_stmt_execute($stmt);
            header("location:../store.form.php?error=none");
        }
    }

    protected function setProduct($pName,$pQuantity){
        $sql="INSERT INTO product (pName, pQuantity)VALUES (?, ?);";
        $conn=$this->connect();
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../product.form.php?error=statementFailed");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "ss", $pName,$pQuantity);
            mysqli_stmt_execute($stmt);
            $sql="SELECT * FROM product WHERE pName =? OR pQuantity=?;";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location:../product.form.php?error=statementFailed");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt, "ss", $pName,$pQuantity);
                mysqli_stmt_execute($stmt);
                $resultData = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($resultData)) {
                    $product_id = $row['id'];
                    return $product_id;
                }
            }
        }
    }

    protected function setconnector($Storeid,$product_id){
        $sql="INSERT INTO connector (proId, storeId)VALUES (?, ?);";
        $conn=$this->connect();
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../product.form.php?error=statementFailed");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "ss", $product_id,$Storeid);
            mysqli_stmt_execute($stmt);
            header("location:../product.form.php?error=none");
        }
    }


    protected function getStore(){
        $sql="SELECT * FROM store;";
        $conn=$this->connect();
        $result=mysqli_query($conn,$sql);
        $data=array();
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_all($result)) {
                $this->store_info=$row;
            }
        }
    }

    protected function leftjoin(){
        $sql="SELECT store.StoreName, store.cityName, store.Address, product.pName FROM store
        JOIN connector
        ON connector.storeId=store.id
        JOIN product 
        ON product.id=connector.proId;";
        $conn=$this->connect();
        $result=mysqli_query($conn,$sql);
        $data=array();
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_all($result)) {
                $this->leftJoin=$row;
            }
        }
    }

    protected function rightjoin(){
        $sql="SELECT product.pName, product.pQuantity, store.StoreName FROM product
        JOIN connector
        ON connector.proId=product.id
        JOIN store 
        ON store.id=connector.storeId ;";
        $conn=$this->connect();
        $result=mysqli_query($conn,$sql);
        $data=array();
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_all($result)) {
                $this->rightJoin=$row;
            }
        }
    }

}