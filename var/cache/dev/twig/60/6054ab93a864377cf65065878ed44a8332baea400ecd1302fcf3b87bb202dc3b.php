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

/* order/list.html.twig */
class __TwigTemplate_e6ae760d6bba6b41b04cbc5e9127e1d8f55ba9ecc22345bd4b880f82d239476e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello MainController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1 class=\"m-2\">Factures des 30 derniers jours</h1>

    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">Stock vendu</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Client</th>
            <th scope=\"col\">Total facturé HT</th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 21
            echo "            <tr>
                <td>
                    <ul class=\"mb-0\">
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "itemsPurchased", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 25
                echo "                            <li>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gem_prices"]) || array_key_exists("gem_prices", $context) ? $context["gem_prices"] : (function () { throw new RuntimeError('Variable "gem_prices" does not exist.', 25, $this->source); })()), $context["name"], [], "array", false, false, false, 25), "html", null, true);
                echo "€HT l'unité)</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    </ul>
                </td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 29), "Y-m -d"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "customerLastname", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "customerFirstname", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 31), "html", null, true);
            echo "€</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "order/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  129 => 31,  123 => 30,  119 => 29,  115 => 27,  102 => 25,  98 => 24,  93 => 21,  89 => 20,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}

    <h1 class=\"m-2\">Factures des 30 derniers jours</h1>

    <table class=\"table table-striped\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">Stock vendu</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Client</th>
            <th scope=\"col\">Total facturé HT</th>
        </tr>
        </thead>
        <tbody>

        {% for order in orders %}
            <tr>
                <td>
                    <ul class=\"mb-0\">
                        {% for name, value in order.itemsPurchased %}
                            <li>{{ value }} {{ name }} ({{ gem_prices[name]}}€HT l'unité)</li>
                        {% endfor %}
                    </ul>
                </td>
                <td>{{ order.date|date('Y-m -d') }}</td>
                <td>{{ order.customerLastname }} {{ order.customerFirstname }}</td>
                <td>{{ order.total }}€</td>
            </tr>
        {% endfor %}

        </tbody>
    </table>
{% endblock %}
", "order/list.html.twig", "/home/bastien/checkout/tp-eval/templates/order/list.html.twig");
    }
}
