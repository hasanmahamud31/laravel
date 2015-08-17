<?php

class CompanyTypeSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('companies')->delete();
                DB::table('companies')->insert(array(
                        'company_type' => 'private', 'status' => 1
                ));
                DB::table('companies')->insert(array(
                        'company_type' => 'College/University', 'status' => 1
                ));// insertion may be this way 
                /*
                 * or insertion may be in this way start
                 */
                $companies = array(
                    array('company_type' => 'School', 'status' => 1),
                    array('company_type' => 'Bank', 'status' => 1),
                    array('company_type' => 'University', 'status' => 1),
                    array('company_type' => 'Govt.', 'status' => 1),
                    array('company_type' => 'Vocational', 'status' => 1),
                    array('company_type' => 'Madrasha', 'status' => 1),
                    array('company_type' => 'Medical College/University', 'status' => 1),
                    array('company_type' => 'Engineering College', 'status' => 1),
                    array('company_type' => 'IT', 'status' => 1),
                    array('company_type' => 'Private CO. LTD.', 'status' => 1)
                );
                foreach ($companies as $value) {
                    DB::table('companies')->insert($value);
                }
                //insetion end
	}

}

