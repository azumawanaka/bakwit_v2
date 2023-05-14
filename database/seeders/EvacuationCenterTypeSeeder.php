<?php

namespace Database\Seeders;

use App\Models\EvacuationCenterType;
use Illuminate\Database\Seeder;

class EvacuationCenterTypeSeeder extends Seeder
{
    private static $types = [
        [
            'name' => 'Barangay Hall',
        ],
        [
            'name' => 'DepEd Classroom',
        ],
        [
            'name' => 'Multi-purpose Center',
        ],
        [
            'name' => 'Daycare Center',
        ],
        [
            'name' => 'Health Station',
        ],
        [
            'name' => 'BNS/BHW Center',
        ],
        [
            'name' => 'Others',
        ],
    ];

    public function run(): void
    {
        $this->truncateTables();

        foreach (self::$types as $key => $type) {
            $this->createType($type);
        }
    }

    private function truncateTables(): void
    {
        \DB::table('evacuation_center_types')->truncate();
    }

    private function createType(array $type): void
    {
        EvacuationCenterType::create([
           'name' => $type['name'],
        ]);
    }
}
