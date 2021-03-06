<?php

namespace AboutYou\Cloud\AdminApi\Models;

/**
 * @property \AboutYou\Cloud\AdminApi\Models\ProductVariantCampaignReduction[] $entities
 */
class ProductVariantCampaignReductionCollection extends ApiCollection
{
    protected $collectionClassMap = [
        'entities' => \AboutYou\Cloud\AdminApi\Models\ProductVariantCampaignReduction::class,
    ];

    /**
     * @return \AboutYou\Cloud\AdminApi\Models\ProductVariantCampaignReduction[]
     */
    public function getEntities()
    {
        return $this->entities;
    }
}
