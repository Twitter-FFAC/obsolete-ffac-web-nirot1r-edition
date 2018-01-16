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
                        <form name="select_list">
                            <select name="list" onchange="c()">
                                <option value="-">-</option>
                                <option value="black">ブラックリストのみ</option>
                                <option value="light">グレーリストも含む</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div id="data">
            </div>
        </div>

        <script>
            const c = function() {
                const list_value = document.select_list.list.value;
                if(list_value !== "-") {
                    $.get(
                        "https://raw.githubusercontent.com/Twitter-FFAC/fight-for-artistic-creativity/master/lists/blacklist.json",
                        {},
                        function(response_json) {
                            const column_data = document.getElementById("data");
                            const list_data = JSON.parse(response_json);
                            alert(list_data);
                            list_data.foreach(function(value, index, list_data) {
                                
                                const column = document.createElement("div"); 
                                const card = document.createElement("div");
                                const card_header = document.createElement("div");
                                const card_content = document.createElement("div");

                                    card.classList.add("card");
                                    column.classList.add("column");
                                    card_header.classList.add("card-header");
                                        card_header.innerText = "a";
                                    card_content.classList.add("card-content");
                                        card_content.innerText = "114514";

                                    card.appendChild(card_header);
                                    card.appendChild(card_content);
                                    column.appendChild(card);
                                    column_data.appendChild(column);
                                
                            });
                        });
                    alert(list_value);
                }
            }
        </script>
<?php
    include "../../inc/footer.php";
?>