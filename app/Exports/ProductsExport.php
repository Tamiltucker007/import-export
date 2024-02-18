<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $products = Product::all();

        $data = $products->map(function ($product) {
            $productArray = $product->toArray();
            unset($productArray['created_at'], $productArray['updated_at']);

            return $productArray;
        });

        return $data;
    }

       /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["S.No","Name", "Price", "Color", "Description", "Size", "Quantity", "Availability", "Manufacturer", "Category", "Model Number", "Barcode" ];
    }
}
