<?php
    include "inc/config.php";
    $title = "Fight for artistic creativity";
    include "inc/header.php";
?>
        <div class="container">
            <div class="column">
                <div class="card">
                    <div class="card-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div>
                    <div class="card-header">自分で守る</div>
                    <div class="card-content">
                        簡単な操作でリストアップされているアカウントを<br />
                        スパム報告・ブロックすることができます。<br />
                        <a class="btn" href="/protect-yourself" target="blank">この方法で守る</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-icon"><i class="fa fa-github-alt" aria-hidden="true"></i></div>
                    <div class="card-header">みんなで守る</div>
                    <div class="card-content">
                        リストアップされているアカウントは、<br />
                        全てGitHub上でバージョン管理されています。<br />
                        <a class="btn" href="https://github.com/Twitter-FFAC/fight-for-artistic-creativity/issues/6" target="blank">不審なユーザを見つけたら、ここから投稿しましょう。</a>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-icon"><i class="fa fa-server" aria-hidden="true"></i></div>
                    <div class="card-header">ホストして守る</div>
                    <div class="card-content">
                        このWEBサイト・システムは、<br />
                        GitHub上でバージョン管理されています。<br />
                        あなたがWEBサーバをお持ちであれば、<br />
                        かんたんな操作でこのWEBサイトを構築することができます。<br />
                        <a class="btn" href="" target="blank">詳しく</a>
                    </div>
                </div>
            </div>
        </div>
<?php include "inc/footer.php"; ?>
