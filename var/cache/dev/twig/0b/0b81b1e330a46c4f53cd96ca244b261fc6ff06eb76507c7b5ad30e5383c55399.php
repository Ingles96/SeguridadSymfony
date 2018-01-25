<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
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
        $__internal_411844dcae093adc5ad136b8067e758f2c2fcec7ed8402e771cb58a13b3d35fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411844dcae093adc5ad136b8067e758f2c2fcec7ed8402e771cb58a13b3d35fa->enter($__internal_411844dcae093adc5ad136b8067e758f2c2fcec7ed8402e771cb58a13b3d35fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_596c28107b069e20b194eda05a2dd18efbb1de2aa6f9c898c8bfd9d682a6b649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596c28107b069e20b194eda05a2dd18efbb1de2aa6f9c898c8bfd9d682a6b649->enter($__internal_596c28107b069e20b194eda05a2dd18efbb1de2aa6f9c898c8bfd9d682a6b649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_411844dcae093adc5ad136b8067e758f2c2fcec7ed8402e771cb58a13b3d35fa->leave($__internal_411844dcae093adc5ad136b8067e758f2c2fcec7ed8402e771cb58a13b3d35fa_prof);

        
        $__internal_596c28107b069e20b194eda05a2dd18efbb1de2aa6f9c898c8bfd9d682a6b649->leave($__internal_596c28107b069e20b194eda05a2dd18efbb1de2aa6f9c898c8bfd9d682a6b649_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9ca824489bd50e6c0fa3c44b71c23d8efb5a6d677e23b9651248b7b7bccc22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ca824489bd50e6c0fa3c44b71c23d8efb5a6d677e23b9651248b7b7bccc22f->enter($__internal_a9ca824489bd50e6c0fa3c44b71c23d8efb5a6d677e23b9651248b7b7bccc22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_674c6f346d6f1edae5efd2cb64b82e3aee03e435ffadf6c3ab5c487b046e770b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674c6f346d6f1edae5efd2cb64b82e3aee03e435ffadf6c3ab5c487b046e770b->enter($__internal_674c6f346d6f1edae5efd2cb64b82e3aee03e435ffadf6c3ab5c487b046e770b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Bienvenido ";
        
        $__internal_674c6f346d6f1edae5efd2cb64b82e3aee03e435ffadf6c3ab5c487b046e770b->leave($__internal_674c6f346d6f1edae5efd2cb64b82e3aee03e435ffadf6c3ab5c487b046e770b_prof);

        
        $__internal_a9ca824489bd50e6c0fa3c44b71c23d8efb5a6d677e23b9651248b7b7bccc22f->leave($__internal_a9ca824489bd50e6c0fa3c44b71c23d8efb5a6d677e23b9651248b7b7bccc22f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f9935b7f547a98e451cd112bcc3ea526f1c88776d38ebf75dc1e5c6dc4a95e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9935b7f547a98e451cd112bcc3ea526f1c88776d38ebf75dc1e5c6dc4a95e9->enter($__internal_7f9935b7f547a98e451cd112bcc3ea526f1c88776d38ebf75dc1e5c6dc4a95e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_454c41e685fac7f34c014db4d14ea9a554451257154e18f7efafda5fdffd4956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454c41e685fac7f34c014db4d14ea9a554451257154e18f7efafda5fdffd4956->enter($__internal_454c41e685fac7f34c014db4d14ea9a554451257154e18f7efafda5fdffd4956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<link  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_454c41e685fac7f34c014db4d14ea9a554451257154e18f7efafda5fdffd4956->leave($__internal_454c41e685fac7f34c014db4d14ea9a554451257154e18f7efafda5fdffd4956_prof);

        
        $__internal_7f9935b7f547a98e451cd112bcc3ea526f1c88776d38ebf75dc1e5c6dc4a95e9->leave($__internal_7f9935b7f547a98e451cd112bcc3ea526f1c88776d38ebf75dc1e5c6dc4a95e9_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b801bf431396f30f07e575effb03342588fa82e684468696e7921afdde44afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b801bf431396f30f07e575effb03342588fa82e684468696e7921afdde44afb->enter($__internal_8b801bf431396f30f07e575effb03342588fa82e684468696e7921afdde44afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62e3f0c687c1aaef2358db4b7b42eaec96e93512f7b707fc04b5f1392115dcbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e3f0c687c1aaef2358db4b7b42eaec96e93512f7b707fc04b5f1392115dcbb->enter($__internal_62e3f0c687c1aaef2358db4b7b42eaec96e93512f7b707fc04b5f1392115dcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62e3f0c687c1aaef2358db4b7b42eaec96e93512f7b707fc04b5f1392115dcbb->leave($__internal_62e3f0c687c1aaef2358db4b7b42eaec96e93512f7b707fc04b5f1392115dcbb_prof);

        
        $__internal_8b801bf431396f30f07e575effb03342588fa82e684468696e7921afdde44afb->leave($__internal_8b801bf431396f30f07e575effb03342588fa82e684468696e7921afdde44afb_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d46fc3276fc053f58fb159ee8bd07594ea70915649696b34ce885daa62ed4f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46fc3276fc053f58fb159ee8bd07594ea70915649696b34ce885daa62ed4f00->enter($__internal_d46fc3276fc053f58fb159ee8bd07594ea70915649696b34ce885daa62ed4f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2f4e434e7e23d072bab3f7a7c8b84dce9d62a2ab076de55202670181b488ed2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4e434e7e23d072bab3f7a7c8b84dce9d62a2ab076de55202670181b488ed2b->enter($__internal_2f4e434e7e23d072bab3f7a7c8b84dce9d62a2ab076de55202670181b488ed2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2f4e434e7e23d072bab3f7a7c8b84dce9d62a2ab076de55202670181b488ed2b->leave($__internal_2f4e434e7e23d072bab3f7a7c8b84dce9d62a2ab076de55202670181b488ed2b_prof);

        
        $__internal_d46fc3276fc053f58fb159ee8bd07594ea70915649696b34ce885daa62ed4f00->leave($__internal_d46fc3276fc053f58fb159ee8bd07594ea70915649696b34ce885daa62ed4f00_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\app/Resources\\views/base.html.twig");
    }
}
