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

/* component/index.html.twig */
class __TwigTemplate_2dd8e6f00e24957f4c2a1fad4725ec1fe614bf7829d1bc6f0b5bb21856774e33 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "component/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Component index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Family members</h1>
    <input style=\"width: 450px;\" class=\"form-control\" id=\"name\" name=\"name\" type=\"text\"> <br>
    <input style=\"margin-top: -20px; margin-left: 200px;\" class=\"btn btn-secondary\" onclick=\"send()\" type=\"submit\" value=\"Find\">

    <script>
        function send() {
            let name = document.getElementById(\"name\").value;
            let url = 'http://localhost:8000/members';
            if(name !== undefined && name !== ''){
                url = `http://localhost:8000/members/find/\${name}`;
            }
                window.location = url;
            
        }
    </script>
    <table style=\"width: 450px;\" class=\"table table-dark\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Description</th>
                <th>Member</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["components"]) || array_key_exists("components", $context) ? $context["components"] : (function () { throw new RuntimeError('Variable "components" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "age", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "description", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "member", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>
                    <a style=\"color: white; font-weight: bold;\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("component_show", ["id" => twig_get_attribute($this->env, $this->source, $context["component"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">show</a>
                    <a style=\"color: white; font-weight: bold;\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("component_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["component"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <tr>
                <td colspan=\"5\">NO RECORDS FOUND</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

    <a style=\"color: black\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("component_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "component/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 53,  153 => 50,  144 => 46,  135 => 42,  131 => 41,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  107 => 34,  102 => 33,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Component index{% endblock %}

{% block body %}
    <h1>Family members</h1>
    <input style=\"width: 450px;\" class=\"form-control\" id=\"name\" name=\"name\" type=\"text\"> <br>
    <input style=\"margin-top: -20px; margin-left: 200px;\" class=\"btn btn-secondary\" onclick=\"send()\" type=\"submit\" value=\"Find\">

    <script>
        function send() {
            let name = document.getElementById(\"name\").value;
            let url = 'http://localhost:8000/members';
            if(name !== undefined && name !== ''){
                url = `http://localhost:8000/members/find/\${name}`;
            }
                window.location = url;
            
        }
    </script>
    <table style=\"width: 450px;\" class=\"table table-dark\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Description</th>
                <th>Member</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for component in components %}
            <tr>
                <td>{{ component.id }}</td>
                <td>{{ component.name }}</td>
                <td>{{ component.age }}</td>
                <td>{{ component.description }}</td>
                <td>{{ component.member }}</td>
                <td>
                    <a style=\"color: white; font-weight: bold;\" href=\"{{ path('component_show', {'id': component.id}) }}\">show</a>
                    <a style=\"color: white; font-weight: bold;\" href=\"{{ path('component_edit', {'id': component.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">NO RECORDS FOUND</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a style=\"color: black\" href=\"{{ path('component_new') }}\">Create new</a>
{% endblock %}", "component/index.html.twig", "C:\\Users\\User\\Desktop\\symf_indiv\\templates\\Component\\index.html.twig");
    }
}
