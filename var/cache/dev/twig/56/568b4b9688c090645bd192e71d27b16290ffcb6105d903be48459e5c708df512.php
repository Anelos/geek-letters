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
        $__internal_d78ae5a1340392c61810bdc54ce3de537cf0fca5c5fe2d67d84fbd8dacade95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78ae5a1340392c61810bdc54ce3de537cf0fca5c5fe2d67d84fbd8dacade95d->enter($__internal_d78ae5a1340392c61810bdc54ce3de537cf0fca5c5fe2d67d84fbd8dacade95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_f6ee7ea7736a18fad386745f90e3d3fdfdf2b418773eb73cec36457cf75b6ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ee7ea7736a18fad386745f90e3d3fdfdf2b418773eb73cec36457cf75b6ae3->enter($__internal_f6ee7ea7736a18fad386745f90e3d3fdfdf2b418773eb73cec36457cf75b6ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d78ae5a1340392c61810bdc54ce3de537cf0fca5c5fe2d67d84fbd8dacade95d->leave($__internal_d78ae5a1340392c61810bdc54ce3de537cf0fca5c5fe2d67d84fbd8dacade95d_prof);

        
        $__internal_f6ee7ea7736a18fad386745f90e3d3fdfdf2b418773eb73cec36457cf75b6ae3->leave($__internal_f6ee7ea7736a18fad386745f90e3d3fdfdf2b418773eb73cec36457cf75b6ae3_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_b00e071e72b05a962ffe8741bb034c73d64a41b6b5dd4f8125381ddd32857e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00e071e72b05a962ffe8741bb034c73d64a41b6b5dd4f8125381ddd32857e45->enter($__internal_b00e071e72b05a962ffe8741bb034c73d64a41b6b5dd4f8125381ddd32857e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8ef04f679a337292deeaf7c42ec177b68e737a498101db3bac87979165f08fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef04f679a337292deeaf7c42ec177b68e737a498101db3bac87979165f08fa0->enter($__internal_8ef04f679a337292deeaf7c42ec177b68e737a498101db3bac87979165f08fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8ef04f679a337292deeaf7c42ec177b68e737a498101db3bac87979165f08fa0->leave($__internal_8ef04f679a337292deeaf7c42ec177b68e737a498101db3bac87979165f08fa0_prof);

        
        $__internal_b00e071e72b05a962ffe8741bb034c73d64a41b6b5dd4f8125381ddd32857e45->leave($__internal_b00e071e72b05a962ffe8741bb034c73d64a41b6b5dd4f8125381ddd32857e45_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63a6df5a9694af69b494e990561cd4578ea3e908059c30209c4fae49049e44f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a6df5a9694af69b494e990561cd4578ea3e908059c30209c4fae49049e44f0->enter($__internal_63a6df5a9694af69b494e990561cd4578ea3e908059c30209c4fae49049e44f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcbf0d3389be355ecc65825e4380ade579e9924852b5154fa9fe33faaf6cfe23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbf0d3389be355ecc65825e4380ade579e9924852b5154fa9fe33faaf6cfe23->enter($__internal_dcbf0d3389be355ecc65825e4380ade579e9924852b5154fa9fe33faaf6cfe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_dcbf0d3389be355ecc65825e4380ade579e9924852b5154fa9fe33faaf6cfe23->leave($__internal_dcbf0d3389be355ecc65825e4380ade579e9924852b5154fa9fe33faaf6cfe23_prof);

        
        $__internal_63a6df5a9694af69b494e990561cd4578ea3e908059c30209c4fae49049e44f0->leave($__internal_63a6df5a9694af69b494e990561cd4578ea3e908059c30209c4fae49049e44f0_prof);

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
