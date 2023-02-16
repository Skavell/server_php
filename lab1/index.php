<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <header>
            <div class="d-flex align-items-center gap">
                <div class="flex-shrink-0">
                    <img class="logo-size" src="https://public.superjob.ru/spreaded/images/rtb_pictures/30/029/default.image.2930.51a3030ed71faa28b7cae807e63dd011.png" alt="...">
                </div>
                <div class="flex-grow-1 ms-3">
                    <p>Домашняя работа: Hello, World!</p>
                    <p>Гнатюк</p>
                </div>
            </div>
        </header>
        <main>
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
            <div class="d-flex justify-content-center" style="display: flex">
                <?php
                $imgs = array('https://fikiwiki.com/uploads/posts/2022-02/1644918620_17-fikiwiki-com-p-krasivie-kartinki-visokogo-razresheniya-19.jpg', 'https://w-dog.ru/wallpapers/9/13/535270747480065/gora-moran-snejk-river-grand-teton-nacionalnyj-park-vajoming-reka-snejk-grand-titon.jpg', 'https://wp-s.ru/wallpapers/6/3/293552362458985/bengalskie-tigry-lezhat-na-trave.jpg');
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
        </main>
        <footer class="center_flex">
            <hr>
            <p class="self_center">Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить на хостинг.</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>
