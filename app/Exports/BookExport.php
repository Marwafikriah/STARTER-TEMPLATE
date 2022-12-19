<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\withHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BookExport implements FromArray, withHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        return Book::getDataBooks();
    }
    public function headings(): array{
        return [
            'no','judul','penulis','tahun','penerbit'
        ];
    }
}
