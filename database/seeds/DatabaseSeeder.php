<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        //create a user
        $user = new \MyCompany\User();
        $user->id = 1;
        $user->name = 'Admin';
        $user->email = "admin@admin.com";
        $user->password = bcrypt('admin');
        $user->admin = 1;
        $user->save();

        //create a user
        $user = new \MyCompany\User();
        $user->id = 2;
        $user->name = 'User';
        $user->email = "user@user.com";
        $user->password = bcrypt('user');
        $user->save();

        //create a country
        $country = new \MyCompany\Accommodation\Location\Country();
        $country->name = "United States";
        $country->id = 1;
        $country->save();
//create a state
        $state = new \MyCompany\Accommodation\Location\State();
        $state->name = "Pennsylvania";
        $state->id = 1;
        $state->save();

//create a city
        $city = new \MyCompany\Accommodation\Location\City();
        $city->name = "Pittsburgh";
        $city->save();
        
//create a location
        $location = new \MyCompany\Accommodation\Location();
        $location->city_id = $city->id;
        $location->state_id = $state->id;
        $location->country_id = 1;
        $location->latitude = 40.44;
        $location->longitude = 80;
        $location->code = '15212';
        $location->address = "100 Main Street";
        $location->save();
        
//create a new accommodation
        $accommodation = new \MyCompany\Accommodation\Accommodation();
        $accommodation->name = "Royal Plaza Hotel";
        $accommodation->location_id = $location->id;
        $accommodation->description = "A modern, 4-star hotel";
        $accommodation->save();
        
//create a room
        $room1 = new \MyCompany\Accommodation\Room();
        $room1->room_number = 'A01';
        $room1->accommodation_id = $accommodation->id;
        $room1->save();
        
//create another room
        $room2 = new \MyCompany\Accommodation\Room();
        $room2->room_number = 'A02';
        $room2->accommodation_id = $accommodation->id;
        $room2->save();
        
//create the room array
        $rooms = [$room1, $room2];

        Model::reguard();
    }

}
