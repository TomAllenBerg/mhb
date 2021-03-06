<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Allergy;
use App\Http\Controllers\AllergyController;
use Tests\TestCase;

class AllergyTest extends TestCase
{
    // look at json data in response tab in prescriptions page
    public function test_index()
    {
        $controller = new AllergyController();
        $response = $controller->index();

        $this->assertEquals(200, $response->getStatusCode());
/*
        $actualCount = DB::table('prescriptions')->get()->count();

        $this->assertEquals($actualCount, $response.count);*/
    }

    public function test_store()
    {
        $request = Request::create('/api/allergies/store', 'POST',[
            'UUID' => 'Test',
           'allergies' => 'Test',
        ]);

        $controller = new AllergyController();
        $response = $controller->store($request);

        $this->assertEquals(200, $response->getStatusCode());

        $prescription = DB::table('allergies')
                    ->where('UUID', '=', 'Test')
                    ->get();

        $this->assertNotNull($prescription);

        DB::table('allergies')->where('UUID', '=', 'UUID')->delete();
    }
/*
    public function test_destroy()
    {
        $request = Request::create('/api/allergies/store', 'POST',[

            'allergies' => 'Test',
         ]);

        $allergies = new Allergy;
        $var = (array)($request->get('allergies'));
        $allergies->allergies = serialize($var);

        $controller = new AllergyController();
        $response = $controller->store($request);

        $response = $controller->destroy($allergies);

        $this->assertEquals(200, $response->getStatusCode());

        $prescription = DB::table('prescriptions')
                    ->where('name', '=', 'Destroy test')
                    ->get();

        $this->assertNull($prescription);

    } */
}
