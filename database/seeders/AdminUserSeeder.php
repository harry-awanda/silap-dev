<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder {
  /**
   * Run the database seeds.
   */
  public function run(): void {
    User::firstOrCreate(
      ['email' => 'admin@example.com'],
      [
        'name' => 'harry awanda',
        'username' => 'admin',
        'password' => bcrypt('smkn4321'), // Ganti dengan password aman
        'role' => 'admin', // Pastikan kolom `role` ada di tabel users
      ]
    );
  }
}