<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Condition;
use App\Http\Controllers\ConditionController;
use Tests\TestCase;

class ConditionTest extends TestCase
{
    // look at json data in response tab in prescriptions page
    public function test_index()
    {
        $controller = new ConditionController();
        $response = $controller->index();

        $this->assertEquals(200, $response->getStatusCode());
/*
        $actualCount = DB::table('prescriptions')->get()->count();

        $this->assertEquals($actualCount, $response.count);*/
    }

    public function test_store()
    {
        $request = Request::create('/api/conditions/store', 'POST',[

           'conditions' => 'Test',
        ]);

        $controller = new ConditionController();
        $response = $controller->store($request);

        $this->assertEquals(200, $response->getStatusCode());

        $prescription = DB::table('conditions')
                    ->where('conditions', '=', 'Test')
                    ->get();

        $this->assertNotNull($prescription);

        DB::table('conditions')->where('conditions', '=', 'Test')->delete();
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
