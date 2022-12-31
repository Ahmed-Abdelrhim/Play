<?php

namespace App\Exports;

use App\Models\Author;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection , ShouldAutoSize , WithMapping , WithHeadings
{
    /**
    * @return Collection
    */
    public function collection(): Collection
    {
        return Author::with('posts')->get();
    }

    public function headings(): array
    {
        return [
            'ID', 'NAME','EMAIL','CREATED_AT'
        ];
    }

    public function map($author): array
    {
        return [
            $author->id,
            $author->name,
            $author->email,
            $author->created_at,
        ];
    }


}
