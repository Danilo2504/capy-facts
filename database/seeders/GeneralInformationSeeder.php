<?php

namespace Database\Seeders;

use App\Models\GeneralInformation;
use App\Models\RegionalName;
use Database\Factories\RegionalNameFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralInformationSeeder extends Seeder
{
   /**
    * Run the database seeds.
    */

   public function run(): void
   {

      $generalInformation = GeneralInformation::create([
         'scientific_name' => 'Hydrochoerus hydrochaeris',
         'description' => 'The capybara has a heavy, barrel-shaped body and short head, with reddish-brown fur on the upper part of its body that turns yellowish-brown underneath. Its sweat glands can be found on the surface of the hairy portions of its skin, an unusual trait among rodents. The animal lacks down hair, and its guard hair differs little from over hair. Capybaras have slightly webbed feet and vestigial tails. Their hind legs are slightly longer than their forelegs; they have three toes on their rear feet and four toes on their front feet. Their muzzles are blunt, with nostrils, and the eyes and ears are near the top of their heads.',
         'weight' => '35 - 66 kg',
         'height' => '50 - 62 cm',
         'length' => '100 to 130 cm',
         'habitat' => '
            [
               {
                  "name":"Swamps",
                  "description":"Areas flooded with standing water, where dense and abundant vegetation grows."
               },
               {
                  "name":"Riverbanks and lake shores",
                  "description":"They prefer areas close to freshwater bodies, where they can easily immerse themselves and swim."
               },
               {
                  "name":"Wetlands",
                  "description":"Ecosystems that include marshes, bogs, and other moist environments rich in aquatic vegetation"
               },
               {
                  "name":"Flooded savannas",
                  "description":"Grassland areas that are temporarily flooded during the rainy season."
               },
               {
                  "name":"Gallery forests",
                  "description":"Forests that grow along rivers and streams in savanna regions, providing shade and access to water."
               },
               {
                  "name":"Floodplains",
                  "description":"Flat and low-lying areas that regularly flood from overflowing rivers."
               },
               {
                  "name":"Tropical and subtropical grasslands",
                  "description":"Open areas with tall grasses and scattered vegetation,typically near water sources."
               }
            ]',
         'distribution' => '{
            "general": "Venezuela to northeastern Argentina",
            "regions": [
              "Large, continuous distribution in South America",
              "Portions of Colombia, the Guianas, Suriname",
              "Paraguay and Uruguay",
              "Northeastern Argentina",
              "Amazonian Ecuador, Peru, and Bolivia"
            ],
            "concentrations": {
              "llanos_of_venezuela": "Llanos of Venezuela",
              "pantanal_wetlands": "Pantanal wetlands of western Brazil",
              "taim_lowlands": "Taim lowlands of southern Brazil"
            }
         }',
         'conservation_status' => 'Least Concern'
      ]);

      RegionalName::factory(10)->create([
         'general_information_id' => $generalInformation->id
      ]);
   }
}
