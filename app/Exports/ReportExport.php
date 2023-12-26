<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportExport implements FromCollection, WithHeadings
{
    public function __construct(array $data)
    {
        $this->data = $data;
    }



    public function collection()
    {
        return collect($this->data['apply']);
        return Application::all();

    }

    

    public function headings(): array
    {
        return [
            'No',
            'Names',
            'ID',
            'Email',
            'Tel',
            'Gender',
            'Province',
        ];
    }
}
