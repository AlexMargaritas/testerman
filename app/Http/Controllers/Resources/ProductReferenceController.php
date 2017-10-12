<?php

namespace App\Http\Controllers\Resources;

use TheAbaci\AffiliateNetworkService\Service as AffiliateNetworkService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductReferenceController extends Controller
{
	protected $affiliateNetworkService;

	public function __construct(AffiliateNetworkService $affiliateNetworkService) {
		$this->affiliateNetworkService = $affiliateNetworkService;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($terms = "")
    {
    	$results = $this->affiliateNetworkService->search($terms);

        return $results;

    }
}
