<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="../lesson-8/style.css">
</head>

<body>

    <div class="content">
      <?php   
include "menu.php";
?>
        <h1>Личный сайт студента GeekBrains</h1>

        <div class="center">
            <img src="../lesson-8/img/foto.png">
            <div class="box_text">
                <p><b>Всем привет!</b> Меня зовут <i>Елена</i> . Недавно я начала программировать, однако уже написала
                    свой
                    первый
                    сайт.
                </p>

                <p>В этом мне помог IT-портал <a href="https://gb.ru">GeekBrains</a>.</p>

                <p>На этом сайте вы сможете сыграть в несколько игр, которые я написала:
                    <a href="index.html">Главная</a>
                    <a href="puzzle.html">Загадки</a>
                    <a href="guess.html">Угадайка</a>
                </p>
            </div>
        </div>
    </div>

    <div class="footer">
        Copyright &COPY;
        <?php echo date ("Y");?> Elena Tanakbaeva
    </div>

</body>

</html>