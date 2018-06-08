<?php
$img_dir = "members/takumi/images/";
$img_arr = ["jellyfish", "wood", "water", "flower"];
$index = mt_rand(0, count($img_arr)-1);
$bg = $img_dir . $img_arr[$index] . ".jpg";

echo <<<EOF
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Takumi Hashimoto</title>
    <meta name="description" content="ディスクリプション">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/members/takumi/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet">
    <style>body {background-image: url({$bg});}</style>
</head>

<body>
    <nav class="flex">
        <a href="#" class="flex_item">Top</a>
        <a href="#" class="flex_item">Works</a>
        <a href="#" class="flex_item">News</a>
        <a href="#" class="flex_item">About</a>
    </nav>
    <header>
        <img src="members/takumi/images/sky.jpg" alt="face" class="icon">
        <h1>Hi, I'm Takumi.</h1>
        <p id="selfintro">Working for Rakuten in Tokyo, Japan.
        I love movies.</p>
    </header>
    <main>
        <div class="flex">
            <section class="flex_item colored">
                <h2>What I like</h2>
                <p>I love watching movies, especially Star Wars. Besides, reading books on statistics and programming are my favortie things to do, too. These days I've been interested in Python3.</p>
            </section>
            <section class="flex_item colored">
                <h2>What I can do</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </section>
        </div>
        <section class="">
            <h2>Title</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </section>
        <section class="colored">
            <h2>Title</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </section>
    </main>
    <aside>
    </aside>
    <footer>
        <small>&copy; Takumi Hashimoto</small>
    </footer>
</body>

</html>

EOF;
?>