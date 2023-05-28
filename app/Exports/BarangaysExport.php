<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class BarangaysExport implements FromCollection,
    WithHeadings,
    WithDrawings,
    WithStyles,
    ShouldAutoSize,
    WithCustomStartCell
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

    public function startCell(): string
    {
        return 'A8';
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the 8th row as bold text.
            8 => [
                'font' => ['bold' => true],
                'background' => 'blue'
            ],
        ];
    }

    /**
     * @return string[]
     */
    public function headings() :array
    {
        return [
            'Barangays',
            'Evacuees/Max Capacity',
            'Number of Males',
            'Number of Females',
            'Number of Adults',
            'Number of Children',
            'Number of Infants',
            'Number of Senior Citizens',
            'Number of PWDs',
            'Number of Pregnants',
            'Number of Head of Families',
            'Status of Availability',
        ];
    }
    
    public function startRow(): int
    {
        return 5;
    }

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('/img/logo.jpg'));
        $drawing->setHeight(110);
        $drawing->setCoordinates('D1');
        return $drawing;
    }
}
