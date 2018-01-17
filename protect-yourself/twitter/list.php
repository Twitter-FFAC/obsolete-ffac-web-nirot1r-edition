<?php
    include "../../inc/config.php";
    $title = "ブロックしたいアカウントを選択する";
    include "../../inc/header.php";
    
    if(!isset($_SESSION["access_token"])) {
        header("Location: ./");
    }
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
                                <option value="blacklist">ブラックリスト</option>
                                <option value="graylist">グレーリスト</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="column no-display" id="block-btn">
                <div class="card">
                    <div class="card-header">ブロックを行う(<span id="block_usercnt"></span>件)</div>
                    <div class="card-content">
                        ブロックを行います。<br />
                        下のボタンをクリックしてください。<br />
                        <button class="btn" id="block" onclick="s()">ブロック処理を開始</button>
                    </div>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ブロック？</th>
                        <th>名前</th>
                        <th>スクリーンネーム</th>
                    </tr>
                </thead>
                <tbody id="data">
                </tbody>
            </table>
        </div>

        <script>
            const block_usercnt = document.getElementById("block_usercnt");
            let user_list = [];
            const c = function() {
                const list_value = document.select_list.list.value;
                const table_data = document.getElementById("data");
                    table_data.textContent = null;
                const block_btn = document.getElementById("block-btn");
                    block_btn.classList.add("no-display");
                block_usercnt.innerText = 0;
                user_list = [];
                if(list_value !== "-") {
                    $.get(
                        "https://raw.githubusercontent.com/Twitter-FFAC/fight-for-artistic-creativity/master/lists/" + list_value + ".json",
                        {},
                        function(response_json) {
                            const list_data = JSON.parse(response_json);

                            list_data.forEach(function(value, index, list_data) {
                                const list_tr = document.createElement("tr");
                                    const checkbox = document.createElement("td");
                                    const username = document.createElement("td");
                                    const screenname = document.createElement("td");
                                        checkbox.innerHTML = '<input type="checkbox" onclick="r(' + value.id + ', this.checked)" checked>';
                                        username.innerText = value.name;
                                        screenname.innerText = "@" + value.screen_name;
                                    list_tr.appendChild(checkbox);
                                    list_tr.appendChild(username);
                                    list_tr.appendChild(screenname);
                                table_data.appendChild(list_tr);
                                user_list.push(value.id);
                            });
                            block_usercnt.innerText = user_list.length;
                            block_btn.classList.remove("no-display");
                        });
                }
            }

            const r = function(id, checked) {
                if(checked) {
                    user_list.push(id);
                } else {
                    user_list.some(function(v, i){
                        if (v == id) user_list.splice(i, 1);
                    });
                }
                block_usercnt.innerText = user_list.length;
            }

            const s = function() {
                const block_btn = document.getElementById("block");
                block_btn.setAttribute("disabled", "");
                block_btn.innerText = "処理中です…";
                $.post(
                    "https://ffac.g-second.net/protect-yourself/twitter/block.php",
                    {
                        "user[]": user_list
                    },
                    function(response) {
                        if(response === "success") {
                            alert("正常に処理が完了しました。\nご協力ありがとうございました。");
                            window.location.href = "./";
                        }
                    //block_btn.innerText = "ブロック処理を開始";
                    //block_btn.removeAttribute("disabled");
                    }
                )
            }
        </script>
<?php
    include "../../inc/footer.php";
?>