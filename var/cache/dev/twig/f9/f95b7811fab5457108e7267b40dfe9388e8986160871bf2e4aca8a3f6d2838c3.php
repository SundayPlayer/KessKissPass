<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
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
        $__internal_1fc85be84e3cbc55db28e10055a66b57f73645f766b8b9d8744d118c2107d2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc85be84e3cbc55db28e10055a66b57f73645f766b8b9d8744d118c2107d2f9->enter($__internal_1fc85be84e3cbc55db28e10055a66b57f73645f766b8b9d8744d118c2107d2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c3e0e97f9a2d77bad2af953efb05b7bd2ed55dccc10236da2a703c8306bf1975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e0e97f9a2d77bad2af953efb05b7bd2ed55dccc10236da2a703c8306bf1975->enter($__internal_c3e0e97f9a2d77bad2af953efb05b7bd2ed55dccc10236da2a703c8306bf1975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc85be84e3cbc55db28e10055a66b57f73645f766b8b9d8744d118c2107d2f9->leave($__internal_1fc85be84e3cbc55db28e10055a66b57f73645f766b8b9d8744d118c2107d2f9_prof);

        
        $__internal_c3e0e97f9a2d77bad2af953efb05b7bd2ed55dccc10236da2a703c8306bf1975->leave($__internal_c3e0e97f9a2d77bad2af953efb05b7bd2ed55dccc10236da2a703c8306bf1975_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c84326d23b3b35dedd4fb0469af4cf5ce0c06acc7c2d0e9ea4a56b53048e4eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84326d23b3b35dedd4fb0469af4cf5ce0c06acc7c2d0e9ea4a56b53048e4eb5->enter($__internal_c84326d23b3b35dedd4fb0469af4cf5ce0c06acc7c2d0e9ea4a56b53048e4eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_394265b165e62957c64bbf83334cb178ea3c00d677e0bfb3fd49695b00477472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394265b165e62957c64bbf83334cb178ea3c00d677e0bfb3fd49695b00477472->enter($__internal_394265b165e62957c64bbf83334cb178ea3c00d677e0bfb3fd49695b00477472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_394265b165e62957c64bbf83334cb178ea3c00d677e0bfb3fd49695b00477472->leave($__internal_394265b165e62957c64bbf83334cb178ea3c00d677e0bfb3fd49695b00477472_prof);

        
        $__internal_c84326d23b3b35dedd4fb0469af4cf5ce0c06acc7c2d0e9ea4a56b53048e4eb5->leave($__internal_c84326d23b3b35dedd4fb0469af4cf5ce0c06acc7c2d0e9ea4a56b53048e4eb5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca8c188e211f5b2c7b24bc013a9e37f9577d4d5992c67445b3e6ddab88e0108b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8c188e211f5b2c7b24bc013a9e37f9577d4d5992c67445b3e6ddab88e0108b->enter($__internal_ca8c188e211f5b2c7b24bc013a9e37f9577d4d5992c67445b3e6ddab88e0108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9aa05f21cadc373d7a9b4bd820266f394f95ebb396ffe5ee2ef255805b3f7989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa05f21cadc373d7a9b4bd820266f394f95ebb396ffe5ee2ef255805b3f7989->enter($__internal_9aa05f21cadc373d7a9b4bd820266f394f95ebb396ffe5ee2ef255805b3f7989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9aa05f21cadc373d7a9b4bd820266f394f95ebb396ffe5ee2ef255805b3f7989->leave($__internal_9aa05f21cadc373d7a9b4bd820266f394f95ebb396ffe5ee2ef255805b3f7989_prof);

        
        $__internal_ca8c188e211f5b2c7b24bc013a9e37f9577d4d5992c67445b3e6ddab88e0108b->leave($__internal_ca8c188e211f5b2c7b24bc013a9e37f9577d4d5992c67445b3e6ddab88e0108b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a16c8c6d96b996b65f14a80fb25e309b402e26b5ec8e4382543d15952695b9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a16c8c6d96b996b65f14a80fb25e309b402e26b5ec8e4382543d15952695b9db->enter($__internal_a16c8c6d96b996b65f14a80fb25e309b402e26b5ec8e4382543d15952695b9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc94816965ea8074fb5615e5f8fa8a0276e22fa11e47c5957e599a2150373b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc94816965ea8074fb5615e5f8fa8a0276e22fa11e47c5957e599a2150373b06->enter($__internal_dc94816965ea8074fb5615e5f8fa8a0276e22fa11e47c5957e599a2150373b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dc94816965ea8074fb5615e5f8fa8a0276e22fa11e47c5957e599a2150373b06->leave($__internal_dc94816965ea8074fb5615e5f8fa8a0276e22fa11e47c5957e599a2150373b06_prof);

        
        $__internal_a16c8c6d96b996b65f14a80fb25e309b402e26b5ec8e4382543d15952695b9db->leave($__internal_a16c8c6d96b996b65f14a80fb25e309b402e26b5ec8e4382543d15952695b9db_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/sundayplayer/programmation/KessKissPass/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
