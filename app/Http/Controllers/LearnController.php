<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class LearnController extends Controller
{
    public function playWithExcel()
    {
        $spreadsheet  = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1','Name');
        $writer = new Xlsx($spreadsheet);
        $writer->save('users.xlsx');

    }
}
