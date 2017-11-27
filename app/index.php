<?php include "modules/form.php"; ?>


<?php
include "includes/header.php";
?>
<?php
$id = $_GET["id"];
switch ($id){
    case "page1":include "includes/agreement.php"; break;
    case "test":include "includes/test.php"; break;
    default:include "includes/home.php";
}
 ?>
<div class="row form-box">
    <div class="col col-lg-12">
        <form class="form-box__form validate" action="script/form.php" method="post" id="top_form">
            <h3 class="form-box__zagolovok">Закажите звонок!</h3>
            <p class="form-box__podzagolovok">Отправте свой номер телефона и наш менеджер свяжится с Вами в
                ближайшее время. </p>

            <span class="form-box__input-name">Как к Вам обращаться?</span>
            <input class="form-box__input" type="text" placeholder="" name="name" required>
            <span class="form-box__input-name">Номер телефона</span>
            <input class="form-box__input" type="tel" placeholder="+7" name="phone" required>
            <!--                    <input class="form-box__input" type="text" name="coments" value="коментарий">-->
            <input class="form-box__submit" type="submit" value="Заказать звонок!" name="submit">
        </form>
    </div>
</div>
<div class="row contacts-box">
    <div class="col col-lg-4 col-md-12 contacts-box__contacts">
        <p class="contacts-box__zagolovok">
            Наши контакты</p>
        <h1 class="contacts-box__podzagolovok contacts-box__podzagolovok_bold">
            Медицинский центр «ЖИЗНЬ»</h1>
        <!--            <p class="contacts-box__podzagolovok contacts-box__podzagolovok_bold"> Адрес:</p>-->
        <p class="contacts-box__podzagolovok">
            г. Барнаул <br>ул. Партизанская, 169</p>
        <br>
        <p class="contacts-box__phone"><span>+7 (3852) </span>50-03-03</p>
        <br>
        <p class="contacts-box__podzagolovok"> e-mail: <a href="mailto:info@500303.ru"
                                                          class="link">info@500303.ru</a></p>
        <div class="contacts-box__social-icons">
            <a href="https://vk.com/club131352162" target="_blank"><img src="images/vk.svg" alt=""></a>
            <a href="https://www.instagram.com/msktru/" target="_blank"><img src="images/instagram.svg" alt=""></a>
        </div>
    </div>
    <div class="col col-lg-8 col-md-12 contacts-box__maps">
        <div id="map"></div>

    </div>
</div>
<div class="row s-footer">
    <div class="col col-lg-6 col-md-12">
        <div class="s-footer__license">
            <span>Лицензия № ЛО-22-01-004076</span><br/>
        </div>
    </div>
    <div class="col col-lg-6 col-md-12">
        <div class="s-footer__link">
            <a href="index.php?id=page1">Cогласие на обработку персональных данных</a>
        </div>
    </div>
</div>
</div>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<script type="text/javascript" src="script/scripts.min.js"></script>

<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46792473 = new Ya.Metrika({ id:46792473, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46792473" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- <script>window.jQuery || document.write('<script src="script/jquery.js"><\/script>')</script> -->
</body>
</html>
