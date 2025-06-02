<?php $currentLanguage  = pll_current_language(); ?>
<?php get_header(); ?>

    <!-- Main-screen -->
    <section class="main-screen">
        <!--        <video class="main-screen__video" autoplay muted loop playsinline poster="--><?php //echo STANDART_DIR ?><!--img/main-screen-bg.png">-->
        <!--            <source src="--><?php //echo STANDART_DIR; ?><!--/img/video-laser.mp4" type="video/mp4">-->
        <!--            <source src="--><?php //echo STANDART_DIR; ?><!--/img/video-laser.webm" type="video/webm">-->
        <!--        </video>-->
        <div class="main-screen__outer">
            <div class="main-screen__body container">
                <div class="main-screen__inner">
                    <div class="main-screen__info">
                        <h3 class="main-screen__title title title--pre-medium title--white title--w-bold title--uppercase center">
                            Forum
                        </h3>
                        <h1 class="main-screen__heading title title--big title--white title--w-bold title--uppercase center">
                            Data & AI Forum 2025
                        </h1>
                        <h3 class="title title--medium title--white title--w-bold center" style="margin-top: 30px">
                            Экономика данных | Управление данными | AI-агенты | Тренды будущего
                        </h3>
                        <div class="main-screen__info-event">
                            <?php if($currentLanguage == 'en') : ?>
                                <div class="main-screen__data text text--large text--white text--w-semibold"
                                     style="padding-bottom: 20px; border-bottom: 1px solid white">
                                    <div class="title title--big title--white title--w-semibold">19</div>
                                    June 2025
                                </div>
                            <?php endif; ?>
                            <?php if($currentLanguage == 'az') : ?>
                                <div class="main-screen__data text text--large text--white text--w-semibold"
                                     style="padding-bottom: 20px; border-bottom: 1px solid white">
                                    <div class="title title--big title--white title--w-semibold">19</div>
                                    iyun 2025-ci il
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="main-screen__info-event">
                            <div class="main-screen__data text text--large text--white text--w-semibold">
                                <?php if($currentLanguage == 'en') : ?>
                                    Azerbaijan, Baku
                                <?php endif; ?>
                                <?php if($currentLanguage == 'az') : ?>
                                    Azərbaycan, Bakı
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-screen__actions center">
                    <a href="javascript:;" class="main-screen__button button button--primary" data-modal="#registration">
                        <?php if($currentLanguage == 'en') : ?>
                            Register
                        <?php endif; ?>
                        <?php if($currentLanguage == 'az') : ?>
                            Qeydiyyatdan keçin
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Main-screen -->


    <!-- About -->
    <section class="about block-padding">
        <div class="about__body container">
            <h2 class="about__heading title title--big title--dark title--w-semibold title--indent center">
                На старт! Внимание! ИИ!
            </h2>
            <div class="about__descr text text--large text--dark text--w-regular center">
                Цель форума — помочь компаниям раскрыть ценность своих данных, внедрить передовые AI-решения и выстроить эффективные процессы управления информацией, что позволит получить стратегическое преимущество. «Цифровое перерождение 2025» соберет ведущих CDO, CIO, AI-экспертов и бизнес-лидеров, принимающих ключевые решения в индустрии данных.
            </div>
            <div class="about__descr text text--large text--dark text--w-regular center">
                Будем рады видеть вас в числе участников!
            </div>
        </div>
    </section>
    <!-- /. About -->

    <!-- About -->
    <section class="about block-padding" id="about" style="background: #f2f2f2;">
        <div class="about__body container">
            <h2 class="about__heading title title--big title--dark title--w-semibold title--indent center">
                Ключевые направления форума
            </h2>
            <div class="about__grid-wysiwyg">
                <div class="about__wysiwyg">
                    <h3 class="title title--small title--blue title--w-bold">
                        Экономика данных и ИИ: стратегический императив цифрового государства
                    </h3>
                    <p class="text text--small text--dark text--w-regular">
                        Развитие национальных стратегий области управления данными и ИИ как вопрос государственной важности. Как найти баланс между технологическим суверенитетом и международной кооперацией. Можно ли обеспечить стратегический контроль над критическими данными и ИИ-системами при выстраивании взаимовыгодных отношений собственных и международных экосистем.
                    </p>
                </div>
                <div class="about__wysiwyg">
                    <h3 class="title title--small title--blue title--w-bold">
                        Построение архитектуры данных для доверенного ИИ
                    </h3>
                    <p class="text text--small text--dark text--w-regular">
                        Как Data Lakehouse-архитектура, управление данными DG, DQ, MDM (НСИ) и современная инфраструктура создают необходимую основу для эффективных ИИ-решений с реальной бизнес-ценностью для новой экономики. Посетите демо-зоны лучших решений по управлению данными  и выставку технологических партнёров.
                    </p>
                </div>
                <div class="about__wysiwyg">
                    <h3 class="title title--small title--blue title--w-bold">
                        Экономика данных и новые цифровые работники на основе ИИ-агентов
                    </h3>
                    <p class="text text--small text--dark text--w-regular">
                        Получите инсайты, как происходит переход от чат-ботов к полноценным ИИ-агентам: влияние на экономику данных и бизнес-процессы. Оценим готовность к появлению "цифровых работников по подписке" и их экономический эффект для бизнеса и государства.
                    </p>
                </div>
                <div class="about__wysiwyg">
                    <h3 class="title title--small title--blue title--w-bold">
                        Международный опыт реализации бизнес-инициатив, основанных на данных
                    </h3>
                    <p class="text text--small text--dark text--w-regular">
                        Успешные проекты из Азербайджана, Израиля, Казахстана и Польши: универсальность лучших практик управления данными в разных географических и законодательных контекстах и их влияние на успех бизнес и ИИ-инициатив.
                        Примите участие в практических воркшопах для бизнеса и архитекторов Data-платформ.
                    </p>
                </div>
            </div>
            <div class="about__descr text text--large text--dark text--w-regular center">
                Эти и другие важные вопросы обсудим на форуме 22 апреля
            </div>
        </div>
    </section>
    <!-- /. About -->

    <!-- About -->
    <section class="about block-padding">
        <div class="about__body container">
            <h2 class="about__heading title title--big title--dark title--w-semibold title--indent center">
                Для кого это мероприятие?
            </h2>
            <div class="about__list">
                <div class="about__item text text--large text--dark text--w-semibold">
                    &mdash;  CDO, CIO, CAO и лидеры цифровой трансформации.
                </div>
                <div class="about__item text text--large text--dark text--w-semibold">
                    &mdash; Эксперты по управлению данными (Data Governance, Compliance).
                </div>
                <div class="about__item text text--large text--dark text--w-semibold">
                    &mdash; Руководители из банков, телекоммуникаций, гос. сектора и крупных компании.
                </div>
                <div class="about__item text text--large text--dark text--w-semibold">
                    &mdash; Разработчики и архитекторы, желающие понять нюансы Data Lakehouse, MDM и грядущих AI-технологий.
                </div>
            </div>
        </div>
    </section>
    <!-- /. About -->

    <!-- Moder -->
    <!--    <section class="moder block-padding" id="moder">-->
    <!--        <div class="moder__body container">-->
    <!--            <h2 class="moder__heading title title--big title--dark title--w-semibold title--indent">-->
    <!--                Модератор-->
    <!--            </h2>-->
    <!--            <article class="moder__card">-->
    <!--                <aside class="moder__card-aside">-->
    <!--                    <figure class="moder__card-figure">-->
    <!--                        <img src="--><?php //echo STANDART_DIR ?><!--img/team/rozmut.jpeg" alt="" class="moder__card-photo">-->
    <!--                    </figure>-->
    <!--                </aside>-->
    <!--                <div class="moder__card-text">-->
    <!--                    <h3 class="moder__card-heading title title--pre-medium title--dark title--w-regular">-->
    <!--                        Эльнора Розмут -->
    <!--                    </h3>-->
    <!--                    <p class="moder__card-descr text text--normal text--dark text--w-light">-->
    <!--                        Бренд-стратег, медиа менеджер, основатель и CEO медиа об IT и технологиях ER10 Media. Более 12 лет практического опыта в PR. 6 лет работала в качестве преподавателя в университетах KIMEP и AlmaU. Автор и ведущая тренингов по темам: управление репутацией, стратегии создания брендов, упаковка стартапов.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </article>-->
    <!--        </div>-->
    <!--    </section>-->
    <!-- /. Moder -->

    <!-- Team -->
    <section class="team bg--white block-padding center" id="speakers">
        <div class="team__body container">
            <h2 class="team__heading title title--big title--dark title--w-semibold title--indent">
                К участию приглашены
            </h2>
            <div class="team__items">
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/team/kanat.jpg" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Канат Абиров
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                CEO DeoniX (DIS Group)
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/team/yaser.jpg" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Яссер Шауки
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Вице-президент, Informatica
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/team/salah.jpg" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Яссер Салах
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Руководитель Business 360, регион Ближнего Востока и Африки Informatica
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/team/sabir.jpg" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Сабир Марданов
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Директор по анализу данных и искусственному интеллекту, Azercell
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/team/alibek.jpg" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Адилбек Сагадиев
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Главный Архитектор Технических Решений НПК НБ РК
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/team/zamula.jpg" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Дмитрий Замула
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Технический директор, Платформа Данных Selena
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/team/bolatt.jpg" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Болат Таймагамбетов
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Бизнес-архитектор DeoniX (DIS Group)
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/avatar.png" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Aleksey Lukovnikov
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Independent Expert
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/avatar.png" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Rufat Sadygov
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Country Manager, DeoniX
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/avatar.png" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Ilker Kurtulush
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                CDO, Pasha Bank
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/avatar.png" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Frank Hendricks
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Senior Director Channel Sales & Strategic Alliances – CEMEA
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/avatar.png" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Avi Cohen
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Leumi Bank
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/avatar.png" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Azad Guseynov
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                CDO, SOCAR
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/avatar.png" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Aslan Kurmanbayev
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Technical Solutions Manager, Informatica
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
                <!-- Team-card -->
                <article class="team-card">
                    <aside class="team-card__aside">
                        <figure class="team-card__figure">
                            <img src="<?php echo STANDART_DIR ?>img/avatar.png" alt="" class="team-card__photo">
                        </figure>
                    </aside>
                    <div class="team-card__body">
                        <div class="team-card__text">
                            <h3 class="team-card__heading title title--small title--dark title--w-regular">
                                Elzana Omurzakova
                            </h3>
                            <p class="team-card__descr text text--normal text--dark text--w-light">
                                Head of MDM & DG Solutions, Informatica
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /. Team-card -->
            </div>
        </div>
    </section>
    <!-- /. Team -->
<?php if($currentLanguage == 'en') : ?>
    <!-- Programm -->
    <section class="programm block-padding" id="program">
        <div class="programm__body container">
            <h2 class="programm__heading title--big title--dark title--w-semibold title--indent center">
                Program:
            </h2>
            <p class="programm__subtitle title title--medium title--dark title--w-regular hide">
                The time is Moscow time.
            </p>
            <div class="programm__list">
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        09:00 - 10:00
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Registration
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Coffee Break
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:00 – 10:05
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Welcome Speech
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Rufat Sadygov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Country Manager, DeoniX
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:05 – 10:15
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Keynote: Key Trends and Development Prospects in 2025
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Kanat Abirov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CEO, DeoniX
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:15 – 10:30
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Keynote: Azerbaijan’s Strategic Vision: AI as a Driver of Leadership and Economic Growth
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                TBD: Ministry of Transport and High Technologies
                            </div>
                            <!--                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">-->
                            <!--                                Вице-президент, Informatica-->
                            <!--                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:30 – 10:50
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Ready, Set, AI!
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Frank Hendricks
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Senior Director Channel Sales & Strategic Alliances – CEMEA (Middle East, Africa & CEE)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:50 – 11:05
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            TBD
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                TBD
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        11:05 – 11:20
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Case from Azerbaijan: How DG&DM Solutions Support AI Projects and Business Initiatives
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Ilker Kurtulush
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CDO, Pasha Bank
                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        11:20 – 11:40
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Coffee Break
                        </h3>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        11:40 – 11:55
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Case: Implementing Data Governance in a Financial Regulator
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Aleksey Lukovnikov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Independent Expert
                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        11:55 – 12:10
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Presentation: Implementing the Selena Lakehouse Platform – Approaches and Results at Kazakhstan's National Payment Corporation
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Adilbek Sagadiev
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Chief Technical Solutions Architect, NPC NB RK
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        12:10 – 12:40
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Panel Discussion: How the CDO Role is Evolving – Practical Challenges and Solutions from Market Leaders
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Moderator: Bolat Taimagambetov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Business Architect, DeoniX
                            </div>
                        </div>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Participants: Central Bank of Azerbaijan (Xalq Bank), SOCAR, Pasha Bank
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        12:40 – 12:55
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Presentation: Next-Gen MDM: How AI is Transforming Master Data Management
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Yasser Salah
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Head of Business 360, MENA Region, Informatica
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        12:55 – 14:00
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Lunch
                        </h3>
                    </div>
                </div>
                <!-- <h3 class="programm__block-title title title--large title--blue title--w-semibold">
                    Цифровое государство
                </h3> -->
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        14:00 – 14:15
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Selena Platform — The Core of a Modern Data Management Ecosystem
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Dmitry Zamula
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CTO, Selena Data Platform
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        14:15 – 14:45
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            <span class="title title--blue">Workshop:</span> Building a Business Case for an MDM Project
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Bolat Taimagambetov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Business Architect, DeoniX
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        14:45 – 15:15
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            <span class="title title--blue">Workshop:</span> Designing a Resilient and Scalable Data Lakehouse
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Dmitry Zamula
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CTO, Selena Data Platform
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        15:15 – 15:45
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            <span class="title title--blue">Workshop:</span> Data Governance
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Aslan Kurmanbayev
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Technical Solutions Manager, Informatica
                            </div>
                        </div>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Elzana Omurzakova
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Head of MDM & DG Solutions, Informatica
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        15:45 – 15:55
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Think you know the data? Prove it and win!
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Quiz
                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        15:55 – 16:00
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Closing Remarks and Next Steps
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Kanat Abirov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CEO, DeoniX
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Programm -->
<?php endif; ?>

<?php if($currentLanguage == 'az') : ?>
    <!-- Programm -->
    <section class="programm block-padding" id="program">
        <div class="programm__body container">
            <h2 class="programm__heading title--big title--dark title--w-semibold title--indent center">
                Program:
            </h2>
            <p class="programm__subtitle title title--medium title--dark title--w-regular hide">
                The time is Moscow time.
            </p>
            <div class="programm__list">
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        09:00 - 10:00
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Qeydiyyat və kofe fasiləsi
                        </h3>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:00 – 10:05
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Salamlama
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Rufat Sadıqov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Country Manager, DeoniX
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:05 – 10:15
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Açar çıxış: 2025-ci ildə əsas meyllər və inkişaf perspektivləri
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Kanat Abirov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CEO, DeoniX
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:15 – 10:30
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Açar çıxış: Azərbaycanın strateji baxışı — liderlik və iqtisadi artım üçün süni intellekt mühərrik kimi
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                TBD: Nəqliyyat və yüksək texnologiyalar nazirliyi
                            </div>
                            <!--                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">-->
                            <!--                                Вице-президент, Informatica-->
                            <!--                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:30 – 10:50
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Ready, Set, AI!
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Frank Hendricks
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Senior Director Channel Sales & Strategic Alliances – CEMEA (Middle East, Africa & CEE)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        10:50 – 11:05
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            TBD
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                TBD
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        11:05 – 11:20
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Azərbaycan təcrübəsi: Rəqəmsal hökumət və məlumat idarəetməsi (DG&DM) həllərinin süni intellekt layihələrinə və biznes təşəbbüslərinə dəstəyi
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Ilker Kurtulush
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CDO, Pasha Bank
                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        11:20 – 11:40
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Kofe fasiləsi
                        </h3>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        11:40 – 11:55
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Kees: Maliyyə tənzimləyicisində Data Governance-in tətbiq təcrübəsi
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Aleksey Lukovnikov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Müstəqil ekspert
                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        11:55 – 12:10
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Təqdimat: Selena Lakehouse platformasının tətbiqi — Qazaxıstanın Milli Ödəniş Korporasiyasında yanaşmalar və nəticələr
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Adilbek Sagadiev
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Texniki həllərin baş memarı, Qazaxıstan Respublikasının Milli Bankı yanında Elmi-istehsalat kompleksi NPC NB RK
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        12:10 – 12:40
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Panel müzakirəsi: CDO-nun rolu necə dəyişir — bazar liderlərindən praktiki çağırışlar və həllər
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Moderator: Bolat Taymağambetov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                biznes memarı, DeoniX
                            </div>
                        </div>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                İştirakçılar:
                            </div>
                        </div>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Azərbaycan Mərkəzi Bankı (Xalq Bank)
                            </div>
                        </div>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Azad Hüseynov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CDO, SOCAR
                            </div>
                        </div>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                İlker Kurtuluş
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CDO, Pasha Bank
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        12:40 – 12:55
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Təqdimat: Yeni nəsil MDM: Süni intellekt necə NSİ idarəçiliyini dəyişir
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Yasser Salah
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Business 360 rəhbəri, Yaxın Şərq və Afrika bölgəsi, Informatica
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        12:55 – 14:00
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Nahar və netvörkinq
                        </h3>
                    </div>
                </div>
                <!-- <h3 class="programm__block-title title title--large title--blue title--w-semibold">
                    Цифровое государство
                </h3> -->
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        14:00 – 14:15
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Selena platforması — müasir məlumat idarəetmə ekosistemin əsas nüvəsidir.
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Dmitri Zamula
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Texniki direktor, Selena Məlumat Platforması
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        14:15 – 14:45
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            <span class="title title--blue">Workshop:</span> Building a Business Case for an MDM Project
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Bolat Taymağambetov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                biznes memarı, DeoniX
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        14:45 – 15:15
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            <span class="title title--blue">Workshop:</span> NSİ (MDM) idarəetmə layihəsi üçün biznes-kesin yaradılması
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Dmitry Zamula
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CTO, Selena Data Platform
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        15:15 – 15:45
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            <span class="title title--blue">Workshop:</span> Data Governance
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Aslan Qurmanbayev
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Informatica Həlləri üzrə Texniki Menecer
                            </div>
                        </div>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Elzana Omurzakova
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                Informatica MDM və DG Həlləri üzrə Rəhbər
                            </div>
                        </div>
                    </div>
                </div>
                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        15:45 – 15:55
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Müsabiqə: Deyirsiniz ki, məlumatları yaxşı bilirsiniz? Sübut edin və qazanın!
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Quiz
                            </div>
                        </div>
                    </div>
                </div>

                <div class="programm__item">
                    <div class="programm__time title title--medium title--dark title--w-regular">
                        15:55 – 16:00
                    </div>
                    <div class="programm__info">
                        <h3 class="programm__title title title--medium title--dark title--w-semibold">
                            Son söz və növbəti addımlar
                        </h3>
                        <div class="programm__man">
                            <div class="programm__man-name text text--normal text--dark text--w-semibold">
                                Kanat Abirov
                            </div>
                            <div class="programm__man-rank text text--normal text--dark text--w-semibold">
                                CEO, DeoniX
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Programm -->
<?php endif; ?>

    <!-- Register -->
    <section class="register block-padding">
        <video class="register__video" autoplay muted loop playsinline poster="<?php echo STANDART_DIR ?>img/main-screen-bg.png">
            <source src="<?php echo STANDART_DIR ?>img/video-laser.mp4" type="video/mp4">
            <source src="<?php echo STANDART_DIR ?>img/video-laser.webm" type="video/webm">
        </video>
        <div class="register__body container">
            <div class="register__inner">
                <h2 class="register__heading title title--large title--white title--w-semibold">
                    <?php if($currentLanguage == 'en') : ?>
                        Join Data & AI Forum 2025
                    <?php endif; ?>
                    <?php if($currentLanguage == 'az') : ?>
                        Data & AI Forum 2025-ə qoşulun
                    <?php endif; ?>
                </h2>
                <div class="register__place text text--large text--white text--w-light">
                    <?php if($currentLanguage == 'en') : ?>
                        <b>Date:</b> June 19, 2025
                    <?php endif; ?>
                    <?php if($currentLanguage == 'az') : ?>
                        <b>Tarix:</b> 19 iyun 2025-ci il
                    <?php endif; ?>
                </div>
                <p class="register__descr text text--large text--white text--w-light">
                    <?php if($currentLanguage == 'en') : ?>
                        Discover the real future of data and artificial intelligence! Together we are creating new rules of the game in the data economy, changing the models of interaction with clients and partners, and preparing for the challenges of 2025. The future starts here!
                    <?php endif; ?>
                    <?php if($currentLanguage == 'az') : ?>
                        Məlumatların və süni intellektin real gələcəyini kəşf edin! Biz birlikdə data iqtisadiyyatında yeni oyun qaydaları yaradırıq, müştərilər və tərəfdaşlarla qarşılıqlı əlaqə modellərini dəyişirik və 2025-ci ilin çağırışlarına hazırlaşırıq. Gələcək buradan başlayır!
                    <?php endif; ?>
                </p>
                <div class="register__action">
                    <a href="javascript:;" class="register__button button button--primary" data-modal="#registration">
                        <?php if($currentLanguage == 'en') : ?>
                            Register
                        <?php endif; ?>
                        <?php if($currentLanguage == 'az') : ?>
                            Qeydiyyatdan keçin
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Register -->

    <!-- Partners -->
    <section class="partners block-padding" id="partners">
        <div class="partners__body container">
            <h2 class="partners__heading title title--big title--dark title--w-semibold title--indent gs-reveal gs-reveal--from-left">
                При поддержке
            </h2>
            <div class="partners__card">
                <aside class="partners__card-aside">
                    <figure class="partners__card-figure">
                        <img src="<?php echo STANDART_DIR ?>img/deonix-white.png" alt="" class="partners__card-photo">
                    </figure>
                </aside>
                <div class="partners__card-text">
                    <p class="partners__card-descr text text--large text--dark text--w-semibold">
                        Решения по управлению данными, бизнес-аналитике, защите информации и управлению знаниями. Мы упрощаем работу с данными и информацией, предоставляя новые возможности для роста бизнеса.
                        <br>
                        <br>
                        Компания является частью международного холдинга Aman Group.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Partners -->

    <section class="info-partners block-padding" id="partners">
        <div class="info-partners__body container">
            <h3 class="info-partners__heading title title--big title--dark title--w-semibold title--indent gs-reveal gs-reveal--from-left">
                Информационные партнёры
            </h3>
            <div class="info-partners__items">
                <a href="https://weproject.media/" class="info-partners__item">
                    <img src="<?php echo STANDART_DIR ?>img/partners/we.jpg" alt="">
                </a>
                <a href="https://the-tech.kz/" class="info-partners__item">
                    <img src="<?php echo STANDART_DIR ?>img/partners/tech.png" alt="">
                </a>
                <a href="https://profit.kz/" class="info-partners__item">
                    <img src="<?php echo STANDART_DIR ?>img/partners/profit.jpg" alt="">
                </a>
                <a href="https://bizmedia.kz/" class="info-partners__item">
                    <img src="<?php echo STANDART_DIR ?>img/partners/biz.svg" alt="">
                </a>
                <a href="https://optimism.kz/" class="info-partners__item">
                    <img src="<?php echo STANDART_DIR ?>img/partners/optimizm.png" alt="">
                </a>
                <a href="https://qazaqpress.kz/" class="info-partners__item">
                    <img src="<?php echo STANDART_DIR ?>img/partners/quazar.png" alt="">
                </a>
                <a href="https://bluescreen.kz/" class="info-partners__item">
                    <img src="<?php echo STANDART_DIR ?>img/partners/blue.png" alt="">
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>