<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Plant;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $plantsCount = Plant::all()->count() - 1;
        $diseasesCount = Disease::all()->count();
        if (request()->ajax()) {
            $data = DB::table('diseases')
                    ->join('plants', 'plants.id', '=', 'diseases.plant_id')
                    ->select('diseases.id as id', 'plants.name as plant_name', 'diseases.name as disease_name');
            return DataTables::of($data)
                ->addIndexColumn()
                ->toJson();
        }
        return view('dashboard', compact(['plantsCount', 'diseasesCount']));
    }

    public function policy()
    {
        return view('policy');
    }

    public function analyze()
    {
        return view('analyze');
    }
}
