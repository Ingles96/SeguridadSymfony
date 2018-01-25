<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8b837b1131122358d9eaa77d4bc4230cdd4a61a9e580a0cafcda2218e06aa17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b837b1131122358d9eaa77d4bc4230cdd4a61a9e580a0cafcda2218e06aa17->enter($__internal_f8b837b1131122358d9eaa77d4bc4230cdd4a61a9e580a0cafcda2218e06aa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ceb5051750aec707fe3c24b56588e8807cc66e4b3c4777bab2e2b5a054a8bd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb5051750aec707fe3c24b56588e8807cc66e4b3c4777bab2e2b5a054a8bd0a->enter($__internal_ceb5051750aec707fe3c24b56588e8807cc66e4b3c4777bab2e2b5a054a8bd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8b837b1131122358d9eaa77d4bc4230cdd4a61a9e580a0cafcda2218e06aa17->leave($__internal_f8b837b1131122358d9eaa77d4bc4230cdd4a61a9e580a0cafcda2218e06aa17_prof);

        
        $__internal_ceb5051750aec707fe3c24b56588e8807cc66e4b3c4777bab2e2b5a054a8bd0a->leave($__internal_ceb5051750aec707fe3c24b56588e8807cc66e4b3c4777bab2e2b5a054a8bd0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a191764341e3ce869e381d28fdb5bc1f55c8142ab1ee6953f03b991a41f54a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a191764341e3ce869e381d28fdb5bc1f55c8142ab1ee6953f03b991a41f54a40->enter($__internal_a191764341e3ce869e381d28fdb5bc1f55c8142ab1ee6953f03b991a41f54a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_50209d1292a9bb6c1555e2f4ce40836475cb82287508b721a133525de580b4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50209d1292a9bb6c1555e2f4ce40836475cb82287508b721a133525de580b4af->enter($__internal_50209d1292a9bb6c1555e2f4ce40836475cb82287508b721a133525de580b4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50209d1292a9bb6c1555e2f4ce40836475cb82287508b721a133525de580b4af->leave($__internal_50209d1292a9bb6c1555e2f4ce40836475cb82287508b721a133525de580b4af_prof);

        
        $__internal_a191764341e3ce869e381d28fdb5bc1f55c8142ab1ee6953f03b991a41f54a40->leave($__internal_a191764341e3ce869e381d28fdb5bc1f55c8142ab1ee6953f03b991a41f54a40_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f569db00f8af5395daca1ae0cb6c1bdde324594747f4202b27427df286b5989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f569db00f8af5395daca1ae0cb6c1bdde324594747f4202b27427df286b5989->enter($__internal_8f569db00f8af5395daca1ae0cb6c1bdde324594747f4202b27427df286b5989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56e84eb73da3417c627e8c79c2262b7d3ffb61b9aa305db80b84152b11ff29b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e84eb73da3417c627e8c79c2262b7d3ffb61b9aa305db80b84152b11ff29b9->enter($__internal_56e84eb73da3417c627e8c79c2262b7d3ffb61b9aa305db80b84152b11ff29b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_56e84eb73da3417c627e8c79c2262b7d3ffb61b9aa305db80b84152b11ff29b9->leave($__internal_56e84eb73da3417c627e8c79c2262b7d3ffb61b9aa305db80b84152b11ff29b9_prof);

        
        $__internal_8f569db00f8af5395daca1ae0cb6c1bdde324594747f4202b27427df286b5989->leave($__internal_8f569db00f8af5395daca1ae0cb6c1bdde324594747f4202b27427df286b5989_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30771ea461466093a6f568791245ba587505a83f6e7ee5faffc4a2fcb45e1807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30771ea461466093a6f568791245ba587505a83f6e7ee5faffc4a2fcb45e1807->enter($__internal_30771ea461466093a6f568791245ba587505a83f6e7ee5faffc4a2fcb45e1807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48ec7eda38753cf53682eb950e72ec6c76a24c42a318e8326a2e920ba770ad47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ec7eda38753cf53682eb950e72ec6c76a24c42a318e8326a2e920ba770ad47->enter($__internal_48ec7eda38753cf53682eb950e72ec6c76a24c42a318e8326a2e920ba770ad47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48ec7eda38753cf53682eb950e72ec6c76a24c42a318e8326a2e920ba770ad47->leave($__internal_48ec7eda38753cf53682eb950e72ec6c76a24c42a318e8326a2e920ba770ad47_prof);

        
        $__internal_30771ea461466093a6f568791245ba587505a83f6e7ee5faffc4a2fcb45e1807->leave($__internal_30771ea461466093a6f568791245ba587505a83f6e7ee5faffc4a2fcb45e1807_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
