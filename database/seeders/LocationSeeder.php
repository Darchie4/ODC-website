<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations') -> insert([
            'address' => 'Dalumvej 32D, 5250 Odense SV',
            'description' => '<p><strong>Den anden af vores to sale i Dalum</strong></p>
<p>Dette er ODC\'s en af store og flotte dansesale, som ligger i Dalum, Odense. Salen er udstyret med et flot tr&aelig;gulv og stort panorama spejl, optimalt til at fintune dine dansetrin.</p>
<p><strong>Super let tilg&aelig;ngelig</strong></p>
<p>Vores sale i Dalum ligger i det gamle posthus som er super let tilg&aelig;ngelig via bil, cykel eller til fods, og der er gode busforbindelser til og fra baneg&aring;rden. Der er en stor og gratis parkeringsplads lige ved siden af lokalerne, s&aring; det er nemt at parkere bilen, mens der danses.</p>
<p>Vi har ogs&aring; b&aring;de omkl&aelig;dning og bad p&aring; lokationen.</p>
<p><strong>Rig mulighed for at styrke sammenholdet</strong></p>
<p>Vi har b&aring;de indend&oslash;rs siddepladser i vores "venterum" med masser af borde og stole, og udend&oslash;rs siddepladser med bord-b&aelig;nkes&aelig;t, s&aring; der er rig mulighed for at slappe af og snakke med de andre for&aelig;ldre, mens junior danser eller efter dit hold.</p>',
            'g_maps_embed_link' => 'https://www.google.com/maps/embed/v1/place?q=Dalumvej+32D,+5250+Odense,+Danmark&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8',
            'room_name' => 'Dalum - Sal 1',
            'image_path' => '1683196983_ODC_sal_1.jpg'
        ]);
        DB::table('locations') -> insert([
            'address' => 'Dalumvej 32D, 5250 Odense SV',
            'description' => '<p><strong>Den anden af vores to sale i Dalum</strong></p>
<p>Dette er ODC\'s anden flotte dansesale, som ligger i k&aelig;lderen af vores kompleks Dalum, Odense. Salen er udstyret med et flot tr&aelig;gulv og stort panorama spejl, optimalt til at fintune dine dansetrin. Salen tilg&aring;s enten via trappen udend&oslash;rs eller ved at g&aring; igennem Sal 1, ned af trappen og s&aring; til venstre.</p>
<p><strong>Super let tilg&aelig;ngelig</strong></p>
<p>Vores sale i Dalum ligger i det gamle posthus som er super let tilg&aelig;ngelig via bil, cykel eller til fods, og der er gode busforbindelser til og fra baneg&aring;rden. Der er en stor og gratis parkeringsplads lige ved siden af lokalerne, s&aring; det er nemt at parkere bilen, mens der danses.</p>
<p>Vi har ogs&aring; b&aring;de omkl&aelig;dning og bad p&aring; lokationen.</p>
<p><strong>Rig mulighed for at styrke sammenholdet</strong></p>
<p>Vi har b&aring;de indend&oslash;rs siddepladser i vores "venterum" med masser af borde og stole, og udend&oslash;rs siddepladser med bord-b&aelig;nkes&aelig;t, s&aring; der er rig mulighed for at slappe af og snakke med de andre for&aelig;ldre, mens junior danser eller efter dit hold.</p>',
            'g_maps_embed_link' => 'https://www.google.com/maps/embed/v1/place?q=Dalumvej+32D,+5250+Odense,+Danmark&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8',
            'room_name' => 'Dalum - Sal 2',
            'image_path' => '1683197043_ODC_sal_2.jpg'
        ]);
    }
}
