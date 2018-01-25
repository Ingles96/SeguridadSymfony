<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59ced27cad8f80b28f674ea614c33a18c37a7780eb9fce10f5e4d19c8abe80ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ced27cad8f80b28f674ea614c33a18c37a7780eb9fce10f5e4d19c8abe80ff->enter($__internal_59ced27cad8f80b28f674ea614c33a18c37a7780eb9fce10f5e4d19c8abe80ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_13a3e74d93966f97bf1d469f36056adda682e870762860592c628c48a62156b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a3e74d93966f97bf1d469f36056adda682e870762860592c628c48a62156b2->enter($__internal_13a3e74d93966f97bf1d469f36056adda682e870762860592c628c48a62156b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_59ced27cad8f80b28f674ea614c33a18c37a7780eb9fce10f5e4d19c8abe80ff->leave($__internal_59ced27cad8f80b28f674ea614c33a18c37a7780eb9fce10f5e4d19c8abe80ff_prof);

        
        $__internal_13a3e74d93966f97bf1d469f36056adda682e870762860592c628c48a62156b2->leave($__internal_13a3e74d93966f97bf1d469f36056adda682e870762860592c628c48a62156b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b78fe54cf73f98b2b73de56f6b22e1910c1b8f9ef853cd6fb73b49ad1067b7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78fe54cf73f98b2b73de56f6b22e1910c1b8f9ef853cd6fb73b49ad1067b7b4->enter($__internal_b78fe54cf73f98b2b73de56f6b22e1910c1b8f9ef853cd6fb73b49ad1067b7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_993e386bdbcba81a31b8f102133e3f04fc9b745f094a6b8c55e6110eb57ec107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993e386bdbcba81a31b8f102133e3f04fc9b745f094a6b8c55e6110eb57ec107->enter($__internal_993e386bdbcba81a31b8f102133e3f04fc9b745f094a6b8c55e6110eb57ec107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_993e386bdbcba81a31b8f102133e3f04fc9b745f094a6b8c55e6110eb57ec107->leave($__internal_993e386bdbcba81a31b8f102133e3f04fc9b745f094a6b8c55e6110eb57ec107_prof);

        
        $__internal_b78fe54cf73f98b2b73de56f6b22e1910c1b8f9ef853cd6fb73b49ad1067b7b4->leave($__internal_b78fe54cf73f98b2b73de56f6b22e1910c1b8f9ef853cd6fb73b49ad1067b7b4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a59fdf6467f6821ccaca778625699b28a6d224b08033eb6d8c6427bbbc6190da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59fdf6467f6821ccaca778625699b28a6d224b08033eb6d8c6427bbbc6190da->enter($__internal_a59fdf6467f6821ccaca778625699b28a6d224b08033eb6d8c6427bbbc6190da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c33a44fc1a235d7568bbc8fb5876178468323f6ba268acbe45112664db87b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c33a44fc1a235d7568bbc8fb5876178468323f6ba268acbe45112664db87b19->enter($__internal_0c33a44fc1a235d7568bbc8fb5876178468323f6ba268acbe45112664db87b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0c33a44fc1a235d7568bbc8fb5876178468323f6ba268acbe45112664db87b19->leave($__internal_0c33a44fc1a235d7568bbc8fb5876178468323f6ba268acbe45112664db87b19_prof);

        
        $__internal_a59fdf6467f6821ccaca778625699b28a6d224b08033eb6d8c6427bbbc6190da->leave($__internal_a59fdf6467f6821ccaca778625699b28a6d224b08033eb6d8c6427bbbc6190da_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa466d2c8bb5d738e5431eca3007a774187488d928b46024d00058ad02da96e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa466d2c8bb5d738e5431eca3007a774187488d928b46024d00058ad02da96e7->enter($__internal_fa466d2c8bb5d738e5431eca3007a774187488d928b46024d00058ad02da96e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a06499b24a3cca9113c34f9041fb4b5c000a33c7e6e58a04a50a09c49edb9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a06499b24a3cca9113c34f9041fb4b5c000a33c7e6e58a04a50a09c49edb9ac->enter($__internal_8a06499b24a3cca9113c34f9041fb4b5c000a33c7e6e58a04a50a09c49edb9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a06499b24a3cca9113c34f9041fb4b5c000a33c7e6e58a04a50a09c49edb9ac->leave($__internal_8a06499b24a3cca9113c34f9041fb4b5c000a33c7e6e58a04a50a09c49edb9ac_prof);

        
        $__internal_fa466d2c8bb5d738e5431eca3007a774187488d928b46024d00058ad02da96e7->leave($__internal_fa466d2c8bb5d738e5431eca3007a774187488d928b46024d00058ad02da96e7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\desarrollo-servidor\\proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
