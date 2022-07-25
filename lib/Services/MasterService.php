<?php

namespace AboutYou\Cloud\AdminApi\Services;

use AboutYou\Cloud\AdminApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

class MasterService extends AbstractService
{
    /**
     * Description.
     *
     * @param \AboutYou\Cloud\AdminApi\Models\Identifier $productMasterIdentifier
     * @param \AboutYou\Cloud\AdminApi\Models\ProductMasterCategories $model the model to create or update
     * @param array $options additional options like limit or filters
     *
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
     *
     * @return \AboutYou\Cloud\AdminApi\Models\ProductMasterCategories
     */
    public function updateProductMasterMasterCategories($productMasterIdentifier, $model, $options = [])
    {
        return $this->request(
            'put',
            $this->resolvePath('/product-masters/%s/master-categories', $productMasterIdentifier),
            $options,
            [],
            \AboutYou\Cloud\AdminApi\Models\ProductMasterCategories::class,
            $model
        );
    }

    /**
     * Description.
     *
     * @param \AboutYou\Cloud\AdminApi\Models\Identifier $productMasterIdentifier
     * @param array $options additional options like limit or filters
     *
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
     *
     * @return \AboutYou\Cloud\AdminApi\Models\AttributeCollection
     */
    public function allAttributes($productMasterIdentifier, $options = [])
    {
        return $this->request(
            'get',
            $this->resolvePath('/product-masters/%s/attributes', $productMasterIdentifier),
            $options,
            [],
            \AboutYou\Cloud\AdminApi\Models\AttributeCollection::class,
            null
        );
    }
}