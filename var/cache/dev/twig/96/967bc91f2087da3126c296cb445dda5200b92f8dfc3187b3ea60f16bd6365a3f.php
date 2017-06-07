<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_349235f3904bb20a5d53094741e8b62d42aa2ef2b3de1be94b12dd8076b92697 extends Twig_Template
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
        $__internal_8417fd4b98ff03cd18f1f2c14248009ed732a2c03d2e4577376c062e9276b856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8417fd4b98ff03cd18f1f2c14248009ed732a2c03d2e4577376c062e9276b856->enter($__internal_8417fd4b98ff03cd18f1f2c14248009ed732a2c03d2e4577376c062e9276b856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_2430720abebb72d1c1ea07e293dc146185b7d2d34ddb3651f654e31e7c6eb291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2430720abebb72d1c1ea07e293dc146185b7d2d34ddb3651f654e31e7c6eb291->enter($__internal_2430720abebb72d1c1ea07e293dc146185b7d2d34ddb3651f654e31e7c6eb291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_8417fd4b98ff03cd18f1f2c14248009ed732a2c03d2e4577376c062e9276b856->leave($__internal_8417fd4b98ff03cd18f1f2c14248009ed732a2c03d2e4577376c062e9276b856_prof);

        
        $__internal_2430720abebb72d1c1ea07e293dc146185b7d2d34ddb3651f654e31e7c6eb291->leave($__internal_2430720abebb72d1c1ea07e293dc146185b7d2d34ddb3651f654e31e7c6eb291_prof);

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
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
