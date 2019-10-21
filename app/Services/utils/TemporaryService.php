<?php


namespace App\Services\utils;


class TemporaryService
{

    public static function replaceUtf8Char($str)
    {
        $data = [
            "Ã¢"  => "â",
            "Ã©"  => "é",
            "Ã¨"  => "è",
            "Ãª"  => "ê",
            "Ã«"  => "ë",
            "Ã®"  => "î",
            "Ã¯"  => "ï",
            "Ã´"  => "ô",
            "Ã¶"  => "ö",
            "Ã¹"  => "ù",
            "Ã»"  => "û",
            "Ã¼"  => "ü",
            "Ã§"  => "ç",
            "Å"  => "œ",
            "â¬" => "€",
            "Â°"  => "°",
            "Ã"  => "À",
            "Ã"  => "Â",
            "Ã"  => "É",
            "Ã"  => "È",
            "Ã"  => "Ê",
            "Ã"  => "Ë",
            "Ã"  => "Î",
            "Ã"  => "Ï",
            "Ã"  => "Ô",
            "Ã"  => "Ö",
            "Ã"  => "Ù",
            "Ã"  => "Û",
            "Ã"  => "Ü",
            "Ã"  => "Ç",
            "Å"  => "Œ",
            "Ã"   => "à",
        ];

        foreach ($data as $key => $value)
            $str = str_replace($key, $value, $str);

        return $str;
    }

    public static function generateBirthday($min, $max)
    {
        $faker = \Faker\Factory::create('fr_FR');
        $date = $faker->dateTimeThisCentury;
        $date->setDate(random_int($min, $max), (int)$date->format('m'), (int)$date->format('d'));
        return $date;

    }

    public static function generateCreated()
    {
        $faker = \Faker\Factory::create('fr_FR');
        $date = $faker->dateTimeThisCentury;
        $date->setDate(2019, random_int(8, 10), (int)$date->format('d'));
        return $date;
    }

}
