<?php

/* ProjectSedBundle:Default:cursos.html.twig */
class __TwigTemplate_dab7e85eb0b2c6ae469ef0063fbb0bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProjectSedBundle:Default:base.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjectSedBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
<table border=1>
    <tr>
        <th>Docente</th>
        <th>Materia</th>
        <th>Grupo</th>
    </tr>

</table>
";
    }

    public function getTemplateName()
    {
        return "ProjectSedBundle:Default:cursos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
