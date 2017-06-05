<?php

/* :comment:new.html.twig */
class __TwigTemplate_5dbd67c2d846a8be32b925a8735e86c866b7d874ceb3b7a25a8098ae9cfb9e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd3240e08a778a2d00a39bc714ae8bfbdf5aedc2cc5a76457179213b90d19991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3240e08a778a2d00a39bc714ae8bfbdf5aedc2cc5a76457179213b90d19991->enter($__internal_cd3240e08a778a2d00a39bc714ae8bfbdf5aedc2cc5a76457179213b90d19991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:new.html.twig"));

        $__internal_4cf4a85b9efcfba39acced90b7bea69948f7108ef2cbd2cba19a6497517c7b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf4a85b9efcfba39acced90b7bea69948f7108ef2cbd2cba19a6497517c7b45->enter($__internal_4cf4a85b9efcfba39acced90b7bea69948f7108ef2cbd2cba19a6497517c7b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:new.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_cd3240e08a778a2d00a39bc714ae8bfbdf5aedc2cc5a76457179213b90d19991->leave($__internal_cd3240e08a778a2d00a39bc714ae8bfbdf5aedc2cc5a76457179213b90d19991_prof);

        
        $__internal_4cf4a85b9efcfba39acced90b7bea69948f7108ef2cbd2cba19a6497517c7b45->leave($__internal_4cf4a85b9efcfba39acced90b7bea69948f7108ef2cbd2cba19a6497517c7b45_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_9234c4be762bb7ffbae2308ce3b77953efe576c152343a238189bbba3f71d02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9234c4be762bb7ffbae2308ce3b77953efe576c152343a238189bbba3f71d02f->enter($__internal_9234c4be762bb7ffbae2308ce3b77953efe576c152343a238189bbba3f71d02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96ab09e005d3b588818c45f6d033bce9dbe5da6ffe6dce2bee45ed7ba6061bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ab09e005d3b588818c45f6d033bce9dbe5da6ffe6dce2bee45ed7ba6061bca->enter($__internal_96ab09e005d3b588818c45f6d033bce9dbe5da6ffe6dce2bee45ed7ba6061bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <h1>Comment creation</h1>

    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_96ab09e005d3b588818c45f6d033bce9dbe5da6ffe6dce2bee45ed7ba6061bca->leave($__internal_96ab09e005d3b588818c45f6d033bce9dbe5da6ffe6dce2bee45ed7ba6061bca_prof);

        
        $__internal_9234c4be762bb7ffbae2308ce3b77953efe576c152343a238189bbba3f71d02f->leave($__internal_9234c4be762bb7ffbae2308ce3b77953efe576c152343a238189bbba3f71d02f_prof);

    }

    public function getTemplateName()
    {
        return ":comment:new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  57 => 7,  52 => 5,  48 => 4,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <h1>Comment creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":comment:new.html.twig", "/var/www/html/geek-letters/app/Resources/views/comment/new.html.twig");
    }
}
