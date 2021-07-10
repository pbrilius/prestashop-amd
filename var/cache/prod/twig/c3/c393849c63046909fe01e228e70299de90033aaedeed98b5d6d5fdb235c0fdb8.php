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

/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_9bbf81f4c9961148ff42a14641aef4332777c31d9d90b0a520316e9e5917163f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_tabs_container' => [$this, 'block_product_tabs_container'],
            'product_panel_essentials' => [$this, 'block_product_panel_essentials'],
            'product_panel_combinations' => [$this, 'block_product_panel_combinations'],
            'product_panel_shipping' => [$this, 'block_product_panel_shipping'],
            'product_panel_pricing' => [$this, 'block_product_panel_pricing'],
            'product_panel_seo' => [$this, 'block_product_panel_seo'],
            'product_panel_options' => [$this, 'block_product_panel_options'],
            'product_panel_modules' => [$this, 'block_product_panel_modules'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 331
        $context["js_translatable"] = twig_array_merge(["Are you sure to disable variations ? they will all be deleted" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete all the combinations. Do you wish to proceed?", [], "Admin.Catalog.Notification")],         // line 333
($context["js_translatable"] ?? null));
        // line 335
        $context["js_translatable"] = twig_array_merge(["Form update success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings updated.", [], "Admin.Notifications.Success"), "Form update errors" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unable to update settings.", [], "Admin.Notifications.Error"), "Delete" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].", [], "Admin.Notifications.Error"), ["[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}"]), "Drop images here" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop images here", [], "Admin.Catalog.Feature"), "or select files" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or select files", [], "Admin.Catalog.Feature"), "files recommandations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recommended size 800 x 800px for default theme.", [], "Admin.Catalog.Feature"), "files recommandations2" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("JPG, GIF or PNG format.", [], "Admin.Catalog.Feature"), "Cover" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", [], "Admin.Catalog.Feature"), "Are you sure to delete this?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete this?", [], "Admin.Notifications.Warning"), "This will delete the specific price. Do you wish to proceed?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete the specific price. Do you wish to proceed?", [], "Admin.Catalog.Notification"), "Quantities" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", [], "Admin.Catalog.Feature"), "Combinations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Catalog.Feature"), "Virtual product" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Virtual product", [], "Admin.Catalog.Feature"), "tax incl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax incl.", [], "Admin.Catalog.Feature"), "tax excl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax excl.", [], "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A pack of products can't have combinations.", [], "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 352
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", [], "array")), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A virtual product can't have combinations.", [], "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 353
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", [], "array"))],         // line 354
($context["js_translatable"] ?? null));
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "
  ";
        // line 29
        $context["hooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", ["id_product" => ($context["id_product"] ?? null)]);
        // line 30
        echo "
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    ";
        // line 33
        if ( !($context["editable"] ?? null)) {
            echo " <fieldset disabled id=\"field-disabled\"> ";
        }
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        $this->displayBlock('product_header', $context, $blocks);
        // line 46
        echo "
    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">
      ";
        // line 55
        echo "      ";
        $this->displayBlock('product_tabs_container', $context, $blocks);
        // line 58
        echo "      <div id=\"form_content\" class=\"tab-content\">

        ";
        // line 61
        echo "        ";
        $this->displayBlock('product_panel_essentials', $context, $blocks);
        // line 82
        echo "
        ";
        // line 84
        echo "        ";
        $this->displayBlock('product_panel_combinations', $context, $blocks);
        // line 106
        echo "
        ";
        // line 108
        echo "        ";
        $this->displayBlock('product_panel_shipping', $context, $blocks);
        // line 127
        echo "
        ";
        // line 129
        echo "        ";
        $this->displayBlock('product_panel_pricing', $context, $blocks);
        // line 136
        echo "
        ";
        // line 138
        echo "        ";
        $this->displayBlock('product_panel_seo', $context, $blocks);
        // line 144
        echo "
        ";
        // line 146
        echo "        ";
        $this->displayBlock('product_panel_options', $context, $blocks);
        // line 152
        echo "
        ";
        // line 154
        echo "        ";
        $this->displayBlock('product_panel_modules', $context, $blocks);
        // line 248
        echo "      </div>

      ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id_product", []), 'widget');
        echo "
      ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", []), 'widget');
        echo "

    </div>
    ";
        // line 255
        echo "    ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/footer.html.twig", ["preview_link" =>         // line 256
($context["preview_link"] ?? null), "preview_link_deactivate" =>         // line 257
($context["preview_link_deactivate"] ?? null), "is_shop_context" =>         // line 258
($context["is_shop_context"] ?? null), "editable" =>         // line 259
($context["editable"] ?? null), "is_active" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 260
($context["form"] ?? null), "step1", []), "vars", []), "value", []), "active", []), "productId" =>         // line 261
($context["id_product"] ?? null)]);
        // line 262
        echo "
    ";
        // line 263
        if ( !($context["editable"] ?? null)) {
            echo " </fieldset> ";
        }
        // line 264
        echo "  </form>


  ";
        // line 267
        $this->loadTemplate("@PrestaShop/Admin/Product/ProductPage/product.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 267, "1982536160")->display(twig_array_merge($context, ["id" => "confirmation_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", [], "Admin.Notifications.Warning"), "closable" => false, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", [], "Admin.Global"), "class" => "btn btn-outline-secondary btn-lg cancel"], 1 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", [], "Admin.Global"), "class" => "btn btn-primary btn-lg continue"]]]));
        // line 288
        echo "
";
    }

    // line 35
    public function block_product_header($context, array $blocks = [])
    {
        // line 36
        echo "      ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/header.html.twig", ["formName" => $this->getAttribute($this->getAttribute(        // line 37
($context["form"] ?? null), "step1", []), "name", []), "formType" => $this->getAttribute($this->getAttribute(        // line 38
($context["form"] ?? null), "step1", []), "type_product", []), "is_multishop_context" =>         // line 39
($context["is_multishop_context"] ?? null), "languages" =>         // line 40
($context["languages"] ?? null), "help_link" =>         // line 41
($context["help_link"] ?? null), "stats_link" =>         // line 42
($context["stats_link"] ?? null)]);
        // line 44
        echo "
    ";
    }

    // line 55
    public function block_product_tabs_container($context, array $blocks = [])
    {
        // line 56
        echo "        ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/tabs.html.twig", ["hooks" => ($context["hooks"] ?? null)]);
        echo "
      ";
    }

    // line 61
    public function block_product_panel_essentials($context, array $blocks = [])
    {
        // line 62
        echo "          ";
        $context["formQuantityShortcut"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", [], "any", false, true), "qty_0_shortcut", [], "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", []), "qty_0_shortcut", [])) : (null));
        // line 63
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/essentials.html.twig", ["formPackItems" => $this->getAttribute($this->getAttribute(        // line 64
($context["form"] ?? null), "step1", []), "inputPackItems", []), "productId" =>         // line 65
($context["id_product"] ?? null), "images" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 66
($context["form"] ?? null), "step1", []), "vars", []), "value", []), "images", []), "formShortDescription" => $this->getAttribute($this->getAttribute(        // line 67
($context["form"] ?? null), "step1", []), "description_short", []), "formDescription" => $this->getAttribute($this->getAttribute(        // line 68
($context["form"] ?? null), "step1", []), "description", []), "formFeatures" => $this->getAttribute($this->getAttribute(        // line 69
($context["form"] ?? null), "step1", []), "features", []), "formManufacturer" => $this->getAttribute($this->getAttribute(        // line 70
($context["form"] ?? null), "step1", []), "id_manufacturer", []), "formRelatedProducts" => $this->getAttribute($this->getAttribute(        // line 71
($context["form"] ?? null), "step1", []), "related_products", []), "is_combination_active" =>         // line 72
($context["is_combination_active"] ?? null), "has_combinations" =>         // line 73
($context["has_combinations"] ?? null), "formReference" => $this->getAttribute($this->getAttribute(        // line 74
($context["form"] ?? null), "step6", []), "reference", []), "formQuantityShortcut" =>         // line 75
($context["formQuantityShortcut"] ?? null), "formPriceShortcut" => $this->getAttribute($this->getAttribute(        // line 76
($context["form"] ?? null), "step1", []), "price_shortcut", []), "formPriceShortcutTTC" => $this->getAttribute($this->getAttribute(        // line 77
($context["form"] ?? null), "step1", []), "price_ttc_shortcut", []), "formCategories" => $this->getAttribute(        // line 78
($context["form"] ?? null), "step1", [])]);
        // line 80
        echo "
        ";
    }

    // line 84
    public function block_product_panel_combinations($context, array $blocks = [])
    {
        // line 85
        echo "          ";
        $context["formStockQuantity"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", [], "any", false, true), "qty_0", [], "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", []), "qty_0", [])) : (null));
        // line 86
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/combinations.html.twig", ["formDependsOnStocks" => $this->getAttribute($this->getAttribute(        // line 87
($context["form"] ?? null), "step3", []), "depends_on_stock", []), "productId" =>         // line 88
($context["id_product"] ?? null), "formStockQuantity" =>         // line 89
($context["formStockQuantity"] ?? null), "formStockMinimalQuantity" => $this->getAttribute($this->getAttribute(        // line 90
($context["form"] ?? null), "step3", []), "minimal_quantity", []), "formLowStockThreshold" => $this->getAttribute($this->getAttribute(        // line 91
($context["form"] ?? null), "step3", []), "low_stock_threshold", []), "formLocation" => $this->getAttribute($this->getAttribute(        // line 92
($context["form"] ?? null), "step3", []), "location", []), "formLowStockAlert" => $this->getAttribute($this->getAttribute(        // line 93
($context["form"] ?? null), "step3", []), "low_stock_alert", []), "formVirtualProduct" => $this->getAttribute($this->getAttribute(        // line 94
($context["form"] ?? null), "step3", []), "virtual_product", []), "asm_globally_activated" =>         // line 95
($context["asm_globally_activated"] ?? null), "formType" => $this->getAttribute($this->getAttribute(        // line 96
($context["form"] ?? null), "step1", []), "type_product", []), "formAdvancedStockManagement" => $this->getAttribute($this->getAttribute(        // line 97
($context["form"] ?? null), "step3", []), "advanced_stock_management", []), "formPackStockType" => $this->getAttribute($this->getAttribute(        // line 98
($context["form"] ?? null), "step3", []), "pack_stock_type", []), "formStep3" => $this->getAttribute(        // line 99
($context["form"] ?? null), "step3", []), "formCombinations" =>         // line 100
($context["formCombinations"] ?? null), "has_combinations" =>         // line 101
($context["has_combinations"] ?? null), "max_upload_size" =>         // line 102
($context["max_upload_size"] ?? null)]);
        // line 104
        echo "
        ";
    }

    // line 108
    public function block_product_panel_shipping($context, array $blocks = [])
    {
        // line 109
        echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">
                    ";
        // line 114
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_shipping.html.twig", ["form" => $this->getAttribute(        // line 115
($context["form"] ?? null), "step4", []), "asm_globally_activated" =>         // line 116
($context["asm_globally_activated"] ?? null), "isNotVirtual" => ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 117
($context["form"] ?? null), "step1", []), "type_product", []), "vars", []), "value", []) != "2"), "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 118
($context["form"] ?? null), "step3", []), "advanced_stock_management", []), "vars", []), "checked", []), "warehouses" =>         // line 119
($context["warehouses"] ?? null)]);
        // line 120
        echo "
                  </div>
                </div>
              </div>
            </div>
          </div>
        ";
    }

    // line 129
    public function block_product_panel_pricing($context, array $blocks = [])
    {
        // line 130
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/pricing.html.twig", ["pricingForm" => $this->getAttribute(        // line 131
($context["form"] ?? null), "step2", []), "is_multishop_context" =>         // line 132
($context["is_multishop_context"] ?? null), "productId" =>         // line 133
($context["id_product"] ?? null)]);
        // line 134
        echo "
        ";
    }

    // line 138
    public function block_product_panel_seo($context, array $blocks = [])
    {
        // line 139
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/seo.html.twig", ["seoForm" => $this->getAttribute(        // line 140
($context["form"] ?? null), "step5", []), "productId" =>         // line 141
($context["id_product"] ?? null)]);
        // line 142
        echo "
        ";
    }

    // line 146
    public function block_product_panel_options($context, array $blocks = [])
    {
        // line 147
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/options.html.twig", ["optionsForm" => $this->getAttribute(        // line 148
($context["form"] ?? null), "step6", []), "productId" =>         // line 149
($context["id_product"] ?? null)]);
        // line 150
        echo "
        ";
    }

    // line 154
    public function block_product_panel_modules($context, array $blocks = [])
    {
        // line 155
        echo "          ";
        if ( !twig_test_empty($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hooksArrayContent(($context["hooks"] ?? null)))) {
            // line 156
            echo "            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"container-fluid\">
                    <div class=\"row\">

                      ";
            // line 163
            echo "                      <div class=\"col-md-12\">
                        <div class=\"row module-selection\" style=\"display: none;\">
                          <div class=\"col-md-12 col-lg-7\">
                            ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 167
                echo "                              <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
                echo "\">
                                <div>
                                  <img class=\"top-logo\" src=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "\">
                                  <h2 class=\"text-ellipsis module-name-grid\">
                                    ";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "
                                  </h2>
                                  <div class=\"text-ellipsis small-text module-version\">
                                    ";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", []), "html", null, true);
                echo "
                                  </div>
                                </div>
                                <div class=\"small no-padding\">
                                  ";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []), "html", null, true);
                echo "
                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                          </div>
                          <div class=\"col-md-12 col-lg-5\">
                            <h2>";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                            <select class=\"modules-list-select\" data-toggle=\"select2\">
                              ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 187
                echo "                                <option value=\"module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "</option>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                            </select>
                          </div>
                        </div>

                        <div class=\"module-render-container all-modules\">
                          <p>
                            <h2>";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                            ";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules are relative to the product page of your shop.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />
                            ";
            // line 197
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To manage all your modules go to the [1]Installed module page[/1]", [], "Admin.Catalog.Feature"), ["[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"]);
            echo "
                          </p>
                          <div class=\"row\">
                            ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 201
                echo "                              <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"module-item-wrapper-grid\">
                                  <div class=\"module-item-heading-grid\">
                                    <img class=\"module-logo-thumb-grid\" src=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "img", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "\">
                                    <h3 class=\"text-ellipsis module-name-grid\">
                                      ";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "displayName", []), "html", null, true);
                echo "
                                    </h3>
                                    <div class=\"text-ellipsis small-text module-version-author-grid\">
                                      ";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "version", []), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "author", []), "html", null, true);
                echo "
                                    </div>
                                  </div>
                                  <div class=\"module-quick-description-grid small no-padding\">
                                    ";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "description", []), "html", null, true);
                echo "
                                  </div>
                                  <div class=\"module-container\">
                                    <div class=\"module-quick-action-grid clearfix\">
                                      <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", []), "html", null, true);
                echo "\">
                                        ";
                // line 218
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", [], "Admin.Actions"), "html", null, true);
                echo "
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                          </div>
                        </div>

                        ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 229
                echo "                          <div
                            id=\"module_";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", []), "html", null, true);
                echo "\"
                            class=\"module-render-container module-";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", []), "name", []), "html", null, true);
                echo "\"
                            style=\"display: none;\"
                          >
                            <div>
                              ";
                // line 235
                echo $this->getAttribute($context["module"], "content", []);
                echo "
                            </div>
                          </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        // line 247
        echo "        ";
    }

    // line 291
    public function block_javascripts($context, array $blocks = [])
    {
        // line 292
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/catalog_product.bundle.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_page.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 312
        echo twig_escape_filter($this->env, ($context["editable"] ?? null), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 312,  605 => 308,  601 => 307,  597 => 306,  593 => 305,  589 => 304,  585 => 303,  581 => 302,  577 => 301,  573 => 300,  569 => 299,  565 => 298,  561 => 297,  556 => 295,  552 => 294,  546 => 292,  543 => 291,  539 => 247,  529 => 239,  519 => 235,  512 => 231,  508 => 230,  505 => 229,  501 => 228,  496 => 225,  483 => 218,  479 => 217,  472 => 213,  463 => 209,  457 => 206,  450 => 204,  445 => 201,  441 => 200,  435 => 197,  431 => 196,  427 => 195,  419 => 189,  408 => 187,  404 => 186,  399 => 184,  395 => 182,  385 => 178,  376 => 174,  370 => 171,  363 => 169,  357 => 167,  353 => 166,  348 => 163,  340 => 156,  337 => 155,  334 => 154,  329 => 150,  327 => 149,  326 => 148,  324 => 147,  321 => 146,  316 => 142,  314 => 141,  313 => 140,  311 => 139,  308 => 138,  303 => 134,  301 => 133,  300 => 132,  299 => 131,  297 => 130,  294 => 129,  284 => 120,  282 => 119,  281 => 118,  280 => 117,  279 => 116,  278 => 115,  277 => 114,  270 => 109,  267 => 108,  262 => 104,  260 => 102,  259 => 101,  258 => 100,  257 => 99,  256 => 98,  255 => 97,  254 => 96,  253 => 95,  252 => 94,  251 => 93,  250 => 92,  249 => 91,  248 => 90,  247 => 89,  246 => 88,  245 => 87,  243 => 86,  240 => 85,  237 => 84,  232 => 80,  230 => 78,  229 => 77,  228 => 76,  227 => 75,  226 => 74,  225 => 73,  224 => 72,  223 => 71,  222 => 70,  221 => 69,  220 => 68,  219 => 67,  218 => 66,  217 => 65,  216 => 64,  214 => 63,  211 => 62,  208 => 61,  201 => 56,  198 => 55,  193 => 44,  191 => 42,  190 => 41,  189 => 40,  188 => 39,  187 => 38,  186 => 37,  184 => 36,  181 => 35,  176 => 288,  174 => 267,  169 => 264,  165 => 263,  162 => 262,  160 => 261,  159 => 260,  158 => 259,  157 => 258,  156 => 257,  155 => 256,  153 => 255,  147 => 251,  143 => 250,  139 => 248,  136 => 154,  133 => 152,  130 => 146,  127 => 144,  124 => 138,  121 => 136,  118 => 129,  115 => 127,  112 => 108,  109 => 106,  106 => 84,  103 => 82,  100 => 61,  96 => 58,  93 => 55,  85 => 49,  80 => 46,  77 => 35,  75 => 34,  71 => 33,  66 => 30,  64 => 29,  61 => 28,  58 => 27,  53 => 25,  51 => 354,  50 => 353,  49 => 352,  48 => 335,  46 => 333,  45 => 331,  39 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/home/povilasbrilius/.atom-projects/prestashop-amd/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}


/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_9bbf81f4c9961148ff42a14641aef4332777c31d9d90b0a520316e9e5917163f___1982536160 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 267
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 267);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 284
    public function block_content($context, array $blocks = [])
    {
        // line 285
        echo "      <div class=\"modal-body\"></div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 285,  688 => 284,  678 => 267,  612 => 312,  605 => 308,  601 => 307,  597 => 306,  593 => 305,  589 => 304,  585 => 303,  581 => 302,  577 => 301,  573 => 300,  569 => 299,  565 => 298,  561 => 297,  556 => 295,  552 => 294,  546 => 292,  543 => 291,  539 => 247,  529 => 239,  519 => 235,  512 => 231,  508 => 230,  505 => 229,  501 => 228,  496 => 225,  483 => 218,  479 => 217,  472 => 213,  463 => 209,  457 => 206,  450 => 204,  445 => 201,  441 => 200,  435 => 197,  431 => 196,  427 => 195,  419 => 189,  408 => 187,  404 => 186,  399 => 184,  395 => 182,  385 => 178,  376 => 174,  370 => 171,  363 => 169,  357 => 167,  353 => 166,  348 => 163,  340 => 156,  337 => 155,  334 => 154,  329 => 150,  327 => 149,  326 => 148,  324 => 147,  321 => 146,  316 => 142,  314 => 141,  313 => 140,  311 => 139,  308 => 138,  303 => 134,  301 => 133,  300 => 132,  299 => 131,  297 => 130,  294 => 129,  284 => 120,  282 => 119,  281 => 118,  280 => 117,  279 => 116,  278 => 115,  277 => 114,  270 => 109,  267 => 108,  262 => 104,  260 => 102,  259 => 101,  258 => 100,  257 => 99,  256 => 98,  255 => 97,  254 => 96,  253 => 95,  252 => 94,  251 => 93,  250 => 92,  249 => 91,  248 => 90,  247 => 89,  246 => 88,  245 => 87,  243 => 86,  240 => 85,  237 => 84,  232 => 80,  230 => 78,  229 => 77,  228 => 76,  227 => 75,  226 => 74,  225 => 73,  224 => 72,  223 => 71,  222 => 70,  221 => 69,  220 => 68,  219 => 67,  218 => 66,  217 => 65,  216 => 64,  214 => 63,  211 => 62,  208 => 61,  201 => 56,  198 => 55,  193 => 44,  191 => 42,  190 => 41,  189 => 40,  188 => 39,  187 => 38,  186 => 37,  184 => 36,  181 => 35,  176 => 288,  174 => 267,  169 => 264,  165 => 263,  162 => 262,  160 => 261,  159 => 260,  158 => 259,  157 => 258,  156 => 257,  155 => 256,  153 => 255,  147 => 251,  143 => 250,  139 => 248,  136 => 154,  133 => 152,  130 => 146,  127 => 144,  124 => 138,  121 => 136,  118 => 129,  115 => 127,  112 => 108,  109 => 106,  106 => 84,  103 => 82,  100 => 61,  96 => 58,  93 => 55,  85 => 49,  80 => 46,  77 => 35,  75 => 34,  71 => 33,  66 => 30,  64 => 29,  61 => 28,  58 => 27,  53 => 25,  51 => 354,  50 => 353,  49 => 352,  48 => 335,  46 => 333,  45 => 331,  39 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/home/povilasbrilius/.atom-projects/prestashop-amd/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}
