<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c06232326dd96c316fbd64243c28e780d1d9c988d2670b4802ecbfc450e52343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06232326dd96c316fbd64243c28e780d1d9c988d2670b4802ecbfc450e52343->enter($__internal_c06232326dd96c316fbd64243c28e780d1d9c988d2670b4802ecbfc450e52343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5c93cd667c5286d15b0e5f7711579a55c0f867330105b00c2314c0a5b9fc5a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c93cd667c5286d15b0e5f7711579a55c0f867330105b00c2314c0a5b9fc5a4a->enter($__internal_5c93cd667c5286d15b0e5f7711579a55c0f867330105b00c2314c0a5b9fc5a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
  </head>
  <body>
    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("carlet.jpg"), "html", null, true);
        echo "\" alt=\"\"> <a>CARLET EMF C.F.</a>

    <a href=\"/usuarios/logout\">Salir</a>
<div class=\"menu\">
    <ul>
      <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio");
        echo "\">Inicio</a></li>
      <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\">Noticias</a></li>
      <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscripciones");
        echo "\">Inscripciones</a></li>
      <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("instalaciones");
        echo "\">Instalaciones</a></li>
      <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a></li>
      <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plantilla");
        echo "\">Plantilla</a></li>
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendario_y_horarios");
        echo "\">Calendario y horarios</a></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultados_y_clasificacion");
        echo "\">Resultados y clasificacion</a></li>
      <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rankings");
        echo "\">Rankings</a></li>
      <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mi_perfil");
        echo "\">Mi perfil</a></li>
    </ul>
</div>

";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
<footer class=\"footer-distributed\">

  <div class=\"footer-left\">

    <h3>Carlet E.M.F<span> Club de Futbol</span></h3>

    <p class=\"footer-links\">
      <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio");
        echo "\">Inicio</a>
      ·
      <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a>
      ·
      <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\">Noticias</a>
      ·
    </p>

    <p class=\"footer-company-name\"> Copyright &copy; 2017,Carlet E.M.F C.F</p>
  </div>

  <div class=\"footer-center\">

    <div>
      <i class=\"fa fa-map-marker\"></i>
      <p><span>Av. Chilly-Mazarin, 2</span> Carlet, España</p>
    </div>

    <div>
      <i class=\"fa fa-phone\"></i>
      <p>+34 662032992</p>
    </div>

    <div>
      <i class=\"fa fa-envelope\"></i>
      <p><a href=\"https://gmail.com\">carletemf@gmail.com</a></p>
    </div>

  </div>

  <div class=\"footer-right\">

    <p class=\"footer-company-about\">
      <span>Sobre nuestro club de futbol</span>
      Esta pagina esta dedicada a informar sobre nuestros equipos de futbol, calendario y resultados de cada equipo.
    </p>

    <div class=\"footer-icons\">

      <a href=\"https://facebook.com\"><img src=\"http://3.bp.blogspot.com/-MQuocq7OzfU/UiXwUY81yQI/AAAAAAAAB0Q/h6-R_R2-buI/s1600/face.png\" title=\"Dale mg a nuestra pagina de facebook\" /></a>
    </div>

  </div>

</footer>
    ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "  </body>
</html>
";
        
        $__internal_c06232326dd96c316fbd64243c28e780d1d9c988d2670b4802ecbfc450e52343->leave($__internal_c06232326dd96c316fbd64243c28e780d1d9c988d2670b4802ecbfc450e52343_prof);

        
        $__internal_5c93cd667c5286d15b0e5f7711579a55c0f867330105b00c2314c0a5b9fc5a4a->leave($__internal_5c93cd667c5286d15b0e5f7711579a55c0f867330105b00c2314c0a5b9fc5a4a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb689e1a6dc2f033819734858d488d8bce05507b5f1f0b3191fc5b6fdd47ef13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb689e1a6dc2f033819734858d488d8bce05507b5f1f0b3191fc5b6fdd47ef13->enter($__internal_fb689e1a6dc2f033819734858d488d8bce05507b5f1f0b3191fc5b6fdd47ef13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ffa7cf9d8df371d4347c35135a68bb8989a54d93b7f2797657a2f6802c950d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffa7cf9d8df371d4347c35135a68bb8989a54d93b7f2797657a2f6802c950d3->enter($__internal_9ffa7cf9d8df371d4347c35135a68bb8989a54d93b7f2797657a2f6802c950d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Bienvenido ";
        
        $__internal_9ffa7cf9d8df371d4347c35135a68bb8989a54d93b7f2797657a2f6802c950d3->leave($__internal_9ffa7cf9d8df371d4347c35135a68bb8989a54d93b7f2797657a2f6802c950d3_prof);

        
        $__internal_fb689e1a6dc2f033819734858d488d8bce05507b5f1f0b3191fc5b6fdd47ef13->leave($__internal_fb689e1a6dc2f033819734858d488d8bce05507b5f1f0b3191fc5b6fdd47ef13_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_078b742ff2b9fc61b47a7357427d8d7fd20c72426fb846788a868554855ae28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078b742ff2b9fc61b47a7357427d8d7fd20c72426fb846788a868554855ae28e->enter($__internal_078b742ff2b9fc61b47a7357427d8d7fd20c72426fb846788a868554855ae28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f19a8fdc78cad367be8bbababb719cadea4facc0a9fb1f036d2eee2927080036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19a8fdc78cad367be8bbababb719cadea4facc0a9fb1f036d2eee2927080036->enter($__internal_f19a8fdc78cad367be8bbababb719cadea4facc0a9fb1f036d2eee2927080036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_f19a8fdc78cad367be8bbababb719cadea4facc0a9fb1f036d2eee2927080036->leave($__internal_f19a8fdc78cad367be8bbababb719cadea4facc0a9fb1f036d2eee2927080036_prof);

        
        $__internal_078b742ff2b9fc61b47a7357427d8d7fd20c72426fb846788a868554855ae28e->leave($__internal_078b742ff2b9fc61b47a7357427d8d7fd20c72426fb846788a868554855ae28e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_67b113f2423351e94859f6fa3fb0a3a41ba9ec1c8c35924e1a341cebb00b2b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b113f2423351e94859f6fa3fb0a3a41ba9ec1c8c35924e1a341cebb00b2b76->enter($__internal_67b113f2423351e94859f6fa3fb0a3a41ba9ec1c8c35924e1a341cebb00b2b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4bce9eb8a8a02f3ab904b9e5845640a85ca818107a87d107dba17ba2d257c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bce9eb8a8a02f3ab904b9e5845640a85ca818107a87d107dba17ba2d257c43->enter($__internal_e4bce9eb8a8a02f3ab904b9e5845640a85ca818107a87d107dba17ba2d257c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4bce9eb8a8a02f3ab904b9e5845640a85ca818107a87d107dba17ba2d257c43->leave($__internal_e4bce9eb8a8a02f3ab904b9e5845640a85ca818107a87d107dba17ba2d257c43_prof);

        
        $__internal_67b113f2423351e94859f6fa3fb0a3a41ba9ec1c8c35924e1a341cebb00b2b76->leave($__internal_67b113f2423351e94859f6fa3fb0a3a41ba9ec1c8c35924e1a341cebb00b2b76_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0fbc84e8b0109d4353531e047100d68ed06195867892f77857b70098e09c825f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbc84e8b0109d4353531e047100d68ed06195867892f77857b70098e09c825f->enter($__internal_0fbc84e8b0109d4353531e047100d68ed06195867892f77857b70098e09c825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a91dce38e8c72b7e05919c66a0fa770e0871df519a7c61358e9b6a4ac8da3db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91dce38e8c72b7e05919c66a0fa770e0871df519a7c61358e9b6a4ac8da3db4->enter($__internal_a91dce38e8c72b7e05919c66a0fa770e0871df519a7c61358e9b6a4ac8da3db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a91dce38e8c72b7e05919c66a0fa770e0871df519a7c61358e9b6a4ac8da3db4->leave($__internal_a91dce38e8c72b7e05919c66a0fa770e0871df519a7c61358e9b6a4ac8da3db4_prof);

        
        $__internal_0fbc84e8b0109d4353531e047100d68ed06195867892f77857b70098e09c825f->leave($__internal_0fbc84e8b0109d4353531e047100d68ed06195867892f77857b70098e09c825f_prof);

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
        return array (  235 => 85,  218 => 31,  205 => 8,  196 => 7,  178 => 6,  166 => 86,  164 => 85,  120 => 44,  115 => 42,  110 => 40,  100 => 32,  98 => 31,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  47 => 13,  42 => 10,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>{% block title %} Bienvenido {% endblock %}</title>
    {% block stylesheets %}
<link  href=\"{{ asset ('/css/estilos.css') }}\" rel=\"stylesheet\">
  {% endblock %}

  </head>
  <body>
    <img src=\"{{ asset('carlet.jpg') }}\" alt=\"\"> <a>CARLET EMF C.F.</a>

    <a href=\"/usuarios/logout\">Salir</a>
<div class=\"menu\">
    <ul>
      <li><a href=\"{{ path(\"inicio\")}}\">Inicio</a></li>
      <li><a href=\"{{ path(\"noticias\")}}\">Noticias</a></li>
      <li><a href=\"{{ path(\"inscripciones\")}}\">Inscripciones</a></li>
      <li><a href=\"{{ path(\"instalaciones\")}}\">Instalaciones</a></li>
      <li><a href=\"{{ path(\"contacto\")}}\">Contacto</a></li>
      <li><a href=\"{{ path(\"plantilla\")}}\">Plantilla</a></li>
      <li><a href=\"{{ path(\"calendario_y_horarios\")}}\">Calendario y horarios</a></li>
      <li><a href=\"{{ path(\"resultados_y_clasificacion\")}}\">Resultados y clasificacion</a></li>
      <li><a href=\"{{ path(\"rankings\")}}\">Rankings</a></li>
      <li><a href=\"{{ path(\"mi_perfil\")}}\">Mi perfil</a></li>
    </ul>
</div>

{% block body %}{% endblock %}

<footer class=\"footer-distributed\">

  <div class=\"footer-left\">

    <h3>Carlet E.M.F<span> Club de Futbol</span></h3>

    <p class=\"footer-links\">
      <a href=\"{{ path(\"inicio\")}}\">Inicio</a>
      ·
      <a href=\"{{ path(\"contacto\")}}\">Contacto</a>
      ·
      <a href=\"{{ path(\"noticias\")}}\">Noticias</a>
      ·
    </p>

    <p class=\"footer-company-name\"> Copyright &copy; 2017,Carlet E.M.F C.F</p>
  </div>

  <div class=\"footer-center\">

    <div>
      <i class=\"fa fa-map-marker\"></i>
      <p><span>Av. Chilly-Mazarin, 2</span> Carlet, España</p>
    </div>

    <div>
      <i class=\"fa fa-phone\"></i>
      <p>+34 662032992</p>
    </div>

    <div>
      <i class=\"fa fa-envelope\"></i>
      <p><a href=\"https://gmail.com\">carletemf@gmail.com</a></p>
    </div>

  </div>

  <div class=\"footer-right\">

    <p class=\"footer-company-about\">
      <span>Sobre nuestro club de futbol</span>
      Esta pagina esta dedicada a informar sobre nuestros equipos de futbol, calendario y resultados de cada equipo.
    </p>

    <div class=\"footer-icons\">

      <a href=\"https://facebook.com\"><img src=\"http://3.bp.blogspot.com/-MQuocq7OzfU/UiXwUY81yQI/AAAAAAAAB0Q/h6-R_R2-buI/s1600/face.png\" title=\"Dale mg a nuestra pagina de facebook\" /></a>
    </div>

  </div>

</footer>
    {% block javascripts %}{% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app\\Resources\\views\\base.html.twig");
    }
}
