<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BarangaysExport implements FromCollection, WithHeadings
{
    protected $data;

    /**
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect($this->data);
    }

    /**
     * @return string[]
     */
    public function headings() :array
    {
        return [
            'Barangays',
            'Number of Evacuees',
            'Number of Families',
            'Number of Females',
            'Number of Males',
            'Number of PWDs',
            'Number of Total Max Capacity',
            'Status of Availability',
        ];
    }
}
