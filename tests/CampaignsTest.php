<?php
use App\Models\Campaign;

class CampaignsTest extends TestCase
{
    public function testResponse()
    {
      $response = $this->call('GET', '/api/v1/campaigns');
      $this->assertEquals(200, $response->getStatusCode());
      $data = json_decode($response->getContent(), true);

      $this->assertNotEmpty($data['data']);
      $this->assertNotEmpty($data['total']);
      $this->assertNotEmpty($data['per_page']);
      $this->assertNotEmpty($data['current_page']);
      $this->assertNotEmpty($data['last_page']);
      $this->assertNotEmpty($data['from']);
      $this->assertNotEmpty($data['to']);
    }

}
