<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BranchAddress;

class BranchAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BranchAddress::create([
            'meta_key' => 'addressdata_key',
            'name' => 'Eternity Forwarders Private Limited',
            'gst_number' => '03AAGCE4639L1ZI',
            'phone' => '7531059074',
            'address' => 'Plot No. B014/03712, Frontier Complex Pabhat, Zirakpur',
            'state' => 'Punjab',
            'district' => 'SAS Nagar',
            'city' => 'Zirakpur',
            'postal_code' => '140 603',
            'email' => 'support.zirakpur@eternityforwarders.com',
            'status' => 1,
            'created_at' => time()
        ]);

    }
}
