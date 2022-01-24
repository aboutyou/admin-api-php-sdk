<?php

namespace AboutYou\Cloud\AdminApi\Models;

/**
 * @property int $quantity Current quantity of SKU.
 * @property string $warehouseReferenceKey Reference key of warehouse for which the stock update is related to.
 * @property string $changedAt Date time when the stock changed in Iso8601 format.
 * @property bool $sellableWithoutStock Defines if the variant can be sold even when the available stock is 0.
 */
class ProductVariantStock extends ApiObject
{
    protected $defaultValues = [
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
    ];

    protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}
