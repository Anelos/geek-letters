<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_aa27731e082b9d31341d4217b14aa3e72600e0315090b9c4142c1442dbcf638d extends Twig_Template
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
        $__internal_31c668a04e7ef193ce54c47526988b912dbf930ff4713703ea08c635ca00ca2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c668a04e7ef193ce54c47526988b912dbf930ff4713703ea08c635ca00ca2b->enter($__internal_31c668a04e7ef193ce54c47526988b912dbf930ff4713703ea08c635ca00ca2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_3112a29df27e64be75409d074910355391d1e33cebfe08854d2e94fac4b207bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3112a29df27e64be75409d074910355391d1e33cebfe08854d2e94fac4b207bc->enter($__internal_3112a29df27e64be75409d074910355391d1e33cebfe08854d2e94fac4b207bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_31c668a04e7ef193ce54c47526988b912dbf930ff4713703ea08c635ca00ca2b->leave($__internal_31c668a04e7ef193ce54c47526988b912dbf930ff4713703ea08c635ca00ca2b_prof);

        
        $__internal_3112a29df27e64be75409d074910355391d1e33cebfe08854d2e94fac4b207bc->leave($__internal_3112a29df27e64be75409d074910355391d1e33cebfe08854d2e94fac4b207bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}