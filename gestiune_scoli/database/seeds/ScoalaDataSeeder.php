<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ScoalaDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scoli')->insert([
            'nume' => 'Colegiul National C.D. Loga',
            'nr_cf' => '3286/1',
            'adresa'=> 'Bulevardul Constantin Diaconovici Loga 37, Timisoara',
            'telefon' => '0256491873',
            'email' => 'loga@yahoo.com',
            'istoric' => 'Clădirea a fost construită în 1902–1903, iar arhitectul a fost Ignác Alpár. Colegiul Național
             „Constantin Diaconovici Loga” își află începutul în Gimnaziul Superior de Stat, întemeiat în 1897, cu limba
              de predare maghiară. Funcționează în actuala clădire din anul 1903. În august 1919 este transformat în 
              Liceu cu limba de predare română, purtând denumirea dascălului bănățean C.D.Loga. În anul 1948 
              autoritățile comuniste îi impun denumirea de „Nikos Beloianis”, apoi de Școala Medie nr. 1. De abia în 
              anul 1970 își redobândește denumirea de C.D.Loga.',
            'fotografie' => 'loga.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
