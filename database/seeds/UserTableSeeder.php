<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: dmarquez
 * Date: 09/09/16
 * Time: 10:56 AM
 */
class UserTableSeeder extends Seeder
{
    public function run(){
        \DB::table('users')->insert(array(
           'name'     => 'Root',
           'email'    => 'marquezdigna83@gmail.com',
           'password' =>  \Hash::make('123456'),
           'created_at' => new DateTime,
           'updated_at' =>  new Datetime,
        ));
    }
}