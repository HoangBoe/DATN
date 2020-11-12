<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('brands')->truncate();
        \Illuminate\Support\Facades\DB::table('brands')->insert([
           [
               'name' => 'Optimum Nutrition',
               'description' => 'Hãng thực phẩm bổ sung cao cấp của Mỹ',
               'country' => 'Mỹ',
               'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585116625/Optimum_20Nutrition_zwymjr.png'
           ],
           [
               'name' => 'Nutrabolics',
               'description' => 'Hãng thực phẩm bổ sung cao cấp của Canada',
               'country' => 'Canada',
               'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585116743/nutrabolicscom_qxhqkp.jpg'
           ],
           [
               'name' => 'Labrada',
               'description' => 'Hãng thực phẩm bổ sung cao cấp của Mỹ',
               'country' => 'Mỹ',
               'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585116932/747f29fbcc5b5252dab8a22d5867b7ea.w400.h400_o79orw.jpg'
           ],
           [
               'name' => 'Dymatize',
               'description' => 'Hãng thực phẩm bổ sung cao cấp của Mỹ',
               'country' => 'Mỹ',
               'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585117077/Dymatize_Logo_ckohol.jpg'
           ],
            [
                'name' => 'MuclePharm',
                'description' => 'Hãng thực phẩm bổ sung cao cấp của Mỹ',
                'country' => 'Mỹ',
                'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585117208/AGF-l78sXDnBuzNtgBByPtlQ_A8E2Z3vPiRtEYTm_s900-c-k-c0xffffffff-no-rj-mo_cmqxft.jpg'
            ],
            [
                'name' => 'Mutant',
                'description' => 'Hãng thực phẩm bổ sung cao cấp của Canada',
                'country' => 'Canada',
                'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585117345/dietary-supplement-bodybuilding-supplement-mutant-muscle-bodybuilder-logo-png-clip-art_nzhosx.png'
            ],
            [
                'name' => 'MyProtein',
                'description' => 'Hãng thực phẩm bổ sung cao cấp của Anh',
                'country' => 'Anh',
                'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585117430/d3c59aa6-fa5a-498a-bb46-dac84e3c19ee_bn6p1y.jpg'
            ],
            [
                'name' => 'Ultimate Nutrition',
                'description' => 'Hãng thực phẩm bổ sung cao cấp của Mỹ',
                'country' => 'Mỹ',
                'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585117605/ultimate_nutririon_ne3rzz.png'
            ],
            [
                'name' => 'BPI Sport',
                'description' => 'Hãng thực phẩm bổ sung cao cấp của Mỹ',
                'country' => 'Mỹ',
                'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585117649/xkD30UFU1568798005_bngmxv.jpg'
            ],
            [
                'name' => 'Others',
                'description' => 'Các hãng khác',
                'country' => 'somewhere',
                'logo' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585117810/country-flags_icvb60.jpg'
            ],
        ]);
    }
}
