<?php

use Illuminate\Database\Seeder;

class LancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lancer = new \App\Lancer([
            'occupation' => 'it',
            'title' => '川端 莉緒',
            'content' => 'kkk'
        ]);
        $lancer->save();
        
          // 2レコード
        $lancer = new \App\Lancer([
            'occupation' => 'store',
            'title' => '小玉 隆博',
            'content' => 'lll'
        ]);
        $lancer->save();
        
          // 3レコード
        $lancer = new \App\Lancer([
            'occupation' => 'service',
            'title' => '岩井 圭',
            'content' => 'ooo'
        ]);
        $lancer->save();
    }
}
