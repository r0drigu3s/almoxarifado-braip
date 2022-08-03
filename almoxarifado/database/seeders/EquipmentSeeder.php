<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\Models\Equipment::factory()->create([
			// 'id' => 1,
			'user_id' => 1,
			'type' => 'PC Desktop',
			'patrimony' => 'KPG',
			'status' => 'Disponível',
		]);

		\App\Models\Equipment::factory()->create([
			// 'id' => 2,
			'user_id' => 1,
			'type' => 'Notebook',
			'patrimony' => 'Braip',
			'status' => 'Disponível',
		]);

		\App\Models\Equipment::factory()->create([
			// 'id' => 3,
			'user_id' => 1,
			'type' => 'Monitor',
			'patrimony' => 'KPG',
			'status' => 'Disponível',
		]);

		\App\Models\Equipment::factory()->create([
			// 'id' => 4,
			'user_id' => 1,
			'type' => 'Mouse',
			'patrimony' => 'KPG',
			'status' => 'Disponível',
		]);

		\App\Models\Equipment::factory()->create([
			// 'id' => 5,
			'user_id' => 1,
			'type' => 'Teclado',
			'patrimony' => 'KPG',
			'status' => 'Disponível',
		]);

		\App\Models\Equipment::factory()->create([
			// 'id' => 6,
			'user_id' => 1,
			'type' => 'Headset',
			'patrimony' => 'Braip',
			'status' => 'Disponível',
		]);

		\App\Models\Equipment::factory()->create([
			// 'id' => 7,
			'user_id' => 1,
			'type' => 'Cadeira',
			'patrimony' => 'Braip',
			'status' => 'Disponível',
		]);

		\App\Models\Equipment::factory()->create([
			// 'id' => 8,
			'user_id' => 1,
			'type' => 'Impressora',
			'patrimony' => 'Kapsula',
			'status' => 'Disponível',
		]);

		\App\Models\Equipment::factory()->create([
			// 'id' => 9,
			'user_id' => 1,
			'type' => 'Cabo',
			'patrimony' => 'Kapsula',
			'status' => 'Disponível',
		]);

		\App\Models\Equipment::factory()->create([
			// 'id' => 10,
			'user_id' => 1,
			'type' => 'Fonte',
			'patrimony' => 'Braip',
			'status' => 'Disponível',
		]);
	}
}