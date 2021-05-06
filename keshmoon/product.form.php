<?php
    include_once 'header.php';
?>
    <div class="form-box">
        <img src="img/Wheat.jpg" class="avatar">
        <h1>ثبت محصول</h1>
        <form action="include/insertInProduct.inc.php" method="post">
            <p>نام محصول</p>
            <input type="text" name="pName" placeholder="نام محصول را وارد کنید">
            <p>تعداد محصل (اعداد به انگلیسی)</p>
            <input type="text" name="pQuantity" placeholder="تعداد محصول را مشخص کنید">
            <p>انتخاب انبار</p>
            <select name="Storeid" id="">
                <option value="">یکی از انبارها را انتخاب کنید</option>
                <?php
                include_once 'class/view.class.php';
                $objView=new View();
                $store_info=$objView->showStore();
                foreach ($store_info as $item){
                    echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                }
                ?>
            </select>
                 <button name="submit" value="submit">اضافه کردن محصول</button>
        </form>
    </div>
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "empty") {
        echo "<div class='error'>لطفا تمام فیلد ها را پر کنید</div>";
    }
    if ($_GET['error'] == "statementFailed") {
        echo "<div class='error'>prepared statement has been failed!</div>";
    }
    if ($_GET['error'] == "none") {
        echo "<div class='success'>اطلاعات محصول با موفقیت ثبت شد</div>";
    }
}