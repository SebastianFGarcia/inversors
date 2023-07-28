<?php

namespace Database\Seeders;

use App\Models\Investment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $investments = [
            [
                "money" => 100000,
                "description" => "Necesitamos financiamiento para expandir nuestro equipo de desarrollo y acelerar el lanzamiento del producto.",
                "terms" => "Ofrecemos una participación del 10% en las ganancias y un retorno del 20% anual durante 3 años.",
                "benefits" => "Los inversionistas podrán ser parte de una empresa emergente con un producto innovador en el mercado.",
                "entrepreneurship_id" => 1
            ],
            [
                "money" => 80000,
                "description" => "Buscamos fondos para aumentar nuestra capacidad de producción y llegar a nuevos mercados.",
                "terms" => "Ofrecemos un retorno fijo del 15% sobre la inversión inicial después de 2 años.",
                "benefits" => "Los inversionistas serán parte de una empresa con un enfoque sostenible y una creciente demanda de productos orgánicos.",
                "entrepreneurship_id" => 2
            ],
            [
                "money" => 200000,
                "description" => "Necesitamos capital para invertir en marketing y adquirir nuevos clientes.",
                "terms" => "Ofrecemos una participación del 8% en las ganancias y un retorno del 25% después de 4 años.",
                "benefits" => "Los inversionistas formarán parte de una plataforma de comercio electrónico con un rápido crecimiento en la industria de la moda.",
                "entrepreneurship_id" => 3
            ],
            [
                "money" => 150000,
                "description" => "Buscamos financiamiento para la investigación y desarrollo de nuevas tecnologías.",
                "terms" => "Ofrecemos una participación del 12% en las ganancias y un retorno del 30% anual durante 5 años.",
                "benefits" => "Los inversionistas serán parte de un proyecto que contribuye a la transición hacia una energía más limpia y sostenible.",
                "entrepreneurship_id" => 4
            ],
            [
                "money" => 120000,
                "description" => "Necesitamos fondos para mejorar nuestra plataforma y expandir nuestras ofertas de servicios médicos.",
                "terms" => "Ofrecemos un retorno del 18% después de 3 años y la opción de convertir la inversión en acciones.",
                "benefits" => "Los inversionistas se unirán a una empresa con un gran potencial en el mercado de tecnología médica.",
                "entrepreneurship_id" => 5
            ],
            [
                "money" => 90000,
                "description" => "Buscamos financiamiento para mejorar nuestras instalaciones y atraer a turistas internacionales.",
                "terms" => "Ofrecemos un retorno del 14% anual durante 4 años y la oportunidad de participar en programas de ecoturismo.",
                "benefits" => "Los inversionistas serán parte de un proyecto que fomenta el turismo responsable y la conservación del medio ambiente.",
                "entrepreneurship_id" => 6
            ]
        ];

        foreach ($investments as $investment) {
            Investment::create($investment);
        }
    }
}
