<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ConsultingOffice</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,800;1,800&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- <link rel="stylesheet" href="./css/modern-normalize.min.css" /> -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/modern-normalize@1.1.0/modern-normalize.min.css"
    />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>

  <body class="body-index">
    <header class="header-index">
      <div class="div-header container">
        <nav class="nav-header">
          <a href="./index.html" class="link webstudio-one"
            >Consulting<span class="span-one">Office</span>
          </a>

          <!-- 
          <ul class="list ul-header">
            <li>
              <a href="./index.html" class="link studio-one studio-two position-relative">Studio</a>
            </li>
            <li><a href="./portfolio.html" class="link studio-one">Portfolio</a></li>
            <li><a href="" class="link studio-one">Contacts</a></li>
          </ul>
          -->
        </nav>

        <button type="button" class="mobile-menu-open-btn js-open-menu" aria-expanded="false">
          <svg width="32" height="22" class="mobile-menu-open-icon">
            <use href="./images/icons.svg#icon-burger" />
          </svg>
        </button>
        <address class="list addr-one">
          <ul class="list addr-one addr-flex">
            <li>
              <a href="mailto:Office@WordLaw.eu" class="link contacts">Office@WordLaw.eu</a>
            </li>
            <!--     <li>
              <a href="tel:+380689725921" class="link contacts">+38 (068) 972-59-21</a>
            </li>  -->
          </ul>
        </address>
      </div>
    </header>
    <main>
      <!-- section 1 -->
      <section class="section-one section-one-plus section">
        <div class="container">
          <h1 class="heder-sectione-one">
            Всі види loyer help
            <br />Ведення бухгалтерії
          </h1>
          <button class="button-sectione-one" type="button" data-modal-open>
            Опишіть свою ситуацію <br />
            Ми з вами зконтактуємо
          </button>
        </div>
      </section>

      <!-- section 2 -->
      <section class="section-two-flex section">
        <div class="container sect-cont-2">
          <h2 class="ficha-style visually-hidden">Ficha</h2>
          <ul class="list section-two-ul-flex">
            <li class="section-two-li-flex">
              <div class="section-two-icon">
                <svg width="64" height="64"><use href="./images/icons.svg#icon-antenna" /></svg>
              </div>
              <h3 class="strategy-one strategy-two">Стратегія</h3>
              <p class="strategy-pargraf-color strategy-pargraf-shrift">
                Наша мета — визначити бізнес-проблему, щоб знайти ідеальне та творче рішення.
              </p>
            </li>

            <li class="section-two-li-flex">
              <div class="section-two-icon">
                <svg width="64" height="64"><use href="./images/icons.svg#icon-clock" /></svg>
              </div>
              <h3 class="strategy-one strategy-two">Пунктуальність</h3>
              <p class="strategy-pargraf-color strategy-pargraf-shrift">
                Найкраща ціна та розумні терміни.
              </p>
            </li>
            <li class="section-two-li-flex">
              <div class="section-two-icon">
                <svg width="64" height="64"><use href="./images/icons.svg#icon-diagram" /></svg>
              </div>
              <h3 class="strategy-one strategy-two">Старанність</h3>
              <p class="strategy-pargraf-color strategy-pargraf-shrift">
                Пропонуємо найбільші можливості зростання та мінімізацію ризиків.
              </p>
            </li>
            <li class="section-two-li-flex">
              <div class="section-two-icon">
                <svg width="64" height="64"><use href="./images/icons.svg#icon-astronaut" /></svg>
              </div>
              <h3 class="strategy-one strategy-two">Технології</h3>
              <p class="strategy-pargraf-color strategy-pargraf-shrift">
                Вирішуємо проблеми за допомогою сучасних технологій.
              </p>
            </li>
          </ul>
        </div>
      </section>

      <!-- section 3 
      What are we doing-->
      <section class="section-thre-flex section">
        <div class="container">
          <h2 class="section-thre section-thre-plus">Наші послуги</h2>

          <ul class="list section-thre-ul-flex">
            <li class="section-thre-li-flex">
              <h4 class="strategy-one strategy-two">
                Всі види юридичної допомоги. <br />Вам допоможуть досвідчені юристи на чолі з
                адвокатом колегії адвокатів міста Києва.
              </h4>
              <picture>
                <source
                  srcset="./images/legal-support.png 1x, ./images/legal-support.png 2x"
                  media="(min-width: 1158px)"
                />

                <img src="./images/legal-support.png" alt="display" width="360" />
              </picture>
            </li>

            <li class="section-thre-li-flex">
              <h4 class="strategy-one strategy-two">
                Ведення бухгалтерії.<br />Ваші бухгалтерські турботи будуть вирішені нашими
                досвідченими бухгалтерами.
              </h4>

              <picture>
                <source
                  srcset="./images/buch-support.png 1x, ./images/buch-support.png 2x"
                  media="(min-width: 1158px)"
                />

                <img src="./images/buch-support.png" alt="smartphone" width="360" />
              </picture>
            </li>
          </ul>
        </div>
      </section>

      <!--section 4
       Our Team 
      <section class="section-four section-four-plus section">
        <div class="container">
          <h2 class="section-four-h section-four-h-plus">Our Team</h2>

          <ul class="list section-four-ul-flex">
            <li class="section-four-li section-four-li-plus">
              <picture>
                <source
                  srcset="./images/desktop/mark@1x.jpg 1x, ./images/desktop/mark@2x.jpg 2x"
                  media="(min-width: 1158px)" />

                <source
                  srcset="./images/desktop/mark@1x.jpg 1x, ./images/desktop/mark@2x.jpg 2x"
                  media="(min-width: 768px)" />

                <source
                  srcset="./images/desktop/mark@1x.jpg 1x, ./images/desktop/mark@2x.jpg 2x"
                  media="(min-width: 320px)" />

                <img src="./images/img01.jpg" alt="Serhii Kryzhanivskyi" width="264"
              /></picture>
              <div class="section-four-li-div-flex">
                <h3 class="strategy-one strategy-four">Serhii Kryzhanivskyi</h3>
                <p class="strategy-pargraf-color strategy-pargraf-shrift-name">Advocate</p>
                <ul class="social-networks">
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#twiter" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#facebook" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#linkedin" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="section-four-li section-four-li-plus">
              <picture>
                <source
                  srcset="./images/desktop/tom@1x.jpg 1x, ./images/desktop/tom@2x.jpg 2x"
                  media="(min-width: 1158px)" />

                <source
                  srcset="./images/desktop/tom@1x.jpg 1x, ./images/desktop/tom@2x.jpg 2x"
                  media="(min-width: 768px)" />

                <source
                  srcset="./images/desktop/tom@1x.jpg 1x, ./images/desktop/tom@2x.jpg 2x"
                  media="(min-width: 320px)" />

                <img src="./images/img02.jpg" alt="Mykola Osmachko" width="264"
              /></picture>

              <div class="section-four-li-div-flex">
                <h3 class="strategy-one strategy-four">Mykola Osmachko</h3>
                <p class="strategy-pargraf-color strategy-pargraf-shrift-name">Lawyer</p>
                <ul class="social-networks">
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#twiter" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#facebook" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#linkedin" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="section-four-li section-four-li-plus">
              <picture>
                <source
                  srcset="./images/desktop/camila@1x.jpg 1x, ./images/desktop/camila@2x.jpg 2x"
                  media="(min-width: 1158px)" />

                <source
                  srcset="./images/desktop/camila@1x.jpg 1x, ./images/desktop/camila@2x.jpg 2x"
                  media="(min-width: 768px)" />

                <source
                  srcset="./images/desktop/camila@1x.jpg 1x, ./images/desktop/camila@2x.jpg 2x"
                  media="(min-width: 320px)" />
                <img src="./images/img03.jpg" alt="Camila Garcia" width="264"
              /></picture>
              <div class="section-four-li-div-flex">
                <h3 class="strategy-one strategy-four">Camila Garcia</h3>
                <p class="strategy-pargraf-color strategy-pargraf-shrift-name">Marketing</p>
                <ul class="social-networks">
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#insta" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#twiter" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#facebook" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#linkedin" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="section-four-li section-four-li-plus">
              <picture>
                <source
                  srcset="./images/desktop/daniel@1x.jpg 1x, ./images/desktop/daniel@2x.jpg 2x"
                  media="(min-width: 1158px)" />

                <source
                  srcset="./images/desktop/daniel@1x.jpg 1x, ./images/desktop/daniel@2x.jpg 2x"
                  media="(min-width: 768px)" />

                <source
                  srcset="./images/desktop/daniel@1x.jpg 1x, ./images/desktop/daniel@2x.jpg 2x"
                  media="(min-width: 320px)" />

                <img src="./images/img04.jpg" alt="Daniel Wilson" width="264"
              /></picture>
              <div class="section-four-li-div-flex">
                <h3 class="strategy-one strategy-four">Daniel Wilson</h3>
                <p class="strategy-pargraf-color strategy-pargraf-shrift-name">UI Designer</p>
                <ul class="social-networks">
                  <li class="soc-network">
                    <a href="№" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#insta" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#twiter" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#facebook" />
                      </svg>
                    </a>
                  </li>
                  <li class="soc-network">
                    <a href="#" class="img-social-network"
                      ><svg width="16" height="16" class="social-network-svg">
                        <use href="./images/icons.svg#linkedin" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </section> -->

      <!-- section 5 
      <section class="customers">
        <div class="container">
          <h2 class="customers-header">Customers</h2>
          <ul class="customers-ul">
            <li class="customers-ul-li">
              <a href="" class="customers-ul-li-a">
                <svg width="104" height="56" class="customers-svg">
                  <use href="./images/icons.svg#icon-Logo" />
                </svg>
              </a>
            </li>
            <li class="customers-ul-li">
              <a href="" class="customers-ul-li-a">
                <svg width="104" height="56" class="customers-svg">
                  <use href="./images/icons.svg#icon-company" />
                </svg>
              </a>
            </li>
            <li class="customers-ul-li">
              <a href="" class="customers-ul-li-a">
                <svg width="104" height="56" class="customers-svg">
                  <use href="./images/icons.svg#icon-company3" />
                </svg>
              </a>
            </li>
            <li class="customers-ul-li">
              <a href="" class="customers-ul-li-a">
                <svg width="104" height="56" class="customers-svg">
                  <use href="./images/icons.svg#icon-Logo4" />
                </svg>
              </a>
            </li>
            <li class="customers-ul-li">
              <a href="" class="customers-ul-li-a">
                <svg width="104" height="56" class="customers-svg">
                  <use href="./images/icons.svg#icon-company5" />
                </svg>
              </a>
            </li>
            <li class="customers-ul-li">
              <a href="" class="customers-ul-li-a">
                <svg width="104" height="56" class="customers-svg">
                  <use href="./images/icons.svg#icon-company6" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </section>   -->
    </main>

    <!-- footer -->

    <footer class="footer-index footer-flex">
      <div class="container footer-div-flex">
        <div class="footer-div-logo">
          <a href="./index.html" class="link webstudio-one footer-a-flex"
            >Consulting<span class="span-two">Office</span>
          </a>
          <!-- <a href="./index.html">WebStudio</a> -->
          <p class="footer-p footer-p-flex">
            Збільште потік клієнтів і продажі для свого бізнесу за допомогою сучасних рішень.
          </p>
        </div>

        <!-- <div class="footer-div-logo-two">-->
        <div class="footer-div-logo-three">
          <p class="footer-p-social-media">Social media</p>
          <ul class="social-networks social-networks-plus">
            <!--   <li class="soc-network soc-network-transition">
              <a href="#" class="img-social-network hover-focus"
                ><svg width="24" height="24" class="social-network-svg">
                  <use href="./images/icons.svg#insta" />
                </svg>
              </a>
            </li>-->
            <li class="soc-network">
              <a href="https://m.me/mykola.Osmachko" class="img-social-network hover-focus"
                ><svg width="24" height="24" class="social-network-svg">
                  <use href="./images/icons.svg#facebook-messenger" />
                </svg>
              </a>
            </li>
            <li class="soc-network">
              <a href="https://t.me/YourMykola" class="img-social-network hover-focus"
                ><svg width="24" height="24" class="social-network-svg">
                  <use href="./images/icons.svg#icon-telegram" />
                </svg>
              </a>
            </li>
            <!--  <li class="soc-network">
              <a href="https://wa.me/380980529615" class="img-social-network hover-focus"
                ><svg width="24" height="24" class="social-network-svg">
                  <use href="./images/icons.svg#icon-WhatsApp" />
                </svg>
              </a>
            </li>-->
          </ul>
        </div>
        <!--  <div class="footer-div-logo-three">
          <p class="footer-p-social-media">Subscribe</p>
          <form class="form-subscribe-footer">
            <label class="form-subscribe-footer-label">
              <input
                type="email"
                name="user-email"
                class="footer-form-input"
                required
                pattern="[a-zA-Zа-яА-Я]+"
                minlength="2"
                placeholder="E-mail"
              /> </label
            ><button type="submit" class="subsrube-footer">
              Subscribe
              <svg width="24" height="24" class="style-button-subscribe">
                <use class="svg-transform" href="./images/icons.svg#icon-telegram" />
              </svg>
            </button>
          </form>
        </div>-->
      </div>
    </footer>

    <!-- data modal -->

    <div class="modal-win is-hidden" data-modal>
      <div class="real-modal">
        <button type="button" class="modal-button" data-modal-close>
          <svg width="8" height="8" class="svg-modal">
            <use href="./images/icons.svg#icon-close" />
          </svg>
        </button>
        <p class="name-modal">Залиште свої контакти і ми з вами зконтактуємо</p>

        <form class="modal-form">
          <!-- 1 element -->
          <div class="form-div-modal form-div-modal-start">
            <label for="user-name" class="modal-form-field modal-form-input-desc">Ім'я</label>
            <div class="modal-form-input-wrapper">
              <input
                id="user-name"
                type="text"
                name="user-name"
                class="modal-form-input"
                required
                pattern="[a-zA-Zа-яА-Я]+"
                minlength="2"
              />
              <!-- <span class="modal-form-input-icon"></span> -->

              <svg width="18" height="24" class="modal-form-input-icon">
                <use href="./images/icons.svg#icon-man" />
              </svg>
            </div>
          </div>
          <!-- 2 element -->
          <div class="form-div-modal form-div-modal-start">
            <label class="modal-form-field modal-form-input-desc">Телефон</label>
            <div class="modal-form-input-wrapper">
              <input
                id="user-phone"
                type="tel"
                name="user-phone"
                class="modal-form-input"
                required
                pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}"
                title="xxx-xxx-xx-xx"
              />
              <svg width="18" height="24" class="modal-form-input-icon">
                <use href="./images/icons.svg#icon-phone" />
              </svg>
            </div>
          </div>
          <!-- 3 element -->
          <div class="form-div-modal form-div-modal-start">
            <label class="modal-form-field modal-form-input-desc">Email</label>
            <div class="modal-form-input-wrapper">
              <input
                id="email"
                type="email"
                name="user_email"
                class="modal-form-input"
                required
                minlength="2"
              />
              <svg width="18" height="24" class="modal-form-input-icon">
                <use href="./images/icons.svg#icon-email" />
              </svg>
            </div>
          </div>
          <!-- 4 element -->
          <div class="form-div-modal form-div-modal-end">
            <!-- class="modal-form-field-text modal-form-input-desc" -->

            <label for="user-comment" class="modal-form-field modal-form-input-desc"
              >Опишіть вашу ситуацію</label
            >

            <textarea
              id="user-comment"
              name="user-comment"
              class="modal-form-message"
              placeholder="Введіть тут текст"
            ></textarea>
          </div>
          <!-- 5 element -->

          <div class="div-checkboks">
            <input
              id="user-privacy"
              type="checkbox"
              name="user-privacy"
              value="true"
              class="modal-form-check visually-hidden"
            />

            <label for="user-privacy" class="modal-form-check-desc">
              <span class="span-label-privacy">
                <svg width="10" height="8" class="svg-label-privacy">
                  <use href="./images/icons.svg#icon-check" />
                </svg>
              </span>
              Я приймаю положення та умови &nbsp;
              <a href="./police.pdf" class="privacy-policy" target="_blank"
                >Політики конфіденційності</a
              >
            </label>
          </div>
          <button type="submit" class="modal-form-submit">Відправити</button>
        </form>
      </div>
    </div>

    <!-- mobile-menu -->
    <div class="mobile-menu js-menu-container aria-expanded">
      <div class="container mobile-menu-container">
        <button class="mobile-menu-close-btn js-close-menu">
          <svg class="mobile-menu-close-icon svg-modal" width="8" height="8">
            <use href="./images/icons.svg#icon-close" />
          </svg>
        </button>
        <!--
        <ul class="list ul-header-mobile">
          <li>
            <a href="./index.html" class="link studio-one-mobile studio-two-mobile mobile-contacts"
              >Studio</a
            >
          </li>
          <li><a href="./portfolio.html" class="link studio-one-mobile">Portfolio</a></li>
          <li><a href="" class="link studio-one-mobile">Contacts</a></li>
        </ul>
-->

        <div class="mobile-footer-plus">
          <ul class="list addr-one- addr-flex-mobile">
            <!--
            <li>
              <a href="tel:+380689725921" class="link contacts mobile-addr">+38 (068) 972-59-21</a>
            </li>
            -->
            <li>
              <a href="mailto:Office@WordLaw.eu" class="link contacts mobile-email mobile-addr"
                >Office@WordLaw.eu</a
              >
            </li>
          </ul>

          <ul class="social-networks social-networks-modal-mobile">
            <li class="soc-network">
              <a href="https://m.me/mykola.Osmachko" class="img-social-network hover-focus"
                ><svg width="24" height="24" class="social-network-svg">
                  <use href="./images/icons.svg#facebook-messenger" />
                </svg>
              </a>
            </li>
            <li class="soc-network">
              <a href="https://t.me/YourMykola" class="img-social-network hover-focus"
                ><svg width="24" height="24" class="social-network-svg">
                  <use href="./images/icons.svg#icon-telegram" />
                </svg>
              </a>
            </li>
            <!--<li class="soc-network">
              <a href="https://wa.me/380980529615" class="img-social-network hover-focus"
                ><svg width="24" height="24" class="social-network-svg">
                  <use href="./images/icons.svg#icon-WhatsApp" />
                </svg>
              </a>
            </li>-->
          </ul>
        </div>
      </div>
    </div>

    <script src="./js/modal.js"></script>
    <script src="./js/mobile-menu.js"></script>
  </body>
</html>
