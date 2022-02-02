<?php
echo <<<HTML
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kepchyk.me</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css//style.css" rel="stylesheet">

  </head>
  <body>
        <div class="container" style="text-align: center;">
            <h2>ДОБРО ПОЖАЛОВАТЬ</h2>
            <p>Вы находитесь на главной странице сайта</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Кто я?</h2>
                <p>Студент, глава игрового проекта и просто обычный человек.<br>Руслан, 17 лет.  </p>
                <h2>Чем занимаюсь?</h2>
                <p>Разрабатываю игровой сервер майнкрафт и хостинг. Обожаю self-host, а потому стремлюсь использовать «Свои решения» при создании проектов.</p>
                <h2>Что умею?</h2>
                <p>Systems: Ubuntu, Debian, CentOS, Windows
                    <br>Containerization: Docker
                    <br>Code: Bash, HTML/CSS, JavaScript
                    <br>Balancer: Nginx, LiteSpeed
                    <br>Cloud: Hetzner, OVH, Selectel, Alibaba Cloud, Oracle Cloud
                    <br>Monitoring: Grafana, Netdata, Prometheus
                    <br>DB: mongodb, redis, mysql</p>
                <h2>Вдохновлен</h2>
                <p>Вами.</p>
            </div>
            <div class="col-md-6">
                <h2>Проекты</h2>
                <h3><a href="/BurnCloud">Burn Cloud</a></h3>
                <h3><a href="/EnigmaticMP">EnigmaticMP</a></h3>
                <h3><a href="/ModerHoster">Moder Hoster, WalesServ</a></h3>
                <h3><a href="/DereptBOT">DereptBOT</a></h3>
                <h2>Статусы проектов</h2>
                <p>1.dead</p>
                <p>2.dead</p>
                <h2>Контакты</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/></svg> @kephyks<br>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>+7 (995) 162-00-45<br>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16"><path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/></svg> me@kep.pw
            </div>
        </div>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?=get_template_directory_uri();?>/js/bootstrap.min.js"></script>
  </body>
</html>
</html>

HTML;

?>