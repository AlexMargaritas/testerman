<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;

class ResourceController extends Controller
{
    /**
     * Helper method to append pagination data
     *
     * @return \Illuminate\Http\Response
     */
    protected function withPagination($results)
    {
        $response = response()->json([
            "data" => $results->all(),
            "pagination" => [
                'limit' => $results->perPage(),
                'total_count' => $results->total(),
                'total_pages' => ceil($results->total() / $results->perPage()),
                'current_page' => $results->currentPage()
            ]
        ]);

        return $response;
    }
}
