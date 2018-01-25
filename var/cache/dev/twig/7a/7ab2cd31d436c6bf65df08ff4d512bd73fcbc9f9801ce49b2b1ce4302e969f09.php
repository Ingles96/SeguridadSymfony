<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a973824a6a235a180a52b6c85dc1044825a58e4c902c7e7736f6e01fb58117b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a973824a6a235a180a52b6c85dc1044825a58e4c902c7e7736f6e01fb58117b9->enter($__internal_a973824a6a235a180a52b6c85dc1044825a58e4c902c7e7736f6e01fb58117b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d0202e051bdf0595ddb30615ccf1595bd807da7cb24ac918c609570aa679e5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0202e051bdf0595ddb30615ccf1595bd807da7cb24ac918c609570aa679e5c9->enter($__internal_d0202e051bdf0595ddb30615ccf1595bd807da7cb24ac918c609570aa679e5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a973824a6a235a180a52b6c85dc1044825a58e4c902c7e7736f6e01fb58117b9->leave($__internal_a973824a6a235a180a52b6c85dc1044825a58e4c902c7e7736f6e01fb58117b9_prof);

        
        $__internal_d0202e051bdf0595ddb30615ccf1595bd807da7cb24ac918c609570aa679e5c9->leave($__internal_d0202e051bdf0595ddb30615ccf1595bd807da7cb24ac918c609570aa679e5c9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7aa9e5e389a48f6239754aba6d756ad31173cc765008392e315faa3c8029c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7aa9e5e389a48f6239754aba6d756ad31173cc765008392e315faa3c8029c06->enter($__internal_b7aa9e5e389a48f6239754aba6d756ad31173cc765008392e315faa3c8029c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_645fb6a89f5a304e08f7db88fdc012d37c6b0c593a54bedaa9a5e39d67b3eef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645fb6a89f5a304e08f7db88fdc012d37c6b0c593a54bedaa9a5e39d67b3eef9->enter($__internal_645fb6a89f5a304e08f7db88fdc012d37c6b0c593a54bedaa9a5e39d67b3eef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_645fb6a89f5a304e08f7db88fdc012d37c6b0c593a54bedaa9a5e39d67b3eef9->leave($__internal_645fb6a89f5a304e08f7db88fdc012d37c6b0c593a54bedaa9a5e39d67b3eef9_prof);

        
        $__internal_b7aa9e5e389a48f6239754aba6d756ad31173cc765008392e315faa3c8029c06->leave($__internal_b7aa9e5e389a48f6239754aba6d756ad31173cc765008392e315faa3c8029c06_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8fcdc96a92448ccdfd6ca10e49860929454b0fa47fb2873c6eaf83677365743a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcdc96a92448ccdfd6ca10e49860929454b0fa47fb2873c6eaf83677365743a->enter($__internal_8fcdc96a92448ccdfd6ca10e49860929454b0fa47fb2873c6eaf83677365743a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e766c595e01cfd604a9655c65617948430b91f6cc9b3fff5337498f28f6c6498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e766c595e01cfd604a9655c65617948430b91f6cc9b3fff5337498f28f6c6498->enter($__internal_e766c595e01cfd604a9655c65617948430b91f6cc9b3fff5337498f28f6c6498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e766c595e01cfd604a9655c65617948430b91f6cc9b3fff5337498f28f6c6498->leave($__internal_e766c595e01cfd604a9655c65617948430b91f6cc9b3fff5337498f28f6c6498_prof);

        
        $__internal_8fcdc96a92448ccdfd6ca10e49860929454b0fa47fb2873c6eaf83677365743a->leave($__internal_8fcdc96a92448ccdfd6ca10e49860929454b0fa47fb2873c6eaf83677365743a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1705213697fe4f1b0b54777c19d2b7909449aee8771f54e9bf8528160554bd0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1705213697fe4f1b0b54777c19d2b7909449aee8771f54e9bf8528160554bd0e->enter($__internal_1705213697fe4f1b0b54777c19d2b7909449aee8771f54e9bf8528160554bd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0075485ea0ac4ab8e8e14d27bea7ec3ed0d0e9b487b32ca386a01126d5c4ac5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0075485ea0ac4ab8e8e14d27bea7ec3ed0d0e9b487b32ca386a01126d5c4ac5c->enter($__internal_0075485ea0ac4ab8e8e14d27bea7ec3ed0d0e9b487b32ca386a01126d5c4ac5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0075485ea0ac4ab8e8e14d27bea7ec3ed0d0e9b487b32ca386a01126d5c4ac5c->leave($__internal_0075485ea0ac4ab8e8e14d27bea7ec3ed0d0e9b487b32ca386a01126d5c4ac5c_prof);

        
        $__internal_1705213697fe4f1b0b54777c19d2b7909449aee8771f54e9bf8528160554bd0e->leave($__internal_1705213697fe4f1b0b54777c19d2b7909449aee8771f54e9bf8528160554bd0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
