<?php

namespace Modules\Product\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Brand;
use Modules\Product\Transformers\BrandResource;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        try {
            $data = Brand::get();
            return response()->json([
                'status'=> 1,
                'count'=>count($data),
                'data'=> BrandResource::collection($data)
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'=> 0,
                'msg'=> $th->getMessage()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(Request $request)
    {
        try {
            //code...
            $brand = Brand::findOrFail($request->id);
            return response()->json([
                'status'=>1,
                'data'=> new BrandResource($brand)
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status'=>0,
                'msg'=>$th->getMessage(),
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
