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
        $__internal_cecac1a827b5218439fc802c38b09ae4a112dcecbda956856e3882a43a40e4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecac1a827b5218439fc802c38b09ae4a112dcecbda956856e3882a43a40e4f6->enter($__internal_cecac1a827b5218439fc802c38b09ae4a112dcecbda956856e3882a43a40e4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:new.html.twig"));

        $__internal_0e833c7a5e1afe38b22d99480d246c45ac7503fcd0c7681e283087fc1301b790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e833c7a5e1afe38b22d99480d246c45ac7503fcd0c7681e283087fc1301b790->enter($__internal_0e833c7a5e1afe38b22d99480d246c45ac7503fcd0c7681e283087fc1301b790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:new.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_cecac1a827b5218439fc802c38b09ae4a112dcecbda956856e3882a43a40e4f6->leave($__internal_cecac1a827b5218439fc802c38b09ae4a112dcecbda956856e3882a43a40e4f6_prof);

        
        $__internal_0e833c7a5e1afe38b22d99480d246c45ac7503fcd0c7681e283087fc1301b790->leave($__internal_0e833c7a5e1afe38b22d99480d246c45ac7503fcd0c7681e283087fc1301b790_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_825fe71ba015e36f23b6f0d820d4061e113c4926ec8008cdcedb9fc1429db43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825fe71ba015e36f23b6f0d820d4061e113c4926ec8008cdcedb9fc1429db43d->enter($__internal_825fe71ba015e36f23b6f0d820d4061e113c4926ec8008cdcedb9fc1429db43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f81dc6a45efaf340fd8ad638cd8e4e81ad045e2e8749ae5ff80a5511764aaf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81dc6a45efaf340fd8ad638cd8e4e81ad045e2e8749ae5ff80a5511764aaf82->enter($__internal_f81dc6a45efaf340fd8ad638cd8e4e81ad045e2e8749ae5ff80a5511764aaf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f81dc6a45efaf340fd8ad638cd8e4e81ad045e2e8749ae5ff80a5511764aaf82->leave($__internal_f81dc6a45efaf340fd8ad638cd8e4e81ad045e2e8749ae5ff80a5511764aaf82_prof);

        
        $__internal_825fe71ba015e36f23b6f0d820d4061e113c4926ec8008cdcedb9fc1429db43d->leave($__internal_825fe71ba015e36f23b6f0d820d4061e113c4926ec8008cdcedb9fc1429db43d_prof);

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
