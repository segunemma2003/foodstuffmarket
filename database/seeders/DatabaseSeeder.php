<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(UserSeeder::class);
        $this->call(OrgSeeder::class);
        $this->call(SeoSeeder::class);
        $this->call(CurrrencySeeder::class);
        $this->call(FrontendSeeder::class);
        $this->call(SmtpSeeder::class);
        $this->call(LanugageSeeder::class);
        $this->call(SubscriptionSeeder::class);
        $this->call(SmsSeeder::class);
        $this->call(SmsProviderSeeder::class);
        if (env('APP_DEBUG') != 'false') {
            // code...
            $this->call(EmailContactSeeder::class); // This is not needed - development only
        }
        // $this->call(AutoResponderSeeder::class); // This is not needed - development only
        // $this->call(CsvSeeder::class); // This is not needed - development only

        $this->call(PageSeeder::class);
        $this->call(MonizSeeder::class);

    }
}
