<?php

/* base.html.twig */
class __TwigTemplate_c86fcf353b5512a321f8496c99c417d624f4303e83ec6f21bfce7a08428c4f46 extends Twig_Template
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
        $__internal_d20893e1c5f9584a207326c5b2e4fd72569c6213331fde7acc47424231730961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20893e1c5f9584a207326c5b2e4fd72569c6213331fde7acc47424231730961->enter($__internal_d20893e1c5f9584a207326c5b2e4fd72569c6213331fde7acc47424231730961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cf62183540abf59bc3d3ea50c2fd62042371c95339e98d911ffdc0cf515a12df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf62183540abf59bc3d3ea50c2fd62042371c95339e98d911ffdc0cf515a12df->enter($__internal_cf62183540abf59bc3d3ea50c2fd62042371c95339e98d911ffdc0cf515a12df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d20893e1c5f9584a207326c5b2e4fd72569c6213331fde7acc47424231730961->leave($__internal_d20893e1c5f9584a207326c5b2e4fd72569c6213331fde7acc47424231730961_prof);

        
        $__internal_cf62183540abf59bc3d3ea50c2fd62042371c95339e98d911ffdc0cf515a12df->leave($__internal_cf62183540abf59bc3d3ea50c2fd62042371c95339e98d911ffdc0cf515a12df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a896ac284d6d33fadec49c9d465c7000f7d70d236f8899b0321f318fbe0e03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a896ac284d6d33fadec49c9d465c7000f7d70d236f8899b0321f318fbe0e03d->enter($__internal_5a896ac284d6d33fadec49c9d465c7000f7d70d236f8899b0321f318fbe0e03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2da188634043bc3975023a051cc4a4859c363cb902e0746e84ee7ee2b3708ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2da188634043bc3975023a051cc4a4859c363cb902e0746e84ee7ee2b3708ee->enter($__internal_f2da188634043bc3975023a051cc4a4859c363cb902e0746e84ee7ee2b3708ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2da188634043bc3975023a051cc4a4859c363cb902e0746e84ee7ee2b3708ee->leave($__internal_f2da188634043bc3975023a051cc4a4859c363cb902e0746e84ee7ee2b3708ee_prof);

        
        $__internal_5a896ac284d6d33fadec49c9d465c7000f7d70d236f8899b0321f318fbe0e03d->leave($__internal_5a896ac284d6d33fadec49c9d465c7000f7d70d236f8899b0321f318fbe0e03d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b83a82fecb8f222c4954042060760fa54f065aea0a94cec03b76114c70e2a6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83a82fecb8f222c4954042060760fa54f065aea0a94cec03b76114c70e2a6e4->enter($__internal_b83a82fecb8f222c4954042060760fa54f065aea0a94cec03b76114c70e2a6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5f420d99041c9d486a5c9474b34f3912ac173d49f365dbaf68392cd0edfef997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f420d99041c9d486a5c9474b34f3912ac173d49f365dbaf68392cd0edfef997->enter($__internal_5f420d99041c9d486a5c9474b34f3912ac173d49f365dbaf68392cd0edfef997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5f420d99041c9d486a5c9474b34f3912ac173d49f365dbaf68392cd0edfef997->leave($__internal_5f420d99041c9d486a5c9474b34f3912ac173d49f365dbaf68392cd0edfef997_prof);

        
        $__internal_b83a82fecb8f222c4954042060760fa54f065aea0a94cec03b76114c70e2a6e4->leave($__internal_b83a82fecb8f222c4954042060760fa54f065aea0a94cec03b76114c70e2a6e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_805d0a3b7c474c83b4c2a89cf50491502b867f341dcb48728105e48517be2fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805d0a3b7c474c83b4c2a89cf50491502b867f341dcb48728105e48517be2fc4->enter($__internal_805d0a3b7c474c83b4c2a89cf50491502b867f341dcb48728105e48517be2fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6483acc16de665d6e20ab647ee81d622d28573839a83b4bc76dfbdf3f84d194e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6483acc16de665d6e20ab647ee81d622d28573839a83b4bc76dfbdf3f84d194e->enter($__internal_6483acc16de665d6e20ab647ee81d622d28573839a83b4bc76dfbdf3f84d194e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6483acc16de665d6e20ab647ee81d622d28573839a83b4bc76dfbdf3f84d194e->leave($__internal_6483acc16de665d6e20ab647ee81d622d28573839a83b4bc76dfbdf3f84d194e_prof);

        
        $__internal_805d0a3b7c474c83b4c2a89cf50491502b867f341dcb48728105e48517be2fc4->leave($__internal_805d0a3b7c474c83b4c2a89cf50491502b867f341dcb48728105e48517be2fc4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e90915dd5f36f05f1b01e73755571bb5cdebfa51b40411627d4cbad94cc2a11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90915dd5f36f05f1b01e73755571bb5cdebfa51b40411627d4cbad94cc2a11b->enter($__internal_e90915dd5f36f05f1b01e73755571bb5cdebfa51b40411627d4cbad94cc2a11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_34b04b997a7bda97b81508ade8e26c52d57331718b29b51a8978c2261e813224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b04b997a7bda97b81508ade8e26c52d57331718b29b51a8978c2261e813224->enter($__internal_34b04b997a7bda97b81508ade8e26c52d57331718b29b51a8978c2261e813224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_34b04b997a7bda97b81508ade8e26c52d57331718b29b51a8978c2261e813224->leave($__internal_34b04b997a7bda97b81508ade8e26c52d57331718b29b51a8978c2261e813224_prof);

        
        $__internal_e90915dd5f36f05f1b01e73755571bb5cdebfa51b40411627d4cbad94cc2a11b->leave($__internal_e90915dd5f36f05f1b01e73755571bb5cdebfa51b40411627d4cbad94cc2a11b_prof);

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
", "base.html.twig", "/var/www/html/geek-letters/app/Resources/views/base.html.twig");
    }
}
