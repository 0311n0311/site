<?php

require "db.php"; //подключении базы данных 
$db=new Database();//присваивание базы данных переменной 
?>
<!DOCTYPE html><!-- Объявление формата документа -->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>EDUREM</title><!-- Задаем заголовок документа -->

    <link rel="stylesheet" href="/style.css"> <!-- Подключаем внешнюю таблицу стилей -->

</head>
<body>
    
    <header>
        <img alt="" class="logo" src="/image/лого.png"><!--логотип-->
        <nav>
            <ul>
            <li>
                <a class="nav_text" href="главная.html"> Главная </a>
                <a class="nav_text" href="о_нас.html"> О нас </a>
                <a class="nav_text" href="каталог.html">  Каталог </a>
                <a class="nav_text" href="услуги.html"> Услуги </a>
                <a class="nav_text" href="#zatemnenie_rege"> Личный кабинет </a>
            </li>
            <li class="li_short">
                <a class="" href="#zatemnenie_reg"> Регистрация</a><!--ссылка на окно регистрации-->
                <a class="" href="#zatemnenie_rege"> Вход</a>
                <a class="" href=""> <img alt="" class="icon_header" src="/image/корзина.png"></a><!--добавление иконки-->
                <a class="" href=""><img alt="" class="icon_header" src="/image/поиск.png"></a>
            </li>
            </ul>   
        </nav>
    </header>
    <main>
        <section class="block_color">
            <div class="text_block"><!--текстовый блок-->
                <p> "Edurem" начала свою деятельность совсем недавно. До этого мы прошли длинный путь от узкоспецилизированного поставщика расходных материлов для печати до широкопрофильного поставщика IT - оборудования. Мы являемся официальными партнерами многих производителей и активно развиваемся. Будем рады расти вместе с вами! <br><br>Наши приоритеты - быстрый сервис, справедливые цены и широчайший ассортимент. С нами удобно работать, мы готовы скомплектовать для вас практически любой заказ и оперативно осуществить его доставку. У нас есть собственная логистическая служба, а для региональных партнеров мы с удовольствием предоставляем доставку товаров в транспортные компании по выбору.
            </div>
            <div class="text_block">
                <div class="space">
                    <div class="text_blocks">
                        <p class="title">Работаем на результат</p><br>
                        <p class="text">Никаких странных правил и ограничений. Простые, понятные и выполнимые практически для каждого партнера условия сотрудничества.</p>
                    </div>
                    <div class="text_blocks">
                        <p class="title">Даем гарантию</p><br>
                        <p class="text">Надежность - один из главных приоритетов в нашей работе. Мы всегда поддерживаем гарантию производителя и работаем строго в рамках закона. </p>
                    </div>
                </div>
                <div>
                    <div class="text_blocks">
                        <p class="title">Всегда на связи </p><br>
                        <p class="text">Наши менеджеры обработают каждое обращение, вне зависимости от времени его поступления и ответят в максимально сжатые сроки! </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_border">
            <a class="" href=""> 
                <div class="products">
                    <div class="product_img">
                        <img alt="" class="img_center" src="/image/продукт1.png" >
                    </div>
                    <p class="black"> Оперативная память XPG Gammix D10 8 ГБ DDR4 3200 МГц UDIMM CL16 AX4U32008G16A-SR10 </p>
                </div>
            </a>
            <a class="" href=""> 
                <div class="products">
                    <div class="product_img"><!--блок с картинками-->
                        <img alt="" class="img_center" src="/image/продукт2.png" >
                    </div>
                    <p class="black"> Компьютерный корпус AeroCool NightHawk Duo </p>
                </div>
            </a>
            <a class="" href=""> 
                <div class="products">
                    <div class="product_img">
                        <img alt="" class="img_center" src="/image/продукт3.png" >
                    </div>
                    <p class="black"> Платформа Intel NUC BXNUC10i7FNHN [bxnuc10i7fnhn 99aht9] </p>
                </div>
            </a>
            <a class="" href=""> 
                <div class="products">
                    <div class="product_img">
                        <img alt="" class="img_center" src="/image/продукт4.png" >
                    </div>
                    <p class="black"> Устройство охлаждения(кулер) DeepCool GAMMAXX 400 BLUE BASIC, 120мм, Ret </p>
                </div>
            </a>
            <a class="" href=""> 
                <div class="products">
                    <div class="product_img">
                        <img alt="" class="img_center" src="/image/продукт5.png" >
                    </div>
                    <p class="black"> Звуковая карта USB Creative Sound BlasterX G5, 7.1, Ret [70sb170000000] </p>
                </div>
            </a>
            <a class="" href=""> 
                <div class="products">
                    <div class="product_img">
                        <img alt="" class="img_center" src="/image/продукт6.png" >
                    </div>
                    <p class="black"> SFF (2.5") Серверный HDD Seagate Exos 10E300 [SAS, 0.3 ТБ, 10000 об/мин, 12 Гбит/с, 128 МБ] </p>
                </div>
            </a>
            <a class="" href=""> 
                <div class="products">
                    <div class="product_img">
                        <img alt="" class="img_center" src="/image/продукт7.png" >
                    </div>
                    <p class="black"> Устройство видеозахвата ORIENT C703HVC4781813 Устройство видеозахвата ORIENT C703HVC USB 2.0 Type-A, , 1920 x 1080, HDMI </p>
                </div>
            </a>
            <a class="" href=""> 
                <div class="products">
                    <div class="product_img">
                        <img alt="" class="img_center" src="/image/продукт8.png" >
                    </div>
                    <p class="black"> USB контроллер DEXP CUSB3X2 [подключение: USB 3.2 Gen1 (19 pin), разъемы: USB 3.2 gen1 Type A x2] </p>
                </div>
            </a>
        </section>
        <section class="managers_block">
            <p class="title_block"> Сотрудники </p>
            <p class="text_block_manager">Наши менеджеры обработают Ваш запрос в кратчайшие сроки.</p>
            <div class="space">
                <div class="card_managers">
                    <div class="manager_img">
                        <img alt="" class="img_center" src="/image/сотрудник1.png">
                    </div>
                    <p class="title"> МЕНЕДЖЕР ОТДЕЛА ПРЯМЫХ ПРОДАЖ </p>
                    <p class="title_name"> Антон </p>
                </div>
                <div class="card_managers">
                    <div class="manager_img">
                        <img alt="" class="img_center" src="/image/сотрудник2.png">
                    </div>
                    <p class="title"> МЕНЕДЖЕР ОТДЕЛА ПРЯМЫХ ПРОДАЖ </p>
                    <p class="title_name"> Евгений </p>
                </div>
                <div class="card_managers">
                    <div class="manager_img">
                        <img alt="" class="img_center" src="/image/сотрудник3.png">
                    </div>
                    <p class="title"> МЕНЕДЖЕР ОТДЕЛА ПРЯМЫХ ПРОДАЖ </p>
                    <p class="title_name"> Ольга </p>
                </div>
            </div>
        </section>
        <section class="managers_block">
            <p class="title_block"> Остались вопросы? </p>
            <p class="text_block_manager">Напишите нам. Мы отвечаем каждому.</p>
            <div class="center_div">
                <button class="request" onclick="window.location.href='#zatemnenie_ques';"> Написать </button>
            </div>

        </section>

    </main>
    <footer>
        <div>
            <nav>
                <ul class="ul_vertical">
                    <li>
                        <a class="text" href="главная.html"> Главная </a>
                        <a class="text" href="о_нас.html"> О нас </a>
                        <a class="text" href="каталог.html">  Каталог </a>
                        <a class="text" href="услуги.html"> Услуги </a>
                    </li>
                </ul>
            </nav>
        </div>
        <br>
        <div>
            <nav>
                <ul class="ul_vertical">
                    <li>
                        <p class="text"> Тел: +7 (977) 879 56 58</p>
                        <p class="text"> E-mail: www.edurem.ru</p>
                        <p class="text"> Адрес: ул.Молостовых 15 к 4</p>
                    </li>
                </ul>
            </nav>
        </div>
        <div>
            <div class="flex">
                <div class="soc_icons"> 
                    <a href="facebook.cm"><img alt="" class="sc" src="/image/фейс.png"></a><!--добавление иконки-->
                </div>
                <div class="soc_icons">
                    <a href="vk.com"><img alt="" class="sc" src="/image/вк.png"></a><!--добавление иконки-->
                </div>
                <div class="soc_icons"> 
                    <a href=""><img alt="" class="sc" src="/image/твит.png" ></a><!--добавление иконки-->
                </div>
            </div>
        </div>
        </footer>
   
 <!--форма регистрации-->   
    <section> 
        <div id="zatemnenie_reg" class="">
        <div id="okno_1" class="reg">
        <p class="title">Регистрация</p>
          <form action="check.php" method="POST">
          <p class="insert_text"> Имя </p>
              <input class="insert" name="name" placeholder="name" type="name" autocomplete="off"/> 
              <p class="insert_text"> Логин </p>
              <input class="insert" name="login" placeholder=" login" type="login" autocomplete="off"/> 
              <p class="insert_text"> Пароль </p>
              <input class="insert" name="password" placeholder="password" type="password" autocomplete="off"/>
              <input type="submit" class="submit" value="Зарегистрироваться" onclick="alertFunction()"/>
          </form> 
          <a href="#" class="close">Закрыть окно</a>
      </div>
    </div>
  <br>
  <br>
      <div id="zatemnenie_rege" class="">
        <div id="okno_2" class="reg">
              <p class="title">Вход</p>
      <form action="auth.php" method="POST">
        <p class="insert_text"> Логин </p>
        <input class="insert" name="login" placeholder="login" type="text" autocomplete="on"/> 
        <p class="insert_text"> Пароль </p>
        <input class="insert" name="password" placeholder="password" type="password" autocomplete="on"/>
        <input type="submit" class="submit" value="Войти" onclick="alertFunction()"/>
    </form> 
    <a href="#" class="close">Закрыть окно</a>
</div>
</div>
</section>
      <!--форма обратной связи-->
      <div id="zatemnenie_ques" class="">
        <div id="okno_3" class="reg">
            <p class="title">Задать вопрос</p>
            <form action="feedback.php" method="POST">
                <p class="insert_text"> ФИО </p>
                <input class="insert" name="name" placeholder="Имя" type="text" autocomplete="off"/> 
                <p class="insert_text"> Телефон </p>
                <input class="insert" name="phone" placeholder="Телефон" type="text" autocomplete="off"/>
                <p class="insert_text"> Email</p>
                <input class="insert" name="email" placeholder="Email" type="text" autocomplete="off"/> 
                <p class="insert_text"> Текст сообщения </p>
                <input class="insert" name="text" placeholder="Текст сообщения" type="text" autocomplete="off"/>
                <input type="submit" class="submit" value="Отправить" onclick="alertFunction()"/>
            </form> 
            <a href="#" class="close">Закрыть окно</a>
        </div>
    </div>

</html>

