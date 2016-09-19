<?php

require('vendor/autoload.php');

class FirstTest extends PHPUnit_Framework_TestCase
{
    protected $client;

    protected function setUp()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://testslb.missevan.com'
        ]);
    }

    public function testGet_ValidInput_BookObject()
    {
        $response = $this->client->get('/mobile/site/defaultHeadSound');

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('status', $data);
        $this->assertArrayHasKey('info', $data);
        $this->assertEquals('success', $data['status']);
    }
//    public function testGet_ValidInput_VersionObject()
//    {
//        $response = $this->client->get('/mobile/site/version');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('state', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertEquals('success', $data['state']);
//    }
//    public function testGet_ValidInput_IosVersionObject()
//    {
//        $response = $this->client->get('/mobile/site/iosVersion');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('state', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertEquals('success', $data['state']);
//    }
/*    public function testGet_ValidInput_SetIosVersionObject()
    {
        $response = $this->client->get('/mobile/site/setIosVersion');

        $this->assertEquals(200, $response->getStatusCode());

    }*/
//    public function testGet_ValidInput_PowerOnPicObject()
//    {
//        $response = $this->client->get('/mobile/site/powerOnPic');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('status', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertArrayHasKey('sound_url', $data);
//        $this->assertEquals('success', $data['status']);
//    }
//    public function testGet_ValidInput_HomePageObject()
//    {
//        $response = $this->client->get('/mobile/site/homePage');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('state', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertEquals('success', $data['state']);
//    }
//    public function testGet_ValidInput_NewHomePageObject()
//    {
//        $response = $this->client->get('/mobile/site/newHomePage');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('state', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertArrayHasKey('music', $data['info']);
//        $this->assertEquals('success', $data['state']);
//    }
//    public function testGet_ValidInput_NewHomePage2Object()
//    {
//        $response = $this->client->get('/mobile/site/newHomePage2');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('status', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertArrayHasKey('banner', $data['info']);
//        $this->assertArrayHasKey('channel', $data['info']);
//        $this->assertArrayHasKey('sound', $data['info']);
//        $this->assertArrayHasKey('seiyuu', $data['info']);
//        $this->assertEquals('success', $data['status']);
//    }
//
//    public function testGet_ValidInput_GetFrontAlbumObject()
//    {
//        $response = $this->client->get('/mobile/site/getFrontAlbum');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('status', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertEquals('success', $data['status']);
//    }
//    public function testGet_ValidInput_CatalogsObject()
//    {
//        $response = $this->client->get('/mobile/site/catalogs');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('status', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertEquals('success', $data['status']);
//    }
//
//    public function testGet_ValidInput_CatalogRootObject()
//    {
//        $response = $this->client->get('/mobile/site/catalogRoot');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('status', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertEquals('success', $data['status']);
//    }
//    public function testGet_ValidInput_RingsObject()
//    {
//        $response = $this->client->get('/mobile/site/rings');
//
//        $this->assertEquals(200, $response->getStatusCode());
//
//        $data = json_decode($response->getBody(), true);
//
//        $this->assertArrayHasKey('status', $data);
//        $this->assertArrayHasKey('info', $data);
//        $this->assertEquals('success', $data['status']);
//    }

    public function testGet_ValidInput_CatalogMenuObject()
    {
        $response = $this->client->get('/mobile/site/catalogMenu',
            ['query' => ['cid' => 55]]);

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('state', $data);
        $this->assertArrayHasKey('info', $data);
        $this->assertEquals('success', $data['state']);
    }

    public function testGet_ValidInput_CatalogRankingObject()
    {
        $response = $this->client->get('/mobile/site/catalogRanking',['query' => ['cid' => 55]]);

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('status', $data);
        $this->assertArrayHasKey('info', $data);
        $this->assertEquals('success', $data['status']);
    }

    public function testGet_ValidInput_CatalogRankObject()
    {
        $response = $this->client->post('/mobile/site/CatalogRank',['query' => ['cid' => 55]]);

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('status', $data);
        $this->assertArrayHasKey('info', $data);
        $this->assertEquals('success', $data['status']);
    }
    public function testGet_ValidInput_RankObject()
    {
        $response = $this->client->get('/mobile/site/Rank',['query' => ['type' => 1]]);

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('status', $data);
        $this->assertArrayHasKey('info', $data);
        $this->assertEquals('success', $data['status']);
    }
    public function testGet_ValidInput_GetChannelByCatalogObject()
    {
        $response = $this->client->get('/mobile/site/getChannelByCatalog',['query' => ['cid' => 55]]);

        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        $this->assertArrayHasKey('status', $data);
        $this->assertArrayHasKey('info', $data);
        $this->assertArrayHasKey('Datas', $data['info']);
        $this->assertEquals('success', $data['status']);
    }
}