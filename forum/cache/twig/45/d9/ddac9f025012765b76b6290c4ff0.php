<?php

/* acp_language.html */
class __TwigTemplate_45d9ddac9f025012765b76b6290c4ff0 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_DETAILS"]) ? $context["S_DETAILS"] : null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_DETAILS");
            echo "</h1>

\t<form id=\"details\" method=\"post\" action=\"";
            // line 11
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 14
            echo (isset($context["LANG_LOCAL_NAME"]) ? $context["LANG_LOCAL_NAME"] : null);
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"lang_english_name\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("LANG_ENGLISH_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"lang_english_name\" name=\"lang_english_name\" value=\"";
            // line 17
            echo (isset($context["LANG_ENGLISH_NAME"]) ? $context["LANG_ENGLISH_NAME"] : null);
            echo "\" maxlength=\"100\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"lang_local_name\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("LANG_LOCAL_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"lang_local_name\" name=\"lang_local_name\" value=\"";
            // line 21
            echo (isset($context["LANG_LOCAL_NAME"]) ? $context["LANG_LOCAL_NAME"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("LANG_ISO_CODE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 25
            echo (isset($context["LANG_ISO"]) ? $context["LANG_ISO"] : null);
            echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"lang_author\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("LANG_AUTHOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"lang_author\" name=\"lang_author\" value=\"";
            // line 29
            echo (isset($context["LANG_AUTHOR"]) ? $context["LANG_AUTHOR"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>

\t<p class=\"quick\" style=\"margin-top: -15px;\">
\t\t<input type=\"submit\" name=\"update_details\" class=\"button2\" value=\"";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 35
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

\t";
            // line 39
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "missing_files"))) {
                // line 40
                echo "\t\t<h3 class=\"error\">";
                echo $this->env->getExtension('phpbb')->lang("MISSING_FILES");
                echo "</h3>

\t\t<fieldset>
\t\t\t<legend>";
                // line 43
                echo $this->env->getExtension('phpbb')->lang("MISSING_LANG_FILES");
                echo "</legend>
\t\t\t";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "missing_files"));
                foreach ($context['_seq'] as $context["_key"] => $context["missing_files"]) {
                    // line 45
                    echo "\t\t\t&raquo; ";
                    echo $this->getAttribute((isset($context["missing_files"]) ? $context["missing_files"] : null), "FILE_NAME");
                    echo "<br />
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missing_files'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t</fieldset>
\t";
            }
            // line 49
            echo "
\t";
            // line 50
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "missing_varfile"))) {
                // line 51
                echo "\t\t<h3 class=\"error\">";
                echo $this->env->getExtension('phpbb')->lang("MISSING_VARS_EXPLAIN");
                echo "</h3>

\t\t<fieldset>
\t\t\t<legend>";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("MISSING_LANG_VARIABLES");
                echo "</legend>
\t\t\t";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "missing_varfile"));
                foreach ($context['_seq'] as $context["_key"] => $context["missing_varfile"]) {
                    // line 56
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 57
                    echo $this->getAttribute((isset($context["missing_varfile"]) ? $context["missing_varfile"] : null), "FILE_NAME");
                    echo "</label></dt>
\t\t\t\t";
                    // line 58
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["missing_varfile"]) ? $context["missing_varfile"] : null), "variable"));
                    foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                        // line 59
                        echo "\t\t\t\t<dd>";
                        echo $this->getAttribute((isset($context["variable"]) ? $context["variable"] : null), "VAR_NAME");
                        echo "</dd>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "\t\t\t</dl>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missing_varfile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t</fieldset>
\t";
            }
        } else {
            // line 66
            echo "
\t<h1>";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("ACP_LANGUAGE_PACKS");
            echo "</h1>

\t<p>";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("ACP_LANGUAGE_PACKS_EXPLAIN");
            echo "</p>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_NAME");
            echo "</th>
\t\t<th>";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_LOCALNAME");
            echo "</th>
\t\t<th>";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_ISO");
            echo "</th>
\t\t<th>";
            // line 77
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_USED_BY");
            echo "</th>
\t\t<th>";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("INSTALLED_LANGUAGE_PACKS");
            echo "</strong></td>
\t</tr>
\t";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "lang"));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 86
                echo "\t<tr>
\t\t<td><a href=\"";
                // line 87
                echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "U_DETAILS");
                echo "\">";
                echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "ENGLISH_NAME");
                echo "</a> ";
                echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "TAG");
                echo "</td>
\t\t<td>";
                // line 88
                echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "LOCAL_NAME");
                echo "</td>
\t\t<td style=\"text-align: center;\"><strong>";
                // line 89
                echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "ISO");
                echo "</strong></td>
\t\t<td style=\"text-align: center;\">";
                // line 90
                echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "USED_BY");
                echo "</td>
\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 91
                echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "U_DELETE");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notinst"))) {
                // line 95
                echo "\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
                // line 96
                echo $this->env->getExtension('phpbb')->lang("UNINSTALLED_LANGUAGE_PACKS");
                echo "</strong></td>
\t</tr>
\t";
            }
            // line 99
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notinst"));
            foreach ($context['_seq'] as $context["_key"] => $context["notinst"]) {
                // line 100
                echo "\t<tr>
\t\t<td>";
                // line 101
                echo $this->getAttribute((isset($context["notinst"]) ? $context["notinst"] : null), "NAME");
                echo "</td>
\t\t<td>";
                // line 102
                echo $this->getAttribute((isset($context["notinst"]) ? $context["notinst"] : null), "LOCAL_NAME");
                echo "</td>
\t\t<td style=\"text-align: center;\"><strong>";
                // line 103
                echo $this->getAttribute((isset($context["notinst"]) ? $context["notinst"] : null), "ISO");
                echo "</strong></td>
\t\t<td colspan=\"2\" style=\"text-align: center;\"><a href=\"";
                // line 104
                echo $this->getAttribute((isset($context["notinst"]) ? $context["notinst"] : null), "U_INSTALL");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("INSTALL");
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notinst'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t</tbody>
\t</table>

";
        }
        // line 111
        echo "
";
        // line 112
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_language.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 112,  337 => 111,  331 => 107,  320 => 104,  316 => 103,  312 => 102,  308 => 101,  305 => 100,  300 => 99,  294 => 96,  291 => 95,  288 => 94,  277 => 91,  273 => 90,  269 => 89,  265 => 88,  257 => 87,  254 => 86,  250 => 85,  245 => 83,  237 => 78,  233 => 77,  229 => 76,  225 => 75,  221 => 74,  213 => 69,  208 => 67,  205 => 66,  200 => 63,  193 => 61,  184 => 59,  180 => 58,  176 => 57,  173 => 56,  169 => 55,  165 => 54,  158 => 51,  156 => 50,  153 => 49,  149 => 47,  140 => 45,  136 => 44,  132 => 43,  125 => 40,  123 => 39,  116 => 35,  111 => 33,  104 => 29,  99 => 28,  93 => 25,  88 => 24,  82 => 21,  77 => 20,  71 => 17,  66 => 16,  61 => 14,  55 => 11,  50 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
