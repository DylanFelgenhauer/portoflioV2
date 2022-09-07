<?php get_header(); ?>
<div class="arrowup">
    <img class="arrow" src="wp-content/themes/portfolio2/img/arrowUp.svg" alt="Arrow Up">
</div>
<section id="sect1" class="about__layout">
    <h2 class="section__title about__title hidden">
        A propos de moi
    </h2>
    <div class="imgcontain">
        <img src="wp-content/themes/portfolio2/img/moiysa.jpg" alt="Photo de Dylan" class="attachment-large">
    </div>
    <div class="divcontainer">
        <div class="paragraphcontain">
            <span class="hello">Hey&nbsp;! <br>Moi c'est Dylan.</span>
            <p class="section__container" id="paragraph">
                Futur développeur web agé de 25ans, je suis surtout passionné dans le design ou tout ce qui concerne le
                front-end.
                N'hésites pas a me contacter pour plus d'informations. &#128513;
            </p>
            <span class="joke">Evidemment j'étais obligé de mettre sur la photo la personne qui me soutient en permanence&nbsp;! </span>

        </div>
        <div class="sayHello">
            <a href="#sect3">Viens me dire bonjour&nbsp;!</a>
        </div>
    </div>

</section>
<section id="sect2" class="project__layout">
    <h2 class=" project__title">
Mes projets
</h2>
    <section class="grid__project">
        <div id="grid__layout">
            <a href=""class="project__container  " id="p1">
                <img src="wp-content/themes/portfolio2/img/photodecv.jpg" alt="photo de projet CV">
                <div class="flex__column">
                    <h3 class="project--container__title">Mon CV</h3>
                </div>
            </a>

            <a href="#" class="project__container " id="p2">
                <img src="wp-content/themes/portfolio2/img/photoantilope.jpg" alt="Photo de projet antilope">
                <div class="flex__column">
                    <h3 class="project--container__title">Antilope</h3>
                </div>
            </a>

            <a href="#" class="project__container " id="p3">
                <img src="wp-content/themes/portfolio2/img/photocountdown.jpg" alt="Photo de projet antilope">
                <div class="flex__column">
                    <h3 class="project--container__title">Countdown Timer</h3>
                </div>
            </a>
        </div>
    </section>
</section>
<section id="sect3" class="cv__layout">
    <h2 class="cv__title"> Une info sur mon parcours?</h2>
    <div class="history-cv-container">
        <ul class="cv">
            <li class="cv-item cv-study">
                <div class="firstcolonne">
                    <div class="item-title">HEPL</div>
                    <div class="item-detail">Bachelier web</div>
                </div>
                <time>2020 à aujourd'hui</time>
            </li>
            <li class="cv-item cv-study">
                <div class="firstcolonne">
                    <div class="item-title">Gestion de base</div>
                    <div class="item-detail">Obtention</div>
                </div>
                <time>2020</time>
            </li>
            <li class="cv-item cv-study">
                <div class="firstcolonne">
                    <div class="item-title">VCA (sécurité du bâtiment)</div>
                    <div class="item-detail">Obtention</div>
                </div>
                <time>2019</time>
            </li>
            <li class="cv-item">
                <div class="firstcolonne">
                    <time>2018 à aujourd'hui</time>
                </div>
                <div class="item-title">Travaux de peinture</div>
                <div class="item-detail">Indépendant et Intérim</div>
            </li>
            <li class="cv-item">
                <div class="firstcolonne">
                    <time>2016-2017</time>
                </div>
                <div class="item-title">Commune de Modave</div>
                <div class="item-detail">&Eacute;tudiant ouvrier communal</div>
            </li>
            <li class="cv-item cv-study">
                <div class="firstcolonne">
                    <div class="item-title">ICADI</div>
                    <div class="item-detail">Formation peintre en bâtiment</div>
                </div>

                <time>2015-2017</time>

            </li>
            <li class="cv-item">
                <div class="firstcolonne">
                    <time>2013-2017</time>
                </div>
                <div class="item-title">Friterie</div>
                <div class="item-detail">Travail étudiant</div>
            </li>
            <li class="cv-item">
                <div class="firstcolonne">
                    <time>2012</time>
                </div>
                <div class="item-title">Industrie Poncin</div>
                <div class="item-detail">&Eacute;tudiant ouvrier</div>
            </li>
            <li class="cv-item cv-study">
                <div class="firstcolonne">
                    <div class="item-title">ISMH Huy</div>
                    <div class="item-detail">&Eacute;tudes secondaires générales</div>
                </div>
                <time>2009-2015</time>
            </li>

        </ul>
    </div>
    <div class="download">Tu préfères un CV version "papier" ? <a href="#">Alors télécharges le <span class="uppercase">içi</span>&nbsp;!</a></div>
</section>
<!--<section id="sect4" class="contact__layout">
    <h2 class="contact__title">Contactez-moi</h2>
    <div class="contact__form">
        <form action="#" method="post" class="contact__form">
            <div class="form__name div__input">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name" required>
            </div>

            <div class="form__surname div__input">
                <label for="surname"> Prénom :</label>
                <input type="text" id="surname" name="user_surname" required>
            </div>

            <div class="form__mail div__input">
                <label for="mail"> E-mail&nbsp;:</label>
                <input type="email" id="mail" name="user_mail" required>
            </div>

            <div class="form__message div__input">
                <label for="msg">Message :</label>
                <textarea id="msg" rows="8" name="user_message" required></textarea>
            </div>
            <div class="form__submit">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</section>
-->
<section id="contact">
    <div class="contact-box">
        <div class="contact-links">
            <h2 class="contact__title">Contact</h2>
            <div class="links">
                <div class="link">
                    <a href="#"><img class="contactIcon" src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="facebook"></a>
                </div>
                <div class="link">
                    <a href=""><img class="contactIcon" src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
                </div>
                <div class="link">
                    <a href=""><img class="contactIcon" src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="dribble"></a>
                </div>
                <div class="link">
                    <a href=""><img  class="contactIcon" src="https://i.postimg.cc/NjLfyjPB/email.png" alt="instagram"></a>
                </div>
            </div>
        </div>
        <div class="contact-form-wrapper">
            <form>
                <div class="form-item">
                    <input type="text" name="sender" required>
                    <label>Name:</label>
                </div>
                <div class="form-item">
                    <input type="text" name="email" required>
                    <label>Email:</label>
                </div>
                <div class="form-item">
                    <textarea class="" name="message" required></textarea>
                    <label>Message:</label>
                </div>
                <button class="submit-btn">Envoyer</button>
            </form>
        </div>
    </div>
</section>
<script src="/wp-content/themes/portfolio2/javascript/end.js"></script>
</body>
