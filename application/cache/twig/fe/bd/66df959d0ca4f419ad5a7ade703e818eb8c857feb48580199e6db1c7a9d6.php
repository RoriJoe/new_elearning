<?php

/* admin_siswa/edit_password.html */
class __TwigTemplate_febd66df959d0ca4f419ad5a7ade703e818eb8c857feb48580199e6db1c7a9d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-iframe.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-iframe.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<strong>Edit Password</strong>
";
        // line 5
        echo get_flashdata("edit");
        echo "

";
        // line 7
        echo form_open(((("admin/siswa/edit_password/" . (isset($context["status_id"]) ? $context["status_id"] : null)) . "/") . (isset($context["siswa_id"]) ? $context["siswa_id"] : null)));
        echo "
<table class=\"table table-striped\">
    <tbody>
        <tr>
            <th width=\"35%\">Password Baru <span class=\"text-error\">*</span></th>
            <td>
                <input type=\"password\" name=\"password\">
                <br>";
        // line 14
        echo form_error("password");
        echo "
            </td>
        <tr>
        <tr>
            <th>Ulangi Password <span class=\"text-error\">*</span></th>
            <td>
                <input type=\"password\" name=\"password2\">
                <br>";
        // line 21
        echo form_error("password2");
        echo "
            </td>
        <tr>
        <tr>
            <td colspan=\"2\">
                <button type=\"submit\" class=\"btn btn-primary\">Update</button>
            </td>
        </tr>
    </tbody>
</table>
";
        // line 31
        echo form_close();
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_siswa/edit_password.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 31,  59 => 21,  49 => 14,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
