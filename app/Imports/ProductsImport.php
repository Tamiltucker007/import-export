<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return Product::updateOrCreate(
            ['name' => $row['name']], // Search condition
            
            [
                'price' => $row['price'],
                'color' => $row['color'],
                'description' => $row['description'],
                'size' => $row['size'],
                'quantity' => $row['quantity'],
                'availability' => $row['availability'],
                'manufacturer' => $row['manufacturer'],
                'category' => $row['category'],
                'model_number' => $row['model_number'],
                'barcode' => $row['barcode'],
            ]
        );
    }
}
