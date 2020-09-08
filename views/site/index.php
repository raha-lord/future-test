<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="template/style.css">
    <title>future-test</title>
</head>
<body>
    <header>
        <div class="header-block container">
            <div class="text-header-block col-10">
                <div class="info-text-header-block">
                    <p>Телефон: (499)340-94-71</p>
                    <p>Email: <span>info@future-group.ru</span></p>
                </div>
                <h1 class="h-text-header-block">Комментарии</h1>
            </div>
            <div class="logo-header-block col-2">
                <img src="template/img/logo.png">
            </div>
        </div>
    </header>
    <main>
        <div class="main-block container">
            <div class="main-block-comm container">
            <div class="comm-list col-12">
                <?php foreach ($commentsList as $comment) :?>
                <div class="comm-item">
                    <div class="name-comm-item">
                    <p><span><?php echo $comment['name']?></span></p>
                    <p class="date-comm-item"><?php echo $comment['date']?></p>
                    </div>
                    <div class="body-comm-item">
                    <p><?php echo $comment['comment'] ?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            </div>
            <div class="form-main-block container col-12">
                <form class="form col-12"  method="post" >
                    <h2>Оставить комментарий</h2>
                    <div class="form-group col-6">
                        <label for="name">Ваше имя</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group col-6">
                        <label for="comm">Ваш комментарий</label>
                        <textarea class="form-control form-comment" style="height: 135px" name="comment"></textarea>
                    </div>
                    <div class="text-right col-6">
<!--                        <input type="submit" name="submit" class="btn btn-primary form-btn" value="Отправить">-->
                        <input class="btn btn-success" type="submit" name="submit" value="Сохранить">
                    </div>
                </form>
            </div>
        </div>

    </main>
    <footer>
        <div class="footer-block container">
            <div class="logo-footer-block col-2">
                <img src="template/img/logo-footer.png" alt="">
            </div>
            <div class="text-footer-block col-10">
                <p>Телефон: (499) 340-94-71</p>
                <p><span>Email: info@future-group.ru</span></p>
                <p><span>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</span></p>
                <div>© 2010 - 2014 Future. Все права защищены</div>
            </div>
        </div>
    </footer>
</body>
</html>