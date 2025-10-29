<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* namespace.twig */
class __TwigTemplate_6f99fad7bda6c41432b7822cbb951efff25778f91aeb2d56af649e721a9c39d0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body_class' => [$this, 'block_body_class'],
            'page_id' => [$this, 'block_page_id'],
            'below_menu' => [$this, 'block_below_menu'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["__internal_parse_13"] = $this->macros["__internal_parse_13"] = $this->loadTemplate("macros.twig", "namespace.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "namespace.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo (isset($context["namespace"]) || array_key_exists("namespace", $context) ? $context["namespace"] : (function () { throw new RuntimeError('Variable "namespace" does not exist.', 3, $this->source); })());
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "namespace";
    }

    // line 5
    public function block_page_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("namespace:" . twig_replace_filter((isset($context["namespace"]) || array_key_exists("namespace", $context) ? $context["namespace"] : (function () { throw new RuntimeError('Variable "namespace" does not exist.', 5, $this->source); })()), ["\\" => "_"])), "html", null, true);
    }

    // line 7
    public function block_below_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"namespace-breadcrumbs\">
        <ol class=\"breadcrumb\">
            <li><span class=\"label label-default\">";
        // line 10
        echo \Wdes\phpI18nL10n\Launcher::getPlugin()->gettext("Namespace");
        echo "</span></li>
            ";
        // line 11
        echo twig_call_macro($macros["__internal_parse_13"], "macro_breadcrumbs", [(isset($context["namespace"]) || array_key_exists("namespace", $context) ? $context["namespace"] : (function () { throw new RuntimeError('Variable "namespace" does not exist.', 11, $this->source); })())], 11, $context, $this->getSourceContext());
        echo "
        </ol>
    </div>
";
    }

    // line 16
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
    <div class=\"page-header\">
        <h1>";
        // line 19
        echo (isset($context["namespace"]) || array_key_exists("namespace", $context) ? $context["namespace"] : (function () { throw new RuntimeError('Variable "namespace" does not exist.', 19, $this->source); })());
        echo "</h1>
    </div>

    ";
        // line 22
        if ((isset($context["subnamespaces"]) || array_key_exists("subnamespaces", $context) ? $context["subnamespaces"] : (function () { throw new RuntimeError('Variable "subnamespaces" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "        <h2>";
            echo \Wdes\phpI18nL10n\Launcher::getPlugin()->gettext("Namespaces");
            echo "</h2>
        <div class=\"namespace-list\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subnamespaces"]) || array_key_exists("subnamespaces", $context) ? $context["subnamespaces"] : (function () { throw new RuntimeError('Variable "subnamespaces" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ns"]) {
                echo twig_call_macro($macros["__internal_parse_13"], "macro_namespace_link", [$context["ns"]], 25, $context, $this->getSourceContext());
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ns'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "        <h2>";
            echo \Wdes\phpI18nL10n\Launcher::getPlugin()->gettext("Classes");
            echo "</h2>";
            // line 31
            echo twig_call_macro($macros["__internal_parse_13"], "macro_render_classes", [(isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 31, $this->source); })())], 31, $context, $this->getSourceContext());
        }
        // line 33
        echo "
    ";
        // line 34
        if ((isset($context["interfaces"]) || array_key_exists("interfaces", $context) ? $context["interfaces"] : (function () { throw new RuntimeError('Variable "interfaces" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "        <h2>";
            echo \Wdes\phpI18nL10n\Launcher::getPlugin()->gettext("Interfaces");
            echo "</h2>";
            // line 36
            echo twig_call_macro($macros["__internal_parse_13"], "macro_render_classes", [(isset($context["interfaces"]) || array_key_exists("interfaces", $context) ? $context["interfaces"] : (function () { throw new RuntimeError('Variable "interfaces" does not exist.', 36, $this->source); })())], 36, $context, $this->getSourceContext());
        }
        // line 38
        echo "
    ";
        // line 39
        if ((isset($context["exceptions"]) || array_key_exists("exceptions", $context) ? $context["exceptions"] : (function () { throw new RuntimeError('Variable "exceptions" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "        <h2>";
            echo \Wdes\phpI18nL10n\Launcher::getPlugin()->gettext("Exceptions");
            echo "</h2>";
            // line 41
            echo twig_call_macro($macros["__internal_parse_13"], "macro_render_classes", [(isset($context["exceptions"]) || array_key_exists("exceptions", $context) ? $context["exceptions"] : (function () { throw new RuntimeError('Variable "exceptions" does not exist.', 41, $this->source); })())], 41, $context, $this->getSourceContext());
        }
        // line 43
        echo "
";
    }

    public function getTemplateName()
    {
        return "namespace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 43,  164 => 41,  160 => 40,  158 => 39,  155 => 38,  152 => 36,  148 => 35,  146 => 34,  143 => 33,  140 => 31,  136 => 30,  134 => 29,  131 => 28,  127 => 26,  118 => 25,  112 => 23,  110 => 22,  104 => 19,  100 => 17,  96 => 16,  88 => 11,  84 => 10,  80 => 8,  76 => 7,  69 => 5,  62 => 4,  53 => 3,  48 => 1,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout/layout.twig\" %}
{% from \"macros.twig\" import breadcrumbs, render_classes, class_link, namespace_link %}
{% block title %}{{ namespace|raw }} | {{ parent() }}{% endblock %}
{% block body_class 'namespace' %}
{% block page_id 'namespace:' ~ (namespace|replace({'\\\\': '_'})) %}

{% block below_menu %}
    <div class=\"namespace-breadcrumbs\">
        <ol class=\"breadcrumb\">
            <li><span class=\"label label-default\">{% trans 'Namespace' %}</span></li>
            {{ breadcrumbs(namespace) }}
        </ol>
    </div>
{% endblock %}

{% block page_content %}

    <div class=\"page-header\">
        <h1>{{ namespace|raw }}</h1>
    </div>

    {% if subnamespaces %}
        <h2>{% trans 'Namespaces' %}</h2>
        <div class=\"namespace-list\">
            {% for ns in subnamespaces %}{{ namespace_link(ns) }}{% endfor %}
        </div>
    {% endif %}

    {% if classes %}
        <h2>{% trans 'Classes' %}</h2>
        {{- render_classes(classes) -}}
    {% endif %}

    {% if interfaces %}
        <h2>{% trans 'Interfaces' %}</h2>
        {{- render_classes(interfaces) -}}
    {% endif %}

    {% if exceptions %}
        <h2>{% trans 'Exceptions' %}</h2>
        {{- render_classes(exceptions) -}}
    {% endif %}

{% endblock %}
", "namespace.twig", "C:\\wamp64\\www\\mvc-php\\blog\\vendor\\code-lts\\doctum\\src\\Resources\\themes\\default\\namespace.twig");
    }
}
