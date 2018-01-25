<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4d6f02cc4b24c2c114cf1fb93dd619fa5bd00ae190b3684a3f947b1047cfdc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d6f02cc4b24c2c114cf1fb93dd619fa5bd00ae190b3684a3f947b1047cfdc9->enter($__internal_c4d6f02cc4b24c2c114cf1fb93dd619fa5bd00ae190b3684a3f947b1047cfdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_650b91839849d4d103d7d112359e8e0b6c34ec52491cfb2838d425182eb81011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650b91839849d4d103d7d112359e8e0b6c34ec52491cfb2838d425182eb81011->enter($__internal_650b91839849d4d103d7d112359e8e0b6c34ec52491cfb2838d425182eb81011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d6f02cc4b24c2c114cf1fb93dd619fa5bd00ae190b3684a3f947b1047cfdc9->leave($__internal_c4d6f02cc4b24c2c114cf1fb93dd619fa5bd00ae190b3684a3f947b1047cfdc9_prof);

        
        $__internal_650b91839849d4d103d7d112359e8e0b6c34ec52491cfb2838d425182eb81011->leave($__internal_650b91839849d4d103d7d112359e8e0b6c34ec52491cfb2838d425182eb81011_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b74646acf76a2575a839ad0c918570b535f5cfbba518ba9c5953e050f3ee0775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74646acf76a2575a839ad0c918570b535f5cfbba518ba9c5953e050f3ee0775->enter($__internal_b74646acf76a2575a839ad0c918570b535f5cfbba518ba9c5953e050f3ee0775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91c9cea712f214935ca16bc9893cac5195c2958a6185885e806cee7f1435bd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c9cea712f214935ca16bc9893cac5195c2958a6185885e806cee7f1435bd43->enter($__internal_91c9cea712f214935ca16bc9893cac5195c2958a6185885e806cee7f1435bd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_91c9cea712f214935ca16bc9893cac5195c2958a6185885e806cee7f1435bd43->leave($__internal_91c9cea712f214935ca16bc9893cac5195c2958a6185885e806cee7f1435bd43_prof);

        
        $__internal_b74646acf76a2575a839ad0c918570b535f5cfbba518ba9c5953e050f3ee0775->leave($__internal_b74646acf76a2575a839ad0c918570b535f5cfbba518ba9c5953e050f3ee0775_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcce3d355a03614626ce7a9e92253c101a37b7a8d74abf2a666f8e15cb55ca29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcce3d355a03614626ce7a9e92253c101a37b7a8d74abf2a666f8e15cb55ca29->enter($__internal_bcce3d355a03614626ce7a9e92253c101a37b7a8d74abf2a666f8e15cb55ca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e602591b7f041ae502a99e851b4d86ca783543ba8a9004691934f9df4ca16c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e602591b7f041ae502a99e851b4d86ca783543ba8a9004691934f9df4ca16c0->enter($__internal_6e602591b7f041ae502a99e851b4d86ca783543ba8a9004691934f9df4ca16c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e602591b7f041ae502a99e851b4d86ca783543ba8a9004691934f9df4ca16c0->leave($__internal_6e602591b7f041ae502a99e851b4d86ca783543ba8a9004691934f9df4ca16c0_prof);

        
        $__internal_bcce3d355a03614626ce7a9e92253c101a37b7a8d74abf2a666f8e15cb55ca29->leave($__internal_bcce3d355a03614626ce7a9e92253c101a37b7a8d74abf2a666f8e15cb55ca29_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b4d4568cfbe83c4656021f9766ef19d98894f02203575bebdfd96f010c86f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4d4568cfbe83c4656021f9766ef19d98894f02203575bebdfd96f010c86f1f->enter($__internal_1b4d4568cfbe83c4656021f9766ef19d98894f02203575bebdfd96f010c86f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37fd01812b71ce247bf9878aea9bfb2847acc5aadb8f2ff8b4d11aa96b29eaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fd01812b71ce247bf9878aea9bfb2847acc5aadb8f2ff8b4d11aa96b29eaeb->enter($__internal_37fd01812b71ce247bf9878aea9bfb2847acc5aadb8f2ff8b4d11aa96b29eaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_37fd01812b71ce247bf9878aea9bfb2847acc5aadb8f2ff8b4d11aa96b29eaeb->leave($__internal_37fd01812b71ce247bf9878aea9bfb2847acc5aadb8f2ff8b4d11aa96b29eaeb_prof);

        
        $__internal_1b4d4568cfbe83c4656021f9766ef19d98894f02203575bebdfd96f010c86f1f->leave($__internal_1b4d4568cfbe83c4656021f9766ef19d98894f02203575bebdfd96f010c86f1f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
