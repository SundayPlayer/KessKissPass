<?php

/* base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce28be688fb9cae08f7b14d39379c4544e54550e3d45b3d318d5dc713ec45cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce28be688fb9cae08f7b14d39379c4544e54550e3d45b3d318d5dc713ec45cbc->enter($__internal_ce28be688fb9cae08f7b14d39379c4544e54550e3d45b3d318d5dc713ec45cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ac267eed9e8d3e87709b51937bf95d88ea73d6fe84ff638373243538a2cb5b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac267eed9e8d3e87709b51937bf95d88ea73d6fe84ff638373243538a2cb5b17->enter($__internal_ac267eed9e8d3e87709b51937bf95d88ea73d6fe84ff638373243538a2cb5b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ce28be688fb9cae08f7b14d39379c4544e54550e3d45b3d318d5dc713ec45cbc->leave($__internal_ce28be688fb9cae08f7b14d39379c4544e54550e3d45b3d318d5dc713ec45cbc_prof);

        
        $__internal_ac267eed9e8d3e87709b51937bf95d88ea73d6fe84ff638373243538a2cb5b17->leave($__internal_ac267eed9e8d3e87709b51937bf95d88ea73d6fe84ff638373243538a2cb5b17_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0608cb470c4dd678fa36d0390bbf5e131e0846bbe7dab95a968200da36fc07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0608cb470c4dd678fa36d0390bbf5e131e0846bbe7dab95a968200da36fc07e->enter($__internal_b0608cb470c4dd678fa36d0390bbf5e131e0846bbe7dab95a968200da36fc07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83f84f5dda74c8d75c44be1fe0565c8f86b63a199c31d9ff00922dde02e33176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f84f5dda74c8d75c44be1fe0565c8f86b63a199c31d9ff00922dde02e33176->enter($__internal_83f84f5dda74c8d75c44be1fe0565c8f86b63a199c31d9ff00922dde02e33176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_83f84f5dda74c8d75c44be1fe0565c8f86b63a199c31d9ff00922dde02e33176->leave($__internal_83f84f5dda74c8d75c44be1fe0565c8f86b63a199c31d9ff00922dde02e33176_prof);

        
        $__internal_b0608cb470c4dd678fa36d0390bbf5e131e0846bbe7dab95a968200da36fc07e->leave($__internal_b0608cb470c4dd678fa36d0390bbf5e131e0846bbe7dab95a968200da36fc07e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7e06db4adf2c0d2123279feed48b5f580483863cc0f2767db2a95d1aa6dc60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e06db4adf2c0d2123279feed48b5f580483863cc0f2767db2a95d1aa6dc60e->enter($__internal_e7e06db4adf2c0d2123279feed48b5f580483863cc0f2767db2a95d1aa6dc60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d6ee5d45f9f4dc34eb21b00cc668826708d2655926ece801f46cf7d3ac68e675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ee5d45f9f4dc34eb21b00cc668826708d2655926ece801f46cf7d3ac68e675->enter($__internal_d6ee5d45f9f4dc34eb21b00cc668826708d2655926ece801f46cf7d3ac68e675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d6ee5d45f9f4dc34eb21b00cc668826708d2655926ece801f46cf7d3ac68e675->leave($__internal_d6ee5d45f9f4dc34eb21b00cc668826708d2655926ece801f46cf7d3ac68e675_prof);

        
        $__internal_e7e06db4adf2c0d2123279feed48b5f580483863cc0f2767db2a95d1aa6dc60e->leave($__internal_e7e06db4adf2c0d2123279feed48b5f580483863cc0f2767db2a95d1aa6dc60e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c29127f4440bad9c749f2bbfa213392ea6b2d1321d5839c9aa228ee20dd34d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29127f4440bad9c749f2bbfa213392ea6b2d1321d5839c9aa228ee20dd34d4a->enter($__internal_c29127f4440bad9c749f2bbfa213392ea6b2d1321d5839c9aa228ee20dd34d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6c79302f6769a3e144f7c227d8308206ee059299a3544e0c6228add409625f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c79302f6769a3e144f7c227d8308206ee059299a3544e0c6228add409625f5->enter($__internal_a6c79302f6769a3e144f7c227d8308206ee059299a3544e0c6228add409625f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a6c79302f6769a3e144f7c227d8308206ee059299a3544e0c6228add409625f5->leave($__internal_a6c79302f6769a3e144f7c227d8308206ee059299a3544e0c6228add409625f5_prof);

        
        $__internal_c29127f4440bad9c749f2bbfa213392ea6b2d1321d5839c9aa228ee20dd34d4a->leave($__internal_c29127f4440bad9c749f2bbfa213392ea6b2d1321d5839c9aa228ee20dd34d4a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cccdcb99eece17605957ee0f3dae47529277f4293227054a1812b144427e0940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccdcb99eece17605957ee0f3dae47529277f4293227054a1812b144427e0940->enter($__internal_cccdcb99eece17605957ee0f3dae47529277f4293227054a1812b144427e0940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83d077d90d0b41de8fcc21251c3456278d3a6e40ff0f3c2ff37b775319f2a19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d077d90d0b41de8fcc21251c3456278d3a6e40ff0f3c2ff37b775319f2a19f->enter($__internal_83d077d90d0b41de8fcc21251c3456278d3a6e40ff0f3c2ff37b775319f2a19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83d077d90d0b41de8fcc21251c3456278d3a6e40ff0f3c2ff37b775319f2a19f->leave($__internal_83d077d90d0b41de8fcc21251c3456278d3a6e40ff0f3c2ff37b775319f2a19f_prof);

        
        $__internal_cccdcb99eece17605957ee0f3dae47529277f4293227054a1812b144427e0940->leave($__internal_cccdcb99eece17605957ee0f3dae47529277f4293227054a1812b144427e0940_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/sundayplayer/programmation/KessKissPass/app/Resources/views/base.html.twig");
    }
}
