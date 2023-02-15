<html>
    <header>
        
    </header>
    <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < 5; $i++){
            echo "<tr>
            <th scope=\"row\">".$i."</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>";
        }
        ?>
        </tbody>
    </table>
    <div style="display: flex">
    <?php
    $imgs = array('https://fikiwiki.com/uploads/posts/2022-02/1644918620_17-fikiwiki-com-p-krasivie-kartinki-visokogo-razresheniya-19.jpg', 'https://get.wallhere.com/photo/5092x3438-px-animals-leopard-1098679.jpg', 'https://wp-s.ru/wallpapers/6/3/293552362458985/bengalskie-tigry-lezhat-na-trave.jpg');
    for ($i = 0; $i < 3; $i++){
        echo "<div class=\"card\" style=\"width: 18rem;\">
        <img src=\"$imgs[$i]\" class=\"card-img-top\" alt=\"...\">
        <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
        </div>
        </div>";
    }
    ?>
    </div>
    </body>
    <footer></footer>
</html>
