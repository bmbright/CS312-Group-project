<head>
    <title>
        <?php echo $title ?>
    </title>

    <meta charset="UTF-8">
    <meta name="author" content="Alex Glimco - alexpcg - 831965240">
    <meta name="description" content="FuelPHP Template">
    <meta name="keywords" content="Alex Glimco, Fuel, Template, HTML, CS312, Colorado State University">
    <?php echo Asset::css($css) ?>
</head>

<body>
    <header>
        <ul>
            <?php echo '<li><a href="https://cs.colostate.edu:4444/~alexpcg/m1/pwhn/index/'.$yeet.'">Home</a></li>' ?> 
            <?php echo '<li><a href="https://cs.colostate.edu:4444/~alexpcg/m1/pwhn/index/about/'.$yeet.'">About</a></li>' ?> 
        </ul>
        <hr>
        Template Start
        <hr>
    </header>
    <main>
        <?php echo $content ?>
    </main>
    <footer>
        <hr>
        Template End
        <hr>
        <hr>
        <p>&copy; FOOTER, 2023</p>
        <hr>
    </footer>
</body>