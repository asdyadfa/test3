<?php require '../header.php'; ?>
        <meta name="description" content="音楽を共有します。 アーティスト：PIKASONIC、Collin McLoghlin、Hyper Potions。なお、著作権の曲は提供していません。">
        <link rel="stylesheet" href="css/style-2.css">
        <title>SHARE MUSIC</title>
    </head>
    <body>
        <header class="header page">
            <div class="head">
            <h1 class="image-happiness"></h1>
            <span>hamu</span>
            <button id="btns"></button>
            </div>
        </header>
        <nav class="nav page asnav">
            <div class="nv">
                <ul class="list">
                    <li><a href="/template-2/./">ホーム</a></li>
                    <li><a href="/template-2/baseball-club/./">ファンページ</a></li>
                    <li><a href="/template-2/share-music/./">SHARE MUSIC</a></li>
                    <li><a href="/template-2/pikasonic-video/./">PIKASONIC VIDEO</a></li>
                </ul>
            </div>
        </nav>
        <main class="main page">
            <div class="mains">
                <aside class="setumei">
                    <p class="num">このページは、サウンドクラウドの曲を紹介しているだけです。</p>
                </aside>
                <div class="artist">
                    <a href="https://soundcloud.com/pika5onic" target="_blank"><h2 class="title">PIKASONIC:</h2></a>
                    <div class="spotlight-name">
                        <h2 class="title">スポットライト</h2>
                        <ul class="ulist music-list">
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/princess"><div class="heights" style="background: url(music/image/princess.jpg); background-size: contain;"></div><h3 class="song-name">Princess</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/pikasonic-lost-my-mind-featnakotanmaru"><div class="heights" style="background: url(music/image/lostmymind.jpg); background-size: contain;"></div><h3 class="song-name">Lost My Mind</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/pikasonic-nothing"><div class="heights" style="background: url(music/image/nothing.jfif); background-size: contain;"></div><h3 class="song-name">Nothing</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/infinity"><div class="heights" style="background: url(music/image/infinity.jpg); background-size: contain;"></div><h3 class="song-name">Infinity</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/pikasonic-tatsunoshin-euphoria-feat-tsugumi-nagahara"><div class="heights" style="background: url(music/image/eupholia.jpg); background-size: contain;"></div><h3 class="song-name">Eupholia</h3></a></li>
                        </ul>
                    </div>
                    <div class="main-name">
                        <h2 class="title">曲</h2>
                        <ul class="ulist music-list">
                            <li><a target="_blank" href="https://www.soundcloud.com/pika5onic/pikasonic-endless-hanabi"><div class="heights" style="background: url(music/image/endlesshanabi.jpg); background-size: contain;"></div><h3 class="song-name">Endless Hanabi</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/forever"><div class="heights" style="background: url(music/image/forever.jpg); background-size: contain;"></div><h3 class="song-name">Forever</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/sunlight"><div class="heights" style="background: url(music/image/sunlight.jpg); background-size: contain;"></div><h3 class="song-name">Sunlight</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/pikasonic-pleeg-fine"><div class="heights" style="background: url(music/image/fine.jpg); background-size: contain;"></div><h3 class="song-name">Fine</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/swaying"><div class="heights" style="background: url(music/image/swaying.jpg); background-size: contain;"></div><h3 class="song-name">Swaying</h3></a></li>
                        </ul>
                        <ul class="ulist music-list">
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/cosmos"><div class="heights" style="background: url(music/image/cosmos.jpg);background-size: contain;"></div><h3 class="song-name">Cosmos</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/climax-wlunal2"><div class="heights" style="background: url(music/image/climax.jpg);background-size: contain;"></div><h3 class="song-name">Climax</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/miss-you"><div class="heights" style="background: url(music/image/missyou.jpg);background-size: contain;"></div><h3 class="song-name">Miss You</h3></a></li>
                            <li><a target="_blank" href="https://soundcloud.com/pika5onic/no-limit-original-mix"><div class="heights" style="background: url(music/image/nolimit.jpg);background-size: contain;"></div><h3 class="song-name">No Limit</h3></a></li>
                        </ul>
                    </div>
                </div>
                <div class="form">
                    <h2 class="title">好きな曲を教えてください！</h2>
                    <form action="sendmail.php" method="post" id="form">
                        <p>
                            <label>アーティスト名<span style="color: red;">*必須</span><br>
                                <input type="text" name="artist" id="art" required>
                            </label>
                        </p>
                        <p>
                            <label>曲名<span style="color: red;">*必須</span><br>
                                <input type="text" name="song" id="titlesong" required>
                            </label>
                        </p>
                        <p>
                            <label>メールアドレス<span style="color: red;">*必須</span><br>
                                <input type="email" name="mail" id="email" required>
                                <input type="submit" name="submit" id="submit" value="OK" required>
                            </label>
                        </p>
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer page">
            <div class="foot">
                <p>Thank you for seeing this site</p>
                <p>@2022 hamu</p>
            </div>
        </footer>
        <script src="script/script.js"></script>
    </body>
</html>