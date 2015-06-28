<?php

/* MojeBlogBundle:Default:blog_show.html.twig */
class __TwigTemplate_ca843af245aba54aeb200b45008ff3f45ae1bbef1018471cb873157105d0b48f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  <ul>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wpisy"]) ? $context["wpisy"] : $this->getContext($context, "wpisy")));
        foreach ($context['_seq'] as $context["_key"] => $context["wpis"]) {
            // line 7
            echo "      <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["wpis"], "tytul", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["wpis"], "tresc", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wpis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "MojeBlogBundle:Default:blog_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
