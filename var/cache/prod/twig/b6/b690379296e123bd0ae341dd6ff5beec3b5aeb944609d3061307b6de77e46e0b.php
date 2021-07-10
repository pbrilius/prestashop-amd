<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_ab34d9f5fa61dbc8ef540063285be85391e8f0362391a3b48e1f80a285fe3aaf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.', 25, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 26, $this->getSourceContext());
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 27);
        // line 27
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 27, $this->getSourceContext());
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'form_help' => [$this, 'block_form_help'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 28
        echo "
";
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('button_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('money_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('date_widget', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('time_widget', $context, $blocks);
        // line 123
        echo "
";
        // line 124
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 248
        echo "
";
        // line 249
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 293
        echo "
";
        // line 294
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 335
        echo "
";
        // line 336
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 349
        echo "
";
        // line 350
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 356
        echo "
";
        // line 357
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 383
        echo "
";
        // line 384
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 426
        echo "
";
        // line 428
        echo "
";
        // line 429
        $this->displayBlock('form_label', $context, $blocks);
        // line 432
        echo "
";
        // line 433
        $this->displayBlock('choice_label', $context, $blocks);
        // line 438
        echo "
";
        // line 439
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 442
        echo "
";
        // line 443
        $this->displayBlock('radio_label', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 476
        echo "
";
        // line 478
        echo "
";
        // line 479
        $this->displayBlock('form_row', $context, $blocks);
        // line 486
        echo "
";
        // line 487
        $this->displayBlock('button_row', $context, $blocks);
        // line 492
        echo "
";
        // line 493
        $this->displayBlock('choice_row', $context, $blocks);
        // line 497
        echo "
";
        // line 498
        $this->displayBlock('date_row', $context, $blocks);
        // line 502
        echo "
";
        // line 503
        $this->displayBlock('time_row', $context, $blocks);
        // line 507
        echo "
";
        // line 508
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 512
        echo "
";
        // line 513
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 519
        echo "
";
        // line 520
        $this->displayBlock('radio_row', $context, $blocks);
        // line 526
        echo "
";
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('form_errors', $context, $blocks);
        // line 558
        echo "

";
        // line 561
        echo "
";
        // line 562
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 592
        echo "
";
        // line 593
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 645
        echo "
";
        // line 646
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 681
        echo "
";
        // line 682
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 706
        echo "
";
        // line 707
        $this->displayBlock('file_widget', $context, $blocks);
        // line 734
        echo "
";
        // line 735
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 751
        echo "
";
        // line 752
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 766
        echo "
";
        // line 767
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 792
        echo "
";
        // line 793
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 797
        echo "
";
        // line 798
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 802
        echo "
";
        // line 803
        $this->displayBlock('form_help', $context, $blocks);
        // line 808
        echo "
";
        // line 809
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 812
        echo "
";
        // line 813
        $this->displayBlock('text_widget', $context, $blocks);
    }

    // line 31
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 32
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ("file" != ($context["type"] ?? null)))) {
            // line 33
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 35
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 38
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 39
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        // line 40
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        // line 42
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 45
    public function block_button_widget($context, array $blocks = [])
    {
        // line 46
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 47
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 50
    public function block_money_widget($context, array $blocks = [])
    {
        // line 51
        echo "<div class=\"input-group money-type\">
        ";
        // line 52
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 53
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 54
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 55
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 58
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 59
        if (($context["prepend"] ?? null)) {
            // line 60
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 61
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 64
        echo "    </div>";
    }

    // line 67
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 68
        echo "<div class=\"input-group\">";
        // line 69
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 70
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 76
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 77
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 78
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 80
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 81
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget', ["datetime" => true]);
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget', ["datetime" => true]);
            // line 86
            echo "</div>";
        }
    }

    // line 90
    public function block_date_widget($context, array $blocks = [])
    {
        // line 91
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 95
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 96
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 98
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 99
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 100
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 101
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 103
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 104
                echo "</div>";
            }
        }
    }

    // line 109
    public function block_time_widget($context, array $blocks = [])
    {
        // line 110
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 114
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 115
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget');
            }
            // line 118
            echo "        ";
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 119
                echo "</div>";
            }
        }
    }

    // line 124
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 125
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-select"))]);
        // line 126
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 130
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) {
            // line 131
            echo "<div class=\"control-group\">";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 133
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 134
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 135
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "</div>";
        } else {
            // line 140
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 142
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 143
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 144
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "</div>";
        }
    }

    // line 151
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 152
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 153
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 156
            echo "<div class=\"checkbox\">";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 158
            echo "</div>";
        }
    }

    // line 162
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 163
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 164
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 167
            echo "<div class=\"radio\">";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 169
            echo "</div>";
        }
    }

    // line 173
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        // line 174
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 178
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "</ul>
    </div>";
    }

    // line 184
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 185
        echo "<li>
        ";
        // line 186
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "submitted_values", [], "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", []), [], "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 187
        echo "        ";
        if (($context["multiple"] ?? null)) {
            // line 188
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
                    ";
            // line 191
            if (($this->getAttribute(($context["child"] ?? null), "active", [], "any", true, true) && ($this->getAttribute(($context["child"] ?? null), "active", []) == 0))) {
                // line 192
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "</i>";
            } else {
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "
                    ";
            }
            // line 196
            echo "                    ";
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 197
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 199
            echo "                </label>
            </div>";
        } else {
            // line 202
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
                    ";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
            echo "
                    ";
            // line 206
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 207
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 209
            echo "                </label>
            </div>";
        }
        // line 212
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", [], "any", true, true)) {
            // line 213
            echo "            <ul>
                ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 215
                echo "                    ";
                $context["child"] = $context["item"];
                // line 216
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "</ul>
        ";
        }
        // line 220
        echo "    </li>";
    }

    // line 223
    public function block_translatefields_widget($context, array $blocks = [])
    {
        // line 224
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
        ";
        // line 226
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 227
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 229
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" data-locale=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
                echo "\" class=\"";
                if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "\">
                        ";
                // line 231
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", [])), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "        </ul>
        ";
        }
        // line 237
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 240
            echo "                <div data-locale=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "valid", [])) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\">
                    ";
            // line 241
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 242
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "        </div>
    </div>
";
    }

    // line 249
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        // line 250
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ("file" != ($context["type"] ?? null)))) {
            // line 251
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 253
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 256
    public function block_translate_text_widget($context, array $blocks = [])
    {
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 260
            echo "            ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 261
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 262
            echo "
            ";
            // line 263
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 264
                echo "                ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 265
                echo "            ";
            }
            // line 266
            echo "
            ";
            // line 267
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "attr", []);
            // line 268
            echo "
            ";
            // line 269
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "
        ";
        // line 272
        if ( !($context["hide_locales"] ?? null)) {
            // line 273
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
            >
                ";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
                ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 286
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "            </div>
        </div>
        ";
        }
        // line 291
        echo "    </div>";
    }

    // line 294
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 298
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 299
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "label", []));
            // line 300
            echo "
      ";
            // line 301
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "name", []))) {
                // line 302
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 303
                echo "      ";
            }
            // line 304
            echo "
      <div class=\"";
            // line 305
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 306
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "
    ";
        // line 310
        if (($context["show_locale_select"] ?? null)) {
            // line 311
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 319
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 322
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 323
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 324
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 325
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\"
            >
              ";
                // line 327
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "        </div>
      </div>
    ";
        }
        // line 333
        echo "  </div>";
    }

    // line 336
    public function block_date_picker_widget($context, array $blocks = [])
    {
        // line 337
        echo "  ";
        ob_start(function () { return ''; });
        // line 338
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " datepicker"))]);
        // line 339
        echo "    <div class=\"input-group datepicker\">
      <input type=\"text\" class=\"form-control\" data-format=\"";
        // line 340
        echo twig_escape_filter($this->env, ($context["date_format"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 350
    public function block_date_range_widget($context, array $blocks = [])
    {
        // line 351
        echo "  ";
        ob_start(function () { return ''; });
        // line 352
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", []), 'widget');
        echo "
    ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", []), 'widget');
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 357
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        // line 358
        echo "    ";
        ob_start(function () { return ''; });
        // line 359
        echo "        <button type=\"submit\"
                class=\"btn btn-primary grid-search-button d-block float-right\"
                title=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
                name=\"";
        // line 362
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      ";
        // line 367
        if (($context["show_reset_button"] ?? null)) {
            // line 368
            echo "          <div class=\"js-grid-reset-button\">
          <div class=\"clearfix\"></div>
            <button type=\"reset\"
                    name=\"";
            // line 371
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block grid-reset-button float-right\"
                    data-url=\"";
            // line 373
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                    data-redirect=\"";
            // line 374
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
            // line 377
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
            </button>
          </div>
      ";
        }
        // line 381
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 384
    public function block_switch_widget($context, array $blocks = [])
    {
        // line 385
        echo "    ";
        ob_start(function () { return ''; });
        // line 386
        echo "    <span class=\"ps-switch\">
        ";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 388
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . $this->getAttribute($context["choice"], "value", []));
            // line 389
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
            <label for=\"";
            // line 390
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 397
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        // line 398
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 402
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\">";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 414
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 415
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 416
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "file_name", [], "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 417
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "mime", [], "array"), "html", null, true);
            echo "</td>
              </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
    }

    // line 429
    public function block_form_label($context, array $blocks = [])
    {
        // line 430
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 433
    public function block_choice_label($context, array $blocks = [])
    {
        // line 435
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 436
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 439
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 440
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 443
    public function block_radio_label($context, array $blocks = [])
    {
        // line 444
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 447
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 448
        echo "    ";
        // line 449
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 450
            echo "      ";
            if (($context["required"] ?? null)) {
                // line 451
                echo "        ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
                // line 452
                echo "      ";
            }
            // line 453
            echo "      ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 454
                echo "          ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 455
                echo "      ";
            }
            // line 456
            echo "      ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 457
                echo "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 458
                echo "      ";
            }
            // line 459
            echo "
      ";
            // line 460
            if (((isset($context["material_design"]) || array_key_exists("material_design", $context)) || $this->getAttribute(($context["attr"] ?? null), "material_design", [], "any", true, true))) {
                // line 461
                echo "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 462
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 463
                echo ($context["widget"] ?? null);
                // line 464
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 465
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 466
                echo "</label>
        </div>
      ";
            } else {
                // line 469
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 470
                echo ($context["widget"] ?? null);
                // line 471
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 472
                echo "</label>
      ";
            }
            // line 474
            echo "    ";
        }
    }

    // line 479
    public function block_form_row($context, array $blocks = [])
    {
        // line 480
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 481
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 482
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 483
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 484
        echo "</div>";
    }

    // line 487
    public function block_button_row($context, array $blocks = [])
    {
        // line 488
        echo "<div class=\"form-group\">";
        // line 489
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 490
        echo "</div>";
    }

    // line 493
    public function block_choice_row($context, array $blocks = [])
    {
        // line 494
        $context["force_error"] = true;
        // line 495
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 498
    public function block_date_row($context, array $blocks = [])
    {
        // line 499
        $context["force_error"] = true;
        // line 500
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 503
    public function block_time_row($context, array $blocks = [])
    {
        // line 504
        $context["force_error"] = true;
        // line 505
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 508
    public function block_datetime_row($context, array $blocks = [])
    {
        // line 509
        $context["force_error"] = true;
        // line 510
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 513
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 514
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 515
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 516
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 517
        echo "</div>";
    }

    // line 520
    public function block_radio_row($context, array $blocks = [])
    {
        // line 521
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 522
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 523
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 524
        echo "</div>";
    }

    // line 529
    public function block_form_errors($context, array $blocks = [])
    {
        // line 530
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 531
            echo "<div class=\"alert alert-danger\">";
            // line 532
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 533
                echo "<ul class=\"alert-text\">";
                // line 534
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 535
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 536
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 537
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 538
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 539
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 542
                echo "</ul>";
            } else {
                // line 544
                echo "<div class=\"alert-text\">";
                // line 545
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 546
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 547
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 548
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 549
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 550
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 553
                echo "</div>";
            }
            // line 555
            echo "</div>";
        }
    }

    // line 562
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        // line 563
        echo "  ";
        ob_start(function () { return ''; });
        // line 564
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input type=\"checkbox\" class=\"js-choice-table-select-all\">
                  <i class=\"md-checkbox-control\"></i>
                  ";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 580
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 581
            echo "          <tr>
            <td>
              ";
            // line 583
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 587
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 593
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        // line 594
        echo "  ";
        ob_start(function () { return ''; });
        // line 595
        echo "    <div class=\"choice-table table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
        // line 599
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</th>
            ";
        // line 600
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 601
            echo "              <th class=\"text-center\">
                ";
            // line 602
            if (($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", []) && !twig_in_filter($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "name", []), ($context["headers_to_disable"] ?? null)))) {
                // line 603
                echo "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                // line 605
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) + 1), "html", null, true);
                echo "\"
                     data-column-checked=\"false\"
                  >
                    ";
                // line 608
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
                  </a>
                ";
            } else {
                // line 611
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
                ";
            }
            // line 613
            echo "              </th>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 615
        echo "          </tr>
        </thead>
        <tbody>
        ";
        // line 618
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 619
            echo "          <tr>
            <td>
              ";
            // line 621
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 623
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 624
                echo "              <td class=\"text-center\">
                ";
                // line 625
                if ($this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true), $context["child_choice_name"], [], "array", true, true)) {
                    // line 626
                    echo "                  ";
                    $context["entry_index"] = $this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array"), $context["child_choice_name"], [], "array");
                    // line 627
                    echo "
                  ";
                    // line 628
                    if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", [])) {
                        // line 629
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 631
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget');
                        echo "
                  ";
                    }
                    // line 633
                    echo "                ";
                } else {
                    // line 634
                    echo "                  --
                ";
                }
                // line 636
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 638
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 640
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 646
    public function block_translatable_widget($context, array $blocks = [])
    {
        // line 647
        echo "<div class=\"input-group locale-input-group js-locale-input-group d-flex\">
    ";
        // line 648
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 649
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 650
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 651
            echo "      ";
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 652
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 653
                echo "      ";
            }
            // line 654
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
        ";
            // line 655
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 658
        echo "    ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 659
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                ";
            // line 663
            if ((isset($context["change_form_language_url"]) || array_key_exists("change_form_language_url", $context))) {
                // line 664
                echo "                  data-change-language-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "change_form_language_url", []), "html", null, true);
                echo "\"
                ";
            }
            // line 666
            echo "                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 668
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 670
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>
        <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 672
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 673
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 674
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 676
            echo "        </div>
      </div>
    ";
        }
        // line 679
        echo "  </div>";
    }

    // line 682
    public function block_birthday_widget($context, array $blocks = [])
    {
        // line 683
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 684
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 686
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 687
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 688
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 690
            echo "
    ";
            // line 691
            $context["yearWidget"] = (("<div class=\"col pl-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget')) . "</div>");
            // line 692
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget')) . "</div>");
            // line 693
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')) . "</div>");
            // line 695
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 696
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 697
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 698
($context["dayWidget"] ?? null)]);
            // line 701
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 702
                echo "</div>";
            }
        }
    }

    // line 707
    public function block_file_widget($context, array $blocks = [])
    {
        // line 708
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 710
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 714
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(        // line 715
($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->env->getExtension('PrestaShopBundle\Twig\ContextIsoCodeProviderExtension')->getIsoCode()]);
        // line 720
        if (($this->getAttribute(($context["attr"] ?? null), "disabled", [], "any", true, true) && $this->getAttribute(($context["attr"] ?? null), "disabled", []))) {
            // line 721
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($this->getAttribute(            // line 722
($context["attr"] ?? null), "class", []) . " disabled")]);
            // line 724
            echo "    ";
        }
        // line 725
        echo "
    ";
        // line 726
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

    <label class=\"custom-file-label\" for=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
      ";
        // line 729
        $context["attributes"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []);
        // line 730
        echo "      ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["attributes"] ?? null), "placeholder", [], "any", true, true)) ? ($this->getAttribute(($context["attributes"] ?? null), "placeholder", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>
";
    }

    // line 735
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        // line 736
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "is_allowed_to_display", [])) {
            // line 737
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 739
            $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 740
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 742
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 743
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 744
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 752
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        // line 753
        echo "  <div class=\"input-group\">";
        // line 754
        $this->displayBlock("form_widget", $context, $blocks);
        // line 755
        echo "<span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 758
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 759
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 761
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
";
    }

    // line 767
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        // line 768
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 769
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 773
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 774
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 776
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 778
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 780
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 783
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 784
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 786
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 788
        echo "
    </em>
  </small>
";
    }

    // line 793
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        // line 794
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 795
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 798
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        // line 799
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 800
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 803
    public function block_form_help($context, array $blocks = [])
    {
        // line 804
        echo "  ";
        if (($context["help"] ?? null)) {
            // line 805
            echo "    <small class=\"form-text\">";
            echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            echo "</small>
  ";
        }
    }

    // line 809
    public function block_custom_content_widget($context, array $blocks = [])
    {
        // line 810
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 810)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 813
    public function block_text_widget($context, array $blocks = [])
    {
        // line 814
        echo "  ";
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 815
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 817
        echo "
  ";
        // line 818
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 820
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 821
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 822
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 823
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 825
            echo "    </datalist>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2265 => 825,  2256 => 823,  2252 => 822,  2247 => 821,  2245 => 820,  2240 => 818,  2237 => 817,  2234 => 815,  2231 => 814,  2228 => 813,  2223 => 810,  2220 => 809,  2212 => 805,  2209 => 804,  2206 => 803,  2200 => 800,  2195 => 799,  2192 => 798,  2186 => 795,  2181 => 794,  2178 => 793,  2171 => 788,  2169 => 786,  2168 => 784,  2167 => 783,  2161 => 780,  2157 => 778,  2154 => 776,  2151 => 774,  2149 => 773,  2147 => 769,  2145 => 768,  2142 => 767,  2133 => 761,  2128 => 759,  2124 => 758,  2119 => 755,  2117 => 754,  2115 => 753,  2112 => 752,  2101 => 744,  2097 => 743,  2093 => 742,  2089 => 740,  2087 => 739,  2083 => 737,  2080 => 736,  2077 => 735,  2068 => 730,  2066 => 729,  2062 => 728,  2057 => 726,  2054 => 725,  2051 => 724,  2049 => 722,  2047 => 721,  2045 => 720,  2043 => 715,  2042 => 714,  2035 => 710,  2031 => 708,  2028 => 707,  2022 => 702,  2020 => 701,  2018 => 698,  2017 => 697,  2016 => 696,  2015 => 695,  2012 => 693,  2009 => 692,  2007 => 691,  2004 => 690,  1999 => 688,  1997 => 687,  1995 => 686,  1992 => 684,  1989 => 683,  1986 => 682,  1982 => 679,  1977 => 676,  1966 => 674,  1962 => 673,  1958 => 672,  1953 => 670,  1948 => 668,  1944 => 666,  1938 => 664,  1936 => 663,  1930 => 659,  1927 => 658,  1918 => 655,  1913 => 654,  1910 => 653,  1907 => 652,  1904 => 651,  1901 => 650,  1898 => 649,  1894 => 648,  1891 => 647,  1888 => 646,  1880 => 640,  1873 => 638,  1866 => 636,  1862 => 634,  1859 => 633,  1853 => 631,  1847 => 629,  1845 => 628,  1842 => 627,  1839 => 626,  1837 => 625,  1834 => 624,  1830 => 623,  1825 => 621,  1821 => 619,  1817 => 618,  1812 => 615,  1797 => 613,  1791 => 611,  1785 => 608,  1779 => 605,  1775 => 603,  1773 => 602,  1770 => 601,  1753 => 600,  1749 => 599,  1743 => 595,  1740 => 594,  1737 => 593,  1729 => 587,  1719 => 583,  1715 => 581,  1711 => 580,  1701 => 573,  1690 => 564,  1687 => 563,  1684 => 562,  1679 => 555,  1676 => 553,  1669 => 550,  1667 => 549,  1666 => 548,  1665 => 547,  1663 => 546,  1659 => 545,  1657 => 544,  1654 => 542,  1647 => 539,  1645 => 538,  1644 => 537,  1643 => 536,  1641 => 535,  1637 => 534,  1635 => 533,  1633 => 532,  1631 => 531,  1629 => 530,  1626 => 529,  1622 => 524,  1620 => 523,  1618 => 522,  1612 => 521,  1609 => 520,  1605 => 517,  1603 => 516,  1601 => 515,  1595 => 514,  1592 => 513,  1588 => 510,  1586 => 509,  1583 => 508,  1579 => 505,  1577 => 504,  1574 => 503,  1570 => 500,  1568 => 499,  1565 => 498,  1561 => 495,  1559 => 494,  1556 => 493,  1552 => 490,  1550 => 489,  1548 => 488,  1545 => 487,  1541 => 484,  1539 => 483,  1537 => 482,  1535 => 481,  1529 => 480,  1526 => 479,  1521 => 474,  1517 => 472,  1515 => 471,  1513 => 470,  1498 => 469,  1493 => 466,  1491 => 465,  1489 => 464,  1487 => 463,  1473 => 462,  1470 => 461,  1468 => 460,  1465 => 459,  1462 => 458,  1459 => 457,  1456 => 456,  1453 => 455,  1450 => 454,  1447 => 453,  1444 => 452,  1441 => 451,  1438 => 450,  1435 => 449,  1433 => 448,  1430 => 447,  1426 => 444,  1423 => 443,  1419 => 440,  1416 => 439,  1412 => 436,  1410 => 435,  1407 => 433,  1403 => 430,  1400 => 429,  1391 => 420,  1374 => 417,  1370 => 416,  1366 => 415,  1363 => 414,  1346 => 413,  1340 => 409,  1336 => 408,  1332 => 407,  1324 => 402,  1318 => 399,  1313 => 398,  1310 => 397,  1303 => 392,  1285 => 390,  1267 => 389,  1264 => 388,  1247 => 387,  1244 => 386,  1241 => 385,  1238 => 384,  1233 => 381,  1226 => 377,  1220 => 374,  1216 => 373,  1211 => 371,  1206 => 368,  1204 => 367,  1199 => 365,  1193 => 362,  1189 => 361,  1185 => 359,  1182 => 358,  1179 => 357,  1172 => 353,  1167 => 352,  1164 => 351,  1161 => 350,  1140 => 340,  1137 => 339,  1134 => 338,  1131 => 337,  1128 => 336,  1124 => 333,  1119 => 330,  1110 => 327,  1105 => 325,  1102 => 324,  1098 => 323,  1094 => 322,  1088 => 319,  1083 => 317,  1075 => 311,  1073 => 310,  1070 => 309,  1061 => 306,  1057 => 305,  1054 => 304,  1051 => 303,  1048 => 302,  1046 => 301,  1043 => 300,  1040 => 299,  1037 => 298,  1033 => 297,  1028 => 295,  1025 => 294,  1021 => 291,  1016 => 288,  1005 => 286,  1001 => 285,  997 => 284,  991 => 281,  986 => 279,  978 => 273,  976 => 272,  973 => 271,  965 => 269,  962 => 268,  960 => 267,  957 => 266,  954 => 265,  951 => 264,  949 => 263,  946 => 262,  943 => 261,  940 => 260,  936 => 259,  931 => 257,  928 => 256,  924 => 253,  921 => 251,  919 => 250,  916 => 249,  910 => 245,  901 => 242,  897 => 241,  876 => 240,  872 => 239,  868 => 237,  864 => 235,  854 => 231,  844 => 230,  841 => 229,  837 => 228,  834 => 227,  832 => 226,  828 => 225,  823 => 224,  820 => 223,  816 => 220,  812 => 218,  795 => 216,  792 => 215,  775 => 214,  772 => 213,  769 => 212,  765 => 209,  759 => 207,  757 => 206,  753 => 205,  745 => 204,  741 => 202,  737 => 199,  731 => 197,  728 => 196,  723 => 194,  718 => 192,  716 => 191,  708 => 190,  704 => 188,  701 => 187,  699 => 186,  696 => 185,  693 => 184,  688 => 180,  671 => 178,  654 => 177,  651 => 176,  645 => 174,  642 => 173,  637 => 169,  635 => 168,  633 => 167,  630 => 165,  628 => 164,  626 => 163,  623 => 162,  618 => 158,  616 => 157,  614 => 156,  611 => 154,  609 => 153,  607 => 152,  604 => 151,  599 => 147,  593 => 144,  592 => 143,  591 => 142,  587 => 141,  583 => 140,  580 => 138,  574 => 135,  573 => 134,  572 => 133,  568 => 132,  566 => 131,  564 => 130,  561 => 129,  557 => 126,  555 => 125,  552 => 124,  546 => 119,  543 => 118,  535 => 117,  530 => 115,  528 => 114,  526 => 113,  523 => 111,  521 => 110,  518 => 109,  512 => 104,  510 => 103,  508 => 101,  507 => 100,  506 => 99,  505 => 98,  500 => 96,  498 => 95,  496 => 94,  493 => 92,  491 => 91,  488 => 90,  483 => 86,  481 => 85,  479 => 84,  477 => 83,  475 => 82,  471 => 81,  469 => 80,  466 => 78,  464 => 77,  461 => 76,  454 => 70,  452 => 69,  450 => 68,  447 => 67,  443 => 64,  437 => 61,  434 => 60,  432 => 59,  430 => 58,  424 => 55,  421 => 54,  418 => 53,  416 => 52,  413 => 51,  410 => 50,  406 => 47,  404 => 46,  401 => 45,  397 => 42,  395 => 40,  393 => 39,  390 => 38,  386 => 35,  383 => 33,  381 => 32,  378 => 31,  374 => 813,  371 => 812,  369 => 809,  366 => 808,  364 => 803,  361 => 802,  359 => 798,  356 => 797,  354 => 793,  351 => 792,  349 => 767,  346 => 766,  344 => 752,  341 => 751,  339 => 735,  336 => 734,  334 => 707,  331 => 706,  329 => 682,  326 => 681,  324 => 646,  321 => 645,  319 => 593,  316 => 592,  314 => 562,  311 => 561,  307 => 558,  305 => 529,  302 => 528,  299 => 526,  297 => 520,  294 => 519,  292 => 513,  289 => 512,  287 => 508,  284 => 507,  282 => 503,  279 => 502,  277 => 498,  274 => 497,  272 => 493,  269 => 492,  267 => 487,  264 => 486,  262 => 479,  259 => 478,  256 => 476,  254 => 447,  251 => 446,  249 => 443,  246 => 442,  244 => 439,  241 => 438,  239 => 433,  236 => 432,  234 => 429,  231 => 428,  228 => 426,  226 => 397,  223 => 396,  221 => 384,  218 => 383,  216 => 357,  213 => 356,  211 => 350,  208 => 349,  206 => 336,  203 => 335,  201 => 294,  198 => 293,  196 => 256,  193 => 255,  191 => 249,  188 => 248,  186 => 223,  183 => 222,  181 => 184,  178 => 183,  176 => 173,  173 => 172,  171 => 162,  168 => 161,  166 => 151,  163 => 150,  161 => 129,  158 => 128,  156 => 124,  153 => 123,  151 => 109,  148 => 108,  146 => 90,  143 => 89,  141 => 76,  138 => 75,  136 => 67,  133 => 66,  131 => 50,  128 => 49,  126 => 45,  123 => 44,  121 => 38,  118 => 37,  116 => 31,  113 => 30,  110 => 28,  39 => 27,  32 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "/home/povilasbrilius/.atom-projects/prestashop-amd/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
