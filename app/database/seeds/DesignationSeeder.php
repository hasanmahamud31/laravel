<?php

class DesignationSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('designations')->delete();
                DB::table('designations')->insert(array(
                        'designation_name' => 'Assistant Manager', 'status' => 1
                ));
                DB::table('designations')->insert(array(
                        'designation_name' => 'Manager', 'status' => 1
                ));// insertion may be this way 
                /*
                 * or insertion may be in this way start
                 */
                $companies = array(
                    array('designation_name' => 'Jr. Officer', 'status' => 1),
                    array('designation_name' => 'Managing Director', 'status' => 1),
                    );
                foreach ($companies as $value) {
                    DB::table('designations')->insert($value);
                }
                //insetion end
	}

}


