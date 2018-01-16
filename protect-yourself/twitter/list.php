<?php
    include "../../inc/config.php";
    $title = "自分で守る";
    include "../../inc/header.php";
?>
        <div class="container">
            <h1>ブロックしたいアカウントを選択する</h1>
            <div class="column">
                <div class="card">
                    <div class="card-header">リストを選択する</div>
                    <div class="card-content">
                        <select id="list">
                            <option value="black">ブラックリストのみ</option>
                            <option value="light">グレーリストも含む</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
<?php
    include "../../inc/footer.php";
?>