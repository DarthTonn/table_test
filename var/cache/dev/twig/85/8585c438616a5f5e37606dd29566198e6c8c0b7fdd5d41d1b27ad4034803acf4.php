<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eaffccbf12f0807b0fcd6befc6240299a3eae36aa7a6618a61fa7f8ea911be84 extends Twig_Template
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
        $__internal_e22532ea3d0de54781f00349e4d3097acd7eb86e38099a117b5ec98e28abe004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22532ea3d0de54781f00349e4d3097acd7eb86e38099a117b5ec98e28abe004->enter($__internal_e22532ea3d0de54781f00349e4d3097acd7eb86e38099a117b5ec98e28abe004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cc50a287dcf9bcbf88e93dcc30d0773486a3ef8066ecccb6162c54f988f004cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc50a287dcf9bcbf88e93dcc30d0773486a3ef8066ecccb6162c54f988f004cf->enter($__internal_cc50a287dcf9bcbf88e93dcc30d0773486a3ef8066ecccb6162c54f988f004cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e22532ea3d0de54781f00349e4d3097acd7eb86e38099a117b5ec98e28abe004->leave($__internal_e22532ea3d0de54781f00349e4d3097acd7eb86e38099a117b5ec98e28abe004_prof);

        
        $__internal_cc50a287dcf9bcbf88e93dcc30d0773486a3ef8066ecccb6162c54f988f004cf->leave($__internal_cc50a287dcf9bcbf88e93dcc30d0773486a3ef8066ecccb6162c54f988f004cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52b6b65b8931befba30e58f20961b723768e921e180ab3d66a37e87f2023f468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b6b65b8931befba30e58f20961b723768e921e180ab3d66a37e87f2023f468->enter($__internal_52b6b65b8931befba30e58f20961b723768e921e180ab3d66a37e87f2023f468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fbc3a4e5d8b12ab7ccee227b1c12a29694a41bf5ff11873c693c438c37da11df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc3a4e5d8b12ab7ccee227b1c12a29694a41bf5ff11873c693c438c37da11df->enter($__internal_fbc3a4e5d8b12ab7ccee227b1c12a29694a41bf5ff11873c693c438c37da11df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fbc3a4e5d8b12ab7ccee227b1c12a29694a41bf5ff11873c693c438c37da11df->leave($__internal_fbc3a4e5d8b12ab7ccee227b1c12a29694a41bf5ff11873c693c438c37da11df_prof);

        
        $__internal_52b6b65b8931befba30e58f20961b723768e921e180ab3d66a37e87f2023f468->leave($__internal_52b6b65b8931befba30e58f20961b723768e921e180ab3d66a37e87f2023f468_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3724b4db23d0bd733e3ddac7624430d86400d2537b821caa2a1e5540dd84554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3724b4db23d0bd733e3ddac7624430d86400d2537b821caa2a1e5540dd84554->enter($__internal_d3724b4db23d0bd733e3ddac7624430d86400d2537b821caa2a1e5540dd84554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb3267f3976e69cf1f0ddead8ab185283b3074b32698b15a6b826208e326fbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3267f3976e69cf1f0ddead8ab185283b3074b32698b15a6b826208e326fbf2->enter($__internal_fb3267f3976e69cf1f0ddead8ab185283b3074b32698b15a6b826208e326fbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fb3267f3976e69cf1f0ddead8ab185283b3074b32698b15a6b826208e326fbf2->leave($__internal_fb3267f3976e69cf1f0ddead8ab185283b3074b32698b15a6b826208e326fbf2_prof);

        
        $__internal_d3724b4db23d0bd733e3ddac7624430d86400d2537b821caa2a1e5540dd84554->leave($__internal_d3724b4db23d0bd733e3ddac7624430d86400d2537b821caa2a1e5540dd84554_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e0f16ec10dc732b367e9df92b8817f51ec3d4ea095911f47eeef7f09b3b594c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0f16ec10dc732b367e9df92b8817f51ec3d4ea095911f47eeef7f09b3b594c->enter($__internal_6e0f16ec10dc732b367e9df92b8817f51ec3d4ea095911f47eeef7f09b3b594c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14d1553e08c55c527a83b682c876e27b306b21b02b44854147ad46de154756ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d1553e08c55c527a83b682c876e27b306b21b02b44854147ad46de154756ff->enter($__internal_14d1553e08c55c527a83b682c876e27b306b21b02b44854147ad46de154756ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_14d1553e08c55c527a83b682c876e27b306b21b02b44854147ad46de154756ff->leave($__internal_14d1553e08c55c527a83b682c876e27b306b21b02b44854147ad46de154756ff_prof);

        
        $__internal_6e0f16ec10dc732b367e9df92b8817f51ec3d4ea095911f47eeef7f09b3b594c->leave($__internal_6e0f16ec10dc732b367e9df92b8817f51ec3d4ea095911f47eeef7f09b3b594c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/table_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
