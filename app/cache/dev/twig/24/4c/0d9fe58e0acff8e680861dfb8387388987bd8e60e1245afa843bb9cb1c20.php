<?php

/* MojeBlogBundle:Default:blog_new.html.twig */
class __TwigTemplate_244c0d9fe58e0acff8e680861dfb8387388987bd8e60e1245afa843bb9cb1c20 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "tytul", array()), 'label');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "tytul", array()), 'errors');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "tytul", array()), 'widget');
        echo "
      </div>
      
      <div>
          ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "tresc", array()), 'label');
        echo "
          ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "tresc", array()), 'errors');
        echo "
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "tresc", array()), 'widget');
        echo "
      </div>

      <div>
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "obrazek", array()), 'label');
        echo "
          ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "obrazek", array()), 'errors');
        echo "
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["myForm"]) ? $context["myForm"] : $this->getContext($context, "myForm")), "obrazek", array()), 'widget');
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
        return "MojeBlogBundle:Default:blog_new.html.twig";
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
