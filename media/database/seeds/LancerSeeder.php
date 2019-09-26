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
            'works' => 'プロレスラー、総合格闘技',
            'tags' => 'it',
            'img' => 'mukae.jpg',
            'about' => '試合中に何度もレフリーに対して「よ 滑るよ!掴めないよ!」と抗議する も、レフリーは無視。',
            'content' => 'サービス業',
            'title' => '111'
        ]);
        $lancer->save();
        
          // 2レコード
        $lancer = new \App\Lancer([
            'occupation' => 'store',
            'name' => 'ゆきがお',
            'works' => '陶芸家',
            'tags' => 'creative',
            'img' => 'yukigao.jpg',
            'about' => '29歳で会社員を辞めて陶芸の道へ。人 のぬくもりがこもった器で、お客様の 生活を温めたい。',
            'content' => 'サービス業',
            'title' => '111'
        ]);
        $lancer->save();
        
          // 3レコード
        $lancer = new \App\Lancer([
            'occupation' => 'service',
            'name' => '北中 健太',
            'works' => 'カメラマン、バー営業',
            'tags' => 'shop,creative',
            'img' => 'kenta.jpg',
            'about' => '楽しいことは探さず作る派。諦めたら
            そこで試合終了ですよね。',
            'content' => '店舗運営',
            'title' => '111'
        ]);
        $lancer->save();
    }
}
