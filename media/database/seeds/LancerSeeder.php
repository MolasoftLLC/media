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
            'name' => '向江 誠悟',
            'tags' => 'プロレスラー、総合格闘技',
            'img' => 'mukae.jpg',
            'about' => '試合中に何度もレフリーに対して「よ 滑るよ!掴めないよ!」と抗議する も、レフリーは無視。',
            'content' => '000',
            'title' => '111'
        ]);
        $lancer->save();
        
          // 2レコード
        $lancer = new \App\Lancer([
            'occupation' => 'store',
            'name' => 'ゆきがお',
            'tags' => '陶芸家',
            'img' => 'yukigao.jpg',
            'about' => '29歳で会社員を辞めて陶芸の道へ。人 のぬくもりがこもった器で、お客様の 生活を温めたい。',
            'content' => '000',
            'title' => '111'
        ]);
        $lancer->save();
        
          // 3レコード
        $lancer = new \App\Lancer([
            'occupation' => 'service',
            'name' => '北中 健太',
            'tags' => 'カメラマン、バー営業',
            'img' => 'kenta.jpg',
            'about' => '楽しいことは探さず作る派。諦めたら
            そこで試合終了ですよね。',
            'content' => '000',
            'title' => '111'
        ]);
        $lancer->save();
    }
}
