<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_e1c827b1c684978614784c44a6a6b56e19dfd3c96fd61264a58558f69f93a5ba extends Twig_Template
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
        $__internal_c49a9a26a091f8dc450135012ed1935b1ab9c57800c083cca1d23f8c743597fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49a9a26a091f8dc450135012ed1935b1ab9c57800c083cca1d23f8c743597fa->enter($__internal_c49a9a26a091f8dc450135012ed1935b1ab9c57800c083cca1d23f8c743597fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_74a61e9608c908e0bae4aa62171038315edb5fb8984272fb7c7d85ff1619dfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a61e9608c908e0bae4aa62171038315edb5fb8984272fb7c7d85ff1619dfb6->enter($__internal_74a61e9608c908e0bae4aa62171038315edb5fb8984272fb7c7d85ff1619dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_c49a9a26a091f8dc450135012ed1935b1ab9c57800c083cca1d23f8c743597fa->leave($__internal_c49a9a26a091f8dc450135012ed1935b1ab9c57800c083cca1d23f8c743597fa_prof);

        
        $__internal_74a61e9608c908e0bae4aa62171038315edb5fb8984272fb7c7d85ff1619dfb6->leave($__internal_74a61e9608c908e0bae4aa62171038315edb5fb8984272fb7c7d85ff1619dfb6_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_e5d271009184f8c221183f65fd4d546eab41367b5351d0fbac9fd7003945403e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d271009184f8c221183f65fd4d546eab41367b5351d0fbac9fd7003945403e->enter($__internal_e5d271009184f8c221183f65fd4d546eab41367b5351d0fbac9fd7003945403e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_24b67e98a6f1ea2c3398170ec055ce6d09dcacfa09e33f08c7fdb3123405cb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b67e98a6f1ea2c3398170ec055ce6d09dcacfa09e33f08c7fdb3123405cb21->enter($__internal_24b67e98a6f1ea2c3398170ec055ce6d09dcacfa09e33f08c7fdb3123405cb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_24b67e98a6f1ea2c3398170ec055ce6d09dcacfa09e33f08c7fdb3123405cb21->leave($__internal_24b67e98a6f1ea2c3398170ec055ce6d09dcacfa09e33f08c7fdb3123405cb21_prof);

        
        $__internal_e5d271009184f8c221183f65fd4d546eab41367b5351d0fbac9fd7003945403e->leave($__internal_e5d271009184f8c221183f65fd4d546eab41367b5351d0fbac9fd7003945403e_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1fd50b74d5164e06df862c8dda11d5fb855c416aac47cb7ae7946641bc9a4a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd50b74d5164e06df862c8dda11d5fb855c416aac47cb7ae7946641bc9a4a6a->enter($__internal_1fd50b74d5164e06df862c8dda11d5fb855c416aac47cb7ae7946641bc9a4a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f52cfcc66fb81b107db36dc70527f195ffb36e2843ced11e83b54af706e98d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52cfcc66fb81b107db36dc70527f195ffb36e2843ced11e83b54af706e98d16->enter($__internal_f52cfcc66fb81b107db36dc70527f195ffb36e2843ced11e83b54af706e98d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_f52cfcc66fb81b107db36dc70527f195ffb36e2843ced11e83b54af706e98d16->leave($__internal_f52cfcc66fb81b107db36dc70527f195ffb36e2843ced11e83b54af706e98d16_prof);

        
        $__internal_1fd50b74d5164e06df862c8dda11d5fb855c416aac47cb7ae7946641bc9a4a6a->leave($__internal_1fd50b74d5164e06df862c8dda11d5fb855c416aac47cb7ae7946641bc9a4a6a_prof);

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
