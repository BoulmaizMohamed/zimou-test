<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

use App\Exports\PackagesExport;
use Maatwebsite\Excel\Facades\Excel;

class PackageController extends Controller
{
    public function index()
    {
       
        $packages = Package::with(['store', 'deliveryType', 'status', 'commune'])->paginate(10);

        return view('packages', compact('packages'));
    }

    public function exportPackages()
{
    
    return Excel::download(new PackagesExport, 'packages.xlsx'); // For Excel file
    
}
}
