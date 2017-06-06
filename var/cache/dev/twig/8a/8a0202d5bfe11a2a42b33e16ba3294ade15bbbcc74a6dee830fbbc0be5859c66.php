<?php

/* FOSUserBundle::layout.html.twig */
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
        $__internal_f49dedd2061e472e4cd2a6f65626de6aff4317d5933cb6785d693e1507b7ed72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49dedd2061e472e4cd2a6f65626de6aff4317d5933cb6785d693e1507b7ed72->enter($__internal_f49dedd2061e472e4cd2a6f65626de6aff4317d5933cb6785d693e1507b7ed72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_fec88191d34bb3851b0e89bd5be93631e3297c07bbb86c84982e6a9ac15417e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec88191d34bb3851b0e89bd5be93631e3297c07bbb86c84982e6a9ac15417e3->enter($__internal_fec88191d34bb3851b0e89bd5be93631e3297c07bbb86c84982e6a9ac15417e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_f49dedd2061e472e4cd2a6f65626de6aff4317d5933cb6785d693e1507b7ed72->leave($__internal_f49dedd2061e472e4cd2a6f65626de6aff4317d5933cb6785d693e1507b7ed72_prof);

        
        $__internal_fec88191d34bb3851b0e89bd5be93631e3297c07bbb86c84982e6a9ac15417e3->leave($__internal_fec88191d34bb3851b0e89bd5be93631e3297c07bbb86c84982e6a9ac15417e3_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_a15883061ae7e739b6861beff7347ecb2dddc41beedb2f04bd9c8b06c0cc0fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15883061ae7e739b6861beff7347ecb2dddc41beedb2f04bd9c8b06c0cc0fd3->enter($__internal_a15883061ae7e739b6861beff7347ecb2dddc41beedb2f04bd9c8b06c0cc0fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_50ae9646470e6b73e42ec3edb6503f57eb21c29d9ce90257eb2bb6f499854b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ae9646470e6b73e42ec3edb6503f57eb21c29d9ce90257eb2bb6f499854b6b->enter($__internal_50ae9646470e6b73e42ec3edb6503f57eb21c29d9ce90257eb2bb6f499854b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_50ae9646470e6b73e42ec3edb6503f57eb21c29d9ce90257eb2bb6f499854b6b->leave($__internal_50ae9646470e6b73e42ec3edb6503f57eb21c29d9ce90257eb2bb6f499854b6b_prof);

        
        $__internal_a15883061ae7e739b6861beff7347ecb2dddc41beedb2f04bd9c8b06c0cc0fd3->leave($__internal_a15883061ae7e739b6861beff7347ecb2dddc41beedb2f04bd9c8b06c0cc0fd3_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adc538105b2b417e78794772f5b2a01da62e17d71d1908be80d461627a49f34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc538105b2b417e78794772f5b2a01da62e17d71d1908be80d461627a49f34a->enter($__internal_adc538105b2b417e78794772f5b2a01da62e17d71d1908be80d461627a49f34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dd9260b92f708c015ad3fed8db2a4ab443b42b2007b76b76289ff69d825bd23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9260b92f708c015ad3fed8db2a4ab443b42b2007b76b76289ff69d825bd23f->enter($__internal_dd9260b92f708c015ad3fed8db2a4ab443b42b2007b76b76289ff69d825bd23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_dd9260b92f708c015ad3fed8db2a4ab443b42b2007b76b76289ff69d825bd23f->leave($__internal_dd9260b92f708c015ad3fed8db2a4ab443b42b2007b76b76289ff69d825bd23f_prof);

        
        $__internal_adc538105b2b417e78794772f5b2a01da62e17d71d1908be80d461627a49f34a->leave($__internal_adc538105b2b417e78794772f5b2a01da62e17d71d1908be80d461627a49f34a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
