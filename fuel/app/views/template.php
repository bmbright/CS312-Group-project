<head>
    <title>
        Pets with Human Names -
        <?php echo $title ?>
    </title>

    <meta charset="UTF-8">
    <meta name="author" content="Alex Glimco - alexpcg - 831965240">
    <meta name="description" content="FuelPHP Template">
    <meta name="keywords" content="Alex Glimco, Fuel, Template, HTML, CS312, Colorado State University">
    <?php echo Asset::css($css) ?>
</head>

<header>
    <div class="logo">
        <a><img src="https://i.imgur.com/1GjCd3S.png" alt="PetsWithHumanNamesLogo" height="200px"></a>
    </div>
    <h1>Pets with Human Names</h1>

    <ul>
        <li><a href="https://cs.colostate.edu:4444/~alexpcg/m1/index/pwhn/">Home</a></li>
        <li><a href="https://cs.colostate.edu:4444/~alexpcg/m1/index/pwhn/about/about?direction=about">About</a></li>
        <li><a href="https://cs.colostate.edu:4444/~alexpcg/m1/index/pwhn/colortable/colortable?direction=colortable">ColorTable</a> </li>
    </ul>
</header>

<body>

    <main>
        <?php echo $content ?>
    </main>


</body>