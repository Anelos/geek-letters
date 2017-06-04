<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_b5ead3e36ad3a27fb77580a2bbb9a60745e85f1094a337ecad7ed5fd7c8b2277 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_480a0e7806dd19099b55dcfab1718e0a1bfe25cb9cc8b84c78923d56492d837a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480a0e7806dd19099b55dcfab1718e0a1bfe25cb9cc8b84c78923d56492d837a->enter($__internal_480a0e7806dd19099b55dcfab1718e0a1bfe25cb9cc8b84c78923d56492d837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_e103f54c42d9e66826f6995173901bdb13fb2b2bb2c41d987162a787498c0b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e103f54c42d9e66826f6995173901bdb13fb2b2bb2c41d987162a787498c0b05->enter($__internal_e103f54c42d9e66826f6995173901bdb13fb2b2bb2c41d987162a787498c0b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_480a0e7806dd19099b55dcfab1718e0a1bfe25cb9cc8b84c78923d56492d837a->leave($__internal_480a0e7806dd19099b55dcfab1718e0a1bfe25cb9cc8b84c78923d56492d837a_prof);

        
        $__internal_e103f54c42d9e66826f6995173901bdb13fb2b2bb2c41d987162a787498c0b05->leave($__internal_e103f54c42d9e66826f6995173901bdb13fb2b2bb2c41d987162a787498c0b05_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_cd94bb3500bb64acf072f8c75fb600407ba2f2f8735ca1c3bcea1c38a2fd6d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd94bb3500bb64acf072f8c75fb600407ba2f2f8735ca1c3bcea1c38a2fd6d53->enter($__internal_cd94bb3500bb64acf072f8c75fb600407ba2f2f8735ca1c3bcea1c38a2fd6d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e4ff7ad1565cf0bf40c1622fd3c8cf2c9f467c4c75e49cb5b1c19c024dbbd313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ff7ad1565cf0bf40c1622fd3c8cf2c9f467c4c75e49cb5b1c19c024dbbd313->enter($__internal_e4ff7ad1565cf0bf40c1622fd3c8cf2c9f467c4c75e49cb5b1c19c024dbbd313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "        <div>
            ";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " |
                <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 9
        echo "        </div>

        ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 13
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 14
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 15
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        }
        // line 20
        echo "
        <div>
            ";
        // line 22
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "        </div>
";
        
        $__internal_e4ff7ad1565cf0bf40c1622fd3c8cf2c9f467c4c75e49cb5b1c19c024dbbd313->leave($__internal_e4ff7ad1565cf0bf40c1622fd3c8cf2c9f467c4c75e49cb5b1c19c024dbbd313_prof);

        
        $__internal_cd94bb3500bb64acf072f8c75fb600407ba2f2f8735ca1c3bcea1c38a2fd6d53->leave($__internal_cd94bb3500bb64acf072f8c75fb600407ba2f2f8735ca1c3bcea1c38a2fd6d53_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8206760549b32b51dce5ffa5a57448faa3c1ee6fbeadcb3d824ffbf9cc0ec188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8206760549b32b51dce5ffa5a57448faa3c1ee6fbeadcb3d824ffbf9cc0ec188->enter($__internal_8206760549b32b51dce5ffa5a57448faa3c1ee6fbeadcb3d824ffbf9cc0ec188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7735b35f2e690b22d9ab27cde6bb9aa5e642dd0335e178389ae46d4041ef65db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7735b35f2e690b22d9ab27cde6bb9aa5e642dd0335e178389ae46d4041ef65db->enter($__internal_7735b35f2e690b22d9ab27cde6bb9aa5e642dd0335e178389ae46d4041ef65db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_7735b35f2e690b22d9ab27cde6bb9aa5e642dd0335e178389ae46d4041ef65db->leave($__internal_7735b35f2e690b22d9ab27cde6bb9aa5e642dd0335e178389ae46d4041ef65db_prof);

        
        $__internal_8206760549b32b51dce5ffa5a57448faa3c1ee6fbeadcb3d824ffbf9cc0ec188->leave($__internal_8206760549b32b51dce5ffa5a57448faa3c1ee6fbeadcb3d824ffbf9cc0ec188_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  121 => 22,  110 => 24,  108 => 22,  104 => 20,  101 => 19,  95 => 18,  86 => 15,  81 => 14,  76 => 13,  71 => 12,  69 => 11,  65 => 9,  59 => 6,  55 => 5,  50 => 4,  48 => 3,  45 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ app.user.username }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
