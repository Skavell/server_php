<?php
    $name = 'Евгений Гнатюк'
?>
<html>
<head>
    <link rel="stylesheet" href="dist/reveal.css">
    <link rel="stylesheet" href="dist/theme/simple.css" id="theme">
</head>
<body>
<div class="reveal">
    <div class="slides">
        <section data-background-image="img/background_name.jpg">
            <?php
                echo '<h3 class="fragment">Меня зовут</h3> <br>';
                echo '<h2 class="fragment">'.$name.'<h2>';
            ?>
        </section>
        <section data-background-image="img/background_code.jpg">
            <h3>Языки, которые я изучаю:</h3>
            <?php
                $arr_learn = ['img/logo_python.png', 'img/logo_html.png', 'img/logo_js.png', 'img/logo_css.png', 'img/logo_php.png'];
                for ($i = 0; $i < count($arr_learn); $i++){
                    echo '<img class="fragment" src="'.$arr_learn[$i].'" alt="" width="100">';
                }
            ?>
        </section>
        <section data-background-image="img/background_end.jpg">
            <h3>Показывать больше нечего, но, надеюсь, в ближайшем будущем здесь появится слайд с моими проектами)</h3>
        </section>
    </div>
</div>
<script src="dist/reveal.js"></script>
<script>
    Reveal.initialize({/* config */});
</script>
</body>
</html>