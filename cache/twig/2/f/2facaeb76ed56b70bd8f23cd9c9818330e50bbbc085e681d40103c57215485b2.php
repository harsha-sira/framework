<?php

/* @kinerity_bestanswer/event/overall_header_head_append.html */
class __TwigTemplate_2facaeb76ed56b70bd8f23cd9c9818330e50bbbc085e681d40103c57215485b2 extends Twig_Template
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
        $asset_file = "@kinerity_bestanswer/common.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('9');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/overall_header_head_append.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
