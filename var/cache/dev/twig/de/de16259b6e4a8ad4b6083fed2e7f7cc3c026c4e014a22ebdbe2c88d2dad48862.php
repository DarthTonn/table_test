<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2677f6b3bc100aa81dae6ff86223fb50c328e380e411f257bc01ef0dfee2d3da extends Twig_Template
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
        $__internal_48e9c40e7b49a012f1bfc9029c99629943f98d7c2c5f468694634f415e7ffd30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e9c40e7b49a012f1bfc9029c99629943f98d7c2c5f468694634f415e7ffd30->enter($__internal_48e9c40e7b49a012f1bfc9029c99629943f98d7c2c5f468694634f415e7ffd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_536ab901ddf4b4d13d3954b973514c5dec66f699acc396e26c6c57b8805f2d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536ab901ddf4b4d13d3954b973514c5dec66f699acc396e26c6c57b8805f2d4a->enter($__internal_536ab901ddf4b4d13d3954b973514c5dec66f699acc396e26c6c57b8805f2d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_48e9c40e7b49a012f1bfc9029c99629943f98d7c2c5f468694634f415e7ffd30->leave($__internal_48e9c40e7b49a012f1bfc9029c99629943f98d7c2c5f468694634f415e7ffd30_prof);

        
        $__internal_536ab901ddf4b4d13d3954b973514c5dec66f699acc396e26c6c57b8805f2d4a->leave($__internal_536ab901ddf4b4d13d3954b973514c5dec66f699acc396e26c6c57b8805f2d4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/table_test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
