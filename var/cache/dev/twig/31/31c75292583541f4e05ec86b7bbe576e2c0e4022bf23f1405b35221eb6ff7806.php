<?php

/* EsqueletBundle:Default:inicio.html.twig */
class __TwigTemplate_0bbd41fe83654ebbdc9c7a3dfec1d0fb334fa3c136d815d0d699f426dee193fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EsqueletBundle:Default:inicio.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a12fa9f50ed9e5dfd5b3a7234c7a6a695323e3193c04dec5d64cd38afdeb7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a12fa9f50ed9e5dfd5b3a7234c7a6a695323e3193c04dec5d64cd38afdeb7d9->enter($__internal_4a12fa9f50ed9e5dfd5b3a7234c7a6a695323e3193c04dec5d64cd38afdeb7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:inicio.html.twig"));

        $__internal_66a0923162dcb5cd724b20490a269da3bd450439470963103e7e0511580aed64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a0923162dcb5cd724b20490a269da3bd450439470963103e7e0511580aed64->enter($__internal_66a0923162dcb5cd724b20490a269da3bd450439470963103e7e0511580aed64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsqueletBundle:Default:inicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a12fa9f50ed9e5dfd5b3a7234c7a6a695323e3193c04dec5d64cd38afdeb7d9->leave($__internal_4a12fa9f50ed9e5dfd5b3a7234c7a6a695323e3193c04dec5d64cd38afdeb7d9_prof);

        
        $__internal_66a0923162dcb5cd724b20490a269da3bd450439470963103e7e0511580aed64->leave($__internal_66a0923162dcb5cd724b20490a269da3bd450439470963103e7e0511580aed64_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39d82c7458f863f52da5f2cdaf112aa373210a7915df2e62523cc70b34e1f048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d82c7458f863f52da5f2cdaf112aa373210a7915df2e62523cc70b34e1f048->enter($__internal_39d82c7458f863f52da5f2cdaf112aa373210a7915df2e62523cc70b34e1f048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7efb793962b627d1c6f468db5ea7063dc622aafc725ee0e2740b6f96a474b705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efb793962b627d1c6f468db5ea7063dc622aafc725ee0e2740b6f96a474b705->enter($__internal_7efb793962b627d1c6f468db5ea7063dc622aafc725ee0e2740b6f96a474b705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["futbol"]) ? $context["futbol"] : $this->getContext($context, "futbol")));
        foreach ($context['_seq'] as $context["_key"] => $context["carlet"]) {
            // line 5
            echo "<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "nombre", array()), "html", null, true);
            echo "</li>
<li>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "apellidos", array()), "html", null, true);
            echo "</li>
<li>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "categoria", array()), "html", null, true);
            echo "</li>
<li>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "altura", array()), "html", null, true);
            echo "</li>
<li>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["carlet"], "peso", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carlet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7efb793962b627d1c6f468db5ea7063dc622aafc725ee0e2740b6f96a474b705->leave($__internal_7efb793962b627d1c6f468db5ea7063dc622aafc725ee0e2740b6f96a474b705_prof);

        
        $__internal_39d82c7458f863f52da5f2cdaf112aa373210a7915df2e62523cc70b34e1f048->leave($__internal_39d82c7458f863f52da5f2cdaf112aa373210a7915df2e62523cc70b34e1f048_prof);

    }

    public function getTemplateName()
    {
        return "EsqueletBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  66 => 8,  62 => 7,  58 => 6,  53 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
{% for carlet in futbol %}
<li>{{ carlet.nombre }}</li>
<li>{{ carlet.apellidos }}</li>
<li>{{ carlet.categoria }}</li>
<li>{{ carlet.altura }}</li>
<li>{{ carlet.peso }}</li>
{% endfor %}
{% endblock %}
", "EsqueletBundle:Default:inicio.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\src\\EsqueletBundle/Resources/views/Default/inicio.html.twig");
    }
}
