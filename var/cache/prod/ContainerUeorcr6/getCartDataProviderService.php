<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\Module\PsEventbus\Provider\CartDataProvider' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] : $this->load('getCartRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] : $this->load('getCartProductRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter']) ? $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] : ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())) && false ?: '_'});
