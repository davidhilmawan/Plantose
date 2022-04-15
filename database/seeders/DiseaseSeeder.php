<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diseases = [
        [
            'plant_id' => '1',
            'name' => 'Scab',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '1',
            'name' => 'Black Rot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '1',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '2',
            'name' => 'None',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '3',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '4',
            'name' => 'Powdery Mildew',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '4',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '5',
            'name' => 'Gray Leaf Spot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '5',
            'name' => 'Common Rust',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '5',
            'name' => 'Northen Leaf Blight',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '5',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '6',
            'name' => 'Black Rot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '6',
            'name' => 'Black Measels',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '6',
            'name' => 'Isaporis Leaf Spot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '6',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '7',
            'name' => 'Haunglongbing (Citrus Greening)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '8',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '9',
            'name' => 'Bacterial Spot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '9',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '10',
            'name' => 'Early Blight',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '10',
            'name' => 'Late Blight',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '10',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '11',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '12',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '13',
            'name' => 'Powdery Mildew',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '14',
            'name' => 'Leaf Scorch',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '14',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Bacterial Spot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Early Blight',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Late Blight',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Leaf Mold',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Septoria Leaf Spot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Two-spotted Spider Mite',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Target Spot',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Yellow Leaf Curl Virus',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Mosaic Virus',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
        [
            'plant_id' => '15',
            'name' => 'Healthy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],
    ];
        Disease::insert($diseases);
    }
}
