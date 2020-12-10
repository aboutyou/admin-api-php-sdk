<?php

namespace AboutYou\Cloud\AdminApi\Models;

/**
 * @property int $id The id of the brand created by Backbone Core.
 * @property string $name Name of the brand.
 * @property string $group Group name allowing to group different brands.
 * @property string $logoUrl Url of the image, either manually specified or generated by BACKBONE Core, if the AY Cloud CDN is used.
 * @property AssetSource $logoSource A source specifying where to download the logo from.
 * @property Attribute[] $attributes A list of attributes attached to the brand.
 */
class Brand extends ApiObject
{
    protected $defaultValues = [
    ];

    protected $classMap = [
        'logoSource' => \AboutYou\Cloud\AdminApi\Models\AssetSource::class,
    ];

    protected $collectionClassMap = [
        'attributes' => \AboutYou\Cloud\AdminApi\Models\Attribute::class,
    ];

    protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}
