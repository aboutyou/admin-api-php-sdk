<?php

namespace AboutYou\Cloud\AdminApi;

use AboutYou\Cloud\AdminApi\Models\Identifier;

/**
 * @internal
 */
final class MasterTest extends BaseApiTestCase
{
    public function testUpdateProductMasterMasterCategories()
    {
        $expectedRequestJson = $this->loadFixture('MasterUpdateProductMasterMasterCategoriesRequest.json');

        $requestEntity = new \AboutYou\Cloud\AdminApi\Models\ProductMasterCategories($expectedRequestJson);
        static::assertJsonStringEqualsJsonString(json_encode($expectedRequestJson), $requestEntity->toJson());

        $responseEntity = $this->api->masters->updateProductMasterMasterCategories(Identifier::fromId(1), $requestEntity, []);

        $expectedResponseJson = $this->loadFixture('MasterUpdateProductMasterMasterCategoriesResponse.json');
        static::assertInstanceOf(\AboutYou\Cloud\AdminApi\Models\ProductMasterCategories::class, $responseEntity);
        static::assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

        $this->assertPropertyHasTheCorrectType($responseEntity, 'categories', \AboutYou\Cloud\AdminApi\Models\ProductMasterCategories::class);
    }
}
