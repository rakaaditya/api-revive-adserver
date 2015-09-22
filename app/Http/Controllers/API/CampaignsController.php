<?php namespace App\Http\Controllers\API;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Campaign;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CampaignsController extends BaseController
{
  public function index(Request $request)
  {
    $limit          = $request->input('limit') ? $request->input('limit') : 10;
    $dataCampaigns  = Campaign::paginate($limit);

    if($request->input('limit'))
        $dataCampaigns->appends('limit', $request->input('limit'));

    return $dataCampaigns;
  }
}
