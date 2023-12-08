<?php

namespace App\Console;


use App\Models\ProgramKegiatan;
use App\Models\Staff;
use App\Models\Dokter;
use App\Models\StrukturOrganisasi;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            // Hapus secara permanen data Struktur Organisasi yang dihapus softDeletes sebelumnya
            StrukturOrganisasi::whereDate('deleted_at', '<', now()->subDays(3))->forceDelete();
        })->daily(); // Jalankan setiap hari

        // Hapus secara permanen data Dokter yang dihapus softDeletes sebelumnya
        $schedule->call(function () {
            Dokter::whereDate('deleted_at', '<', now()->subDays(3))->forceDelete();
        })->daily();

        /* Hapus otomatis data Staff setelah 3 hari dengan forceDeletes */
        $schedule->call(function () {
            Staff::whereDate('deleted_at', '<', now()->subDays(3))->forceDelete();
        })->daily();

        $schedule->call(function () {
            ProgramKegiatan::whereDate('deleted_at', '<', now()->subDays(3))->forceDelete();
        })->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
