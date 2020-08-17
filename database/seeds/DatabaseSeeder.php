<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(PostTranslationSeeder::class);
        $this->call(HealthZoneHealthZonesTableSeeder::class);
        $this->call(CustomizedHospitalsTableSeeder::class);
        $this->call(HealthZonesTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(FluxZonesTableSeeder::class);
    }
}
