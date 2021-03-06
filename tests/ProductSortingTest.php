<?php

namespace AboutYou\Cloud\AdminApi;

/**
 * @internal
 */
final class ProductSortingTest extends BaseApiTestCase
{
    public function testUpdateOrCreate()
    {
        $expectedRequestJson = $this->loadFixture('ProductSortingUpdateOrCreateRequest.json');

        $requestEntity = [];
        foreach ($expectedRequestJson as $entity) {
            $requestEntity[] = new \AboutYou\Cloud\AdminApi\Models\ProductSorting($entity);
        }

        $responseEntity = $this->api->productSortings->updateOrCreate($requestEntity, []);
    }

    public function testDelete()
    {
        $expectedRequestJson = $this->loadFixture('ProductSortingDeleteRequest.json');

        $requestEntity = [];
        foreach ($expectedRequestJson as $entity) {
            $requestEntity[] = new \AboutYou\Cloud\AdminApi\Models\ProductSorting($entity);
        }

        $responseEntity = $this->api->productSortings->delete($requestEntity, []);
    }
}
