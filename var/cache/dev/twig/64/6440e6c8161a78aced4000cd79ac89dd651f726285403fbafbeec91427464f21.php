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

/* oferta/detalleOferta.html.twig */
class __TwigTemplate_8929188940173f5beeca7c2b3729254d1dd9411682d01fa878bd3e102e942acd extends Template
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
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "oferta/detalleOferta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "oferta/detalleOferta.html.twig"));

        $this->parent = $this->loadTemplate("menu.html.twig", "oferta/detalleOferta.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "JobOrWork";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
        <br>
        <div class=\"row\">
            <div class=\"col-3\">
            </div>
            <div class=\"col-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oferta"]) || array_key_exists("oferta", $context) ? $context["oferta"] : (function () { throw new RuntimeError('Variable "oferta" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo ".- ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oferta"]) || array_key_exists("oferta", $context) ? $context["oferta"] : (function () { throw new RuntimeError('Variable "oferta" does not exist.', 15, $this->source); })()), "titol", [], "any", false, false, false, 15), "html", null, true);
        echo "
                    </div>
                    <div class=\"card-body\">
                        <blockquote class=\"blockquote mb-0\">
                        <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oferta"]) || array_key_exists("oferta", $context) ? $context["oferta"] : (function () { throw new RuntimeError('Variable "oferta" does not exist.', 19, $this->source); })()), "descripcio", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                        <footer class=\"blockquote-footer\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["fecha"]) || array_key_exists("fecha", $context) ? $context["fecha"] : (function () { throw new RuntimeError('Variable "fecha" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " <a href=\"/empresas/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new RuntimeError('Variable "empresa" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
            </div>
        </div>
    </div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "oferta/detalleOferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 20,  108 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'menu.html.twig' %}

{% block title %}JobOrWork{% endblock %}

{% block body %}

    <div class=\"container\">
        <br>
        <div class=\"row\">
            <div class=\"col-3\">
            </div>
            <div class=\"col-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        {{oferta.id}}.- {{oferta.titol}}
                    </div>
                    <div class=\"card-body\">
                        <blockquote class=\"blockquote mb-0\">
                        <p>{{oferta.descripcio}}</p>
                        <footer class=\"blockquote-footer\">{{fecha}} <a href=\"/empresas/{{empresa.id}}\">{{empresa.nom}}</a></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class=\"col-3\">
            </div>
        </div>
    </div>
    

{% endblock %}", "oferta/detalleOferta.html.twig", "/home/odin/JobOrWork/templates/oferta/detalleOferta.html.twig");
    }
}
