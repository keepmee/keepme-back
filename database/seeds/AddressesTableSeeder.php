<?php

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Address::create([
            'address_line1' => '6 Rue Victor Hugo',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.3549826',
            'longitude'     => '3.1252909'
        ]);

        Address::create([
            'address_line1' => '178 Rue du Marechal Leclerc',
            'postcode'      => 59552,
            'city'          => 'Lambres-lez-Douai',
            'latitude'      => '50.35612',
            'longitude'     => '3.064603'
        ]);

        Address::create([
            'address_line1' => '13 Rue de la Paix',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.345921',
            'longitude'     => '3.126928'
        ]);

        Address::create([
            'address_line1' => '27 BIS RUE MASCLET',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.35472',
            'longitude'     => '3.128863'
        ]);

        Address::create([
            'address_line1' => '114 Rue Maurice Mahieu',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.360825',
            'longitude'     => '3.121569'
        ]);

        Address::create([
            'address_line1' => '661 RUE DU GAL CHARLES DELESTRAINT',
            'postcode'      => 59552,
            'city'          => 'Lambres-lez-Douai',
            'latitude'      => '50.361081',
            'longitude'     => '3.060874'
        ]);

        Address::create([
            'address_line1' => '258 Avenue des Nations Unies',
            'postcode'      => 59100,
            'city'          => 'Roubaix',
            'latitude'      => '50.69452',
            'longitude'     => '3.177729'
        ]);

        Address::create([
            'address_line1' => '73 Rue Waldeck Rousseau',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.351407',
            'longitude'     => '3.13292'
        ]);

        Address::create([
            'address_line1' => '44 Rue Lucien Moreau',
            'postcode'      => 59119,
            'city'          => 'Waziers',
            'latitude'      => '50.382666',
            'longitude'     => '3.102249'
        ]);

        Address::create([
            'address_line1' => '17 RUE DES HORTENSIAS',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.34822',
            'longitude'     => '3.129389'
        ]);

        Address::create([
            'address_line1' => '12 Rue Louis Dupont',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.363342',
            'longitude'     => '3.102287'
        ]);

        Address::create([
            'address_line1' => '22 RUE GUSTAVE EIFFEL',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.349401',
            'longitude'     => '3.131564'
        ]);

        Address::create([
            'address_line1' => '112 Rue Louis Marteau',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.363792',
            'longitude'     => '3.104273'
        ]);

        Address::create([
            'address_line1' => '535 Rue Jules Guesde',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.360981',
            'longitude'     => '3.106209'
        ]);

        Address::create([
            'address_line1' => '202 Rue Youri Gagarine',
            'postcode'      => 59287,
            'city'          => 'Guesnain',
            'latitude'      => '50.350765',
            'longitude'     => '3.153744'
        ]);

        Address::create([
            'address_line1' => '41 RUE ALCIDE MOCHE',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.357349',
            'longitude'     => '3.128473'
        ]);

        Address::create([
            'address_line1' => '188 Rue des Saules',
            'postcode'      => 59119,
            'city'          => 'Waziers',
            'latitude'      => '50.387714',
            'longitude'     => '3.122405'
        ]);

        Address::create([
            'address_line1' => '96 Rue Francisco Ferrer',
            'postcode'      => 59119,
            'city'          => 'Waziers',
            'latitude'      => '50.387142',
            'longitude'     => '3.115501'
        ]);

        Address::create([
            'address_line1' => '27 Rue Benjamin Favre',
            'postcode'      => 59119,
            'city'          => 'Waziers',
            'latitude'      => '50.384736',
            'longitude'     => '3.10207'
        ]);

        Address::create([
            'address_line1' => '108 B Place des Vesignons',
            'postcode'      => 59287,
            'city'          => 'Lewarde',
            'latitude'      => '50.34033',
            'longitude'     => '3.164373'
        ]);

        Address::create([
            'address_line1' => '15 Rue Paul Langevin',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.343801',
            'longitude'     => '3.126079'
        ]);

        Address::create([
            'address_line1' => '51 Rue Fernand Dussart',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.364396',
            'longitude'     => '3.102118'
        ]);

        Address::create([
            'address_line1' => '53 Rue Julian Grimau',
            'postcode'      => 59287,
            'city'          => 'Guesnain',
            'latitude'      => '50.348671',
            'longitude'     => '3.135977'
        ]);

        Address::create([
            'address_line1' => '31 Rue de Belfort',
            'postcode'      => 59119,
            'city'          => 'Waziers',
            'latitude'      => '50.382223',
            'longitude'     => '3.097628'
        ]);

        Address::create([
            'address_line1' => '32 Rue de Tregastel',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.370522',
            'longitude'     => '3.100998'
        ]);

        Address::create([
            'address_line1' => '80 RUE DU 8 MAI 1945',
            'postcode'      => 59287,
            'city'          => 'Guesnain',
            'latitude'      => '50.347974',
            'longitude'     => '3.137739'
        ]);

        Address::create([
            'address_line1' => '329 Rue Faidherbe',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.365931',
            'longitude'     => '3.115951'
        ]);

        Address::create([
            'address_line1' => '220 Rue Roger Sticker',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.368231',
            'longitude'     => '3.118422'
        ]);

        Address::create([
            'address_line1' => '154 Rue de Montigny',
            'postcode'      => 59287,
            'city'          => 'Lewarde',
            'latitude'      => '50.347172',
            'longitude'     => '3.170719'
        ]);

        Address::create([
            'address_line1' => '3 Cité Courtecuisse',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.359679',
            'longitude'     => '3.104799'
        ]);

        Address::create([
            'address_line1' => '96 Rue Fernand Leger',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.368933',
            'longitude'     => '3.101511'
        ]);

        Address::create([
            'address_line1' => '93 Rue Marceau',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.360759',
            'longitude'     => '3.109539'
        ]);

        Address::create([
            'address_line1' => '11 Rue Ambroise Croizat',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.352003',
            'longitude'     => '3.123618'
        ]);

        Address::create([
            'address_line1' => '26 IMPASSE DES COQUELICOTS',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.3478689308607',
            'longitude'     => '3.10570609967949'
        ]);

        Address::create([
            'address_line1' => '18 RUE HENRI AUDEGON',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.35117',
            'longitude'     => '3.13154'
        ]);

        Address::create([
            'address_line1' => '5 Rue des Acacias',
            'postcode'      => 59146,
            'city'          => 'Pecquencourt',
            'latitude'      => '50.379772',
            'longitude'     => '3.224545'
        ]);

        Address::create([
            'address_line1' => '22 B RUE PAUL VAILLANT COUTURIER',
            'postcode'      => 59146,
            'city'          => 'Pecquencourt',
            'latitude'      => '50.37503',
            'longitude'     => '3.230672'
        ]);

        Address::create([
            'address_line1' => '413 Rue Edouard Vaillant',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.360149',
            'longitude'     => '3.110667'
        ]);

        Address::create([
            'address_line1' => '330 Rue Alcide Moche',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.3653501056888',
            'longitude'     => '3.1181432743926'
        ]);

        Address::create([
            'address_line1' => '134 Rue Rene Golliot',
            'postcode'      => 59287,
            'city'          => 'Guesnain',
            'latitude'      => '50.351541',
            'longitude'     => '3.142873'
        ]);

        Address::create([
            'address_line1' => '17 Avenue de Flandre',
            'postcode'      => 59290,
            'city'          => 'Wasquehal',
            'latitude'      => '50.664862',
            'longitude'     => '3.11611'
        ]);

        Address::create([
            'address_line1' => '101 BIS Rue Waldeck Rousseau',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.350951',
            'longitude'     => '3.134306'
        ]);

        Address::create([
            'address_line1' => '15 Rue de Tregastel',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.370513',
            'longitude'     => '3.1001'
        ]);

        Address::create([
            'address_line1' => '333 Rue Edouard Vaillant',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.360862',
            'longitude'     => '3.111059'
        ]);

        Address::create([
            'address_line1' => '12 RUE AIMABLE ET GERMINAL MARTEL',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.345792',
            'longitude'     => '3.124888'
        ]);

        Address::create([
            'address_line1' => '39 Rue Saint-jacques',
            'postcode'      => 59170,
            'city'          => 'Croix',
            'latitude'      => '50.686464',
            'longitude'     => '3.154109'
        ]);

        Address::create([
            'address_line1' => '358 Rue de Waziers',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.376434',
            'longitude'     => '3.117377'
        ]);

        Address::create([
            'address_line1' => '4 Rue Martin Luther King',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.347548',
            'longitude'     => '3.129175'
        ]);

        Address::create([
            'address_line1' => '124 Rue de Lille',
            'postcode'      => 59290,
            'city'          => 'Wasquehal',
            'latitude'      => '50.667246',
            'longitude'     => '3.122162'
        ]);

        Address::create([
            'address_line1' => '183 Rue Paul Emile Victor',
            'postcode'      => 59552,
            'city'          => 'Lambres-lez-Douai',
            'latitude'      => '50.347464',
            'longitude'     => '3.076539'
        ]);

        Address::create([
            'address_line1' => '31 PLACE DE LA LIBERTE',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.362808',
            'longitude'     => '3.11547'
        ]);

        Address::create([
            'address_line1' => '13 Rue Guy Moquet',
            'postcode'      => 59146,
            'city'          => 'Pecquencourt',
            'latitude'      => '50.377804',
            'longitude'     => '3.224172'
        ]);

        Address::create([
            'address_line1' => '9001 Rue Lucien Moreau',
            'postcode'      => 59119,
            'city'          => 'Waziers',
            'latitude'      => '50.37559',
            'longitude'     => '3.100009'
        ]);

        Address::create([
            'address_line1' => '72 Rue de Roucourt',
            'postcode'      => 59287,
            'city'          => 'Lewarde',
            'latitude'      => '50.339801',
            'longitude'     => '3.16308'
        ]);

        Address::create([
            'address_line1' => '6 CHEMIN DE LA JUSTICE',
            'postcode'      => 59187,
            'city'          => 'Dechy',
            'latitude'      => '50.347749',
            'longitude'     => '3.128085'
        ]);

        Address::create([
            'address_line1' => '98 Rue de Champagne',
            'postcode'      => 59700,
            'city'          => 'Marcq-en-Barul',
            'latitude'      => '50.68021',
            'longitude'     => '3.105328'
        ]);

        Address::create([
            'address_line1' => '817 Square Romain Rolland',
            'postcode'      => 59450,
            'city'          => 'Sin-le-Noble',
            'latitude'      => '50.345877',
            'longitude'     => '3.103529'
        ]);

        Address::create([
            'address_line1' => '311 RUE DU 8 MAI 1945',
            'postcode'      => 59287,
            'city'          => 'Guesnain',
            'latitude'      => '50.347215',
            'longitude'     => '3.135869'
        ]);


    }
}
