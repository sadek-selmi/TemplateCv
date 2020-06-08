<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_04e70dca4c75f4cca5c849efeea168c4a1fadb7ab7bf4f3921c80cd5f6c10ce0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en-US\">

<!-- Mirrored from bslthemes.com/myour/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 17:13:29 GMT -->
<head>

    <!-- Meta -->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"Personal Portfolio Template\" />
    <meta name=\"keywords\" content=\"resposnive, resume, personal, personal portfolio, cv, myour, portfolio\" />
    <meta name=\"author\" content=\"beshleyua\" />

    <!-- Title -->
    <title>Sadok</title>

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Mr+Dafoe&amp;display=swap\" rel=\"stylesheet\">

    <!-- Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/basic.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/layout.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/magnific-popup.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/jarallax.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/owl.carousel.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/swiper.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/fontawesome.css"), "html", null, true);
        echo "\" />


    <!-- Theme Colors
    <link rel=\"stylesheet\" href=\"css/theme-colors/blue.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/green.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/orange.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/brown.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/purple.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/red.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/beige.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/green_light.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/yellow.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/yellow_light.css\" />
    -->

    <!--[if lt IE 9]>
    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <link rel=\"shortcut icon\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/favicons/favicon.ico"), "html", null, true);
        echo "\">

</head>

<body class=\"home\">

<!-- Preloader -->


<!-- Container -->
<div class=\"container\">

    <!-- Header -->
    <header class=\"header\">

        <!-- logo -->
        <div class=\"logo\">
            <a href=\"#\">
                <img class=\"logo-img\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" />
                <span class=\"logo-lnk\">Sadek <br />Selmi</span>
            </a>
        </div>

        <!-- menu button -->
        <a href=\"#\" class=\"menu-btn\"><span></span></a>

        <!-- download cv button -->
        <a href=\"#\" class=\"btn download-cv-btn\">
            <span class=\"animated-button\"><span>Download CV</span></span>
            <i class=\"icon fas fa-download\"></i>
        </a>

        <!-- header sidebar -->
        <div class=\"header-sidebar\">

            <!-- top menu -->
            <div class=\"top-menu\">
                <div class=\"top-menu-nav\">
                    <div class=\"menu-topmenu-container\">
                        <ul class=\"menu\">
                            <li class=\"menu-item current-menu-item menu-item-has-children\">
                                <a href=\"#section-started\">
                                    <span class=\"animated-button\"><span>Home</span></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item current-menu-item\"><a href=\"index.html\">Home </a></li>

                                </ul>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#section-about\">
                                    <span class=\"animated-button\"><span>About</span></span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#section-experience\">
                                    <span class=\"animated-button\"><span>Resume</span></span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#section-portfolio\">
                                    <span class=\"animated-button\"><span>Portfolio</span></span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#section-contacts\">
                                    <span class=\"animated-button\"><span>Contact</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </header>

    <!-- Wrapper -->
    <div class=\"wrapper\">

        <!-- Background -->
        <div class=\"background-bg\">
            <div class=\"background-filter\">
                <div class=\"background-img\" style=\"background-image: url(";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/man.jpg"), "html", null, true);
        echo ");\"></div>
            </div>
        </div>

        <!-- Section Started -->
        <div class=\"section started\" id=\"section-started\">
            <div class=\"centrize full-width\">
                <div class=\"vertical-center\">

                    <!-- title -->
                    <h1 class=\"h-title\">
                        Sadek <br />Selmi
                    </h1>

                    <!-- content started -->
                    <div class=\"started-content\">

                        <!-- subtitle -->
                        <div class=\"h-subtitles\">
                            <div class=\"h-subtitle typing-subtitle\">
                                <p>Consultant and Mentor</p>
                                <p>Web Developer</p>
                                <p>Programmer</p>
                            </div>
                            <span class=\"typed-subtitle\"></span>
                        </div>

                        <!-- text -->
                        <div class=\"h-text\">
                            Hello! I am Web Developer from Tunisia,  I have rich experience in web site design and building, also I am good at Symfony and Ionic. I love to talk with you about our unique.
                        </div>

                        <!-- button -->
                        <a href=\"#\" class=\"btn\">
                            <span class=\"animated-button\"><span>Contact Me</span></span>
                            <i class=\"icon fas fa-chevron-right\"></i>
                        </a>

                        <!-- mosue button -->
                        <a href=\"#\" class=\"btn mouse-btn\" style=\"display: none;\">
                            <i class=\"icon fas fa-chevron-down\"></i>
                        </a>

                    </div>

                </div>
            </div>
        </div>

        <!-- Section About -->
        <div class=\"section about\" id=\"section-about\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">About Me</div>
                    <div class=\"subtitle\">My story</div>
                </div>

                <!-- text -->
                <div class=\"cols\">
                    <div class=\"col\">
                        <div class=\"single-post-text\">
                            <p>
                                Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
                            </p>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"single-post-text\">
                            <p>
                                Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
                            </p>
                        </div>
                    </div>
                    <div class=\"col col-full\">
                        <div class=\"single-post-text\">
                            <p>
                                Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- info list -->
                <div class=\"info-list\">
                    <ul>
                        <li><strong>Age:</strong> 25</li>
                        <li><strong>Residence:</strong> Tunisia </li>
                        <li><strong>Freelance:</strong> Available</li>
                        <li><strong>Address:</strong> Ezahra tunisie </li>
                        <li><strong>Phone:</strong> +216 21 885 045</li>
                        <li><strong>E-mail:</strong> sadek.selmi@esprit.tn</li>
                    </ul>
                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

        <!-- Section Service -->
        <div class=\"section service\" id=\"section-services\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Services</div>
                    <div class=\"subtitle\">What I Do</div>
                </div>

                <!-- services items -->
                <div class=\"service-items\">

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"fas fa-brain\"></i></div>
                            <div class=\"name\">Economic <br />Science</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Economics is a social science concerned with the production, consumption of goods and services.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"icon fas fa-ad\"></i></div>
                            <div class=\"name\">Marketing <br />& Advertising</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Advertising Management though is a complex process of employing various media to sell a product or service.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"icon fab fa-chrome\"></i></div>
                            <div class=\"name\">Web <br />Development</div>
                            <div class=\"single-post-text\">
                                <p>
                                    The web development process includes: web design, web content, client-side / server-side scripting and network security configuration.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"icon fas fa-headphones\"></i></div>
                            <div class=\"name\">Music <br />Writing</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Sheet music is the basic form in which Western classical music is notated so that it can be learned and performed by solo singers.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"icon fas fa-gamepad\"></i></div>
                            <div class=\"name\">Game <br />Development</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Come Up With a Game Idea. An idea is the first thing that comes to mind when a game is being described before creating.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"fas fa-video\"></i></div>
                            <div class=\"name\">Photography <br />& Video</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Sessions. If you are a photographer that spends most of the time in a portrait studio, you can charge for your session.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

        <!-- Section Pricing -->
        <div class=\"section pricing\" id=\"section-pricing\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Pricing</div>
                    <div class=\"subtitle\">My Plans</div>
                </div>

                <!-- pricing items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesview=\"2\" data-slidesview_mobile=\"1\">

                        <div class=\"item\">
                            <div class=\"pricing-item\">
                                <div class=\"icons\"><i class=\"fas fa-star\"></i></div>
                                <div class=\"name\">Basic</div>
                                <div class=\"amount\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dollar\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t<span>39</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"period\">hour</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </div>
                                <div class=\"feature-list\">
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li class=\"disable\">Music Writing</li>
                                        <li class=\"disable\">Photography</li>
                                    </ul>
                                </div>
                                <a href=\"#\" class=\"btn\">
                                    <span class=\"animated-button\"><span>Buy Now</span></span>
                                    <i class=\"icon fas fa-chevron-right\"></i>
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"pricing-item\">
                                <div class=\"icons\"><i class=\"fas fa-rocket\"></i></div>
                                <div class=\"name\">Premium</div>
                                <div class=\"amount\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dollar\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t<span>59</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"period\">hour</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </div>
                                <div class=\"feature-list\">
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li>Music Writing</li>
                                        <li>Photography <strong>new</strong></li>
                                    </ul>
                                </div>
                                <a href=\"#\" class=\"btn\">
                                    <span class=\"animated-button\"><span>Buy Now</span></span>
                                    <i class=\"icon fas fa-chevron-right\"></i>
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"pricing-item\">
                                <div class=\"icons\"><i class=\"fas fa-rocket\"></i></div>
                                <div class=\"name\">Ultimate</div>
                                <div class=\"amount\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dollar\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t<span>59</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"period\">hour</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </div>
                                <div class=\"feature-list\">
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li>Music Writing</li>
                                        <li>Photography <strong>new</strong></li>
                                    </ul>
                                </div>
                                <a href=\"#\" class=\"btn\">
                                    <span class=\"animated-button\"><span>Buy Now</span></span>
                                    <i class=\"icon fas fa-chevron-right\"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

            </div>
        </div>

        <!-- Section Resume -->
        <div class=\"section resume\" id=\"section-experience\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Experience</div>
                    <div class=\"subtitle\">Working with</div>
                </div>

                <!-- resume items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesview=\"2\" data-slidesview_mobile=\"1\">

                        <div class=\"item\">
                            <div class=\"resume-item active\">
                                <div class=\"date\">Present</div>
                                <div class=\"name\">The Turin <br />Olympics</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2016-2018</div>
                                <div class=\"name\">Red <br />Drifting</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2014-2016</div>
                                <div class=\"name\">World <br />Economy</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2012-2014</div>
                                <div class=\"name\">Art Director <br />Facebook</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2010-2012</div>
                                <div class=\"name\">Art Director <br />Facebook</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

            </div>
        </div>

        <!-- Section Resume -->
        <div class=\"section resume\" id=\"section-education\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Education</div>
                    <div class=\"subtitle\">Studied at</div>
                </div>

                <!-- resume items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesview=\"2\" data-slidesview_mobile=\"1\">

                        <div class=\"item\">
                            <div class=\"resume-item active\">
                                <div class=\"date\">2011-2012</div>
                                <div class=\"name\">Art University <br />New York</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2010-2011</div>
                                <div class=\"name\">Programming Course <br />Paris</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2009-2010</div>
                                <div class=\"name\">Web Design Course <br />London</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2012-2014</div>
                                <div class=\"name\">Art Course <br />London</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2010-2012</div>
                                <div class=\"name\">Art Course <br />London</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

            </div>
        </div>

        <!-- Section Design Skills -->
        <div class=\"section skills\" id=\"section-skills\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Design Skills</div>
                    <div class=\"subtitle\">Creative ability</div>
                </div>

                <!-- skills items -->
                <div class=\"skills percent\">
                    <ul>
                        <li>
                            <div class=\"name\">Web Layout</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 90%;\">
                                    <span class=\"percent\">90%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">Illustrations</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 70%;\">
                                    <span class=\"percent\">70%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">Photoshop</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 95%;\">
                                    <span class=\"percent\">95%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">Graphic Design</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 85%;\">
                                    <span class=\"percent\">85%</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Section Languages Skills -->
        <div class=\"section skills\" id=\"section-skills-lang\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Language Skills</div>
                    <div class=\"subtitle\">Reading and writing</div>
                </div>

                <!-- skills items -->
                <div class=\"skills dotted\">
                    <ul>
                        <li>
                            <div class=\"name\">English</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 90%;\">
                                    <span class=\"percent\">90%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">German</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 70%;\">
                                    <span class=\"percent\">70%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">Italian</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 55%;\">
                                    <span class=\"percent\">55%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">French</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 85%;\">
                                    <span class=\"percent\">85%</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- Section Coding Skills -->
        <div class=\"section skills\" id=\"section-skills-code\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Coding Skills</div>
                    <div class=\"subtitle\">Developing on</div>
                </div>

                <!-- skills items-->
                <div class=\"skills circles\">
                    <ul>
                        <li>
                            <div class=\"progress p90\"> <!-- p90 = 90% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>90%</span>
                            </div>
                            <div class=\"name\">WordPress</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p75\"> <!-- p75 = 75% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>75%</span>
                            </div>
                            <div class=\"name\">PHP, MYSQL</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p85\"> <!-- p85 = 85% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>85%</span>
                            </div>
                            <div class=\"name\">JavaScript</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p80\"> <!-- p80 = 80% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>80%</span>
                            </div>
                            <div class=\"name\">Angular</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p95\"> <!-- p95 = 95% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>95%</span>
                            </div>
                            <div class=\"name\">HTML, CSS</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p90\"> <!-- p90 = 90% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>90%</span>
                            </div>
                            <div class=\"name\">Python</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Section Testimonials -->
        <div class=\"section testimonials\" id=\"section-testimonials\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Reviews</div>
                    <div class=\"subtitle\">What customers say</div>
                </div>

                <!-- testimonials items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesView=\"2\" data-slidesview_mobile=\"1\">

                        <div class=\"item\">
                            <div class=\"reviews-item\">
                                <div class=\"image\">
                                    <img src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/rev1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"info\">
                                    <div class=\"name\">Joseph Mackey</div>
                                    <div class=\"company\">Architect</div>
                                </div>
                                <div class=\"text\">
                                    Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"reviews-item\">
                                <div class=\"image\">
                                    <img src=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/rev1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"info\">
                                    <div class=\"name\">James Green</div>
                                    <div class=\"company\">Art Director</div>
                                </div>
                                <div class=\"text\">
                                    Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"reviews-item\">
                                <div class=\"image\">
                                    <img src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/rev1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"info\">
                                    <div class=\"name\">Joseph Mackey</div>
                                    <div class=\"company\">Architect</div>
                                </div>
                                <div class=\"text\">
                                    Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"reviews-item\">
                                <div class=\"image\">
                                    <img src=\"";
        // line 903
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/rev1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"info\">
                                    <div class=\"name\">James Green</div>
                                    <div class=\"company\">Art Director</div>
                                </div>
                                <div class=\"text\">
                                    Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

            </div>
        </div>

        <!-- Section Clients -->
        <div class=\"section clients\" id=\"section-clients\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Clients</div>
                    <div class=\"subtitle\">My partners</div>
                </div>

                <!-- clients items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesview=\"4\" data-slidesview_mobile=\"2\">

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/client2.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"";
        // line 953
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/client3.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"";
        // line 961
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/client1.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"";
        // line 969
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/client4.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"";
        // line 977
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/client2.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"";
        // line 985
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/client3.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"";
        // line 993
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/client1.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"";
        // line 1001
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/client4.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

        <!-- Works -->
        <div class=\"section works\" id=\"section-portfolio\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Portfolio</div>
                    <div class=\"subtitle\">Latest works</div>
                </div>

                <!-- filter -->
                <div class=\"filter-menu\">
                    <div class=\"filters\">
                        <div class=\"btn-group\">
                            <label data-text=\"All\" class=\"glitch-effect\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".box-col\" />All
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Video\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-video\" />Video
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Music\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-music\" />Music
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Links\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-links\" />Links
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Image\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-image\" />Image
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Gallery\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-gallery\" />Gallery
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Content\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-content\" />Content
                            </label>
                        </div>

                    </div>
                </div>

                <!-- portfolio items -->
                <div class=\"box-items\">

                    <div class=\"box-col f-gallery\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"#gallery-1\" class=\"has-popup-gallery\">
                                    <img src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-images\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                                <div id=\"gallery-1\" class=\"mfp-hide\">
                                    <a href=\"";
        // line 1089
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work1.jpg"), "html", null, true);
        echo "\"></a>
                                    <a href=\"";
        // line 1090
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work2.jpg"), "html", null, true);
        echo "\"></a>
                                    <a href=\"";
        // line 1091
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work3.jpg"), "html", null, true);
        echo "\"></a>
                                    <a href=\"";
        // line 1092
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work4.jpg"), "html", null, true);
        echo "\"></a>
                                </div>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Gallery</div>
                                <a href=\"#gallery-1\" class=\"name has-popup-gallery\">Alabaster Complete Collection</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-video\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"https://youtu.be/S4L8T2kFFck\" class=\"has-popup-video\">
                                    <img src=\"";
        // line 1106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-video\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Video</div>
                                <a href=\"https://youtu.be/S4L8T2kFFck\" class=\"name has-popup-video\">Book of John Paper</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-image\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"";
        // line 1126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work7.jpg"), "html", null, true);
        echo "\" class=\"has-popup-image\">
                                    <img src=\"";
        // line 1127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work7.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-image\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Image</div>
                                <a href=\"";
        // line 1139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work7.jpg"), "html", null, true);
        echo "\" class=\"name has-popup-image\">White Rose Photo</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-image\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"";
        // line 1147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work4.jpg"), "html", null, true);
        echo "\" class=\"has-popup-image\">
                                    <img src=\"";
        // line 1148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-image\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Image</div>
                                <a href=\"";
        // line 1160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work4.jpg"), "html", null, true);
        echo "\" class=\"name has-popup-image\">Honest Company</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-gallery\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"#gallery-2\" class=\"has-popup-gallery\">
                                    <img src=\"";
        // line 1169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-images\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                                <div id=\"gallery-2\" class=\"mfp-hide\">
                                    <a href=\"";
        // line 1179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work1.jpg"), "html", null, true);
        echo "\"></a>
                                    <a href=\"";
        // line 1180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work2.jpg"), "html", null, true);
        echo "\"></a>
                                    <a href=\"";
        // line 1181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work3.jpg"), "html", null, true);
        echo "\"></a>
                                    <a href=\"";
        // line 1182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work4.jpg"), "html", null, true);
        echo "\"></a>
                                </div>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Gallery</div>
                                <a href=\"#gallery-2\" class=\"name has-popup-gallery\">Brown Short Dog</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-music\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&amp;show_artwork=true\" class=\"has-popup-music\">
                                    <img src=\"";
        // line 1196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-music\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Music</div>
                                <a href=\"https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&amp;show_artwork=true\" class=\"name has-popup-music\">Brown Concrete Building</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-links\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"https://beshley.com/\" class=\"has-popup-link\" target=\"_blank\">
                                    <img src=\"";
        // line 1217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Links</div>
                                <a href=\"https://beshley.com/\" class=\"name has-popup-link\">Black Car</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-content\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"#popup-1\" class=\"has-popup-media\">
                                    <img src=\"";
        // line 1238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work8.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Content</div>
                                <a href=\"#popup-1\" class=\"name has-popup-media\">Yellow and Blue Striped</a>
                            </div>
                            <div id=\"popup-1\" class=\"popup-box mfp-fade mfp-hide\">
                                <div class=\"content\">
                                    <div class=\"image\">
                                        <img src=\"";
        // line 1255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/works/work8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"desc\">
                                        <div class=\"category\">Content</div>
                                        <h4>Yellow and Blue Striped</h4>
                                        <p>
                                            Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata
                                            suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
                                        </p>
                                        <a href=\"#\" class=\"btn\">
                                            <span class=\"animated-button\"><span>View Project</span></span>
                                            <i class=\"icon fas fa-chevron-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

        <!-- Section Contacts Info >-->
        <div class=\"section contacts\" id=\"section-contacts\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Contact</div>
                    <div class=\"subtitle\">Let's talk</div>
                </div>

                <!-- contact form -->
                <div class=\"contact-form\">
                    <form id=\"cform\" method=\"post\">
                        <div class=\"group-val\">
                            <div class=\"label\">Full name <strong>*</strong></div>
                            <input type=\"text\" name=\"name\" placeholder=\"ej.: Genoveva Lian Hullt\" />
                        </div>
                        <div class=\"group-val\">
                            <div class=\"label\">Email address <strong>*</strong></div>
                            <input type=\"email\" name=\"email\" placeholder=\"example@domain.com\" />
                        </div>
                        <div class=\"group-val\">
                            <div class=\"label\">Message <strong>*</strong></div>
                            <textarea name=\"message\" placeholder=\"To Write\"></textarea>
                        </div>
                        <div class=\"group-bts\">
                            <button type=\"submit\" class=\"btn\">
                                <span class=\"animated-button\"><span>Send Message</span></span>
                                <i class=\"icon fas fa-chevron-right\"></i>
                            </button>
                        </div>
                    </form>
                    <div class=\"alert-success\">
                        <p>Thanks, your message is sent successfully.</p>
                    </div>
                </div>

                <!-- contact info -->
                <div class=\"contact-info\">
                    <div class=\"name\">Joe Wilson</div>
                    <div class=\"subname\">Consultant & Mentor</div>
                    <div class=\"info-list\">
                        <ul>
                            <li><strong>Age:</strong> 24</li>
                            <li><strong>Residence:</strong> USA</li>
                            <li><strong>Freelance:</strong> Available</li>
                            <li><strong>Address:</strong> San Francisco</li>
                            <li><strong>Phone:</strong> +1 256 254 84 56</li>
                            <li><strong>E-mail:</strong> alejandroa@gmail.com</li>
                        </ul>
                    </div>
                    <div class=\"author\">Joe Wilson</div>
                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class=\"footer\">
        <div class=\"socials\">
            <a target=\"_blank\" href=\"https://www.facebook.com/sadok.selmi\">
                <i class=\"icon fab fa-facebook-f\"></i>
            </a>
            <a target=\"_blank\" href=\"https://www.instagram.com/ala_selmi/\">
                <i class=\"icon fab fa-instagram\"></i>
            </a>
            <a target=\"_blank\" href=\"https://dribbble.com/\">
                <i class=\"icon fab fa-dribbble\"></i>
            </a>
        </div>
    </footer>

</div>

<!-- Scripts -->

<script src=\"";
        // line 1359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/swiper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/isotope.pkgd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/imagesloaded.pkgd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jarallax-element.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jarallax-video.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jarallax.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/typed.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/magnific-popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/velocity.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/scripts.min.js"), "html", null, true);
        echo "\"></script>

</body>

<!-- Mirrored from bslthemes.com/myour/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 17:13:42 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1576 => 1371,  1572 => 1370,  1568 => 1369,  1564 => 1368,  1560 => 1367,  1556 => 1366,  1552 => 1365,  1548 => 1364,  1544 => 1363,  1540 => 1362,  1536 => 1361,  1532 => 1360,  1528 => 1359,  1421 => 1255,  1401 => 1238,  1377 => 1217,  1353 => 1196,  1336 => 1182,  1332 => 1181,  1328 => 1180,  1324 => 1179,  1311 => 1169,  1299 => 1160,  1284 => 1148,  1280 => 1147,  1269 => 1139,  1254 => 1127,  1250 => 1126,  1227 => 1106,  1210 => 1092,  1206 => 1091,  1202 => 1090,  1198 => 1089,  1185 => 1079,  1104 => 1001,  1093 => 993,  1082 => 985,  1071 => 977,  1060 => 969,  1049 => 961,  1038 => 953,  1027 => 945,  982 => 903,  964 => 888,  946 => 873,  928 => 858,  201 => 134,  132 => 68,  111 => 50,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en-US\">

<!-- Mirrored from bslthemes.com/myour/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 17:13:29 GMT -->
<head>

    <!-- Meta -->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    <meta name=\"description\" content=\"Personal Portfolio Template\" />
    <meta name=\"keywords\" content=\"resposnive, resume, personal, personal portfolio, cv, myour, portfolio\" />
    <meta name=\"author\" content=\"beshleyua\" />

    <!-- Title -->
    <title>Sadok</title>

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Mr+Dafoe&amp;display=swap\" rel=\"stylesheet\">

    <!-- Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/basic.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/layout.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/magnific-popup.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/animate.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/jarallax.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.carousel.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/swiper.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/fontawesome.css')}}\" />


    <!-- Theme Colors
    <link rel=\"stylesheet\" href=\"css/theme-colors/blue.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/green.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/orange.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/brown.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/purple.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/red.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/beige.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/green_light.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/yellow.css\" />
    <link rel=\"stylesheet\" href=\"css/theme-colors/yellow_light.css\" />
    -->

    <!--[if lt IE 9]>
    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <link rel=\"shortcut icon\" href=\"{{ asset('front/images/favicons/favicon.ico')}}\">

</head>

<body class=\"home\">

<!-- Preloader -->


<!-- Container -->
<div class=\"container\">

    <!-- Header -->
    <header class=\"header\">

        <!-- logo -->
        <div class=\"logo\">
            <a href=\"#\">
                <img class=\"logo-img\" src=\"{{ asset('front/images/logo.png')}}\" alt=\"\" />
                <span class=\"logo-lnk\">Sadek <br />Selmi</span>
            </a>
        </div>

        <!-- menu button -->
        <a href=\"#\" class=\"menu-btn\"><span></span></a>

        <!-- download cv button -->
        <a href=\"#\" class=\"btn download-cv-btn\">
            <span class=\"animated-button\"><span>Download CV</span></span>
            <i class=\"icon fas fa-download\"></i>
        </a>

        <!-- header sidebar -->
        <div class=\"header-sidebar\">

            <!-- top menu -->
            <div class=\"top-menu\">
                <div class=\"top-menu-nav\">
                    <div class=\"menu-topmenu-container\">
                        <ul class=\"menu\">
                            <li class=\"menu-item current-menu-item menu-item-has-children\">
                                <a href=\"#section-started\">
                                    <span class=\"animated-button\"><span>Home</span></span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item current-menu-item\"><a href=\"index.html\">Home </a></li>

                                </ul>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#section-about\">
                                    <span class=\"animated-button\"><span>About</span></span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#section-experience\">
                                    <span class=\"animated-button\"><span>Resume</span></span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#section-portfolio\">
                                    <span class=\"animated-button\"><span>Portfolio</span></span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#section-contacts\">
                                    <span class=\"animated-button\"><span>Contact</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </header>

    <!-- Wrapper -->
    <div class=\"wrapper\">

        <!-- Background -->
        <div class=\"background-bg\">
            <div class=\"background-filter\">
                <div class=\"background-img\" style=\"background-image: url({{ asset('front/images/man.jpg')}});\"></div>
            </div>
        </div>

        <!-- Section Started -->
        <div class=\"section started\" id=\"section-started\">
            <div class=\"centrize full-width\">
                <div class=\"vertical-center\">

                    <!-- title -->
                    <h1 class=\"h-title\">
                        Sadek <br />Selmi
                    </h1>

                    <!-- content started -->
                    <div class=\"started-content\">

                        <!-- subtitle -->
                        <div class=\"h-subtitles\">
                            <div class=\"h-subtitle typing-subtitle\">
                                <p>Consultant and Mentor</p>
                                <p>Web Developer</p>
                                <p>Programmer</p>
                            </div>
                            <span class=\"typed-subtitle\"></span>
                        </div>

                        <!-- text -->
                        <div class=\"h-text\">
                            Hello! I am Web Developer from Tunisia,  I have rich experience in web site design and building, also I am good at Symfony and Ionic. I love to talk with you about our unique.
                        </div>

                        <!-- button -->
                        <a href=\"#\" class=\"btn\">
                            <span class=\"animated-button\"><span>Contact Me</span></span>
                            <i class=\"icon fas fa-chevron-right\"></i>
                        </a>

                        <!-- mosue button -->
                        <a href=\"#\" class=\"btn mouse-btn\" style=\"display: none;\">
                            <i class=\"icon fas fa-chevron-down\"></i>
                        </a>

                    </div>

                </div>
            </div>
        </div>

        <!-- Section About -->
        <div class=\"section about\" id=\"section-about\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">About Me</div>
                    <div class=\"subtitle\">My story</div>
                </div>

                <!-- text -->
                <div class=\"cols\">
                    <div class=\"col\">
                        <div class=\"single-post-text\">
                            <p>
                                Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
                            </p>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div class=\"single-post-text\">
                            <p>
                                Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
                            </p>
                        </div>
                    </div>
                    <div class=\"col col-full\">
                        <div class=\"single-post-text\">
                            <p>
                                Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- info list -->
                <div class=\"info-list\">
                    <ul>
                        <li><strong>Age:</strong> 25</li>
                        <li><strong>Residence:</strong> Tunisia </li>
                        <li><strong>Freelance:</strong> Available</li>
                        <li><strong>Address:</strong> Ezahra tunisie </li>
                        <li><strong>Phone:</strong> +216 21 885 045</li>
                        <li><strong>E-mail:</strong> sadek.selmi@esprit.tn</li>
                    </ul>
                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

        <!-- Section Service -->
        <div class=\"section service\" id=\"section-services\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Services</div>
                    <div class=\"subtitle\">What I Do</div>
                </div>

                <!-- services items -->
                <div class=\"service-items\">

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"fas fa-brain\"></i></div>
                            <div class=\"name\">Economic <br />Science</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Economics is a social science concerned with the production, consumption of goods and services.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"icon fas fa-ad\"></i></div>
                            <div class=\"name\">Marketing <br />& Advertising</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Advertising Management though is a complex process of employing various media to sell a product or service.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"icon fab fa-chrome\"></i></div>
                            <div class=\"name\">Web <br />Development</div>
                            <div class=\"single-post-text\">
                                <p>
                                    The web development process includes: web design, web content, client-side / server-side scripting and network security configuration.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"icon fas fa-headphones\"></i></div>
                            <div class=\"name\">Music <br />Writing</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Sheet music is the basic form in which Western classical music is notated so that it can be learned and performed by solo singers.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"icon fas fa-gamepad\"></i></div>
                            <div class=\"name\">Game <br />Development</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Come Up With a Game Idea. An idea is the first thing that comes to mind when a game is being described before creating.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class=\"service-col\">
                        <div class=\"service-item\">
                            <div class=\"icon\"><i class=\"fas fa-video\"></i></div>
                            <div class=\"name\">Photography <br />& Video</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Sessions. If you are a photographer that spends most of the time in a portrait studio, you can charge for your session.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

        <!-- Section Pricing -->
        <div class=\"section pricing\" id=\"section-pricing\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Pricing</div>
                    <div class=\"subtitle\">My Plans</div>
                </div>

                <!-- pricing items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesview=\"2\" data-slidesview_mobile=\"1\">

                        <div class=\"item\">
                            <div class=\"pricing-item\">
                                <div class=\"icons\"><i class=\"fas fa-star\"></i></div>
                                <div class=\"name\">Basic</div>
                                <div class=\"amount\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dollar\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t<span>39</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"period\">hour</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </div>
                                <div class=\"feature-list\">
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li class=\"disable\">Music Writing</li>
                                        <li class=\"disable\">Photography</li>
                                    </ul>
                                </div>
                                <a href=\"#\" class=\"btn\">
                                    <span class=\"animated-button\"><span>Buy Now</span></span>
                                    <i class=\"icon fas fa-chevron-right\"></i>
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"pricing-item\">
                                <div class=\"icons\"><i class=\"fas fa-rocket\"></i></div>
                                <div class=\"name\">Premium</div>
                                <div class=\"amount\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dollar\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t<span>59</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"period\">hour</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </div>
                                <div class=\"feature-list\">
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li>Music Writing</li>
                                        <li>Photography <strong>new</strong></li>
                                    </ul>
                                </div>
                                <a href=\"#\" class=\"btn\">
                                    <span class=\"animated-button\"><span>Buy Now</span></span>
                                    <i class=\"icon fas fa-chevron-right\"></i>
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"pricing-item\">
                                <div class=\"icons\"><i class=\"fas fa-rocket\"></i></div>
                                <div class=\"name\">Ultimate</div>
                                <div class=\"amount\">
\t\t\t\t\t\t\t\t\t\t<span class=\"number\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dollar\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t<span>59</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"period\">hour</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </div>
                                <div class=\"feature-list\">
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li>Music Writing</li>
                                        <li>Photography <strong>new</strong></li>
                                    </ul>
                                </div>
                                <a href=\"#\" class=\"btn\">
                                    <span class=\"animated-button\"><span>Buy Now</span></span>
                                    <i class=\"icon fas fa-chevron-right\"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

            </div>
        </div>

        <!-- Section Resume -->
        <div class=\"section resume\" id=\"section-experience\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Experience</div>
                    <div class=\"subtitle\">Working with</div>
                </div>

                <!-- resume items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesview=\"2\" data-slidesview_mobile=\"1\">

                        <div class=\"item\">
                            <div class=\"resume-item active\">
                                <div class=\"date\">Present</div>
                                <div class=\"name\">The Turin <br />Olympics</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2016-2018</div>
                                <div class=\"name\">Red <br />Drifting</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2014-2016</div>
                                <div class=\"name\">World <br />Economy</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2012-2014</div>
                                <div class=\"name\">Art Director <br />Facebook</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2010-2012</div>
                                <div class=\"name\">Art Director <br />Facebook</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

            </div>
        </div>

        <!-- Section Resume -->
        <div class=\"section resume\" id=\"section-education\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Education</div>
                    <div class=\"subtitle\">Studied at</div>
                </div>

                <!-- resume items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesview=\"2\" data-slidesview_mobile=\"1\">

                        <div class=\"item\">
                            <div class=\"resume-item active\">
                                <div class=\"date\">2011-2012</div>
                                <div class=\"name\">Art University <br />New York</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2010-2011</div>
                                <div class=\"name\">Programming Course <br />Paris</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2009-2010</div>
                                <div class=\"name\">Web Design Course <br />London</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2012-2014</div>
                                <div class=\"name\">Art Course <br />London</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"resume-item\">
                                <div class=\"date\">2010-2012</div>
                                <div class=\"name\">Art Course <br />London</div>
                                <div class=\"single-post-text\">
                                    <p>
                                        Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

            </div>
        </div>

        <!-- Section Design Skills -->
        <div class=\"section skills\" id=\"section-skills\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Design Skills</div>
                    <div class=\"subtitle\">Creative ability</div>
                </div>

                <!-- skills items -->
                <div class=\"skills percent\">
                    <ul>
                        <li>
                            <div class=\"name\">Web Layout</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 90%;\">
                                    <span class=\"percent\">90%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">Illustrations</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 70%;\">
                                    <span class=\"percent\">70%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">Photoshop</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 95%;\">
                                    <span class=\"percent\">95%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">Graphic Design</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 85%;\">
                                    <span class=\"percent\">85%</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Section Languages Skills -->
        <div class=\"section skills\" id=\"section-skills-lang\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Language Skills</div>
                    <div class=\"subtitle\">Reading and writing</div>
                </div>

                <!-- skills items -->
                <div class=\"skills dotted\">
                    <ul>
                        <li>
                            <div class=\"name\">English</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 90%;\">
                                    <span class=\"percent\">90%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">German</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 70%;\">
                                    <span class=\"percent\">70%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">Italian</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 55%;\">
                                    <span class=\"percent\">55%</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class=\"name\">French</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                            <div class=\"progress\">
                                <div class=\"percentage\" style=\"width: 85%;\">
                                    <span class=\"percent\">85%</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- Section Coding Skills -->
        <div class=\"section skills\" id=\"section-skills-code\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Coding Skills</div>
                    <div class=\"subtitle\">Developing on</div>
                </div>

                <!-- skills items-->
                <div class=\"skills circles\">
                    <ul>
                        <li>
                            <div class=\"progress p90\"> <!-- p90 = 90% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>90%</span>
                            </div>
                            <div class=\"name\">WordPress</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p75\"> <!-- p75 = 75% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>75%</span>
                            </div>
                            <div class=\"name\">PHP, MYSQL</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p85\"> <!-- p85 = 85% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>85%</span>
                            </div>
                            <div class=\"name\">JavaScript</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p80\"> <!-- p80 = 80% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>80%</span>
                            </div>
                            <div class=\"name\">Angular</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p95\"> <!-- p95 = 95% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>95%</span>
                            </div>
                            <div class=\"name\">HTML, CSS</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class=\"progress p90\"> <!-- p90 = 90% circle fill color -->
                                <div class=\"percentage\"></div>
                                <span>90%</span>
                            </div>
                            <div class=\"name\">Python</div>
                            <div class=\"single-post-text\">
                                <p>
                                    Etiam sit amet orci eget eros faucibus tincidunt.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Section Testimonials -->
        <div class=\"section testimonials\" id=\"section-testimonials\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Reviews</div>
                    <div class=\"subtitle\">What customers say</div>
                </div>

                <!-- testimonials items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesView=\"2\" data-slidesview_mobile=\"1\">

                        <div class=\"item\">
                            <div class=\"reviews-item\">
                                <div class=\"image\">
                                    <img src=\"{{ asset('front/images/rev1.png')}}\" alt=\"\">
                                </div>
                                <div class=\"info\">
                                    <div class=\"name\">Joseph Mackey</div>
                                    <div class=\"company\">Architect</div>
                                </div>
                                <div class=\"text\">
                                    Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"reviews-item\">
                                <div class=\"image\">
                                    <img src=\"{{ asset('front/images/rev1.png')}}\" alt=\"\">
                                </div>
                                <div class=\"info\">
                                    <div class=\"name\">James Green</div>
                                    <div class=\"company\">Art Director</div>
                                </div>
                                <div class=\"text\">
                                    Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"reviews-item\">
                                <div class=\"image\">
                                    <img src=\"{{ asset('front/images/rev1.png')}}\" alt=\"\">
                                </div>
                                <div class=\"info\">
                                    <div class=\"name\">Joseph Mackey</div>
                                    <div class=\"company\">Architect</div>
                                </div>
                                <div class=\"text\">
                                    Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
                                </div>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"reviews-item\">
                                <div class=\"image\">
                                    <img src=\"{{ asset('front/images/rev1.png')}}\" alt=\"\">
                                </div>
                                <div class=\"info\">
                                    <div class=\"name\">James Green</div>
                                    <div class=\"company\">Art Director</div>
                                </div>
                                <div class=\"text\">
                                    Excellent all around! What stood out most was Jake's excellent service. He made sure our order was placed in time, even though we were ordering on a holiday.
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

            </div>
        </div>

        <!-- Section Clients -->
        <div class=\"section clients\" id=\"section-clients\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Clients</div>
                    <div class=\"subtitle\">My partners</div>
                </div>

                <!-- clients items -->
                <div class=\"content-carousel\">
                    <div class=\"owl-carousel\" data-slidesview=\"4\" data-slidesview_mobile=\"2\">

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"{{ asset('front/images/client2.png')}}\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"{{ asset('front/images/client3.png')}}\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"{{ asset('front/images/client1.png')}}\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"{{ asset('front/images/client4.png')}}\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"{{ asset('front/images/client2.png')}}\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"{{ asset('front/images/client3.png')}}\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"{{ asset('front/images/client1.png')}}\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                        <div class=\"item\">
                            <div class=\"clients-item\">
                                <a target=\"_blank\" href=\"#\">
                                    <img src=\"{{ asset('front/images/client4.png')}}\" alt=\"\" />
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- navigation -->
                    <div class=\"navs\">
                        <span class=\"prev fas fa-chevron-left\"></span>
                        <span class=\"next fas fa-chevron-right\"></span>
                    </div>

                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

        <!-- Works -->
        <div class=\"section works\" id=\"section-portfolio\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Portfolio</div>
                    <div class=\"subtitle\">Latest works</div>
                </div>

                <!-- filter -->
                <div class=\"filter-menu\">
                    <div class=\"filters\">
                        <div class=\"btn-group\">
                            <label data-text=\"All\" class=\"glitch-effect\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".box-col\" />All
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Video\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-video\" />Video
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Music\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-music\" />Music
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Links\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-links\" />Links
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Image\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-image\" />Image
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Gallery\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-gallery\" />Gallery
                            </label>
                        </div>
                        <div class=\"btn-group\">
                            <label data-text=\"Content\">
                                <input type=\"radio\" name=\"fl_radio\" value=\".f-content\" />Content
                            </label>
                        </div>

                    </div>
                </div>

                <!-- portfolio items -->
                <div class=\"box-items\">

                    <div class=\"box-col f-gallery\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"#gallery-1\" class=\"has-popup-gallery\">
                                    <img src=\"{{ asset('front/images/works/work1.jpg')}}\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-images\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                                <div id=\"gallery-1\" class=\"mfp-hide\">
                                    <a href=\"{{ asset('front/images/works/work1.jpg')}}\"></a>
                                    <a href=\"{{ asset('front/images/works/work2.jpg')}}\"></a>
                                    <a href=\"{{ asset('front/images/works/work3.jpg')}}\"></a>
                                    <a href=\"{{ asset('front/images/works/work4.jpg')}}\"></a>
                                </div>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Gallery</div>
                                <a href=\"#gallery-1\" class=\"name has-popup-gallery\">Alabaster Complete Collection</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-video\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"https://youtu.be/S4L8T2kFFck\" class=\"has-popup-video\">
                                    <img src=\"{{ asset('front/images/works/work2.jpg')}}\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-video\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Video</div>
                                <a href=\"https://youtu.be/S4L8T2kFFck\" class=\"name has-popup-video\">Book of John Paper</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-image\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"{{ asset('front/images/works/work7.jpg')}}\" class=\"has-popup-image\">
                                    <img src=\"{{ asset('front/images/works/work7.jpg')}}\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-image\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Image</div>
                                <a href=\"{{ asset('front/images/works/work7.jpg')}}\" class=\"name has-popup-image\">White Rose Photo</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-image\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"{{ asset('front/images/works/work4.jpg')}}\" class=\"has-popup-image\">
                                    <img src=\"{{ asset('front/images/works/work4.jpg')}}\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-image\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Image</div>
                                <a href=\"{{ asset('front/images/works/work4.jpg')}}\" class=\"name has-popup-image\">Honest Company</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-gallery\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"#gallery-2\" class=\"has-popup-gallery\">
                                    <img src=\"{{ asset('front/images/works/work5.jpg')}}\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-images\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                                <div id=\"gallery-2\" class=\"mfp-hide\">
                                    <a href=\"{{ asset('front/images/works/work1.jpg')}}\"></a>
                                    <a href=\"{{ asset('front/images/works/work2.jpg')}}\"></a>
                                    <a href=\"{{ asset('front/images/works/work3.jpg')}}\"></a>
                                    <a href=\"{{ asset('front/images/works/work4.jpg')}}\"></a>
                                </div>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Gallery</div>
                                <a href=\"#gallery-2\" class=\"name has-popup-gallery\">Brown Short Dog</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-music\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&amp;show_artwork=true\" class=\"has-popup-music\">
                                    <img src=\"{{ asset('front/images/works/work6.jpg')}}\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-music\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Music</div>
                                <a href=\"https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&amp;show_artwork=true\" class=\"name has-popup-music\">Brown Concrete Building</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-links\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"https://beshley.com/\" class=\"has-popup-link\" target=\"_blank\">
                                    <img src=\"{{ asset('front/images/works/work3.jpg')}}\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-link\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Links</div>
                                <a href=\"https://beshley.com/\" class=\"name has-popup-link\">Black Car</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"box-col f-content\">
                        <div class=\"box-item\">
                            <div class=\"image\">
                                <a href=\"#popup-1\" class=\"has-popup-media\">
                                    <img src=\"{{ asset('front/images/works/work8.jpg')}}\" alt=\"\" />
                                    <span class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"centrize full-width\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vertical-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon fas fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
                                </a>
                            </div>
                            <div class=\"desc\">
                                <div class=\"category\">Content</div>
                                <a href=\"#popup-1\" class=\"name has-popup-media\">Yellow and Blue Striped</a>
                            </div>
                            <div id=\"popup-1\" class=\"popup-box mfp-fade mfp-hide\">
                                <div class=\"content\">
                                    <div class=\"image\">
                                        <img src=\"{{ asset('front/images/works/work8.jpg')}}\" alt=\"\">
                                    </div>
                                    <div class=\"desc\">
                                        <div class=\"category\">Content</div>
                                        <h4>Yellow and Blue Striped</h4>
                                        <p>
                                            Consul latine iudicabit eu vel. Cu has animal eruditi voluptatibus. Eu volumus explicari sed. Mel mutat vituperata
                                            suscipiantur et, et fabellas explicari adipiscing quo, no mucius euismod vis. Cu vim quem quod cibo.
                                        </p>
                                        <a href=\"#\" class=\"btn\">
                                            <span class=\"animated-button\"><span>View Project</span></span>
                                            <i class=\"icon fas fa-chevron-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

        <!-- Section Contacts Info >-->
        <div class=\"section contacts\" id=\"section-contacts\">
            <div class=\"content\">

                <!-- title -->
                <div class=\"titles\">
                    <div class=\"title\">Contact</div>
                    <div class=\"subtitle\">Let's talk</div>
                </div>

                <!-- contact form -->
                <div class=\"contact-form\">
                    <form id=\"cform\" method=\"post\">
                        <div class=\"group-val\">
                            <div class=\"label\">Full name <strong>*</strong></div>
                            <input type=\"text\" name=\"name\" placeholder=\"ej.: Genoveva Lian Hullt\" />
                        </div>
                        <div class=\"group-val\">
                            <div class=\"label\">Email address <strong>*</strong></div>
                            <input type=\"email\" name=\"email\" placeholder=\"example@domain.com\" />
                        </div>
                        <div class=\"group-val\">
                            <div class=\"label\">Message <strong>*</strong></div>
                            <textarea name=\"message\" placeholder=\"To Write\"></textarea>
                        </div>
                        <div class=\"group-bts\">
                            <button type=\"submit\" class=\"btn\">
                                <span class=\"animated-button\"><span>Send Message</span></span>
                                <i class=\"icon fas fa-chevron-right\"></i>
                            </button>
                        </div>
                    </form>
                    <div class=\"alert-success\">
                        <p>Thanks, your message is sent successfully.</p>
                    </div>
                </div>

                <!-- contact info -->
                <div class=\"contact-info\">
                    <div class=\"name\">Joe Wilson</div>
                    <div class=\"subname\">Consultant & Mentor</div>
                    <div class=\"info-list\">
                        <ul>
                            <li><strong>Age:</strong> 24</li>
                            <li><strong>Residence:</strong> USA</li>
                            <li><strong>Freelance:</strong> Available</li>
                            <li><strong>Address:</strong> San Francisco</li>
                            <li><strong>Phone:</strong> +1 256 254 84 56</li>
                            <li><strong>E-mail:</strong> alejandroa@gmail.com</li>
                        </ul>
                    </div>
                    <div class=\"author\">Joe Wilson</div>
                </div>

                <div class=\"clear\"></div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class=\"footer\">
        <div class=\"socials\">
            <a target=\"_blank\" href=\"https://www.facebook.com/sadok.selmi\">
                <i class=\"icon fab fa-facebook-f\"></i>
            </a>
            <a target=\"_blank\" href=\"https://www.instagram.com/ala_selmi/\">
                <i class=\"icon fab fa-instagram\"></i>
            </a>
            <a target=\"_blank\" href=\"https://dribbble.com/\">
                <i class=\"icon fab fa-dribbble\"></i>
            </a>
        </div>
    </footer>

</div>

<!-- Scripts -->

<script src=\"{{ asset('front/js/swiper.js')}}\"></script>
<script src=\"{{ asset('front/js/owl.carousel.js')}}\"></script>
<script src=\"{{ asset('front/js/isotope.pkgd.js')}}\"></script>
<script src=\"{{ asset('front/js/imagesloaded.pkgd.js')}}\"></script>
<script src=\"{{ asset('front/js/jarallax-element.js')}}\"></script>
<script src=\"{{ asset('front/js/jarallax-video.js')}}\"></script>
<script src=\"{{ asset('front/js/jarallax.js')}}\"></script>
<script src=\"{{ asset('front/js/typed.js')}}\"></script>
<script src=\"{{ asset('front/js/magnific-popup.js')}}\"></script>
<script src=\"{{ asset('front/js/jquery.validate.js')}}\"></script>
<script src=\"{{ asset('front/js/velocity.min.js')}}\"></script>
<script src=\"{{ asset('front/js/jquery.min.js')}}\"></script>
<script src=\"{{ asset('front/js/scripts.min.js')}}\"></script>

</body>

<!-- Mirrored from bslthemes.com/myour/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jun 2020 17:13:42 GMT -->
</html>", "base.html.twig", "C:\\wamp64\\www\\CV\\app\\Resources\\views\\base.html.twig");
    }
}
