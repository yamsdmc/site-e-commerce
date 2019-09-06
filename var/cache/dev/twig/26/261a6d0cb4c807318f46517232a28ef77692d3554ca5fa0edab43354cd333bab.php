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

/* emails/recapitulatif.html.twig */
class __TwigTemplate_f2fe2486ba09bb07383e1b1d744a21b55d397c4bcfc1768b0973d75479faf021 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/recapitulatif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/recapitulatif.html.twig"));

        // line 1
        echo "<h2>Merci de votre commande, GOODBUY vous remercie !</h2>

<h3>Voici un recapitulatif de votre commande : </h3>
    <hr/>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 6
            echo "        <div> Votre article : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo " </div>
        <div> Nombre d'articles : ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "quantity", [], "any", false, false, false, 7), "html", null, true);
            echo " </div>
        <div> Prix : ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "price", [], "any", false, false, false, 8), "html", null, true);
            echo " €</div>
        <div> Poids : ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "weight", [], "any", false, false, false, 9), "html", null, true);
            echo " Kg</div>
        <hr/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <h4> Prix Final :  ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["final"]) || array_key_exists("final", $context) ? $context["final"] : (function () { throw new RuntimeError('Variable "final" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " €  (Promos et Code reduction compris)</h4>



    <div>Recapitulatif de vos informations.</div>

    <div>Livree a ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 19, $this->source); })()), "firstname", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 19, $this->source); })()), "lastname", [], "any", false, false, false, 19), "html", null, true);
        echo " </div>
    <div>Adresse de livraison :  ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 20, $this->source); })()), "adress", [], "any", false, false, false, 20), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 20, $this->source); })()), "city", [], "any", false, false, false, 20), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 20, $this->source); })()), "country", [], "any", false, false, false, 20)), "html", null, true);
        echo " </div>

<h3>Tout ces produits vous seront tres prochainement remis, en esperant vous revoir tres bientot sur GOODBUY !</h3>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/recapitulatif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  87 => 19,  78 => 13,  75 => 12,  66 => 9,  62 => 8,  58 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Merci de votre commande, GOODBUY vous remercie !</h2>

<h3>Voici un recapitulatif de votre commande : </h3>
    <hr/>
    {% for panier in paniers %}
        <div> Votre article : {{ panier.title }} </div>
        <div> Nombre d'articles : {{ panier.quantity }} </div>
        <div> Prix : {{ panier.price }} €</div>
        <div> Poids : {{ panier.weight }} Kg</div>
        <hr/>
    {% endfor %}

    <h4> Prix Final :  {{final}} €  (Promos et Code reduction compris)</h4>



    <div>Recapitulatif de vos informations.</div>

    <div>Livree a {{ infos.firstname }} {{ infos.lastname }} </div>
    <div>Adresse de livraison :  {{ infos.adress }} , {{ infos.city }}  {{ infos.country | upper  }} </div>

<h3>Tout ces produits vous seront tres prochainement remis, en esperant vous revoir tres bientot sur GOODBUY !</h3>
", "emails/recapitulatif.html.twig", "/home/yamsubunto/Bureau/back/Goodbuy/templates/emails/recapitulatif.html.twig");
    }
}
