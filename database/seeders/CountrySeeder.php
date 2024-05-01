<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $countries = array(

            array('id' => '13','iso' => 'AU','name' => 'AUSTRALIA','nice_name' => 'Australia','iso3' => 'AUS','num_code' => '36','phone_code' => '61','currency' => 'AUD', 'file_name_flag' => 'AU.png'),
            array('id' => '30','iso' => 'BR','name' => 'BRAZIL','nice_name' => 'Brazil','iso3' => 'BRA','num_code' => '76','phone_code' => '55','currency' => 'BRL', 'file_name_flag' => 'BR.png'),
            array('id' => '38','iso' => 'CA','name' => 'CANADA','nice_name' => 'Canada','iso3' => 'CAN','num_code' => '124','phone_code' => '1','currency' => 'CAD', 'file_name_flag' => 'CA.png'),
            array('id' => '73','iso' => 'FR','name' => 'FRANCE','nice_name' => 'France','iso3' => 'FRA','num_code' => '250','phone_code' => '33','currency' => 'EUR', 'file_name_flag' => 'FR.png'),
            array('id' => '80','iso' => 'DE','name' => 'GERMANY','nice_name' => 'Germany','iso3' => 'DEU','num_code' => '276','phone_code' => '49','currency' => 'EUR', 'file_name_flag' => 'DE.png'),
            array('id' => '105','iso' => 'IT','name' => 'ITALY','nice_name' => 'Italy','iso3' => 'ITA','num_code' => '380','phone_code' => '39','currency' => 'EUR', 'file_name_flag' => 'IT.png'),
            array('id' => '99','iso' => 'IN','name' => 'INDIA','nice_name' => 'India','iso3' => 'IND','num_code' => '356','phone_code' => '91','currency' => 'INR', 'file_name_flag' => 'IN.png'),
            array('id' => '101','iso' => 'IR','name' => 'IRAN, ISLAMIC REPUBLIC OF','nice_name' => 'Iran','iso3' => 'IRN','num_code' => '364','phone_code' => '98','currency' => 'IRR', 'file_name_flag' => 'IR.png'),
            array('id' => '114','iso' => 'KW','name' => 'KUWAIT','nice_name' => 'Kuwait','iso3' => 'KWT','num_code' => '414','phone_code' => '965','currency' => 'KWD', 'file_name_flag' => 'KW.png'),
            array('id' => '141','iso' => 'MC','name' => 'MONACO','nice_name' => 'Monaco','iso3' => 'MCO','num_code' => '492','phone_code' => '377','currency' => 'EUR', 'file_name_flag' => 'MC.png'),
            array('id' => '162','iso' => 'PK','name' => 'PAKISTAN','nice_name' => 'Pakistan','iso3' => 'PAK','num_code' => '586','phone_code' => '92','currency' => 'PKR', 'file_name_flag' => 'PK.png'),
            array('id' => '177','iso' => 'RU','name' => 'RUSSIAN FEDERATION','nice_name' => 'Russian','iso3' => 'RUS','num_code' => '643','phone_code' => '70','currency' => 'RUB', 'file_name_flag' => 'RU.png'),
            array('id' => '192','iso' => 'SG','name' => 'SINGAPORE','nice_name' => 'Singapore','iso3' => 'SGP','num_code' => '702','phone_code' => '65','currency' => 'SGD', 'file_name_flag' => 'SG.png'),
            array('id' => '206','iso' => 'CH','name' => 'SWITZERLAND','nice_name' => 'CH','iso3' => 'CHE','num_code' => '756','phone_code' => '41','currency' => 'CHF', 'file_name_flag' => 'CH.png'),
            array('id' => '199','iso' => 'ES','name' => 'SPAIN','nice_name' => 'Spain','iso3' => 'ESP','num_code' => '724','phone_code' => '34','currency' => 'EUR', 'file_name_flag' => 'ES.png'),
            array('id' => '187','iso' => 'SA','name' => 'SAUDI ARABIA','nice_name' => 'SA','iso3' => 'SAU','num_code' => '682','phone_code' => '966','currency' => 'SAR', 'file_name_flag' => 'SA.png'),
            array('id' => '218','iso' => 'TR','name' => 'TURKEY','nice_name' => 'Turkey','iso3' => 'TUR','num_code' => '792','phone_code' => '90','currency' => 'TRY', 'file_name_flag' => 'TR.png'),
            array('id' => '226','iso' => 'US','name' => 'UNITED STATES','nice_name' => 'US','iso3' => 'USA','num_code' => '840','phone_code' => '1','currency' => 'USD', 'file_name_flag' => 'US.png'),
            array('id' => '225','iso' => 'GB','name' => 'UNITED KINGDOM','nice_name' => 'UK','iso3' => 'GBR','num_code' => '826','phone_code' => '44','currency' => 'GBP', 'file_name_flag' => 'GB.png'),
            array('id' => '224','iso' => 'AE','name' => 'UNITED ARAB EMIRATES','nice_name' => 'UAE','iso3' => 'ARE','num_code' => '784','phone_code' => '971','currency' => 'AED', 'file_name_flag' => 'AE.png'),
        );


        Country::insert($countries);
    }

}
