<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Prescription;
use App\Http\Controllers\PrescriptionController;
use Tests\TestCase;

class PrescriptionTest extends TestCase
{

    public function test_store()
    {
        $request = Request::create('/api/prescription/store', 'POST',[

           'name' => 'Unit test',
           'dosage_amt' => 1.0,
           'dosage_unit' => 'g',
           'route' => 'oral',
           'instructions' => 'Added from unit test',
           'side_effects' => 'Added from unit test',
           'doctor' => 'Doctor1',
           'location' => 'Pharmacy location',
           'phone' => '1234567890',
           'pharmacy' => 'Pharmacy name',
           'refill' => 'Refill info',
        ]);

        $controller = new PrescriptionController();
        $response = $controller->store($request);

        $this->assertEquals(200, $response->getStatusCode());

        $prescription = DB::table('prescriptions')
                    ->where('name', '=', 'Unit test')
                    ->get();

        $this->assertNotNull($prescription);

        DB::table('prescriptions')->where('name', '=', 'Unit test')->delete();
    }

    public function test_update()
    {
        DB::table('prescriptions')->insert([
            'name' => 'Update test',
            'dosage_amt' => 1.0,
            'dosage_unit' => 'g',
            'route' => 'oral',
            'instructions' => 'Added from unit test',
            'side_effects' => 'Added from unit test',
            'doctor' => 'Doctor1',
            'location' => 'Pharmacy location',
            'phone' => '1234567890',
            'pharmacy' => 'Pharmacy name',
            'refill' => 'Refill info'
        ]);

        $prescription = DB::table('prescriptions')
                    ->where('name', '=', 'Update test')
                    ->get()->first();

        $request = Request::create('/api/prescription/store', 'POST',[

           'name' => 'Update test 1'
        ]);

        $controller = new PrescriptionController();
        $response = $controller->update($request, $prescription);

        $this->assertEquals(200, $response->getStatusCode());

        $prescription = DB::table('prescriptions')
                    ->where('name', '=', 'Update test 1')
                    ->get();

        $this->assertNotNull($prescription);

        DB::table('prescriptions')->where('name', '=', 'Update test 1')->delete();
    }

    public function test_destroy()
    {
        $id = DB::table('prescriptions')->insertGetId([
            'name' => 'Destroy test',
            'dosage_amt' => 1.0,
            'dosage_unit' => 'g',
            'route' => 'oral',
            'instructions' => 'Added from unit test',
            'side_effects' => 'Added from unit test',
            'doctor' => 'Doctor1',
            'location' => 'Pharmacy location',
            'phone' => '1234567890',
            'pharmacy' => 'Pharmacy name',
            'refill' => 'Refill info'
        ]);

        $controller = new PrescriptionController();
        $response = $controller->destroy($id);

        $this->assertEquals(200, $response->getStatusCode());

        //$prescription = DB::table('prescriptions')
        //            ->where('name', '=', 'Destroy test')
        //            ->get();

        //$this->assertNull($prescription);

    }
}
