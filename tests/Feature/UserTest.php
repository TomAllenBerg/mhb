<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\UserController;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register()
    {
        $request = Request::create('/api/user/register', 'POST',[

            'email' => 'test@test.com',
            'UUID' => 'test',
            'password' => 'test',
         ]);

         $controller = new UserController();
         $response = $controller->register($request);
 
        // $this->assertEquals(200, $response->getStatusCode());

         $user = DB::table('users')
                    ->where('UUID', '=', 'test')
                    ->get();

        $this->assertNotNull($user);

        
    }

    public function test_login()
    {
        $request = Request::create('/api/user/login', 'POST',[

            'email' => 'test@test.com',
            'password' => 'test',
         ]);

         $controller = new UserController();
         $response = $controller->login($request);
 
        $this->assertEquals(200, $response->getStatusCode());

        DB::table('users')->where('UUID', '=', 'test')->delete();
    }
}
