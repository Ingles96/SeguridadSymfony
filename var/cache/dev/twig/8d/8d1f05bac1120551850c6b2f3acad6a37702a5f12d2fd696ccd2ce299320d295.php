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
        $__internal_706f89b731ae9b8f2bd838ffbb0f4de86a530c1884999620bc200ab4844e72b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706f89b731ae9b8f2bd838ffbb0f4de86a530c1884999620bc200ab4844e72b3->enter($__internal_706f89b731ae9b8f2bd838ffbb0f4de86a530c1884999620bc200ab4844e72b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f8b442f811c822bc8b3f71088efd6e5c01d9307f033a1b2bcdbd8b4be57a5b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b442f811c822bc8b3f71088efd6e5c01d9307f033a1b2bcdbd8b4be57a5b2a->enter($__internal_f8b442f811c822bc8b3f71088efd6e5c01d9307f033a1b2bcdbd8b4be57a5b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
<div class=\"menu\">
    <ul>
      <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio");
        echo "\">Inicio</a></li>
      <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("noticias");
        echo "\">Noticias</a></li>
      <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscripciones");
        echo "\">Inscripciones</a></li>
      <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("instalaciones");
        echo "\">Instalaciones</a></li>
      <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a></li>
      <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plantilla");
        echo "\">Plantilla</a></li>
      <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendario_y_horarios");
        echo "\">Calendario y horarios</a></li>
      <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultados_y_clasificacion");
        echo "\">Resultados y clasificacion</a></li>
      <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rankings");
        echo "\">Rankings</a></li>
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mi_perfil");
        echo "\">Mi perfil</a></li>
    </ul>
</div>

";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
<footer class=\"footer-distributed\">

  <div class=\"footer-left\">

    <h3>Carlet E.M.F<span> Club de Futbol</span></h3>

    <p class=\"footer-links\">
      <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inicio");
        echo "\">Inicio</a>
      ·
      <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a>
      ·
      <a href=\"";
        // line 42
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
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "  </body>
</html>
";
        
        $__internal_706f89b731ae9b8f2bd838ffbb0f4de86a530c1884999620bc200ab4844e72b3->leave($__internal_706f89b731ae9b8f2bd838ffbb0f4de86a530c1884999620bc200ab4844e72b3_prof);

        
        $__internal_f8b442f811c822bc8b3f71088efd6e5c01d9307f033a1b2bcdbd8b4be57a5b2a->leave($__internal_f8b442f811c822bc8b3f71088efd6e5c01d9307f033a1b2bcdbd8b4be57a5b2a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cca855d528bc501f62b4fe4fa511775d1ecc3e8a223e4e513081240f2c4d5875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca855d528bc501f62b4fe4fa511775d1ecc3e8a223e4e513081240f2c4d5875->enter($__internal_cca855d528bc501f62b4fe4fa511775d1ecc3e8a223e4e513081240f2c4d5875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0435147d7fdb5fcf43e3928106cf6a14177f8057d25050cf82ce7c53a304b0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0435147d7fdb5fcf43e3928106cf6a14177f8057d25050cf82ce7c53a304b0a1->enter($__internal_0435147d7fdb5fcf43e3928106cf6a14177f8057d25050cf82ce7c53a304b0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Bienvenido ";
        
        $__internal_0435147d7fdb5fcf43e3928106cf6a14177f8057d25050cf82ce7c53a304b0a1->leave($__internal_0435147d7fdb5fcf43e3928106cf6a14177f8057d25050cf82ce7c53a304b0a1_prof);

        
        $__internal_cca855d528bc501f62b4fe4fa511775d1ecc3e8a223e4e513081240f2c4d5875->leave($__internal_cca855d528bc501f62b4fe4fa511775d1ecc3e8a223e4e513081240f2c4d5875_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5e6cd3919fd92ef842631105fe310b95f9207849cbbd93a57624fedf1923e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e6cd3919fd92ef842631105fe310b95f9207849cbbd93a57624fedf1923e8c->enter($__internal_d5e6cd3919fd92ef842631105fe310b95f9207849cbbd93a57624fedf1923e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cece29992b487694bab05556fc86aac859a59364539262466686b32c835e0580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cece29992b487694bab05556fc86aac859a59364539262466686b32c835e0580->enter($__internal_cece29992b487694bab05556fc86aac859a59364539262466686b32c835e0580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_cece29992b487694bab05556fc86aac859a59364539262466686b32c835e0580->leave($__internal_cece29992b487694bab05556fc86aac859a59364539262466686b32c835e0580_prof);

        
        $__internal_d5e6cd3919fd92ef842631105fe310b95f9207849cbbd93a57624fedf1923e8c->leave($__internal_d5e6cd3919fd92ef842631105fe310b95f9207849cbbd93a57624fedf1923e8c_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ac11ab1393b477366c7eeaba19185500ab23b7457fce82ea6a3678b4407c209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac11ab1393b477366c7eeaba19185500ab23b7457fce82ea6a3678b4407c209->enter($__internal_4ac11ab1393b477366c7eeaba19185500ab23b7457fce82ea6a3678b4407c209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e49eb97955b01a86c212fe3e0b6e1f13409e819e86f3fb2f14d57ea272b6b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e49eb97955b01a86c212fe3e0b6e1f13409e819e86f3fb2f14d57ea272b6b40->enter($__internal_4e49eb97955b01a86c212fe3e0b6e1f13409e819e86f3fb2f14d57ea272b6b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e49eb97955b01a86c212fe3e0b6e1f13409e819e86f3fb2f14d57ea272b6b40->leave($__internal_4e49eb97955b01a86c212fe3e0b6e1f13409e819e86f3fb2f14d57ea272b6b40_prof);

        
        $__internal_4ac11ab1393b477366c7eeaba19185500ab23b7457fce82ea6a3678b4407c209->leave($__internal_4ac11ab1393b477366c7eeaba19185500ab23b7457fce82ea6a3678b4407c209_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21e9a4eacc20f94aad43b44fe9005575889c02eec0196b3a7b40b6415fbf041d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e9a4eacc20f94aad43b44fe9005575889c02eec0196b3a7b40b6415fbf041d->enter($__internal_21e9a4eacc20f94aad43b44fe9005575889c02eec0196b3a7b40b6415fbf041d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1c693c2d18f5d43dcf2cd429e0848b27f2e6ad42f4a274fd7b0b3a7275a11c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c693c2d18f5d43dcf2cd429e0848b27f2e6ad42f4a274fd7b0b3a7275a11c68->enter($__internal_1c693c2d18f5d43dcf2cd429e0848b27f2e6ad42f4a274fd7b0b3a7275a11c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1c693c2d18f5d43dcf2cd429e0848b27f2e6ad42f4a274fd7b0b3a7275a11c68->leave($__internal_1c693c2d18f5d43dcf2cd429e0848b27f2e6ad42f4a274fd7b0b3a7275a11c68_prof);

        
        $__internal_21e9a4eacc20f94aad43b44fe9005575889c02eec0196b3a7b40b6415fbf041d->leave($__internal_21e9a4eacc20f94aad43b44fe9005575889c02eec0196b3a7b40b6415fbf041d_prof);

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
        return array (  233 => 83,  216 => 29,  203 => 8,  194 => 7,  176 => 6,  164 => 84,  162 => 83,  118 => 42,  113 => 40,  108 => 38,  98 => 30,  96 => 29,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  47 => 13,  42 => 10,  40 => 7,  36 => 6,  29 => 1,);
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
