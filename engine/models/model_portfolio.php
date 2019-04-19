<?php
/**
 * Portfolio model
 * User: DMaier
 * Date: 15.03.2019
 * Time: 1:04
 */

class Model_Portfolio extends Model
{
    public function get_data()
    {
        // сэмулируем реальные данные и сразу возвратим массив результатов
        return array(

            array(
                'Year' => '2012',
                'Site' => 'http://DunkelBeer.ru',
                'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
            ),
            array(
                'Year' => '2012',
                'Site' => 'http://ZopoMobile.ru',
                'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
            ),
            // todo
        );
    }
}