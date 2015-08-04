<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Role;
use App\Status;
use App\Language;
use App\Country;
use App\City;
use App\Type;
use App\Level;
use App\Software;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('StatusTableSeeder');
        $this->call('CountryTableSeeder');
        $this->call('CityTableSeeder');
        $this->call('LanguageTableSeeder');
        $this->call('LevelTableSeeder');
        $this->call('TypeTableSeeder');
        $this->call('SoftwareTableSeeder');
	}

}

class UserTableSeeder extends Seeder {
    public function run(){
        DB::table('users')->delete();
        User::create([
            'name' => 'Trang',
            'email' => 'trang@example.com',
            'password' => Hash::make('123456'),
            'role_id' => 1,
            'status_id' => 1,
            'is_searchable' => 'false'
        ]);
    }
}

class RoleTableSeeder extends Seeder {
    public function run(){
        DB::table('roles')->delete();
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Company']);
        Role::create(['name' => 'Creative']);
    }
}

class StatusTableSeeder extends Seeder {
    public function run(){
        DB::table('statuses')->delete();
        Status::create(['name' => 'Active']);
        Status::create(['name' => 'Inactive']);
        Status::create(['name' => 'Expired']);
    }
}

class CountryTableSeeder extends Seeder {
    public function run(){
        DB::table('countries')->delete();
        Country::create(['name' => 'Vietnam']);
        Country::create(['name' => 'France']);
        Country::create(['name' => 'England']);
        Country::create(['name' => 'China']);
    }
}


class CityTableSeeder extends Seeder {
    public function run(){
        DB::table('cities')->delete();
        City::create([
            'country_id' => 1,
            'name' => 'Ho Chi Minh'
        ]);
        City::create([
            'country_id' => 1,
            'name' => 'Ha Noi'
        ]);
        City::create([
            'country_id' => 1,
            'name' => 'Hue'
        ]);
        City::create([
            'country_id' => 2,
            'name' => 'Paris'
        ]);
        City::create([
            'country_id' => 3,
            'name' => 'London'
        ]);
    }
}

class LanguageTableSeeder extends Seeder {
    public function run(){
        DB::table('languages')->delete();
        Language::create(['name' => 'English']);
        Language::create(['name' => 'Vietnamese']);
        Language::create(['name' => 'French']);
    }
}

class LevelTableSeeder extends Seeder{
    public function run(){
        DB::table('job_levels')->delete();
        Level::create(['name' => 'Entry']);
        Level::create(['name' => 'Junior']);
        Level::create(['name' => 'Senior']);
        Level::create(['name' => 'Director / Manager ']);
    }

}


class TypeTableSeeder extends Seeder{
    public function run(){
        DB::table('job_types')->delete();
        Type::create(['name' => 'Full-time']);
        Type::create(['name' => 'Part-time']);
        Type::create(['name' => 'Contract ']);
        Type::create(['name' => 'Intern']);
    }
}

class SoftwareTableSeeder extends Seeder{
    public function run(){
        DB::table('softwares')->delete();
        Software::create(['name' => 'Adobe Illustrator']);
        Software::create(['name' => 'Adobe Photoshop']);
        Software::create(['name' => 'Adobe Indesign']);
    }
}