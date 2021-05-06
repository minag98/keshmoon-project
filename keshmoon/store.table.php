<?php
include_once 'header.php';
?>
<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="text-align: center; color: dimgray;">هر انبار چه محصولاتی دارد</h2>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table  class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>نام انبار</th>
                            <th>نام شهر</th>
                            <th>آدرس</th>
                            <th>نام محصول</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include_once 'class/view.class.php';
                        $objView = new View();
                        $leftjoin = $objView->showStoreWithProduct();
                        if ($leftjoin >0) {
                            foreach ($leftjoin as $JOIN) {
                                echo '<tr>';
                                foreach ($JOIN as $item) {
                                    echo '<td>' . $item . '</td>';
                                }
                                echo '</tr>';
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>