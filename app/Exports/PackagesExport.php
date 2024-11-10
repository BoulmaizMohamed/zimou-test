<?php

namespace App\Exports;

use App\Models\Package;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PackagesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Package::with(['store', 'deliveryType', 'status', 'commune'])
            ->get()
            ->map(function ($package) {
                return [
                    'tracking_code' => $package->tracking_code,
                    'store_name' => $package->store->name ?? 'N/A',
                    'package_name' => $package->name,
                    'status' => $package->status->name ?? 'N/A',
                    'client_full_name' => $package->client_first_name . ' ' . $package->client_last_name,
                    'phone' => $package->client_phone,
                    'wilaya' => $package->commune->wilaya->name ?? 'N/A',
                    'commune' => $package->commune->name ?? 'N/A',
                    'delivery_type' => $package->deliveryType->name ?? 'N/A',
                    'status_name' => $package->status->name ?? 'N/A',
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Tracking Code',
            'Store Name',
            'Package Name',
            'Status',
            'Client Full Name',
            'Phone',
            'Wilaya',
            'Commune',
            'Delivery Type',
            'Status Name',
        ];
    }
}
