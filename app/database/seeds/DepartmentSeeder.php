<?php

class DepartmentSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('departments')->delete();
                DB::table('departments')->insert(array(
                        'department_name' => 'Account', 'status' => 1
                ));
                DB::table('departments')->insert(array(
                        'department_name' => 'Managment', 'status' => 1
                ));// insertion may be this way 
                /*
                 * or insertion may be in this way start
                 */
                $companies = array(
                    array('department_name' => 'Engineering', 'status' => 1),
                    array('department_name' => 'Medical', 'status' => 1),
                    array('department_name' => 'HR', 'status' => 1),
                    );
                foreach ($companies as $value) {
                    DB::table('departments')->insert($value);
                }
                //insetion end
	}

}


