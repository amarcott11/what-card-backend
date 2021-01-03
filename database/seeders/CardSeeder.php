<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insertOrIgnore([
            'name' => 'AAdvantage Aviator Business',
            'bank_id' => 4,
            'bonus' => '75k American Airlines (AAdvantage) Miles',
            'business' => 1,
            'annual_fee' => 1,
            'app_link' => 'https://www.barclaycardus.com/apply/Landing.action?campaignId=2648&cellNumber=3&referrerid=BCSCD&xsessionid=17B108552FF9062C6551431A490337AE',
            'img_path' => 'barclays_aaviator_business.png'
        ]);

        DB::table('cards')->insertOrIgnore([
            'name' => 'Ink Business Preferred',
            'bank_id' => 1,
            'bonus' => '100k Chase Ultimate Rewards Points',
            'business' => 1,
            'premium' => 1,
            'annual_fee' => 1,
            'app_link' => 'https://creditcards.chase.com/a1/InkBusinessPreferred/8tk?CELL=6RRW',
            'img_path' => 'chase_ink_business_preferred.png'
        ]);

        DB::table('cards')->insertOrIgnore([
            'name' => 'Ink Business Unlimited',
            'bank_id' => 1,
            'bonus' => '$750 Bonus Cash Back',
            'business' => 1,
            'cashback' => 1,
            'app_link' => 'https://creditcards.chase.com/a1/InkBusinessUnlimited750?Cell=6RRW&jp_cmp=cc/Ink+Unlimited_Brand_BMM_Ink+Unlimited_SEM_US_NA_Standard_NA/sea/p56075824692/Ink+Unlimited+-+Chase&ds_rl=1256726&ds_rl=1268784&gclid=Cj0KCQiA0MD_BRCTARIsADXoopabRRVReTwbpl7CGl7L0_agoBHCZwIf9sDRsbHc1GeKu0kFOay5ZDQaAhZFEALw_wcB&gclsrc=aw.ds',
            'img_path' => 'chase_ink_business_unlimited.png'
        ]);

        DB::table('cards')->insertOrIgnore([
            'name' => 'Ink Business Cash',
            'bank_id' => 1,
            'bonus' => '$750 Bonus Cash Back',
            'business' => 1,
            'cashback' => 1,
            'app_link' => 'https://creditcards.chase.com/a1/olainkcash/750?CELL=6RRW',
            'img_path' => 'chase_ink_business_cash.png'
        ]);
    }
}
