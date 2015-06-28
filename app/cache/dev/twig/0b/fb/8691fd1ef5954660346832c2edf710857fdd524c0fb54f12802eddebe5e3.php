<?php

/* MojeDemo123Bundle:Moje:index.html.twig */
class __TwigTemplate_0bfb8691fd1ef5954660346832c2edf710857fdd524c0fb54f12802eddebe5e3 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "  Super ";
        echo twig_escape_filter($this->env, (isset($context["param"]) ? $context["param"] : $this->getContext($context, "param")), "html", null, true);
        echo " oraz ";
        echo twig_escape_filter($this->env, (isset($context["param3"]) ? $context["param3"] : $this->getContext($context, "param3")), "html", null, true);
        echo " a kolor to ";
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MojeDemo123Bundle:Moje:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
