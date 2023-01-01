<?php

namespace App\Exports;

use App\Models\Author;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class UserExport implements
    ShouldAutoSize,
    WithMapping,
    WithHeadings,
    WithEvents,
    FromQuery
{

    public function query(): Relation|\Illuminate\Database\Eloquent\Builder|Builder
    {
        return Author::query();
    }

    public function headings(): array
    {
        return ['ID', 'NAME', 'EMAIL', 'CREATED_AT',];
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

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:D1')->applyFromArray([
                    'font' => ['bold' => true],
                ]);
            }
        ];
    }

// return DateTime::createFromFormat('!m' , $this->month)->format('F');
}
