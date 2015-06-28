<?php

/* MojeBlogBundle:Default:form.html.twig */
class __TwigTemplate_bddd891fee22f36dcc4f858dfcfb5d68e7697c6da676e09af0f2a8163204f9d2 extends Twig_Template
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
        echo "  <div class=\"contrainer\">
    
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), 'form_start');
        echo "
      ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), 'errors');
        echo "

      <div>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "name", array()), 'label');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "name", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "name", array()), 'widget');
        echo "
      </div>
      
      <div>
          ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "price", array()), 'label');
        echo "
          ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "price", array()), 'errors');
        echo "
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "price", array()), 'widget');
        echo "
      </div>

      <div>
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "description", array()), 'label');
        echo "
          ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "description", array()), 'errors');
        echo "
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "description", array()), 'widget');
        echo "
      </div>
      
      <div>
          ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "save", array()), 'widget');
        echo "
      </div>
      
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), 'form_end');
        echo "

  </div>
";
    }

    public function getTemplateName()
    {
        return "MojeBlogBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  98 => 28,  91 => 24,  87 => 23,  83 => 22,  76 => 18,  72 => 17,  68 => 16,  61 => 12,  57 => 11,  53 => 10,  47 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
