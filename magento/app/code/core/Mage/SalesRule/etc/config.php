<?php
echo '<pre>';
echo '&lt;?xml version="1.0"?&gt;
&lt;!--
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_SalesRule
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
--&gt;
&lt;config&gt;
    &lt;modules&gt;
        &lt;Mage_SalesRule&gt;
            &lt;version&gt;1.6.0.3&lt;/version&gt;
        &lt;/Mage_SalesRule&gt;
    &lt;/modules&gt;
    &lt;global&gt;
        &lt;helpers&gt;
            &lt;salesrule&gt;
                &lt;class&gt;Mage_SalesRule_Helper&lt;/class&gt;
            &lt;/salesrule&gt;
        &lt;/helpers&gt;
        &lt;models&gt;
            &lt;salesrule&gt;
                &lt;class&gt;Mage_SalesRule_Model&lt;/class&gt;
                &lt;resourceModel&gt;salesrule_resource&lt;/resourceModel&gt;
            &lt;/salesrule&gt;
            &lt;salesrule_resource&gt;
                &lt;class&gt;Mage_SalesRule_Model_Resource&lt;/class&gt;
                &lt;deprecatedNode&gt;salesrule_mysql4&lt;/deprecatedNode&gt;
                &lt;entities&gt;
                    &lt;rule&gt;
                        &lt;table&gt;salesrule&lt;/table&gt;
                    &lt;/rule&gt;
                    &lt;rule_customer&gt;
                        &lt;table&gt;salesrule_customer&lt;/table&gt;
                    &lt;/rule_customer&gt;
                    &lt;label&gt;
                        &lt;table&gt;salesrule_label&lt;/table&gt;
                    &lt;/label&gt;
                    &lt;coupon&gt;
                        &lt;table&gt;salesrule_coupon&lt;/table&gt;
                    &lt;/coupon&gt;
                    &lt;coupon_usage&gt;
                        &lt;table&gt;salesrule_coupon_usage&lt;/table&gt;
                    &lt;/coupon_usage&gt;
                    &lt;coupon_aggregated&gt;
                        &lt;table&gt;coupon_aggregated&lt;/table&gt;
                    &lt;/coupon_aggregated&gt;
                    &lt;coupon_aggregated_updated&gt;
                        &lt;table&gt;coupon_aggregated_updated&lt;/table&gt;
                    &lt;/coupon_aggregated_updated&gt;
                    &lt;coupon_aggregated_order&gt;
                        &lt;table&gt;coupon_aggregated_order&lt;/table&gt;
                    &lt;/coupon_aggregated_order&gt;
                    &lt;product_attribute&gt;
                        &lt;table&gt;salesrule_product_attribute&lt;/table&gt;
                    &lt;/product_attribute&gt;
                    &lt;website&gt;
                        &lt;table&gt;salesrule_website&lt;/table&gt;
                    &lt;/website&gt;
                    &lt;customer_group&gt;
                        &lt;table&gt;salesrule_customer_group&lt;/table&gt;
                    &lt;/customer_group&gt;
                &lt;/entities&gt;
            &lt;/salesrule_resource&gt;
        &lt;/models&gt;
        &lt;resources&gt;
            &lt;salesrule_setup&gt;
                &lt;setup&gt;
                    &lt;module&gt;Mage_SalesRule&lt;/module&gt;
                    &lt;class&gt;Mage_Sales_Model_Resource_Setup&lt;/class&gt;
                &lt;/setup&gt;
            &lt;/salesrule_setup&gt;
        &lt;/resources&gt;
        &lt;fieldsets&gt;
            &lt;sales_convert_quote_address&gt;
                &lt;discount_description&gt;
                    &lt;to_order&gt;*&lt;/to_order&gt;
                &lt;/discount_description&gt;
                &lt;shipping_discount_amount&gt;
                    &lt;to_order&gt;*&lt;/to_order&gt;
                &lt;/shipping_discount_amount&gt;
                &lt;base_shipping_discount_amount&gt;
                    &lt;to_order&gt;*&lt;/to_order&gt;
                &lt;/base_shipping_discount_amount&gt;
            &lt;/sales_convert_quote_address&gt;
        &lt;/fieldsets&gt;
        &lt;events&gt;
            &lt;sales_order_place_after&gt;
                &lt;observers&gt;
                    &lt;salesrule&gt;
                        &lt;class&gt;salesrule/observer&lt;/class&gt;
                        &lt;method&gt;sales_order_afterPlace&lt;/method&gt;
                    &lt;/salesrule&gt;
                &lt;/observers&gt;
            &lt;/sales_order_place_after&gt;
            &lt;sales_quote_config_get_product_attributes&gt;
                &lt;observers&gt;
                    &lt;salesrule&gt;
                        &lt;class&gt;salesrule/observer&lt;/class&gt;
                        &lt;method&gt;addProductAttributes&lt;/method&gt;
                    &lt;/salesrule&gt;
                &lt;/observers&gt;
            &lt;/sales_quote_config_get_product_attributes&gt;
            &lt;sales_convert_quote_to_order&gt;
                &lt;observers&gt;
                    &lt;salesrule&gt;
                        &lt;class&gt;salesrule/observer&lt;/class&gt;
                        &lt;method&gt;addSalesRuleNameToOrder&lt;/method&gt;
                    &lt;/salesrule&gt;
                &lt;/observers&gt;
            &lt;/sales_convert_quote_to_order&gt;
        &lt;/events&gt;
        &lt;sales&gt;
            &lt;quote&gt;
                &lt;totals&gt;
                    &lt;freeshipping&gt;
                        &lt;class&gt;salesrule/quote_freeshipping&lt;/class&gt;
                        &lt;after&gt;subtotal&lt;/after&gt;
                        &lt;before&gt;tax_subtotal,shipping&lt;/before&gt;
                    &lt;/freeshipping&gt;
                    &lt;discount&gt;
                        &lt;class&gt;salesrule/quote_discount&lt;/class&gt;
                        &lt;after&gt;subtotal,shipping&lt;/after&gt;
                        &lt;before&gt;grand_total&lt;/before&gt;
                    &lt;/discount&gt;
                &lt;/totals&gt;
                &lt;nominal_totals&gt;
                    &lt;nominal_discount&gt;
                        &lt;class&gt;salesrule/quote_nominal_discount&lt;/class&gt;
                        &lt;sort_order&gt;550&lt;/sort_order&gt;
                    &lt;/nominal_discount&gt;
                &lt;/nominal_totals&gt;
            &lt;/quote&gt;
        &lt;/sales&gt;
        &lt;salesrule&gt;
            &lt;coupon&gt;
                &lt;separator&gt;-&lt;/separator&gt;
                &lt;charset&gt;
                    &lt;alphanum&gt;ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789&lt;/alphanum&gt;
                    &lt;alpha&gt;ABCDEFGHIJKLMNOPQRSTUVWXYZ&lt;/alpha&gt;
                    &lt;num&gt;0123456789&lt;/num&gt;
                &lt;/charset&gt;
            &lt;/coupon&gt;
        &lt;/salesrule&gt;
    &lt;/global&gt;
    &lt;adminhtml&gt;
        &lt;translate&gt;
            &lt;modules&gt;
                &lt;Mage_SalesRule&gt;
                    &lt;files&gt;
                        &lt;default&gt;Mage_SalesRule.csv&lt;/default&gt;
                    &lt;/files&gt;
                &lt;/Mage_SalesRule&gt;
            &lt;/modules&gt;
        &lt;/translate&gt;
        &lt;events&gt;
            &lt;catalog_entity_attribute_delete_after&gt;
                &lt;observers&gt;
                    &lt;salesrule&gt;
                        &lt;class&gt;salesrule/observer&lt;/class&gt;
                        &lt;method&gt;catalogAttributeDeleteAfter&lt;/method&gt;
                    &lt;/salesrule&gt;
                &lt;/observers&gt;
            &lt;/catalog_entity_attribute_delete_after&gt;
            &lt;catalog_entity_attribute_save_after&gt;
                &lt;observers&gt;
                    &lt;salesrule&gt;
                        &lt;class&gt;salesrule/observer&lt;/class&gt;
                        &lt;method&gt;catalogAttributeSaveAfter&lt;/method&gt;
                    &lt;/salesrule&gt;
                &lt;/observers&gt;
            &lt;/catalog_entity_attribute_save_after&gt;
        &lt;/events&gt;
    &lt;/adminhtml&gt;
    &lt;frontend&gt;
        &lt;translate&gt;
            &lt;modules&gt;
                &lt;Mage_SalesRule&gt;
                    &lt;files&gt;
                        &lt;default&gt;Mage_SalesRule.csv&lt;/default&gt;
                    &lt;/files&gt;
                &lt;/Mage_SalesRule&gt;
            &lt;/modules&gt;
        &lt;/translate&gt;
    &lt;/frontend&gt;
    &lt;crontab&gt;
        &lt;jobs&gt;
            &lt;aggregate_sales_report_coupons_data&gt;
                &lt;schedule&gt;
                    &lt;cron_expr&gt;0 0 * * *&lt;/cron_expr&gt;
                &lt;/schedule&gt;
                &lt;run&gt;
                    &lt;model&gt;salesrule/observer::aggregateSalesReportCouponsData&lt;/model&gt;
                &lt;/run&gt;
            &lt;/aggregate_sales_report_coupons_data&gt;
        &lt;/jobs&gt;
    &lt;/crontab&gt;
    &lt;default&gt;
        &lt;promo&gt;
            &lt;auto_generated_coupon_codes&gt;
                &lt;length&gt;12&lt;/length&gt;
                &lt;format&gt;1&lt;/format&gt;
            &lt;/auto_generated_coupon_codes&gt;
        &lt;/promo&gt;
    &lt;/default&gt;
&lt;/config&gt;';
echo '</pre>';
