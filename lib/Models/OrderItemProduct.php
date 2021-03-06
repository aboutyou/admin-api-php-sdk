<?php

namespace AboutYou\Cloud\AdminApi\Models;

/**
 * @property int $id
 * @property string $referenceKey External reference set by the client to integrate third party systems.
 * @property string $name The product name.
 */
class OrderItemProduct extends ApiObject
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
