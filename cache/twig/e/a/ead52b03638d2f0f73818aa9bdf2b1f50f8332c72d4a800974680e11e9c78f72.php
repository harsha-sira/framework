<?php

/* @vse_passwordstrength/event/overall_footer_after.html */
class __TwigTemplate_ead52b03638d2f0f73818aa9bdf2b1f50f8332c72d4a800974680e11e9c78f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null) || (isset($context["S_CHANGE_PASSWORD"]) ? $context["S_CHANGE_PASSWORD"] : null))) {
            // line 2
            echo "\t";
            $location = "password_strength.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("password_strength.html", "@vse_passwordstrength/event/overall_footer_after.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "@vse_passwordstrength/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
