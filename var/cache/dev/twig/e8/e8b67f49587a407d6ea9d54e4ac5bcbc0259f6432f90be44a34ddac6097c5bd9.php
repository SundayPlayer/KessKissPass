<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_04b0d5b68b2e7cad0dd94f8a266e92ef18dc421a23faaba9704df6a5f3ed9acd extends Twig_Template
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
        $__internal_1521e5b56c2b31c58558172f3400ba0d87bbe60ee1a2fa4f7d7732263aab2738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1521e5b56c2b31c58558172f3400ba0d87bbe60ee1a2fa4f7d7732263aab2738->enter($__internal_1521e5b56c2b31c58558172f3400ba0d87bbe60ee1a2fa4f7d7732263aab2738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c9e74b509562b4f9d43ba95a29c32d1a82be07d16f5244fb2067bcb833e9f75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e74b509562b4f9d43ba95a29c32d1a82be07d16f5244fb2067bcb833e9f75a->enter($__internal_c9e74b509562b4f9d43ba95a29c32d1a82be07d16f5244fb2067bcb833e9f75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1521e5b56c2b31c58558172f3400ba0d87bbe60ee1a2fa4f7d7732263aab2738->leave($__internal_1521e5b56c2b31c58558172f3400ba0d87bbe60ee1a2fa4f7d7732263aab2738_prof);

        
        $__internal_c9e74b509562b4f9d43ba95a29c32d1a82be07d16f5244fb2067bcb833e9f75a->leave($__internal_c9e74b509562b4f9d43ba95a29c32d1a82be07d16f5244fb2067bcb833e9f75a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8c135a5149baf808d75abb104468e9ba148a75b56d8be0e81aee92b67e56799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c135a5149baf808d75abb104468e9ba148a75b56d8be0e81aee92b67e56799->enter($__internal_d8c135a5149baf808d75abb104468e9ba148a75b56d8be0e81aee92b67e56799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_09980e9d6c351ec0be3bede8eecd510c25266683757e9fa8db4df0852d8a2e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09980e9d6c351ec0be3bede8eecd510c25266683757e9fa8db4df0852d8a2e8d->enter($__internal_09980e9d6c351ec0be3bede8eecd510c25266683757e9fa8db4df0852d8a2e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_09980e9d6c351ec0be3bede8eecd510c25266683757e9fa8db4df0852d8a2e8d->leave($__internal_09980e9d6c351ec0be3bede8eecd510c25266683757e9fa8db4df0852d8a2e8d_prof);

        
        $__internal_d8c135a5149baf808d75abb104468e9ba148a75b56d8be0e81aee92b67e56799->leave($__internal_d8c135a5149baf808d75abb104468e9ba148a75b56d8be0e81aee92b67e56799_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0e840a1991badb6333efbfaa42cd3a6ed41870bc69412fd5926fa65d17b4b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e840a1991badb6333efbfaa42cd3a6ed41870bc69412fd5926fa65d17b4b6a->enter($__internal_d0e840a1991badb6333efbfaa42cd3a6ed41870bc69412fd5926fa65d17b4b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a506fa0869e7c740e850f4851bd799f0d2ca92691588931b417b2b3afdfc28e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a506fa0869e7c740e850f4851bd799f0d2ca92691588931b417b2b3afdfc28e3->enter($__internal_a506fa0869e7c740e850f4851bd799f0d2ca92691588931b417b2b3afdfc28e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a506fa0869e7c740e850f4851bd799f0d2ca92691588931b417b2b3afdfc28e3->leave($__internal_a506fa0869e7c740e850f4851bd799f0d2ca92691588931b417b2b3afdfc28e3_prof);

        
        $__internal_d0e840a1991badb6333efbfaa42cd3a6ed41870bc69412fd5926fa65d17b4b6a->leave($__internal_d0e840a1991badb6333efbfaa42cd3a6ed41870bc69412fd5926fa65d17b4b6a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_91ef71e222a6a1d895a5832d3bdc2b2e5794787ac910cf0faab04bae3ee7a591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ef71e222a6a1d895a5832d3bdc2b2e5794787ac910cf0faab04bae3ee7a591->enter($__internal_91ef71e222a6a1d895a5832d3bdc2b2e5794787ac910cf0faab04bae3ee7a591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b89550e4ce89d1d15e4618043d4eb8183cf6c6d26702eb3e1f616606f79e107a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89550e4ce89d1d15e4618043d4eb8183cf6c6d26702eb3e1f616606f79e107a->enter($__internal_b89550e4ce89d1d15e4618043d4eb8183cf6c6d26702eb3e1f616606f79e107a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b89550e4ce89d1d15e4618043d4eb8183cf6c6d26702eb3e1f616606f79e107a->leave($__internal_b89550e4ce89d1d15e4618043d4eb8183cf6c6d26702eb3e1f616606f79e107a_prof);

        
        $__internal_91ef71e222a6a1d895a5832d3bdc2b2e5794787ac910cf0faab04bae3ee7a591->leave($__internal_91ef71e222a6a1d895a5832d3bdc2b2e5794787ac910cf0faab04bae3ee7a591_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/sundayplayer/programmation/KessKissPass/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
