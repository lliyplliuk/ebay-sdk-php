<?php
namespace lliyplliuk\eBaySDK\Test;

use lliyplliuk\eBaySDK\Sdk;

class SdkTest extends \PHPUnit_Framework_TestCase
{
    private $sdk;

    protected function setUp()
    {
        $this->sdk = new Sdk([
            'apiVersion' => '',
            'appId' => '',
            'authToken' => '',
            'authorization' => '',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'globalId' => '',
            'ruName' => '',
            'siteId' => 0
        ]);
    }

    public function testCanCreateServices()
    {
        $s = new Sdk([
            'appId' => '123',
            'apiVersion' => '999',
            'credentials' => ['appId' => '', 'certId' => '', 'devId' => ''],
            'Finding' => [
                'appId' => '321'
            ],
            'Trading' => [
                'siteId' => 0
            ]
        ]);
        $f = $s->createFinding();
        $t = $s->createTrading();

        $this->assertEquals('321', $f->getConfig('appId'));
        $this->assertEquals('999', $f->getConfig('apiVersion'));

        $this->assertEquals('123', $t->getConfig('appId'));
        $this->assertEquals('999', $t->getConfig('apiVersion'));
        $this->assertEquals(0, $t->getConfig('siteId'));

        /**
         * Options passed in via the create methods overwrite existing.
         */
        $t = $s->createTrading([
            'appId' => '111',
            'apiVersion' => '222',
            'siteId' => 333
        ]);

        $this->assertEquals('111', $t->getConfig('appId'));
        $this->assertEquals('222', $t->getConfig('apiVersion'));
        $this->assertEquals(333, $t->getConfig('siteId'));
    }

    public function testCallingUnknownMethod()
    {
        $this->setExpectedException('\BadMethodCallException', 'Unknown method: foo');

        $this->sdk->foo();
    }

    public function testCanCreateOAuth()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\OAuth\Services\OAuthService', $this->sdk->createOAuth());
    }

    public function testCanCreateAccount()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Account\Services\AccountService', $this->sdk->createAccount());
    }

    public function testCanCreateAnalytics()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Analytics\Services\AnalyticsService', $this->sdk->createAnalytics());
    }

    public function testCanCreateBrowse()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Browse\Services\BrowseService', $this->sdk->createBrowse());
    }

    public function testCanCreateBulkDataExchange()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService', $this->sdk->createBulkDataExchange());
    }

    public function testCanCreateBusinessPoliciesManagement()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService', $this->sdk->createBusinessPoliciesManagement());
    }

    public function testCanCreateFeedback()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Feedback\Services\FeedbackService', $this->sdk->createFeedback());
    }

    public function testCanCreateFileTransfer()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\FileTransfer\Services\FileTransferService', $this->sdk->createFileTransfer());
    }

    public function testCanCreateFinding()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Finding\Services\FindingService', $this->sdk->createFinding());
    }

    public function testCanCreateFulfillment()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Fulfillment\Services\FulfillmentService', $this->sdk->createFulfillment());
    }

    public function testCanCreateHalfFinding()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\HalfFinding\Services\HalfFindingService', $this->sdk->createHalfFinding());
    }

    public function testCanCreateInventory()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Inventory\Services\InventoryService', $this->sdk->createInventory());
    }

    public function testCanCreateMarketing()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Marketing\Services\MarketingService', $this->sdk->createMarketing());
    }

    public function testCanCreateMetadata()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Metadata\Services\MetadataService', $this->sdk->createMetadata());
    }

    public function testCanCreateMerchandising()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Merchandising\Services\MerchandisingService', $this->sdk->createMerchandising());
    }

    public function testCanCreateOrder()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Order\Services\OrderService', $this->sdk->createOrder());
    }

    public function testCanCreatePostOrder()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\PostOrder\Services\PostOrderService', $this->sdk->createPostOrder());
    }

    public function testCanCreateProduct()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Product\Services\ProductService', $this->sdk->createProduct());
    }

    public function testCanCreateProductMetadata()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\ProductMetadata\Services\ProductMetadataService', $this->sdk->createProductMetadata());
    }

    public function testCanCreateRelatedItemsManagement()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementService', $this->sdk->createRelatedItemsManagement());
    }

    public function testCanCreateResolutionCaseManagement()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService', $this->sdk->createResolutionCaseManagement());
    }

    public function testCanCreateReturnManagement()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\ReturnManagement\Services\ReturnManagementService', $this->sdk->createReturnManagement());
    }

    public function testCanCreateShopping()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Shopping\Services\ShoppingService', $this->sdk->createShopping());
    }

    public function testCanCreateTrading()
    {
        $this->assertInstanceOf('\lliyplliuk\eBaySDK\Trading\Services\TradingService', $this->sdk->createTrading());
    }
}
