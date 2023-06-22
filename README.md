# Sozo_RemoveMetaKeywords module
The Sozo_RemoveMetaKeywords module removes the redundant `<meta name="keywords">` tag from the head section of your Magento website.

This module should work with other modules that manipulate Magento for SEO purposes. The module has only been tested with Mirasvit SEO module so far.

## Installation details

To install the module on your Magento site follow these steps:
1. Using Composer, run `composer require sozo/module-remove-meta-keywords`
2. Run `bin/magento setup:upgrade`
3. Run `bin/magento setup:di:compile`
4. Run `bin/magento setup:static-content:deploy`
5. Run `bin/magento cache:flush`

