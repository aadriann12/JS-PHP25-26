<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Patient;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $doctores = [
            ['nombre' => 'Adrian', 'especialidad' => 'Cardiologia'],
            ['nombre' => 'Ana', 'especialidad' => 'Neurologia'],
            ['nombre' => 'Luis', 'especialidad' => 'Pediatria'],
            ['nombre' => 'Maria', 'especialidad' => 'Traumatologia'],
        ];

        foreach ($doctores as $doctor) {
            Doctor::create($doctor);
        }

        $pacientes = [
            ['nombre' => 'Juan', 'historial' => 'Historial de Juan'],
            ['nombre' => 'Marta', 'historial' => 'Historial de Marta'],
            ['nombre' => 'Pedro', 'historial' => 'Historial de Pedro'],
            ['nombre' => 'Lucia', 'historial' => 'Historial de Lucia'],
        ];

        foreach ($pacientes as $paciente) {
            Patient::create($paciente);
        }

        // Recuperar todos los doctores y pacientes creados
        $allDoctors = Doctor::all();
        $allPatients = Patient::all();

        // Usar attach para relacionarlos
        foreach ($allDoctors as $doctor) {
            // Adjuntar 2 pacientes aleatorios a cada doctor
            $randomPatients = $allPatients->random(2);
            foreach ($randomPatients as $patient) {
                $doctor->patients()->attach($patient->id, [
                    'fecha_consulta' => now()->subDays(rand(1, 30))->format('Y-m-d')
                ]);
            }
        }
    }
}
