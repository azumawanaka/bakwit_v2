<?php

namespace Database\Seeders;

use App\Models\Barangay;
use Illuminate\Database\Seeder;

class BarangaySeeder extends Seeder
{
    private static $barangays = [
        [
            'name' => 'Anonang',
            'lat' => '10.084967',
            'long' => '124.115402',
        ],
        [
            'name' => 'Asinan',
            'lat' => '10.077831',
            'long' => '124.160586',
        ],
        [
            'name' => 'Bago',
            'lat' => '10.053656',
            'long' => '124.147217',
        ],
        [
            'name' => 'Baluarte',
            'lat' => '10.070345',
            'long' => '124.147368',
        ],
        [
            'name' => 'Bantuan',
            'lat' => '10.070114',
            'long' => '124.104271',
        ],
        [
            'name' => 'Bato',
            'lat' => '10.070884',
            'long' => '124.119392',
        ],
        [
            'name' => 'Bonotbonot',
            'lat' => '10.049246',
            'long' => '124.131138',
        ],
        [
            'name' => 'Bugaong',
            'lat' => '10.056754',
            'long' => '124.095754',
        ],
        [
            'name' => 'Cambuhat',
            'lat' => '10.080612',
            'long' => '124.134891',
        ],
        [
            'name' => 'Cambus-oc',
            'lat' => '10.060535',
            'long' => '124.112002',
        ],
        [
            'name' => 'Cangawa',
            'lat' => '10.041430',
            'long' => '124.131382',
        ],
        [
            'name' => 'Cantomugcad',
            'lat' => '10.084978',
            'long' => '124.148775',
        ],
        [
            'name' => 'Cantores',
            'lat' => '10.060514',
            'long' => '124.130044',
        ],
        [
            'name' => 'Cantuba',
            'lat' => '10.007255',
            'long' => '124.205983',
        ],
        [
            'name' => 'Catigbian',
            'lat' => '10.039538',
            'long' => '124.165858',
        ],
        [
            'name' => 'Cawag',
            'lat' => '10.095264',
            'long' => '124.129237',
        ],
        [
            'name' => 'Cruz',
            'lat' => '10.050249',
            'long' => '124.115588',
        ],
        [
            'name' => 'Dait',
            'lat' => '10.156942',
            'long' => '124.045277',
        ],
        [
            'name' => 'Eastern Cabul-An',
            'lat' => '10.154830',
            'long' => '124.046310',
        ],
        [
            'name' => 'Hunan',
            'lat' => '10.035804',
            'long' => '124.143213',
        ],
        [
            'name' => 'Lapacan Norte',
            'lat' => '10.044104',
            'long' => '124.121446',
        ],
        [
            'name' => 'Lapacan Sur',
            'lat' => '10.047505',
            'long' => '124.191865',
        ],
        [
            'name' => 'Lubang',
            'lat' => '10.061377',
            'long' => '124.203475',
        ],
        [
            'name' => 'Lusong (Plateau)',
            'lat' => '10.020757',
            'long' => '124.159052',
        ],
        [
            'name' => 'Magkaya',
            'lat' => '10.042360',
            'long' => '124.109350',
        ],
        [
            'name' => 'Merryland',
            'lat' => '10.044881',
            'long' => '124.215041',
        ],
        [
            'name' => 'Nueva Granada',
            'lat' => '10.029041',
            'long' => '124.185604',
        ],
        [
            'name' => 'Nueva Montana',
            'lat' => '10.062300',
            'long' => '124.171026',
        ],
        [
            'name' => 'Overland',
            'lat' => '10.008040',
            'long' => '124.176567',
        ],
        [
            'name' => 'Panghagban',
            'lat' => '10.081684',
            'long' => '124.110387',
        ],
        [
            'name' => 'Poblacion',
            'lat' => '10.040150',
            'long' => '124.148590',
        ],
        [
            'name' => 'Puting Bato',
            'lat' => '10.069342',
            'long' => '124.131718',
        ],
        [
            'name' => 'Rufo Hill',
            'lat' => '10.076144',
            'long' => '124.106935',
        ],
        [
            'name' => 'Sweetland',
            'lat' => '10.157711',
            'long' => '124.042145',
        ],
        [
            'name' => 'Western Cabul-an',
            'lat' => '10.157711',
            'long' => '124.042145',
        ],
    ];

    public function run(): void
    {
        $this->truncateTables();

        foreach (self::$barangays as $key => $brgy) {
            $this->createBrgy($brgy);
        }
    }

    /**
     * @return void
     */
    private function truncateTables(): void
    {
        \DB::table('barangays')->truncate();
    }

    /**
     * @param array $brgy
     * @return void
     */
    private function createBrgy(array $brgy): void
    {
        Barangay::create([
            'name' => $brgy['name'],
            'lat' => $brgy['lat'],
            'long' => $brgy['long'],
        ]);
    }
}
