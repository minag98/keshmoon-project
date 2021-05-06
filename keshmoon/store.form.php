<?php
include_once 'header.php';
?>
    <div class="form-box">
        <img src="img/Wheat.jpg" class="avatar">
        <h1>ثبت انبار</h1>
        <form action="include/getStore.inc.php" method="post">
            <p>نام شهر</p>
            <input type="text" name="cityName" placeholder="نام شهر را وارد کنید">
            <p>نام انبار</p>
            <input type="text" name="StoreName" placeholder="نام انبار را وارد کنید">
            <p>آدرس</p>
            <input type="text" name="Address" placeholder="آدرس را وارد کنید">
            <button name="submited" value="submit">اضافه کردن انبار</button>
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
        echo "<div class='success'>اطلاعات انبار با موفقیت ثبت شد</div>";
    }
}
