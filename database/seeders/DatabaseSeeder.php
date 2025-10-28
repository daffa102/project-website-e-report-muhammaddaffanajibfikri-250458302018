<?php

namespace Database\Seeders;

use App\Models\Laporan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User Admin
        $admin = User::create([
            'name' => 'Admim',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminbahagia'),
            'no_whatsapp' => '0812345679',
            'alamat' =>'Jonggol',
            'foto' => 'admin.jpg',
            'role' => 'admin',
        ]);

        // User Warga
        $warga = User::create([
            'name' => 'Warga',
            'email' => 'warga@gmail.com',
            'password' => Hash::make('wargabahagia'),
            'no_whatsapp' => '0897654321',
            'alamat' =>'Jonggol',
            'foto' => 'warga.jpg',
            'role' => 'warga',
        ]);

        // Laporan
        $laporan = Laporan::create([
            'judul' => 'Laporan',
            'detail' => 'Laporan',
            'tanggal' => now(),
            'foto' => 'laporan.jpg',
            'status' => 'pending',
            'pelapor_id' =>$admin->id
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
