<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
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
        $__internal_ff2e96d615b31123965acbaf30bfd6bb8b5d38a16adac0e0584d6f4c5c75968d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2e96d615b31123965acbaf30bfd6bb8b5d38a16adac0e0584d6f4c5c75968d->enter($__internal_ff2e96d615b31123965acbaf30bfd6bb8b5d38a16adac0e0584d6f4c5c75968d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dbaa28809db7060f48f5f4613c35f0021fa24096391fe7e9d816c6f3cd0bc2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbaa28809db7060f48f5f4613c35f0021fa24096391fe7e9d816c6f3cd0bc2df->enter($__internal_dbaa28809db7060f48f5f4613c35f0021fa24096391fe7e9d816c6f3cd0bc2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff2e96d615b31123965acbaf30bfd6bb8b5d38a16adac0e0584d6f4c5c75968d->leave($__internal_ff2e96d615b31123965acbaf30bfd6bb8b5d38a16adac0e0584d6f4c5c75968d_prof);

        
        $__internal_dbaa28809db7060f48f5f4613c35f0021fa24096391fe7e9d816c6f3cd0bc2df->leave($__internal_dbaa28809db7060f48f5f4613c35f0021fa24096391fe7e9d816c6f3cd0bc2df_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5777260e6894320862516bb2a46c534719074d42dda3f5d475afee20fe77f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5777260e6894320862516bb2a46c534719074d42dda3f5d475afee20fe77f63->enter($__internal_e5777260e6894320862516bb2a46c534719074d42dda3f5d475afee20fe77f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a0337e113f6afbce0e368d095f3d9f3f23d07b67356612ba618b7c384b0840b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0337e113f6afbce0e368d095f3d9f3f23d07b67356612ba618b7c384b0840b8->enter($__internal_a0337e113f6afbce0e368d095f3d9f3f23d07b67356612ba618b7c384b0840b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a0337e113f6afbce0e368d095f3d9f3f23d07b67356612ba618b7c384b0840b8->leave($__internal_a0337e113f6afbce0e368d095f3d9f3f23d07b67356612ba618b7c384b0840b8_prof);

        
        $__internal_e5777260e6894320862516bb2a46c534719074d42dda3f5d475afee20fe77f63->leave($__internal_e5777260e6894320862516bb2a46c534719074d42dda3f5d475afee20fe77f63_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ccd2265fe7c5b15befe6a76abbea553ca11d672c8f39e7b31ec052dfcbd05f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccd2265fe7c5b15befe6a76abbea553ca11d672c8f39e7b31ec052dfcbd05f7->enter($__internal_8ccd2265fe7c5b15befe6a76abbea553ca11d672c8f39e7b31ec052dfcbd05f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2872cbe59b0faeea983e19b78838d376216edbf94d69b9fb3c20103dcb29f0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2872cbe59b0faeea983e19b78838d376216edbf94d69b9fb3c20103dcb29f0d6->enter($__internal_2872cbe59b0faeea983e19b78838d376216edbf94d69b9fb3c20103dcb29f0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2872cbe59b0faeea983e19b78838d376216edbf94d69b9fb3c20103dcb29f0d6->leave($__internal_2872cbe59b0faeea983e19b78838d376216edbf94d69b9fb3c20103dcb29f0d6_prof);

        
        $__internal_8ccd2265fe7c5b15befe6a76abbea553ca11d672c8f39e7b31ec052dfcbd05f7->leave($__internal_8ccd2265fe7c5b15befe6a76abbea553ca11d672c8f39e7b31ec052dfcbd05f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63c24b8e7a002e66c9e908516266489c804f86a264a702b9add946bfc4132bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c24b8e7a002e66c9e908516266489c804f86a264a702b9add946bfc4132bab->enter($__internal_63c24b8e7a002e66c9e908516266489c804f86a264a702b9add946bfc4132bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_be104398842213dd675715403b746d5c121840bac675b5bb41cf5033650c339e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be104398842213dd675715403b746d5c121840bac675b5bb41cf5033650c339e->enter($__internal_be104398842213dd675715403b746d5c121840bac675b5bb41cf5033650c339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_be104398842213dd675715403b746d5c121840bac675b5bb41cf5033650c339e->leave($__internal_be104398842213dd675715403b746d5c121840bac675b5bb41cf5033650c339e_prof);

        
        $__internal_63c24b8e7a002e66c9e908516266489c804f86a264a702b9add946bfc4132bab->leave($__internal_63c24b8e7a002e66c9e908516266489c804f86a264a702b9add946bfc4132bab_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/sundayplayer/programmation/KessKissPass/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
