<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>page 2</title>
</head>
<body>
    <header>
        <div class="d-flex align-items-center gap">
            <div class="flex-shrink-0">
                <img class="logo-size" src="https://public.superjob.ru/spreaded/images/rtb_pictures/30/029/default.image.2930.51a3030ed71faa28b7cae807e63dd011.png" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <p>4.1. Домашняя работа: Feedback Form</p>
                <p>Гнатюк</p>
            </div>
        </div>
    </header>
    <main>
        <section class="container">
            <h1>Get Headers Result</h1>
            <textarea rows="10" cols="50">
                  <?php
                  $headers = get_headers('http://www.example.com');
                  foreach ($headers as $header) {
                      echo $header . "\n";
                  }
                  ?>
                </textarea>
        </section>
    </main>
    <footer class="center_flex">
        <hr>
        <p class="self_center">Собрать сайт из двух страниц. </p>
        <p class="self_center"> 1 страница: Сверстать форму обратной связи. Отправку формы осуществить на URL: https://httpbin.org/post. Добавить кнопку для перехода на 2 страницу.</p>
        <p class="self_center"> 2 страница: вывести на страницу результат работы функции get_headers. Загрузить код в удаленный репозиторий. Залить на хостинг.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>