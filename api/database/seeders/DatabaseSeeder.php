<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\{Level, Gender, Visitor, Nacionality, Pvc, Progress, Police_rank, Status, Document, Direction, Floor, Department, Group, Section, User, Thing};


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //$this->call(UsersTableSeeder::class);

        //$this->call(NacionalityTableSeeder::class);

        /*  DB::table('levels')->insert([
                'name' => 'superadmin'
        ]); */

        


        Thing::create(['name' => 'ENTREGUEI OS PERTENCES']);
        Thing::create(['name' => 'UTENTE SEM PERTENCES']);

        /* THING */
        Level::create(['name' => 'superadmin']);
        Level::create(['name' => 'admin']);
        Level::create(['name' => 'useradmin']);
        Level::create(['name' => 'user']);

        /* gender */
        Gender::create(['name' => 'Femenino']);
        Gender::create(['name' => 'Masculino']);

        /* Floor */
        Floor::create(['name' => '4º Andar']);
        Floor::create(['name' => '3º Andar']);
        Floor::create(['name' => '2º Andar']);
        Floor::create(['name' => '1º Andar']);
        Floor::create(['name' => 'Rés-do-chão']);



        /* Nacionality */
       
        Nacionality::create(['name' => 'United States']);
        Nacionality::create(['name' => 'Canada']);
        Nacionality::create(['name' => 'Afghanistan']);
        Nacionality::create(['name' => 'Albania']);
        Nacionality::create(['name' => 'Algeria']);
        Nacionality::create(['name' => 'American Samoa']);
        Nacionality::create(['name' => 'Andorra']);
        Nacionality::create(['name' => 'Angola']);
        Nacionality::create(['name' => 'Anguilla']);
        Nacionality::create(['name' => 'Antarctica']);
        Nacionality::create(['name' => 'Antigua and/or Barbuda']);
        Nacionality::create(['name' => 'Argentina']);
        Nacionality::create(['name' => 'Armenia']);
        Nacionality::create(['name' => 'Aruba']);
        Nacionality::create(['name' => 'Australia']);
        Nacionality::create(['name' => 'Austria']);
        Nacionality::create(['name' => 'Azerbaijan']);
        Nacionality::create(['name' => 'Bahamas']);
        Nacionality::create(['name' => 'Bahrain']);
        Nacionality::create(['name' => 'Bangladesh']);
        Nacionality::create(['name' => 'Barbados']);
        Nacionality::create(['name' => 'Belarus']);
        Nacionality::create(['name' => 'Belgium']);
        Nacionality::create(['name' => 'Belize']);
        Nacionality::create(['name' => 'Benin']);
        Nacionality::create(['name' => 'Bermuda']);
        Nacionality::create(['name' => 'Bhutan']);
        Nacionality::create(['name' => 'Bolivia']);
        Nacionality::create(['name' => 'Bosnia and Herzegovina']);
        Nacionality::create(['name' => 'Botswana']);
        Nacionality::create(['name' => 'Bouvet Island']);
        Nacionality::create(['name' => 'Brazil']);
        Nacionality::create(['name' => 'British lndian Ocean Territory']);
        Nacionality::create(['name' => 'Brunei Darussalam']);
        Nacionality::create(['name' => 'Bulgaria']);
        Nacionality::create(['name' => 'Burkina Faso']);
        Nacionality::create(['name' => 'Burundi']);
        Nacionality::create(['name' => 'Cambodia']);
        Nacionality::create(['name' => 'Cameroon']);
        Nacionality::create(['name' => 'Cape Verde']);
        Nacionality::create(['name' => 'Cayman Islands']);
        Nacionality::create(['name' => 'Central African Republic']);
        Nacionality::create(['name' => 'Chad']);
        Nacionality::create(['name' => 'Chile']);
        Nacionality::create(['name' => 'China']);
        Nacionality::create(['name' => 'Christmas Island']);
        Nacionality::create(['name' => 'Cocos (Keeling) Islands']);
        Nacionality::create(['name' => 'Colombia']);
        Nacionality::create(['name' => 'Comoros']);
        Nacionality::create(['name' => 'Congo']);
        Nacionality::create(['name' => 'Cook Islands']);
        Nacionality::create(['name' => 'Costa Rica']);
        Nacionality::create(['name' => 'Croatia (Hrvatska)']);
        Nacionality::create(['name' => 'Cuba']);
        Nacionality::create(['name' => 'Cyprus']);
        Nacionality::create(['name' => 'Czech Republic']);
        Nacionality::create(['name' => 'Democratic Republic of Congo']);
        Nacionality::create(['name' => 'Denmark']);
        Nacionality::create(['name' => 'Djibouti']);
        Nacionality::create(['name' => 'Dominica']);
        Nacionality::create(['name' => 'Dominican Republic']);
        Nacionality::create(['name' => 'East Timor']);
        Nacionality::create(['name' => 'Ecuador']);
        Nacionality::create(['name' => 'Egypt']);
        Nacionality::create(['name' => 'El Salvador']);
        Nacionality::create(['name' => 'Equatorial Guinea']);
        Nacionality::create(['name' => 'Eritrea']);
        Nacionality::create(['name' => 'Estonia']);
        Nacionality::create(['name' => 'Ethiopia']);
        Nacionality::create(['name' => 'Falkland Islands (Malvinas)']);
        Nacionality::create(['name' => 'Faroe Islands']);
        Nacionality::create(['name' => 'Fiji']);
        Nacionality::create(['name' => 'Finland']);
        Nacionality::create(['name' => 'France']);
        Nacionality::create(['name' => 'France, Metropolitan']);
        Nacionality::create(['name' => 'French Guiana']);
        Nacionality::create(['name' => 'French Polynesia']);
        Nacionality::create(['name' => 'French Southern Territories']);
        Nacionality::create(['name' => 'Gabon']);
        Nacionality::create(['name' => 'Gambia']);
        Nacionality::create(['name' => 'Georgia']);
        Nacionality::create(['name' => 'Germany']);
        Nacionality::create(['name' => 'Ghana']);
        Nacionality::create(['name' => 'Gibraltar']);
        Nacionality::create(['name' => 'Greece']);
        Nacionality::create(['name' => 'Greenland']);
        Nacionality::create(['name' => 'Grenada']);
        Nacionality::create(['name' => 'Guadeloupe']);
        Nacionality::create(['name' => 'Guam']);
        Nacionality::create(['name' => 'Guatemala']);
        Nacionality::create(['name' => 'Guinea']);
        Nacionality::create(['name' => 'Guinea-Bissau']);
        Nacionality::create(['name' => 'Guyana']);
        Nacionality::create(['name' => 'Haiti']);
        Nacionality::create(['name' => 'Heard and Mc Donald Islands']);
        Nacionality::create(['name' => 'Honduras']);
        Nacionality::create(['name' => 'Hong Kong']);
        Nacionality::create(['name' => 'Hungary']);
        Nacionality::create(['name' => 'Iceland']);
        Nacionality::create(['name' => 'India']);
        Nacionality::create(['name' => 'Indonesia']);
        Nacionality::create(['name' => 'Iran (Islamic Republic of)']);
        Nacionality::create(['name' => 'Iraq']);
        Nacionality::create(['name' => 'Ireland']);
        Nacionality::create(['name' => 'Israel']);
        Nacionality::create(['name' => 'Italy']);
        Nacionality::create(['name' => 'Ivory Coast']);
        Nacionality::create(['name' => 'Jamaica']);
        Nacionality::create(['name' => 'Japan']);
        Nacionality::create(['name' => 'Jordan']);
        Nacionality::create(['name' => 'Kazakhstan']);
        Nacionality::create(['name' => 'Kenya']);
        Nacionality::create(['name' => 'Kiribati']);
        Nacionality::create(['name' => 'Korea, Democratic People\'s Republic of']);
        Nacionality::create(['name' => 'Korea, Republic of']);
        Nacionality::create(['name' => 'Kuwait']);
        Nacionality::create(['name' => 'Kyrgyzstan']);
        Nacionality::create(['name' => 'Lao People\'s Democratic Republic']);
        Nacionality::create(['name' => 'Latvia']);
        Nacionality::create(['name' => 'Lebanon']);
        Nacionality::create(['name' => 'Lesotho']);
        Nacionality::create(['name' => 'Liberia']);
        Nacionality::create(['name' => 'Libyan Arab Jamahiriya']);
        Nacionality::create(['name' => 'Liechtenstein']);
        Nacionality::create(['name' => 'Lithuania']);
        Nacionality::create(['name' => 'Luxembourg']);
        Nacionality::create(['name' => 'Macau']);
        Nacionality::create(['name' => 'Macedonia']);
        Nacionality::create(['name' => 'Madagascar']);
        Nacionality::create(['name' => 'Malawi']);
        Nacionality::create(['name' => 'Malaysia']);
        Nacionality::create(['name' => 'Maldives']);
        Nacionality::create(['name' => 'Mali']);
        Nacionality::create(['name' => 'Malta']);
        Nacionality::create(['name' => 'Marshall Islands']);
        Nacionality::create(['name' => 'Martinique']);
        Nacionality::create(['name' => 'Mauritania']);
        Nacionality::create(['name' => 'Mauritius']);
        Nacionality::create(['name' => 'Mayotte']);
        Nacionality::create(['name' => 'Mexico']);
        Nacionality::create(['name' => 'Micronesia, Federated States of']);
        Nacionality::create(['name' => 'Moldova, Republic of']);
        Nacionality::create(['name' => 'Monaco']);
        Nacionality::create(['name' => 'Mongolia']);
        Nacionality::create(['name' => 'Montserrat']);
        Nacionality::create(['name' => 'Morocco']);
        Nacionality::create(['name' => 'Mozambique']);
        Nacionality::create(['name' => 'Myanmar']);
        Nacionality::create(['name' => 'Namibia']);
        Nacionality::create(['name' => 'Nauru']);
        Nacionality::create(['name' => 'Nepal']);
        Nacionality::create(['name' => 'Netherlands']);
        Nacionality::create(['name' => 'Netherlands Antilles']);
        Nacionality::create(['name' => 'New Caledonia']);
        Nacionality::create(['name' => 'New Zealand']);
        Nacionality::create(['name' => 'Nicaragua']);
        Nacionality::create(['name' => 'Niger']);
        Nacionality::create(['name' => 'Nigeria']);
        Nacionality::create(['name' => 'Niue']);
        Nacionality::create(['name' => 'Norfork Island']);
        Nacionality::create(['name' => 'Northern Mariana Islands']);
        Nacionality::create(['name' => 'Norway']);
        Nacionality::create(['name' => 'Oman']);
        Nacionality::create(['name' => 'Pakistan']);
        Nacionality::create(['name' => 'Palau']);
        Nacionality::create(['name' => 'Panama']);
        Nacionality::create(['name' => 'Papua New Guinea']);
        Nacionality::create(['name' => 'Paraguay']);
        Nacionality::create(['name' => 'Peru']);
        Nacionality::create(['name' => 'Philippines']);
        Nacionality::create(['name' => 'Pitcairn']);
        Nacionality::create(['name' => 'Poland']);
        Nacionality::create(['name' => 'Portugal']);
        Nacionality::create(['name' => 'Puerto Rico']);
        Nacionality::create(['name' => 'Qatar']);
        Nacionality::create(['name' => 'Republic of South Sudan']);
        Nacionality::create(['name' => 'Reunion']);
        Nacionality::create(['name' => 'Romania']);
        Nacionality::create(['name' => 'Russian Federation']);
        Nacionality::create(['name' => 'Rwanda']);
        Nacionality::create(['name' => 'Saint Kitts and Nevis']);
        Nacionality::create(['name' => 'Saint Lucia']);
        Nacionality::create(['name' => 'Saint Vincent and the Grenadines']);
        Nacionality::create(['name' => 'Samoa']);
        Nacionality::create(['name' => 'San Marino']);
        Nacionality::create(['name' => 'Sao Tome and Principe']);
        Nacionality::create(['name' => 'Saudi Arabia']);
        Nacionality::create(['name' => 'Senegal']);
        Nacionality::create(['name' => 'Serbia']);
        Nacionality::create(['name' => 'Seychelles']);
        Nacionality::create(['name' => 'Sierra Leone']);
        Nacionality::create(['name' => 'Singapore']);
        Nacionality::create(['name' => 'Slovakia']);
        Nacionality::create(['name' => 'Slovenia']);
        Nacionality::create(['name' => 'Solomon Islands']);
        Nacionality::create(['name' => 'Somalia']);
        Nacionality::create(['name' => 'South Africa']);
        Nacionality::create(['name' => 'South Georgia South Sandwich Islands']);
        Nacionality::create(['name' => 'Spain']);
        Nacionality::create(['name' => 'Sri Lanka']);
        Nacionality::create(['name' => 'St. Helena']);
        Nacionality::create(['name' => 'St. Pierre and Miquelon']);
        Nacionality::create(['name' => 'Sudan']);
        Nacionality::create(['name' => 'Suriname']);
        Nacionality::create(['name' => 'Svalbarn and Jan Mayen Islands']);
        Nacionality::create(['name' => 'Swaziland']);
        Nacionality::create(['name' => 'Sweden']);
        Nacionality::create(['name' => 'Switzerland']);
        Nacionality::create(['name' => 'Syrian Arab Republic']);
        Nacionality::create(['name' => 'Taiwan']);
        Nacionality::create(['name' => 'Tajikistan']);
        Nacionality::create(['name' => 'Tanzania, United Republic of']);
        Nacionality::create(['name' => 'Thailand']);
        Nacionality::create(['name' => 'Togo']);
        Nacionality::create(['name' => 'Tokelau']);
        Nacionality::create(['name' => 'Tonga']);
        Nacionality::create(['name' => 'Trinidad and Tobago']);
        Nacionality::create(['name' => 'Tunisia']);
        Nacionality::create(['name' => 'Turkey']);
        Nacionality::create(['name' => 'Turkmenistan']);
        Nacionality::create(['name' => 'Turks and Caicos Islands']);
        Nacionality::create(['name' => 'Tuvalu']);
        Nacionality::create(['name' => 'Uganda']);
        Nacionality::create(['name' => 'Ukraine']);
        Nacionality::create(['name' => 'United Arab Emirates']);
        Nacionality::create(['name' => 'United Kingdom']);
        Nacionality::create(['name' => 'United States minor outlying islands']);
        Nacionality::create(['name' => 'Uruguay']);
        Nacionality::create(['name' => 'Uzbekistan']);
        Nacionality::create(['name' => 'Vanuatu']);
        Nacionality::create(['name' => 'Vatican City State']);
        Nacionality::create(['name' => 'Venezuela']);
        Nacionality::create(['name' => 'Vietnam']);
        Nacionality::create(['name' => 'Virgin Islands (British)']);
        Nacionality::create(['name' => 'Virgin Islands (U.S.)']);
        Nacionality::create(['name' => 'Wallis and Futuna Islands']);
        Nacionality::create(['name' => 'Western Sahara']);
        Nacionality::create(['name' => 'Yemen']);
        Nacionality::create(['name' => 'Yugoslavia']);
        Nacionality::create(['name' => 'Zaire']);
        Nacionality::create(['name' => 'Zambia']);
        Nacionality::create(['name' => 'Zimbabwe']);
        Nacionality::create(['name' => 'Outro/SN']);



        /* Pvc */

        Pvc::create(['number_pvc' => '001']);
        Pvc::create(['number_pvc' => '002']);
        Pvc::create(['number_pvc' => '003']);
        Pvc::create(['number_pvc' => '004']);
        Pvc::create(['number_pvc' => '005']);



        Progress::create(['name' => 'Pendente']);
        Progress::create(['name' => 'Aprovado']);
        Progress::create(['name' => 'Recusado']);



        Document::create(['name' => 'Passporte']);
        Document::create(['name' => 'Carta de conducao']);
        Document::create(['name' => 'Bilhete de Identidade']);
        Document::create(['name' => 'Passe de servico']);
        Document::create(['name' => 'Nenhum']);



        Police_rank::create(['name' => 'Agente de 3º classe']);
        Police_rank::create(['name' => 'Sub-inspector']);
        Police_rank::create(['name' => 'Intendente']);
        Police_rank::create(['name' => 'Comissario']);



        Status::create(['name' => 'Activo']);
        Status::create(['name' => 'Inactivo']);


        /* visitor */
        Visitor::create([
            'name' => 'Mohamed akhil',
            'birthday' =>  "08-08-1989",
            'image' => '',
            'doc_number' => '0321LA03',
            'doc_emition' => '02-03-2020',
            'affiliation' => 'samir akhil',
            'phone_number' => '925858489',
            'gender_id' => '1',
            'nacionality_id' => '3',
            'document_id' => '2',
        ]);


        Visitor::create([
            'name' => 'lira assis',
            'birthday' =>  "08-08-1990",
            'image' => '',
            'doc_number' => '0321LA001',
            'doc_emition' => '02-03-2020',
            'affiliation' => 'carlos assis',
            'phone_number' => '925858401',
            'gender_id' => '2',
            'nacionality_id' => '6',
            'document_id' => '3',
        ]);


        Visitor::create([
            'name' => 'Chris coelho',
            'birthday' =>  "08-08-1989",
            'image' => '',
            'doc_number' => '0321LA004',
            'doc_emition' => '02-03-2020',
            'affiliation' => 'paulo coelho',
            'phone_number' => '925858404',
            'gender_id' => '2',
            'nacionality_id' => '5',
            'document_id' => '1',
        ]);


        Visitor::create([
            'name' => 'Fernando nunes',
            'birthday' =>  "08-08-1989",
            'image' => '',
            'doc_number' => '0321LA05',
            'doc_emition' => '02-03-2020',
            'affiliation' => 'augusto nunes',
            'phone_number' => '925858406',
            'gender_id' => '1',
            'nacionality_id' => '7',
            'document_id' => '2',
        ]);

        Visitor::create([
            'name' => 'Edgar Manuel',
            'birthday' =>  "08-08-1989",
            'image' => '',
            'doc_number' => '0321LA09',
            'doc_emition' => '02-03-2020',
            'affiliation' => 'Domingos mussumar',
            'phone_number' => '925858477',
            'gender_id' => '1',
            'nacionality_id' => '3',
            'document_id' => '2',
        ]);


        /* groups */

        Group::create([

            'name' => 'DTI',
        ]);

        Group::create([

            'name' => 'RH',
        ]);
        Group::create([

            'name' => 'DAM',
        ]);
        Group::create([

            'name' => 'PGR',
        ]);
        Group::create([

            'name' => 'GEIA',
        ]);
        Group::create([

            'name' => 'SECR.GERAL',
        ]);


        Direction::create(
            [

                'name' => 'Estrangeiros',
                'extention' =>  "987",
                'floor_id' => '1',
                'group_id' => '1',


            ]
        );

        Direction::create([
            'name' => 'Maritima',
            'extention' =>  "787",
            'floor_id' => '2',
            'group_id' => '2',

        ]);

        Direction::create([
            'name' => 'Fronteiras',
            'extention' =>  "387",
            'floor_id' => '3',
            'group_id' => '4',

        ]);
        Direction::create([

            'name' => 'DTI',
            'extention' =>  "5987",
            'floor_id' => '4',
            'group_id' => '5',

        ]);
        Direction::create([

            'name' => 'HR',
            'extention' =>  "5989",
            'floor_id' => '5',
            'group_id' => '5',

        ]);





        Department::create([

            'name' => 'Desenvolvimento',
            'extention' =>  "201",
            'direction_id' => '4',
            'floor_id' => '3',
            'group_id' => '1',

        ]);

        Department::create([

            'name' => 'analises',
            'extention' =>  "202",
            'direction_id' => '4',
            'floor_id' => '2',
            'group_id' => '2',

        ]);

        Department::create([

            'name' => 'Secretariado',
            'extention' =>  "203",
            'direction_id' => '4',
            'floor_id' => '4',
            'group_id' => '3',

        ]);

        Department::create([

            'name' => 'manutencoes',
            'extention' =>  "204",
            'direction_id' => '4',
            'floor_id' => '1',
            'group_id' => '4',

        ]);

        /* section */

        Section::create([

            'name' => 'design',
            'department_id' => '1',
            'extention' =>  "102",
            'floor_id' => '1',
            'group_id' => '1',


        ]);

        Section::create([

            'name' => 'area 10',
            'department_id' => '2',
            'extention' =>  "103",
            'floor_id' => '2',
            'group_id' => '2',

        ]);

        Section::create([

            'name' => 'Pincel',
            'department_id' => '3',
            'extention' =>  "104",
            'floor_id' => '3',
            'group_id' => '3',

        ]);

        Section::create([

            'name' => 'agrafos',

            'department_id' => '3',
            'extention' =>  "105",
            'floor_id' => '5',
            'group_id' => '4',


        ]);

        /* fims section */



        /* user */

        User::create([
            
            'first_name' => 'Austin',
            'last_name' => 'Edmar ',
            'birthday' =>  "08-08-1989",
            'phone_number' => '9238512501',
            'police_rank_id' => '1',
            'level_id' => '1',
            'direction_id' => '1',
            'gender_id' => '1',
            'status_id' => '1',
            'confirmation_token' => Str::random(60), 
            'email' => 'austin@gmail.com',
            'password' => Hash::make('Password1')

        ]);


        User::create([

            'first_name' => 'Azevedo ',
            'last_name' => 'Dias ',
            'birthday' =>  "08-08-1989",
            'phone_number' => '9238512502',
            'police_rank_id' => '2',
            'level_id' => '3',
            'direction_id' => '1',
            'gender_id' => '1',
            'status_id' => '1',
            'confirmation_token' => Str::random(60), 
            'email' => 'azevedo@gmail.com',
            'password' => Hash::make('Password1')

        ]);


        User::create([

            'first_name' => 'felgueiras',
            'last_name' => 'Silva ',
            'birthday' =>  "08-08-1989",
            'phone_number' => '9238512503',
            'police_rank_id' => '3',
            'level_id' => '1',
            'direction_id' => '1',
            'gender_id' => '1',
            'status_id' => '1',
            'confirmation_token' => Str::random(60), 
            'email' => 'felgueiras@gmail.com',
            'password' => Hash::make('Password1')

        ]);

        User::create([

            'first_name' => 'Dombaxe',
            'last_name' => 'Quanssambo ',
            'birthday' =>  "08-08-1989",
            'phone_number' => '9238512504',
            'police_rank_id' => '3',
            'level_id' => '3',
            'direction_id' => '1',
            'gender_id' => '1',
            'status_id' => '1',
            'confirmation_token' => Str::random(60), 
            'email' => 'dombaxi@gmail.com ',
            'password' => Hash::make('Password1')

        ]);


        User::create([

            'first_name' => 'Esmeralda',
            'last_name' => 'Luis ',
            'birthday' =>  "08-08-1989",
            'phone_number' => '9238512506',
            'police_rank_id' => '3',

            'level_id' => '4',

            'department_id' => '1',
            'gender_id' => '2',
            'status_id' => '1',
            'confirmation_token' => Str::random(60), 
            'email' => 'esmeralda@gmail.com',
            'password' => Hash::make('Password1')

        ]);

        User::create([

            'first_name' => 'Erick',
            'last_name' => 'TomTom ',
            'birthday' =>  "08-08-1989",
            'phone_number' => '9238512597',
            'police_rank_id' => '3',
            'level_id' => '1',
            'confirmation_token' => Str::random(60), 
            'department_id' => '1',
            'gender_id' => '1',
            'status_id' => '1',
           
            
            'email' => 'paulo@gmail.com',
            'password' => Hash::make('Password1')

        ]);


        /* fim users */
    }
}
