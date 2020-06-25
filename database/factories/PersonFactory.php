<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Person;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Person::class, function (Faker $faker) {
    return [
        'Client_Id'                  => 'SHOCKLOGIC', //$faker->randomElement(['SHOCKLOGIC', 'TEST'])
        'Project_Id'                 => 'Test',
        'Family_Name'                => null,
        'First_Name'                 => $faker->firstname,
        'Prefix_Title'               => null,
        'Suffix_Title'               => null,
        'Company'                    => $faker->Company,
        'Address_1'                  => $faker->address,
        'Address_2'                  => $faker->address,
        'Address_3'                  => $faker->address,
        'Address_4'                  => $faker->address,
        'Zip_Code'                   => null,
        'City'                       => $faker->city,
        'Country_Code'               => $faker->countryCode,
        'Telephone'                  => $faker->e164PhoneNumber,
        'Telefax'                    => null,
        'EMail' 		             => $faker->unique()->safeEmail,
        'Email_Check'                => null,
        'Email_Check'                => null,
        'EMail2'                     => null,
        'Email2_Check'               => null,
        'Session_Id'                 => null,
        'Gender'                     => null,
        'JMUser_Id'                  => null,
		'Password' 		             => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'ExtraField01'               => null,
        'ExtraField02'               => null,
        'ExtraField03'               => null,
        'ExtraField04'               => null,
        'ExtraField05'               => null,
        'ExtraField06'               => null,
        'ExtraField07'               => null,
        'ExtraField08'               => null,
        'ExtraField09'               => null,
        'ExtraField10'               => null,
        'Mobile'                     => null,
        'URL'   		             => null,
        'Passport_Number'            => null,
        'Nationality'                => null,
        'ID_Number'                  => null,
        'Date_Of_Birth'              => $faker->date($format = 'Y-m-d', $max = 'now'),
        'Special_Needs_Physical'     => null,
        'Special_Needs_Dietary'      => null,
        'First_Name_For_Badge'       => null,
        'Family_Name_For_Badge'      => null,
        'Biography'                  => null,
        'VAT_Number'                 => null,
        'Membership_No'              => null,
        'Participant_Template'       => null,
        'Browser' 		             => $faker->userAgent,
        'User_Ip' 		             => $faker->ipv4,
        'msrepl_tran_version'        => null,
        'Holding_Entity'             => null,
        'Language_Code'              => $faker->languageCode,
        'ExtraField11'               => null,
        'ExtraField12'               => null,
        'ExtraField13'               => null,
        'ExtraField14'               => null,
        'ExtraField15'               => null,
        'ExtraField16'               => null,
        'ExtraField17'               => null,
        'ExtraField18'               => null,
        'ExtraField19'               => null,
        'ExtraField20'               => null, 
        'Image01'                    => $faker->imageUrl($width = 640, $height = 480),
        'Image02'                    => null,
        'Image03'                    => null,
        'Image04'                    => null,
        'Image05'                    => null,
        'Favorite_Person'            => null,
        'Last_Sync_Date'             => null,
        'Parent'                     => null,
        'Job_Title'                  => null,
        'Do_Not_Show_Publicly'       => null,
        'Consent_Store_Process_Data' => 0,
        'Consent_Conference_Emails'  => 0,
        'Consent_Marketing_Emails'   => 0,
        'Consent_Third_Parties'      => 0, 
        'Is_Forgotten'               => 0,
        'Date_Forgotten'             => null,
        'Old_Password'               => null,
    ];
});
