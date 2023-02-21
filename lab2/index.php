<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>page 1</title>
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
        <h1>Feedback Form</h1>
        <form action="https://httpbin.org/post" method="post">
            <div class="mb-3">
                <label class="form-label" for="username">Username:</label>
                <input class="form-control" type="text" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="username">Email:</label>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="appeal_type">Type of Appeal:</label>
                <select class="form-select" id="appeal_type" name="appeal_type" required>
                    <option selected value="">-- Select Type --</option>
                    <option value="complaint">Complaint</option>
                    <option value="suggestion">Suggestion</option>
                    <option value="gratitude">Gratitude</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="appeal_text">Appeal Text:</label>
                <textarea class="form-control" id="appeal_text" name="appeal_text" rows="5" cols="50" required></textarea>
            </div>
            <label class="form-label" for="response_option">Response Option:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="sms" name="response_option[]" value="sms">
                <label class="form-check-label" for="sms">SMS</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="email" name="response_option[]" value="email">
                <label class="form-check-label" for="email">Email</label>
            </div>
            <input class="btn btn-primary" type="submit" value="Send">
        </form><br><br>
        <a href="page2.php">Go to Page 2</a>
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