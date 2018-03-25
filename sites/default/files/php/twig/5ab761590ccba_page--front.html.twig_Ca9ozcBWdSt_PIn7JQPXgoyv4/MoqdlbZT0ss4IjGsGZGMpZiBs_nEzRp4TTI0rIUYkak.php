<?php

/* themes/portfolio_theme/templates/page/page--front.html.twig */
class __TwigTemplate_7a5ce481c9edf2bfe06a5daf70f599d38d09d5a45dbf2672f66f840ae35934a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
\t<title>Portfolio</title>
\t<meta charset=\"utf-8\">
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
\t<link rel=\"stylesheet\" href=\"css/foundation.css\">
\t<link rel=\"stylesheet\" href=\"css/app.css\">
\t<link rel=\"stylesheet\" href=\"css/newfile.css\">
\t<script src=\"js/vendor/foundation.js\"></script>
\t<script src=\"js/vendor/jquery.js\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
</head>
<body>
\t<div id=\"container\">
\t\t<section id=\"wrapper\">

\t\t\t<section id=\"topsec\">

\t\t\t\t<div class=\"row small-collapse medium-uncollapse\">
\t\t\t\t\t<div class=\"columns small-6 large-6\">
\t\t\t\t\t\t<h1>Blu<span class=\"highblue\">E</span>asy</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"columns small-4 large-6\">
\t\t\t\t\t\t<div class=\"title-bar navmenucolor more-top\" data-responsive-toggle=\"example-animated-menu\" data-hide-for=\"medium\">
\t\t\t\t\t\t\t<button class=\"menu-icon\" type=\"button\" data-toggle></button>
\t\t\t\t\t\t\t<div class=\"title-bar-title no-top\">Menu</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"top-bar navmenucolor\" id=\"example-animated-menu\" data-animate=\"hinge-in-from-top spin-out\">
\t\t\t\t\t\t\t<div class=\"top-bar-right dallef\">
\t\t\t\t\t\t\t\t<ul class=\"dropdown menu navmenucolor\" data-dropdown-menu>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Features</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section id=\"banner\">
\t\t\t\t<div class=\"centredheading\">
\t\t\t\t\t<h3 class=\"banerhaeding1\">\"I'm looking for the unexpected</h3>
\t\t\t\t\t<h3 class=\"banerhaeding2\">I'm looking for the things never seen before\"</h3>
\t\t\t\t</div>
\t\t\t</section>
\t\t</section>
\t\t<section id=\"services\">

\t\t\t<div class=\"row\">
\t\t\t\t<h4 class=\"servicesheading\"><span class=\"underlined\">Ser</span>vices</h4>
\t\t\t</div>

\t\t\t<div class=\"row foradding\">

\t\t\t\t<div class=\"columns small-12 large-expand\">
\t\t\t\t\t<div class=\"coffee\">
\t\t\t\t\t\t<img class=\"coffeeimage\" src=\"../../images/glass.jpg\">
\t\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t\t<h2 class=\"coffhead\">coffee</h2>
\t\t\t\t\t\t\t<p class=\"pser\"> This is a glass of coffee and here goes some text in the paragraph you can edit from here easily. This is a responsible theme.</p></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t<div class=\"columns small-12 large-expand\">
\t\t\t\t\t\t<div class=\"coffee\">
\t\t\t\t\t\t\t<img class=\"coffeeimage\" src=\"../../images/inta.jpg\">
\t\t\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t\t\t<h2 class=\"coffhead\">Instant</h2>
\t\t\t\t\t\t\t\t<p class=\"pser\"> This is a glass of coffee. and here goes some text in the paragraph you can edit from here easily. This is a responsible theme.</p></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"columns small-12 large-expand\">
\t\t\t\t\t\t\t<div class=\"coffee\">
\t\t\t\t\t\t\t\t<img class=\"coffeeimage\" src=\"../../images/dsllr.jpg\">
\t\t\t\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t\t\t\t<h2 class=\"coffhead\">Serious</h2>
\t\t\t\t\t\t\t\t\t<p class=\"pser\"> This is a glass of coffee and here goes some text in the paragraph you can edit from here easily. This is a responsible theme.</p></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"columns small-12 large-expand\">
\t\t\t\t\t\t\t\t<div class=\"coffee\">
\t\t\t\t\t\t\t\t\t<img class=\"coffeeimage\" src=\"../../images/appe.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"textarea\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"coffhead\">Frame</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"pser\"> This is a glass of coffee and here goes some text in the paragraph you can edit from here easily. this is a responsible theme.</p>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>


\t\t\t\t\t<section id=\"Portfol\">
\t\t\t\t\t\t<div class=\"row\">



\t\t\t\t\t\t\t<div class=\"columns small-6\">
\t\t\t\t\t\t\t\t<h4 class=\"portheading\"><span class=\"underlined\">Por</span>tfolio</h4>
\t\t\t\t\t\t\t</div>






\t\t\t\t\t\t\t<div class=\"columns small-6 fflr\">
\t\t\t\t\t\t\t\t<div class=\"top-bar-right allir\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">All</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Panoromas</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Potraits</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Macro</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Journal</a></li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t\t<section id=\"gallery\">
\t\t\t\t\t<div class=\"galleryadjuest\">
\t\t\t\t\t\t<div class=\"row medium-unstack galleryadjuest\">
\t\t\t\t\t\t\t<div class=\"columns settler\">
\t\t\t\t\t\t\t\t<img src=\"../../images/lion.jpg\" class=\"adjustimg\">
\t\t\t\t\t\t\t\t<div class=\"middle21\">
\t\t\t\t\t\t\t\t\t<div class=\"ext\"><i class=\"fa fa-plus\"></i></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"columns settler\">
\t\t\t\t\t\t\t\t<img class=\"adjustimg\" src=\"../../images/water.jpg\">
\t\t\t\t\t\t\t\t<div class=\"middle21\">
\t\t\t\t\t\t\t\t\t<div class=\"ext\"><i class=\"fa fa-plus\"></i></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"columns settler\">
\t\t\t\t\t\t\t\t<img src=\"../../images/pension.jpg\" class=\"adjustimg\">
\t\t\t\t\t\t\t\t<div class=\"middle21\">
\t\t\t\t\t\t\t\t\t<div class=\"ext\"><i class=\"fa fa-plus\"></i></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"columns settler\">
\t\t\t\t\t\t\t\t<img src=\"../../images/spurn.jpg\" class=\"adjustimg\">
\t\t\t\t\t\t\t\t<div class=\"middle21\">
\t\t\t\t\t\t\t\t\t<div class=\"ext\"><i class=\"fa fa-plus\"></i></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"galleryadjuest\">
\t\t\t\t\t\t<div class=\"row medium-unstack galleryadjuest\">
\t\t\t\t\t\t\t<div class=\"columns settler\">
\t\t\t\t\t\t\t\t<img src=\"../../images/lion.jpg\" class=\"adjustimg\">
\t\t\t\t\t\t\t\t<div class=\"middle21\">
\t\t\t\t\t\t\t\t\t<div class=\"ext\"><i class=\"fa fa-plus\"></i></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"columns settler\">
\t\t\t\t\t\t\t\t<img src=\"../../images/water.jpg\" class=\"adjustimg\">
\t\t\t\t\t\t\t\t<div class=\"middle21\">
\t\t\t\t\t\t\t\t\t<div class=\"ext\"><i class=\"fa fa-plus\"></i></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"columns settler\">
\t\t\t\t\t\t\t\t<img src=\"../../images/pension.jpg\" class=\"adjustimg\">
\t\t\t\t\t\t\t\t<div class=\"middle21\">
\t\t\t\t\t\t\t\t\t<div class=\"ext\"><i class=\"fa fa-plus\"></i></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"columns settler\">
\t\t\t\t\t\t\t\t<img src=\"../../images/spurn.jpg\" class=\"adjustimg\">
\t\t\t\t\t\t\t\t<div class=\"middle21\">
\t\t\t\t\t\t\t\t\t<div class=\"ext\"><i class=\"fa fa-plus\"></i></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</section>
\t\t\t\t<section id=\"bgcofordevid\"> 

\t\t\t\t\t<section id=\"devid\">
\t\t\t\t\t\t<div class=\"row providd\">
\t\t\t\t\t\t\t<div class=\"columns small-12 large-expand\">
\t\t\t\t\t\t\t\t<div class=\"somewrittendata\">
\t\t\t\t\t\t\t\t\t<h4 class=\"notunder\"><span class=\"underlined\">jus</span>t default section</h4>
\t\t\t\t\t\t\t\t\t<p class=\"aliforp\">here is some text about the video on the other side you can change this easily by editting this area. there is read more button also.<br><br>here is some text about the video on the other side you can change this easily by editting this area. there is read more button also.</p>
\t\t\t\t\t\t\t\t\t<div class=\"budev\">
\t\t\t\t\t\t\t\t\t\t<a class=\"devbut\" href=\"#\">visit me</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"columns small-12 large-expand\">
\t\t\t\t\t\t\t\t<div class=\"responsive-embed\">

\t\t\t\t\t\t\t\t\t<iframe class=\"ditvisr\" src=\"https://www.youtube.com/embed/GXmcZf8fkAM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe></div></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</section>


\t\t\t\t\t\t<section id=\"twitt\">
\t\t\t\t\t\t\t<div class=\"row netwo\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h4 class=\"twiheading\"><span class=\"underlined\">Twi</span>tter</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"twitic\">
\t\t\t\t\t\t\t\t\t<img src=\"images/tweet.jpg\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row twiro\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"alitwihead\">This is some kind of tweet which can be published here easily this is some kind of tweet which can be published here easily.This is some kind of tweet which can be published </h5>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t\t<section id=\"johnnndo\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<h4 class=\"johnhead\"><span class=\"underlined\">Wh</span>o is john doe</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row johnpara\">
\t\t\t\t\t\t\t\t<div class=\"columns small-12 large-expand\"> <p class=\"adjpl\">i am john doe. This is some kind of tweet which can be published here easily this is some kind of tweet<br><br> which can be published here easilyThis is some kind of tweet which can be published here easily <br><br> which can be published here easilyThis is some kind of tweet which can be published here easily</p></div>
\t\t\t\t\t\t\t\t<div class=\"columns small-12 large-expand\"><p class=\"adjpr\">i am john doe. This is some kind of tweet which can be published here easily this is some kind of tweet which can be published here easilyThis is some kind of tweet which can be published here easily this is some kind of</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-google\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-dribbble\"></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-flickr\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<section id=\"testimo\">
\t\t\t\t\t\t\t<div class=\"row align-justify\">
\t\t\t\t\t\t\t\t<div class=\"column small-4 rmvpddl\">
\t\t\t\t\t\t\t\t<h4 class=\"testimhead\"><span class=\"underlined\">Tes</span>timonials</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"column small-4 rmvpddr\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-right alife\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"texare\">
\t\t\t\t\t\t\t\t<h5 class=\"sorcom\">I am the one who knocks.</h5>
\t\t\t\t\t\t\t\t<h6 class=\"lashea\">-walter white</h6>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</section>




\t\t\t\t\t<section id=\"contajo\">
\t\t\t\t\t\t<div class=\"conhea row\">
\t\t\t\t\t\t\t<h4 class=\"heaicf\"><span class=\"underlined\">Con</span>tact</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"adjfor\">
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"small-12 medium-6 columns adcl\">
\t\t\t\t\t\t\t\t\t\t<label class=\"laco\">Full Name
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"small-12 medium-6 columns adctr\">
\t\t\t\t\t\t\t\t\t\t<p>This is some kind of text.This is some kind of text.This is some kind of text.This is some kind of text.This is some kind of text.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"small-12 medium-6 columns adcl\">
\t\t\t\t\t\t\t\t\t\t<label class=\"laco\">Email
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"small-12 medium-6 columns adctr\">
\t\t\t\t\t\t\t\t\t\t<p>This is some kind of text.This is some kind of text.This is some kind of text.This is some kind of text.This is some kind of text.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"small-12 columns adcl\">
\t\t\t\t\t\t\t\t\t\t<label class=\"laco\">Message
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"mesbo\">
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<a class=\"sunbt\" href=\"#\">Message</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t</body>
\t\t\t\t\t<footer>
\t\t\t\t\t<section id=\"footer\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"lifoo\">Home</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"lifoo\">Services</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"lifoo\">Portfolio</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"lifoo\">Contact</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t\t<script src=\"js/vendor/jquery.js\"></script>
\t\t\t\t<script src=\"js/vendor/what-input.js\"></script>
\t\t\t\t<script src=\"js/vendor/foundation.js\"></script>
\t\t\t\t<script src=\"js/app.js\"></script>
\t\t\t
\t\t\t</html>";
    }

    public function getTemplateName()
    {
        return "themes/portfolio_theme/templates/page/page--front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/portfolio_theme/templates/page/page--front.html.twig", "C:\\Users\\Ridhima\\Sites\\devdesktop\\Lakshays Theme\\themes\\portfolio_theme\\templates\\page\\page--front.html.twig");
    }
}
