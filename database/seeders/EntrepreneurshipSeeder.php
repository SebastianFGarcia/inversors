<?php

namespace Database\Seeders;

use App\Models\Entrepreneurship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrepreneurshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Entrepreneurships = [
            [
                "name" => "TechCo",
                "description" => "Desarrollo de software y aplicaciones móviles",
                "objective" => "Dominar el mercado local y expandirse regionalmente",
                "projection" => "Esperamos alcanzar $500,000 en ingresos el primer año y crecer un 20% anualmente",
                "team" => "Juan Pérez, María Gómez, Luis Ramírez",
                "user_id" => 1
            ],
    
            [
                "name" => "GreenFarm",
                "description" => "Agricultura sostenible y producción de alimentos orgánicos",
                "objective" => "Promover prácticas agrícolas ecológicas y satisfacer la demanda creciente de productos orgánicos",
                "projection" => "Apuntamos a generar $300,000 en ingresos el primer año y lograr un crecimiento del 15% anual",
                "team" => "Ana Rodríguez, Carlos Santos, Pedro Silva",
                "user_id" => 2
            ],
    
            [
                "name" => "FashionX",
                "description" => "Venta de ropa y accesorios de moda en línea",
                "objective" => "Ser el destino preferido para compras de moda en línea en la región",
                "projection" => "Nuestra meta es alcanzar $1 millón en ingresos el primer año y duplicar las ventas cada año",
                "team" => "Laura Martínez, José Mendoza, Sofía Hernández",
                "user_id" => 3
            ],
            [
                "name" => "CleanEnergy",
                "description" => "Energía limpia y soluciones de energía renovable",
                "objective" => "Contribuir a la transición hacia fuentes de energía más sostenibles y reducir la huella de carbono",
                "projection" => "Prevemos generar $800,000 en ingresos el primer año y aumentar en un 25% anual",
                "team" => "Andrés López, Carolina Ramírez, Roberto Fernández",
                "user_id" => 4
            ],
            [
                "name" => "HealthTech",
                "description" => "Tecnología médica y dispositivos para el cuidado de la salud",
                "objective" => "Mejorar la atención médica mediante innovaciones tecnológicas",
                "projection" => "Nuestra meta es alcanzar $700,000 en ingresos el primer año y crecer un 18% anual",
                "team" => "Martín Torres, Valentina Guzmán, Daniel Ríos",
                "user_id" => 5
            ],
            [
                "name" => "EcoTourism",
                "description" => "Turismo sostenible y experiencias ecoturísticas",
                "objective" => "Promover el turismo responsable y preservar la biodiversidad",
                "projection" => "Esperamos generar $400,000 en ingresos el primer año y aumentar un 12% anualmente",
                "team" => "Gabriela Soto, Fernando Méndez, Isabel Vargas",
                "user_id" => 6
            ],
        ];

        foreach($Entrepreneurships as $Entrepreneurship){
            Entrepreneurship::create($Entrepreneurship);
        }
    }
}
