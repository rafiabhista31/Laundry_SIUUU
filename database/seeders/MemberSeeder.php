<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Member::create([
            'nama'      => 'dd ai',
            'alamat'    => 'tjp',
            'jenis_kelamin' => 'L',
            'tlp'       => '08132'
        ]);
    }
}
