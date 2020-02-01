<?php
  
use Illuminate\Database\Seeder;
use App\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@admin.com',
                'level'=>'100',
                'email_verified_at' => now(),
               'password'=> bcrypt('admin@admin.com'),
               'created_at' => now(),
               'updated_at' => now(),
            ],
            [
               'name'=>'User',
               'email'=>'user@user.com',
               'email_verified_at' => now(),
                'level'=>'0',
               'password'=> bcrypt('user@user.com'),
               'created_at' => now(),
               'updated_at' => now(),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}