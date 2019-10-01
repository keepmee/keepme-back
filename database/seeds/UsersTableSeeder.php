<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /********************************
         ********************************
         ******* NE PAS SUPPRIMER *******
         ********************************
         ********************************/
        User::create([
            'firstname'  => 'sofiane',
            'lastname'   => 'akbly',
            'email'      => 'akbly_s@etna-alternance.net',
            'phone'      => '01.02.03.04.05',
            'password'   => sha1('toto'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => \App\Models\Address::whereLatitude('50.3549826')->whereLongitude('3.1252909')->first()->id
        ]);

        User::create([
            'firstname' => 'ayad',
            'lastname'  => 'yanis',
            'email'     => 'ayad_y@etna-alternance.net',
            'phone'     => '01.02.03.04.05',
            'password'  => sha1('toto'),
            'birthday'  => null,
            'is_active' => true,
        ]);

        User::create([
            'firstname' => 'nassim',
            'lastname'  => 'el hormi',
            'email'     => 'elhorm_n@etna-alternance.net',
            'phone'     => '01.02.03.04.05',
            'password'  => sha1('toto'),
            'birthday'  => null,
            'is_active' => true,
        ]);

        User::create([
            'firstname' => 'louis',
            'lastname'  => 'de zeeuw',
            'email'     => 'dezeeu_l@etna-alternance.net',
            'phone'     => '01.02.03.04.05',
            'password'  => sha1('toto'),
            'birthday'  => null,
            'is_active' => true,
        ]);

        User::create([
            'firstname' => 'adrien',
            'lastname'  => 'da silva',
            'email'     => 'dasilv_b@etna-alternance.net',
            'phone'     => '01.02.03.04.05',
            'password'  => sha1('toto'),
            'birthday'  => null,
            'is_active' => true,
        ]);

        User::create([
            'firstname' => 'anthony',
            'lastname'  => 'benito',
            'email'     => 'benito_a@etna-alternance.net',
            'phone'     => '01.02.03.04.05',
            'password'  => sha1('toto'),
            'birthday'  => null,
            'is_active' => true,
        ]);

        User::create([
            'firstname' => 'asmae',
            'lastname'  => 'amzani',
            'email'     => 'amzani_a@etna-alternance.net',
            'phone'     => '01.02.03.04.05',
            'password'  => sha1('toto'),
            'birthday'  => null,
            'is_active' => true,
        ]);
        /********************************
         ********************************
         ***** FIN NE PAS SUPPRIMER *****
         ********************************
         ********************************/

        User::create([
            'firstname'  => 'jeanne',
            'lastname'   => 'mendes',
            'email'      => 'mendes_j@gmail.com',
            'phone'      => '09.74.81.25.97',
            'password'   => sha1('_+2gm&R'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 26
        ]);

        User::create([
            'firstname'  => 'audrey',
            'lastname'   => 'pinto',
            'email'      => 'pinto_a@gmail.com',
            'phone'      => '09.02.03.52.90',
            'password'   => sha1(',"&_ze~ZL[]!i_?'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 19
        ]);

        User::create([
            'firstname'  => 'isabelle',
            'lastname'   => 'benoit',
            'email'      => 'benoit.isabelle@hotmail.fr',
            'phone'      => '04.50.25.73.47',
            'password'   => sha1('s~P!{,hi#jj+{MIR#*xt'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 15
        ]);

        User::create([
            'firstname'  => 'roland',
            'lastname'   => 'guibert',
            'email'      => 'roland.guibert@hotmail.fr',
            'phone'      => '03.53.52.32.01',
            'password'   => sha1('e/g3|ax3DOVv>ws>YE8w'),
            'birthday'   => '1992-02-25',
            'is_active'  => true,
            'address_id' => 55
        ]);

        User::create([
            'firstname'  => 'maurice',
            'lastname'   => 'fontaine',
            'email'      => 'maurice.fontaine@gmail.com',
            'phone'      => '03.11.68.44.77',
            'password'   => sha1('?4,an=T#<5d%<6R'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 37
        ]);

        User::create([
            'firstname'  => 'gérard',
            'lastname'   => 'besson',
            'email'      => 'gerard.besson@gmail.com',
            'phone'      => '01.58.38.95.07',
            'password'   => sha1('cO|7t|Ju2uOT}l'),
            'birthday'   => '1995-03-19',
            'is_active'  => true,
            'address_id' => 18
        ]);

        User::create([
            'firstname'  => 'marcel',
            'lastname'   => 'foucher',
            'email'      => 'mfoucher@hotmail.fr',
            'phone'      => '05.35.83.51.61',
            'password'   => sha1('ClV$KyF'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 23
        ]);

        User::create([
            'firstname'  => 'maggie',
            'lastname'   => 'lambert',
            'email'      => 'mlambert@hotmail.fr',
            'phone'      => '09.19.67.11.93',
            'password'   => sha1('2NruO${JDu=/<m+qx)P!'),
            'birthday'   => '1994-05-12',
            'is_active'  => true,
            'address_id' => 57
        ]);

        User::create([
            'firstname'  => 'agathe',
            'lastname'   => 'humbert',
            'email'      => 'agathe.humbert@hotmail.fr',
            'phone'      => '01.70.39.69.31',
            'password'   => sha1('G],Hqy.+JH=kK6cp:'),
            'birthday'   => '1981-09-18',
            'is_active'  => true,
            'address_id' => 24
        ]);

        User::create([
            'firstname'  => 'michelle',
            'lastname'   => 'gilbert',
            'email'      => 'michelle.gilbert@gmail.com',
            'phone'      => '01.71.35.60.32',
            'password'   => sha1('$Os[Ij[=h>'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 43
        ]);

        User::create([
            'firstname'  => 'aurélie',
            'lastname'   => 'grondin',
            'email'      => 'aurelie.grondin@gmail.com',
            'phone'      => '07.39.74.39.67',
            'password'   => sha1('~5R=<{]aNO'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 14
        ]);

        User::create([
            'firstname'  => 'joséphine',
            'lastname'   => 'boutin',
            'email'      => 'josephine.boutin@gmail.com',
            'phone'      => '09.33.81.85.94',
            'password'   => sha1('SLN\'5`"N|3MG!;I\\?'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 34
        ]);

        User::create([
            'firstname'  => 'hélène',
            'lastname'   => 'pruvost',
            'email'      => 'helene.pruvost@hotmail.fr',
            'phone'      => '09.73.36.23.48',
            'password'   => sha1('v70cC8I?Y'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 22
        ]);

        User::create([
            'firstname'  => 'paulette',
            'lastname'   => 'clerc',
            'email'      => 'paulette.clerc@gmail.com',
            'phone'      => '07.61.74.68.37',
            'password'   => sha1('[$h5Ad""gs$NZ<}'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 56
        ]);

        User::create([
            'firstname'  => 'colette',
            'lastname'   => 'carlier',
            'email'      => 'colette.carlier@gmail.com',
            'phone'      => '01.06.11.15.68',
            'password'   => sha1('Q?-pKdc?+kfmbY'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 25
        ]);

        User::create([
            'firstname'  => 'agnès',
            'lastname'   => 'prevost',
            'email'      => 'prevost_a@hotmail.fr',
            'phone'      => '01.80.09.49.54',
            'password'   => sha1('L>r$2K]Sdhr'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 32
        ]);

        User::create([
            'firstname'  => 'gabriel',
            'lastname'   => 'jacques',
            'email'      => 'gabriel.jacques@hotmail.fr',
            'phone'      => '09.35.50.20.72',
            'password'   => sha1('+Z.iNH'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 48
        ]);

        User::create([
            'firstname'  => 'marianne',
            'lastname'   => 'jean',
            'email'      => 'marianne.jean@gmail.com',
            'phone'      => '01.45.09.27.87',
            'password'   => sha1('Ei3j.b*f+1IaZj\\fhN@'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 17
        ]);

        User::create([
            'firstname'  => 'thérèse',
            'lastname'   => 'guichard',
            'email'      => 'therese.guichard@hotmail.fr',
            'phone'      => '07.60.27.90.07',
            'password'   => sha1('Tpq;T(x*iDdMQ|'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 10
        ]);

        User::create([
            'firstname'  => 'david',
            'lastname'   => 'mathieu',
            'email'      => 'david.mathieu@hotmail.fr',
            'phone'      => '07.55.42.04.62',
            'password'   => sha1('R3|PF~7b'),
            'birthday'   => '1985-11-01',
            'is_active'  => true,
            'address_id' => 44
        ]);

        User::create([
            'firstname'  => 'denis',
            'lastname'   => 'roux',
            'email'      => 'denis.roux@hotmail.fr',
            'phone'      => '04.82.62.67.30',
            'password'   => sha1('L!|K}_PH@'),
            'birthday'   => '1983-10-15',
            'is_active'  => true,
            'address_id' => 51
        ]);

        User::create([
            'firstname'  => 'jacques',
            'lastname'   => 'colas',
            'email'      => 'jacques.colas@hotmail.fr',
            'phone'      => '01.37.31.35.69',
            'password'   => sha1('Q1xu%O1L[8a)o%ft$Ep'),
            'birthday'   => '1984-08-04',
            'is_active'  => true,
            'address_id' => 16
        ]);

        User::create([
            'firstname'  => 'sébastien',
            'lastname'   => 'camus',
            'email'      => 'camus_s@hotmail.fr',
            'phone'      => '01.25.06.11.35',
            'password'   => sha1('ck{ppNI7&u)|Q\''),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 46
        ]);

        User::create([
            'firstname'  => 'philippe',
            'lastname'   => 'roger',
            'email'      => 'philippe.roger@hotmail.fr',
            'phone'      => '01.35.33.19.41',
            'password'   => sha1(';y5tUC;'),
            'birthday'   => '1996-10-03',
            'is_active'  => true,
            'address_id' => 50
        ]);

        User::create([
            'firstname'  => 'thomas',
            'lastname'   => 'picard',
            'email'      => 'picard.thomas@hotmail.fr',
            'phone'      => '07.90.43.12.30',
            'password'   => sha1('jkI@J``G#l'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 49
        ]);

        User::create([
            'firstname'  => 'margot',
            'lastname'   => 'reynaud',
            'email'      => 'mreynaud@hotmail.fr',
            'phone'      => '09.33.50.74.54',
            'password'   => sha1('uLFyR*DLkCO*O}~sly'),
            'birthday'   => '1985-10-31',
            'is_active'  => true,
            'address_id' => 53
        ]);

        User::create([
            'firstname'  => 'xavier',
            'lastname'   => 'tessier',
            'email'      => 'tessier.xavier@hotmail.fr',
            'phone'      => '01.40.41.02.86',
            'password'   => sha1('i%$VJ(T~LR},'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 33
        ]);

        User::create([
            'firstname'  => 'xavier',
            'lastname'   => 'merle',
            'email'      => 'xavier.merle@gmail.com',
            'phone'      => '07.45.41.57.47',
            'password'   => sha1(',{4rQw5_3?;(g8+'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 21
        ]);

        User::create([
            'firstname'  => 'marine',
            'lastname'   => 'richard',
            'email'      => 'marine.richard@hotmail.fr',
            'phone'      => '04.00.29.22.98',
            'password'   => sha1('oE\\~]-'),
            'birthday'   => '1989-04-17',
            'is_active'  => true,
            'address_id' => 2
        ]);

        User::create([
            'firstname'  => 'martine',
            'lastname'   => 'riviere',
            'email'      => 'martine.riviere@gmail.com',
            'phone'      => '04.09.40.29.08',
            'password'   => sha1('=~f6q9MmZpb?EEVPez'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 4
        ]);

        User::create([
            'firstname'  => 'suzanne',
            'lastname'   => 'diallo',
            'email'      => 'sdiallo@hotmail.fr',
            'phone'      => '01.97.74.09.19',
            'password'   => sha1('<fVzOY-9aG!fX=Eh'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 52
        ]);

        User::create([
            'firstname'  => 'adélaïde',
            'lastname'   => 'gimenez',
            'email'      => 'adelaide.gimenez@hotmail.fr',
            'phone'      => '09.74.40.14.06',
            'password'   => sha1('(iZ$r%`su='),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 36
        ]);

        User::create([
            'firstname'  => 'zacharie',
            'lastname'   => 'renault',
            'email'      => 'zacharie.renault@hotmail.fr',
            'phone'      => '04.18.17.43.94',
            'password'   => sha1('&pp_{ntQrBp0v_lC$w_'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 8
        ]);

        User::create([
            'firstname'  => 'maggie',
            'lastname'   => 'navarro',
            'email'      => 'maggie.navarro@hotmail.fr',
            'phone'      => '01.74.41.88.11',
            'password'   => sha1('\'$Cps`W0,%QC`Oc-)A'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 41
        ]);

        User::create([
            'firstname'  => 'roland',
            'lastname'   => 'mercier',
            'email'      => 'mercier_r@gmail.com',
            'phone'      => '09.73.34.66.03',
            'password'   => sha1('|$,["%Gj'),
            'birthday'   => '1985-01-09',
            'is_active'  => true,
            'address_id' => 9
        ]);

        User::create([
            'firstname'  => 'maryse',
            'lastname'   => 'delaunay',
            'email'      => 'delaunay_m@hotmail.fr',
            'phone'      => '04.04.69.67.52',
            'password'   => sha1('yh"zCl.a}'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 28
        ]);

        User::create([
            'firstname'  => 'élise',
            'lastname'   => 'breton',
            'email'      => 'breton_e@gmail.com',
            'phone'      => '01.76.33.05.06',
            'password'   => sha1('[ibAd6M{zF'),
            'birthday'   => '1985-08-25',
            'is_active'  => true,
            'address_id' => 54
        ]);

        User::create([
            'firstname'  => 'jérôme',
            'lastname'   => 'camus',
            'email'      => 'camus_j@hotmail.fr',
            'phone'      => '08. 0.3 .98. 38 77',
            'password'   => sha1('6ZFe;vD@\''),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 45
        ]);

        User::create([
            'firstname'  => 'renée',
            'lastname'   => 'dias',
            'email'      => 'renee.dias@gmail.com',
            'phone'      => '04.54.77.00.90',
            'password'   => sha1('p@caIlC\\Ix71m9]'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 35
        ]);

        User::create([
            'firstname'  => 'gabriel',
            'lastname'   => 'joseph',
            'email'      => 'gabriel.joseph@hotmail.fr',
            'phone'      => '01.19.91.99.83',
            'password'   => sha1('5]HrBsY+n#)#UPt:%\'|k'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 20
        ]);

        User::create([
            'firstname'  => 'joseph',
            'lastname'   => 'pottier',
            'email'      => 'pottier_j@hotmail.fr',
            'phone'      => '02.76.10.79.27',
            'password'   => sha1(']r{}%TnK#$r}x\\rnU'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 12
        ]);

        User::create([
            'firstname'  => 'diane',
            'lastname'   => 'chauveau',
            'email'      => 'chauveau_d@gmail.com',
            'phone'      => '08.17.75.94.41',
            'password'   => sha1('w`|Ov-`VF'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 47
        ]);

        User::create([
            'firstname'  => 'caroline',
            'lastname'   => 'boulanger',
            'email'      => 'caroline.boulanger@gmail.com',
            'phone'      => '09.17.05.57.42',
            'password'   => sha1('7^D?#^:n'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 40
        ]);

        User::create([
            'firstname'  => 'éric',
            'lastname'   => 'guillaume',
            'email'      => 'eric.guillaume@hotmail.fr',
            'phone'      => '05.93.55.86.99',
            'password'   => sha1('pT\\<{If?t{HR'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 13
        ]);

        User::create([
            'firstname'  => 'jacques',
            'lastname'   => 'lambert',
            'email'      => 'jacques.lambert@hotmail.fr',
            'phone'      => '06.60.55.33.38',
            'password'   => sha1('EC^f/W\'}5xQew`=a<m'),
            'birthday'   => '1984-11-04',
            'is_active'  => true,
            'address_id' => 29
        ]);

        User::create([
            'firstname'  => 'benoît',
            'lastname'   => 'ferreira',
            'email'      => 'ferreira_b@hotmail.fr',
            'phone'      => '09.02.49.36.94',
            'password'   => sha1('-5.=RV'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 30
        ]);

        User::create([
            'firstname'  => 'charles',
            'lastname'   => 'teixeira',
            'email'      => 'teixeira_c@gmail.com',
            'phone'      => '02.87.17.97.97',
            'password'   => sha1('U@e3%~e8w'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 11
        ]);

        User::create([
            'firstname'  => 'émile',
            'lastname'   => 'thibault',
            'email'      => 'thibault_e@gmail.com',
            'phone'      => '09.83.96.63.41',
            'password'   => sha1('|R<AwL&e(S:)/J;XP^'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 6
        ]);

        User::create([
            'firstname'  => 'emmanuel',
            'lastname'   => 'gilbert',
            'email'      => 'emmanuel.gilbert@hotmail.fr',
            'phone'      => '06.51.94.08.45',
            'password'   => sha1('a%JN%WlD/&69Z)'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 39
        ]);

        User::create([
            'firstname'  => 'anastasie',
            'lastname'   => 'bazin',
            'email'      => 'bazin_a@gmail.com',
            'phone'      => '02.90.60.99.66',
            'password'   => sha1('d8!~K%o^L1;q6aE6P]{'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 38
        ]);

        User::create([
            'firstname'  => 'agathe',
            'lastname'   => 'baudry',
            'email'      => 'abaudry@gmail.com',
            'phone'      => '02.02.57.14.72',
            'password'   => sha1('!D%<U|&)oQkYZZ0T'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 3
        ]);

        User::create([
            'firstname'  => 'grégoire',
            'lastname'   => 'pinto',
            'email'      => 'pinto.gregoire@gmail.com',
            'phone'      => '01.34.47.46.04',
            'password'   => sha1('*(f85Hd>N\\x0k)x</0XE'),
            'birthday'   => null,
            'is_active'  => true,
            'address_id' => 27
        ]);


    }
}
