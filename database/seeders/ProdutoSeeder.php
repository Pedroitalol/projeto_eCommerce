<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("produtos")->insert([
            [
                "nome"=>"Celular real 1",
                "preco"=>"500",
                "tipo"=>"mobile",
                "descricao"=>"Teste de um produto qualquer",
                "galeria"=>"https://s3.amazonaws.com/mercado-ideas/wp-content/uploads/sites/6/2018/08/03204655/melhores-celulares-para-foto-iphone-11-pro-max.png"
            ],
            [
                "nome"=>"Televisor real 1",
                "preco"=>"1300",
                "tipo"=>"televisor",
                "descricao"=>"Teste de um produto qualquer",
                "galeria"=>"https://a-static.mlcdn.com.br/618x463/smart-tv-hd-led-32-samsung-32t4300a-wi-fi-hdr-2-hdmi-1-usb/magazineluiza/225608200/68c09354fe4378c245e4e5ba097eaf4d.jpg"
            ],
            [
                "nome"=>"Notebook real 1",
                "preco"=>"900",
                "tipo"=>"notebook",
                "descricao"=>"Teste de um produto qualquer",
                "galeria"=>"https://www.saldaodainformatica.com.br/8017-large_default/notebook-lenovo-ideapad-s145-15iwl-81s90005br-prata-intel-core-i5-8265u-ram-8gb-hd-1tb-tela-156-windows-10.jpg"
            ]
             
        ]);
    }
}
