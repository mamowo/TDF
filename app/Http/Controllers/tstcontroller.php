<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\tstDataTable;
use App\Models\tst;
use Illuminate\Support\Facades\DB;
use DataTables;


class tstcontroller extends Controller
{
    public function index(tstDataTable $dataTable)
    {
        if ($request->ajax()) {
            $data = tst::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        
    }
}
