<?php get_header(); ?>
    <section class="security main-cont">
        <div class="security__container container">
            <div class="security__content">
                <p class="security__crumbs"><span>Главная / Безопасность бизнеса</span> / Обеспечение порядка в местах проведения массовых мероприятий</p>
                <h1 class="security__title"><?= CFS()->get('header_title')?></h1>
                <button class="security__button"><?= CFS()->get('header_button')?></button>
                <img class="security__stadion" src="wp-content\themes\securityTheme\img/stadion.png" alt="">
                <img class="security__circles" src="wp-content\themes\securityTheme\img/circles.png" alt="">
            </div>
        </div>
    </section>
    <section class="description main-cont">
        <div class="description__container container">
            <div class="description__content">
            <?php 
                $loop = CFS()->get('about_card');
                foreach ($loop as $row){
                    ?>
                    <div class="description__text-box">
                        <h2><?= $row['card_title'] ?></h2>
                        <p><?= $row['card_text'] ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="slider main-cont">
        <div class="slider__container container">
            <div class="slider__content">
                <h2>Наши клиенты</h2>
                <div class="slider__item-box">
                    <div class="slider__item"><img src="wp-content\themes\securityTheme\img/tele2.png" alt=""></div>
                    <div class="slider__item"><img src="wp-content\themes\securityTheme\img/tele2.png" alt=""></div>
                    <div class="slider__item"><img src="wp-content\themes\securityTheme\img/tele2.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback main-cont">
        <div class="feedback__container container">
            <div class="feedback__content">
                <h2>Подпишитесь на рассылку</h2>
                <p>Чтобы узнавать о новых предложениях</p>
                <form action="" class="feedback__form">
                    <input  class="feedback__mail" type="email" placeholder="Email">
                    <button class="feedback__button" >Отправить</button>
                </form>
                <img class="feedback__img" src="wp-content\themes\securityTheme\img/cloud.png" alt="">
                <img class="feedback__circles" src="wp-content\themes\securityTheme\img/circles.png" alt="">
            </div>
        </div>
    </section>
<?php get_footer(); ?>