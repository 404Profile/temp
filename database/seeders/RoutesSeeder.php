<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class RoutesSeeder extends Seeder
{
    public function run()
    {
        $routes = [
            ['departure_point' => 'Севастополь', 'arrival_point' => 'Бахчисарай', 'departure_date' => now()->toDateString(), 'departure_time' => '07:30', 'arrival_date' => now()->toDateString(), 'arrival_time' => '08:30', 'cost' => 90.00],
            ['departure_point' => 'Севастополь', 'arrival_point' => 'Евпатория', 'departure_date' => now()->toDateString(), 'departure_time' => '11:00', 'arrival_date' => now()->toDateString(), 'arrival_time' => '14:08', 'cost' => 156.00],
            ['departure_point' => 'Севастополь', 'arrival_point' => 'Симферополь', 'departure_date' => now()->toDateString(), 'departure_time' => '17:25', 'arrival_date' => now()->toDateString(), 'arrival_time' => '20:12', 'cost' => 150.00],
            ['departure_point' => 'Евпатория', 'arrival_point' => 'Симферополь', 'departure_date' => now()->toDateString(), 'departure_time' => '05:40', 'arrival_date' => now()->toDateString(), 'arrival_time' => '07:10', 'cost' => 66.00],
            ['departure_point' => 'Евпатория', 'arrival_point' => 'Севастополь', 'departure_date' => now()->toDateString(), 'departure_time' => '08:30', 'arrival_date' => now()->toDateString(), 'arrival_time' => '10:10', 'cost' => 158.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Джанкой', 'departure_date' => now()->toDateString(), 'departure_time' => '05:45', 'arrival_date' => now()->toDateString(), 'arrival_time' => '07:19', 'cost' => 182.00],
            ['departure_point' => 'Севастополь', 'arrival_point' => 'Бахчисарай', 'departure_date' => now()->toDateString(), 'departure_time' => '07:50', 'arrival_date' => now()->toDateString(), 'arrival_time' => '09:30', 'cost' => 120.00],
            ['departure_point' => 'Евпатория', 'arrival_point' => 'Симферополь', 'departure_date' => now()->toDateString(), 'departure_time' => '17:18', 'arrival_date' => now()->toDateString(), 'arrival_time' => '19:25', 'cost' => 150.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Феодосия', 'departure_date' => now()->toDateString(), 'departure_time' => '11:18', 'arrival_date' => now()->toDateString(), 'arrival_time' => '13:00', 'cost' => 180.00],
            ['departure_point' => 'Феодосия', 'arrival_point' => 'Симферополь', 'departure_date' => now()->toDateString(), 'departure_time' => '20:17', 'arrival_date' => now()->toDateString(), 'arrival_time' => '21:45', 'cost' => 160.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Севастополь', 'departure_date' => now()->toDateString(), 'departure_time' => '11:00', 'arrival_date' => now()->toDateString(), 'arrival_time' => '12:30', 'cost' => 150.00],
            ['departure_point' => 'Севастополь', 'arrival_point' => 'Евпатория', 'departure_date' => now()->toDateString(), 'departure_time' => '06:00', 'arrival_date' => now()->toDateString(), 'arrival_time' => '08:50', 'cost' => 145.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Бахчисарай', 'departure_date' => now()->toDateString(), 'departure_time' => '14:40', 'arrival_date' => now()->toDateString(), 'arrival_time' => '16:10', 'cost' => 80.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Джанкой', 'departure_date' => now()->toDateString(), 'departure_time' => '08:30', 'arrival_date' => now()->toDateString(), 'arrival_time' => '10:10', 'cost' => 90.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Бахчисарай', 'departure_date' => now()->toDateString(), 'departure_time' => '15:10', 'arrival_date' => now()->toDateString(), 'arrival_time' => '17:10', 'cost' => 70.00],
            ['departure_point' => 'Евпатория', 'arrival_point' => 'Джанкой', 'departure_date' => now()->toDateString(), 'departure_time' => '11:15', 'arrival_date' => now()->toDateString(), 'arrival_time' => '13:00', 'cost' => 75.00],
            ['departure_point' => 'Джанкой', 'arrival_point' => 'Керчь', 'departure_date' => now()->toDateString(), 'departure_time' => '15:25', 'arrival_date' => now()->toDateString(), 'arrival_time' => '16:55', 'cost' => 92.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Керчь', 'departure_date' => now()->toDateString(), 'departure_time' => '17:50', 'arrival_date' => now()->toDateString(), 'arrival_time' => '19:25', 'cost' => 110.00],
            ['departure_point' => 'Феодосия', 'arrival_point' => 'Армянск', 'departure_date' => now()->toDateString(), 'departure_time' => '20:22', 'arrival_date' => now()->toDateString(), 'arrival_time' => '22:01', 'cost' => 100.00],

            ['departure_point' => 'Севастополь', 'arrival_point' => 'Бахчисарай', 'departure_date' => now()->toDateString(), 'departure_time' => '07:30', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '08:30', 'cost' => 90.00],
            ['departure_point' => 'Севастополь', 'arrival_point' => 'Евпатория', 'departure_date' => now()->toDateString(), 'departure_time' => '11:00', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '14:08', 'cost' => 156.00],
            ['departure_point' => 'Севастополь', 'arrival_point' => 'Симферополь', 'departure_date' => now()->toDateString(), 'departure_time' => '17:25', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '20:12', 'cost' => 150.00],
            ['departure_point' => 'Евпатория', 'arrival_point' => 'Симферополь', 'departure_date' => now()->toDateString(), 'departure_time' => '05:40', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '07:10', 'cost' => 66.00],
            ['departure_point' => 'Евпатория', 'arrival_point' => 'Севастополь', 'departure_date' => now()->toDateString(), 'departure_time' => '08:30', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '10:10', 'cost' => 158.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Джанкой', 'departure_date' => now()->toDateString(), 'departure_time' => '05:45', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '07:19', 'cost' => 182.00],
            ['departure_point' => 'Севастополь', 'arrival_point' => 'Бахчисарай', 'departure_date' => now()->toDateString(), 'departure_time' => '07:50', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '09:30', 'cost' => 120.00],
            ['departure_point' => 'Евпатория', 'arrival_point' => 'Симферополь', 'departure_date' => now()->toDateString(), 'departure_time' => '17:18', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '19:25', 'cost' => 150.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Феодосия', 'departure_date' => now()->toDateString(), 'departure_time' => '11:18', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '13:00', 'cost' => 180.00],
            ['departure_point' => 'Феодосия', 'arrival_point' => 'Симферополь', 'departure_date' => now()->toDateString(), 'departure_time' => '20:17', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '21:45', 'cost' => 160.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Севастополь', 'departure_date' => now()->toDateString(), 'departure_time' => '11:00', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '12:30', 'cost' => 150.00],
            ['departure_point' => 'Севастополь', 'arrival_point' => 'Евпатория', 'departure_date' => now()->toDateString(), 'departure_time' => '06:00', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '08:50', 'cost' => 145.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Бахчисарай', 'departure_date' => now()->toDateString(), 'departure_time' => '14:40', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '16:10', 'cost' => 80.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Джанкой', 'departure_date' => now()->toDateString(), 'departure_time' => '08:30', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '10:10', 'cost' => 90.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Бахчисарай', 'departure_date' => now()->toDateString(), 'departure_time' => '15:10', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '17:10', 'cost' => 70.00],
            ['departure_point' => 'Евпатория', 'arrival_point' => 'Джанкой', 'departure_date' => now()->toDateString(), 'departure_time' => '11:15', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '13:00', 'cost' => 75.00],
            ['departure_point' => 'Джанкой', 'arrival_point' => 'Керчь', 'departure_date' => now()->toDateString(), 'departure_time' => '15:25', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '16:55', 'cost' => 92.00],
            ['departure_point' => 'Симферополь', 'arrival_point' => 'Керчь', 'departure_date' => now()->toDateString(), 'departure_time' => '17:50', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '19:25', 'cost' => 110.00],
            ['departure_point' => 'Феодосия', 'arrival_point' => 'Армянск', 'departure_date' => now()->toDateString(), 'departure_time' => '20:22', 'arrival_date' => now()->addDay()->toDateString(), 'arrival_time' => '22:01', 'cost' => 100.00],
        ];

        foreach ($routes as $route) {
            Route::create($route);
        }
    }
}
