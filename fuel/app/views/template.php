<head>
    <title>
        Pets with Human Names -
        <?php echo $title ?>
    </title>

    <meta charset="UTF-8">
    <meta name="author" content="Alex Glimco, Cassidy Roberts, Brianna Bright, Jack Matthews">
    <meta name="description" content="Pets with Human Names FuelPHP Template">
    <meta name="keywords" content="Pets with Human Names, Fuel, Template, HTML, CS312, Colorado State University">
    <?php echo Asset::css($css) ?>
</head>

<header>
<div class="logo"><a><img src="https://i.imgur.com/1GjCd3S.png" alt="PetsWithHumanNamesLogo" height="200px"></a></div>
    <h1>Pets with Human Names</h1>
    <ul>
        <?php echo '<li><a href="https://cs.colostate.edu:4444/~alexpcg/m1/pwhn/index/'.$yeet.'">Home</a></li>' ?>
        <?php echo '<li><a href="https://cs.colostate.edu:4444/~alexpcg/m1/pwhn/index/about/'.$yeet.'">About</a></li>' ?>
    </ul>
</header>

<body>
    <main>
        <?php echo $content ?>
    </main>
</body>