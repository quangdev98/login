<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class adminCustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('admin_customers')->insert([
	        [
				'id' => 1,
				'name' => 'Quang Merce',
				'email' => 'dvq.dev@gmail.com',
	            'password' => bcrypt('quangdv1998'),
				'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
				'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
	        ],
        ]);
    }
}
