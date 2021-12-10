<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;
use App\Http\Controllers\DoctorController;
use Tests\TestCase;

class DoctorTest extends TestCase
{
    // look at json data in response tab in prescriptions page
    public function test_index()
    {
        $controller = new DoctorController();
        $response = $controller->index();

        $this->assertEquals(200, $response->getStatusCode());
/*
        $actualCount = DB::table('prescriptions')->get()->count();

        $this->assertEquals($actualCount, $response.count);*/
    }

    public function test_store()
    {
        $request = Request::create('/api/doctor/store', 'POST',[

           'name' => 'Unit test',
           'specialty' => 'Test',
           'location' => 'Test',
           'UUID' => 'Test',
        ]);

        $controller = new DoctorController();
        $response = $controller->store($request);

        $this->assertEquals(200, $response->getStatusCode());

        $prescription = DB::table('doctors')
                    ->where('name', '=', 'Unit test')
                    ->get();

        $this->assertNotNull($prescription);

        DB::table('doctors')->where('name', '=', 'Unit test')->delete();
    }

    public function test_destroy()
    {
        $id = DB::table('doctors')->insertGetId([
            'name' => 'Destroy test',
           'specialty' => 'Test',
           'location' => 'Test',
           'UUID' => 'Test',
        ]);

        $controller = new DoctorController();
        $response = $controller->destroy($id);

        $this->assertEquals(200, $response->getStatusCode());

        /*$doctor = DB::table('doctors')
                    ->where('name', '=', 'Destroy test')
                    ->get();

        $this->assertNull($doctor);*/

    }
}

