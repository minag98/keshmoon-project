<?php
include_once '../class/control.class.php';
if($_POST["submit"]=="submit")
{
    $pName=$_POST["pName"];
    $pQuantity=$_POST["pQuantity"];
    $Storeid=$_POST["Storeid"];
    if(empty($pName) || empty($pQuantity) || empty($Storeid)){
        header("location:../product.form.php?error=empty");
    }else{
        $objView=new Control();
        $objView->createProduct($pName,$pQuantity,$Storeid);
    }
}