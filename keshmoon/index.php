<?php
include_once 'header.php';
?>

<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "none") {
        echo "<div class='success'> دیتا بیس با موفقیت ساخته شد</div>";
        echo"<div class='success'> name : keshmoon </div>";
    }
    if ($_GET['error'] == "success") {
        echo "<div class='success'>جداول انبار، محصول و جدول رابط ساخته شدند</div>";
    }
}
?>
        <div class="main-container">
            <h2 class="welcome">خوش آمدید</h2>
            <hr>
            <div class="data-base">
                <h3>برای شروع بر روی دکمه ی ساخت دیتا بیس کلیک کنید تا دیتا بیس شما ساخته شود</h3>
                <form action="include/dbBuild.inc.php" method="post">
                    <button name="db" value="submit" class="btn btn-info">ساخت دیتا بیس</button>
                </form>
            </div>
            <hr>
            <div class="dataBase-table">
                <h3>با کلیک بر روی این دکمه ۳ جدول محصول، انبار و جدول رابط ساخته می شود</h3>
                <form action="include/tableBuild.inc.php" method="post">
                    <button name="table" value="submit" class="btn btn-info">ساخت جدول </button>
                </form>
            </div>
            <hr>
            <div class="info">
                <h4>پروژه کارآموزی بک اند کشمون</h4>
                <h4>کارآموز: مینا گیویان</h4>
            </div>
        </div>


</body>
</html>