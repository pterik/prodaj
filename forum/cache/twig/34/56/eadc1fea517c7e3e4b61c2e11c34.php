<?php

/* user_welcome.txt */
class __TwigTemplate_3456eadc1fea517c7e3e4b61c2e11c34 extends Twig_Template
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
        echo "Subject: Вітаємо вас на \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\"

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Будь-ласка, збережіть це повідомлення. Інформація про ваш обліковий запис є наступною:

----------------------------
Ім'я: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Адреса форуму: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Ваш пароль збережено в нашій базі даних в зашифрованому вигляді, тому він не підлягає відновленню. Якщо ви все ж таки забудете ваш пароль, ви зможете отримати новий пароль на електронну пошту, вказану вами при реєстрації.

Дякуємо вам за реєстрацію!

";
        // line 17
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }
}
