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
                            <h2 style="text-align: center; color: dimgray;">هر محصول مطعلق به کدام انبار</h2>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table  class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>نام محصول</th>
                            <th>تعداد محصول</th>
                            <th>نام انبار</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        include_once 'class/view.class.php';
                        $objView = new View();
                        $rightjoin = $objView->showProductWithStore();
                        if($rightjoin >0){
                            foreach ($rightjoin as $JOIN) {
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
