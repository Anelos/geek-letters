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
        $__internal_0792a9289277ca9c88570ba1d4e87a42cede56a44baf996ab32ab25a36140d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0792a9289277ca9c88570ba1d4e87a42cede56a44baf996ab32ab25a36140d29->enter($__internal_0792a9289277ca9c88570ba1d4e87a42cede56a44baf996ab32ab25a36140d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_83cd3b0f1c755f2fd2620324d915f470babf627f51cac05b9f186386aa56d8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cd3b0f1c755f2fd2620324d915f470babf627f51cac05b9f186386aa56d8a8->enter($__internal_83cd3b0f1c755f2fd2620324d915f470babf627f51cac05b9f186386aa56d8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0792a9289277ca9c88570ba1d4e87a42cede56a44baf996ab32ab25a36140d29->leave($__internal_0792a9289277ca9c88570ba1d4e87a42cede56a44baf996ab32ab25a36140d29_prof);

        
        $__internal_83cd3b0f1c755f2fd2620324d915f470babf627f51cac05b9f186386aa56d8a8->leave($__internal_83cd3b0f1c755f2fd2620324d915f470babf627f51cac05b9f186386aa56d8a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fbcc48ee4fc51a68a6e59c321544e29b8f184465cf6c0f59e133a9fd7b3293e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbcc48ee4fc51a68a6e59c321544e29b8f184465cf6c0f59e133a9fd7b3293e->enter($__internal_7fbcc48ee4fc51a68a6e59c321544e29b8f184465cf6c0f59e133a9fd7b3293e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07e53e7602e710172472200f3777f122ad51a3314c101732c6544e8da95e25e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e53e7602e710172472200f3777f122ad51a3314c101732c6544e8da95e25e6->enter($__internal_07e53e7602e710172472200f3777f122ad51a3314c101732c6544e8da95e25e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_07e53e7602e710172472200f3777f122ad51a3314c101732c6544e8da95e25e6->leave($__internal_07e53e7602e710172472200f3777f122ad51a3314c101732c6544e8da95e25e6_prof);

        
        $__internal_7fbcc48ee4fc51a68a6e59c321544e29b8f184465cf6c0f59e133a9fd7b3293e->leave($__internal_7fbcc48ee4fc51a68a6e59c321544e29b8f184465cf6c0f59e133a9fd7b3293e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7e4833386f72a3c8ff54ae3498c9eff938f7c98267ec1a261dabb8e28debacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e4833386f72a3c8ff54ae3498c9eff938f7c98267ec1a261dabb8e28debacc->enter($__internal_e7e4833386f72a3c8ff54ae3498c9eff938f7c98267ec1a261dabb8e28debacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b34f19d6f4f72f8b47e30d02ea12e887faea59a0c81b91df6e3b673b17b63923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34f19d6f4f72f8b47e30d02ea12e887faea59a0c81b91df6e3b673b17b63923->enter($__internal_b34f19d6f4f72f8b47e30d02ea12e887faea59a0c81b91df6e3b673b17b63923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b34f19d6f4f72f8b47e30d02ea12e887faea59a0c81b91df6e3b673b17b63923->leave($__internal_b34f19d6f4f72f8b47e30d02ea12e887faea59a0c81b91df6e3b673b17b63923_prof);

        
        $__internal_e7e4833386f72a3c8ff54ae3498c9eff938f7c98267ec1a261dabb8e28debacc->leave($__internal_e7e4833386f72a3c8ff54ae3498c9eff938f7c98267ec1a261dabb8e28debacc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_07fbba217e49b688e77f5c83dc75a2896c250556a67465ed9f64a2b4f5cf57ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fbba217e49b688e77f5c83dc75a2896c250556a67465ed9f64a2b4f5cf57ef->enter($__internal_07fbba217e49b688e77f5c83dc75a2896c250556a67465ed9f64a2b4f5cf57ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a139776304c3e741d6ff043fefd8702e222881b4de8d5fed730e548da3f6504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a139776304c3e741d6ff043fefd8702e222881b4de8d5fed730e548da3f6504->enter($__internal_7a139776304c3e741d6ff043fefd8702e222881b4de8d5fed730e548da3f6504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7a139776304c3e741d6ff043fefd8702e222881b4de8d5fed730e548da3f6504->leave($__internal_7a139776304c3e741d6ff043fefd8702e222881b4de8d5fed730e548da3f6504_prof);

        
        $__internal_07fbba217e49b688e77f5c83dc75a2896c250556a67465ed9f64a2b4f5cf57ef->leave($__internal_07fbba217e49b688e77f5c83dc75a2896c250556a67465ed9f64a2b4f5cf57ef_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3137e2186d40b23215f86ce9f1dedb38337b613be16bdd161b62fa50e47214d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3137e2186d40b23215f86ce9f1dedb38337b613be16bdd161b62fa50e47214d2->enter($__internal_3137e2186d40b23215f86ce9f1dedb38337b613be16bdd161b62fa50e47214d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a18d75352b58199a33dba2f713e8afe22ad83f91333951a781fbfbdfc97c0683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18d75352b58199a33dba2f713e8afe22ad83f91333951a781fbfbdfc97c0683->enter($__internal_a18d75352b58199a33dba2f713e8afe22ad83f91333951a781fbfbdfc97c0683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a18d75352b58199a33dba2f713e8afe22ad83f91333951a781fbfbdfc97c0683->leave($__internal_a18d75352b58199a33dba2f713e8afe22ad83f91333951a781fbfbdfc97c0683_prof);

        
        $__internal_3137e2186d40b23215f86ce9f1dedb38337b613be16bdd161b62fa50e47214d2->leave($__internal_3137e2186d40b23215f86ce9f1dedb38337b613be16bdd161b62fa50e47214d2_prof);

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
