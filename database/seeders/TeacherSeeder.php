<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'Simon Stokvis Horsleben',
            'imgName' => '1668960160_simonH.jpg',
            'shortDescription' => 'Simon underviser mange af vores pardans hold samt alt sportsdans og det ene studiedans hold',
            'longDescription' => '<p><strong>Lorem ipsum</strong></p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint?</p>
<p><strong>Lorem ipsum</strong></p>
<p>Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque. Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!</p>'
        ]);
        DB::table('teachers')->insert([
            'name' => 'Imon Andersen',
            'imgName' => '1683121546_1668959424_simonA.jpg',
            'shortDescription' => 'Simon underviser pardans begynder og let øvet samt studiedans',
            'longDescription' => '<p><strong>Lorem ipsum</strong></p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia.</p>
<p><strong>Ipsum Lorem?</strong></p>
<p>Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque.</p>
<p><strong>Lorem ipsum!</strong></p>
<p>Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!</p>'
        ]);
        DB::table('teachers')->insert([
            'name' => 'Mads Würtz Pedersen',
            'imgName' => '1683122705_177487874_282101413538268_1993942189612442896_n (1).jpg',
            'shortDescription' => 'Mads Hjælper Simon Horsleben på flere af hans pardans hold',
            'longDescription' => '<p><strong>En overskrift</strong></p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid.</p>
<p><strong>En anden og anderledes overskrift</strong></p>
<p>Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque.</p>
<p><strong>En tredje og mere anderledes overskrift</strong></p>
<p>Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!</p>'
        ]);
        DB::table('teachers')->insert([
            'name' => 'Frederik Bjerring',
            'imgName' => '1683123057_Frederik.jpg',
            'shortDescription' => 'Frederik underviser pardans begynder og let øvet samt studiedans',
            'longDescription' => '<p><strong>Jeg er tr&aelig;t af at finde p&aring; overskrifter</strong></p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga?</p>
<p><strong>Som i, jeg har lavet en del og goder ikke mere</strong></p>
<p>Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque. Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas?</p>
<p><strong>Slet ikke faktisk</strong></p>
<p>Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!</p>'
        ]);
        DB::table('teachers')->insert([
            'name' => 'Emma Greve',
            'imgName' => '1683123335_EmmaG.png',
            'shortDescription' => 'Emma Greve underviser på hold.',
            'longDescription' => '<div id="geom_inter_1628183507145_51_8">Mit navn er Emma Greve og jeg er 25 &aring;r gammel.</div>
<div id="geom_inter_1628183623003_39_24">Jeg har en l&aelig;ngere dansekarriere bag mig, som har indeb&aring;ret alt fra balletskole, Hip Hop og Disco til sportsdans gennem mange &aring;r.</div>
<div><strong>Hvorfor danser jeg?</strong></div>
<div id="geom_inter_1628184465066_82_36">Da jeg som en lille pige startede til dans, fandt jeg mig selv i dansen og har gennem hele mit liv m&aelig;rket, hvor meget den bliver ved med at give. Lige pr&aelig;cis det er min mission som dansetr&aelig;ner. Ikke nok med at dansen i sig selv er fantastisk, s&aring; kan dans give en r&aelig;kke gode v&aelig;rkt&oslash;jer, som man altid vil have med sig i livet.</div>'
        ]);
        DB::table('teachers')->insert([
            'name' => 'Claudia L Haugaard',
            'imgName' => '1683130159_claudia.jpg',
            'shortDescription' => 'Claudia er hjælper på flere af vores pardans hold.',
            'longDescription' => '<p>Claudia er 25 &aring;r gammel og arbejder til dagligt med at skabe livsgl&aelig;de og indhold i b&oslash;rn og unge menneskers hverdag. Hun har selv danset af flere omgange siden hun var 8 &aring;r, her i blandt disco/showdance, standard og latin. For hende er netop dansen lige med livsgl&aelig;de.<br>Claudia &oslash;nsker at hendes elever skal opleve dansen som et frirum hvor musik og bev&aelig;gelse er omdrejnings-punktet for social og konditionsm&aelig;ssig stimulering og udvikling. Dansen er d&eacute;r hvor den enkelte kan f&aring; lov at definere sig selv og udvikle sig p&aring; en sjov og l&aelig;rerig m&aring;de gennem musik og bev&aelig;gelse. Claudia arbejder ud fra en anerkendende tilgang og mener, at en foruds&aelig;tning for udvikling er, at man f&oslash;ler sig godt tilpas og kan slappe af og v&aelig;re sig selv i danseundervisningen, dette g&aelig;lder for b&oslash;rn s&aring;vel som voksne.</p>'
        ]);
    }
}
