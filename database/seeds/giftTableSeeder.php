<?php

use Illuminate\Database\Seeder;

class giftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedGift();
        $this->command->info('Tabla gift inicializada con datos!'); 
    }
    
    private function seedGift(){
        DB::table('gift')->delete();
        foreach( $this->arrayGift as $gift ) {
            $p = new gift;
            $p->gift_type = $gift['gift_type'];
            $p->gift_name = $gift['gift_name'];
            $p->photo = $gift['photo'];
            $p->save();
        }
    }
    
    private $arrayGift = array(
        array(
            'gift_type' => 'Palomitas',
            'gift_name' => 'Palomitas', 
            'photo' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fimages-na.ssl-images-amazon.com%2Fimages%2FI%2F71IFuRy1uwL._SX466_.jpg&imgrefurl=https%3A%2F%2Fwww.amazon.es%2FBalvi-Bol-palomitas-Corn-polypropileno%2Fdp%2FB004LWJSAG&docid=WQz8PdhVobjd3M&tbnid=q1wy5FzL90AzMM%3A&vet=10ahUKEwiX8ZiI88XgAhU15eAKHZxZDEUQMwhDKAUwBQ..i&w=466&h=560&safe=strict&client=firefox-b-ab&bih=654&biw=1366&q=palomitas&ved=0ahUKEwiX8ZiI88XgAhU15eAKHZxZDEUQMwhDKAUwBQ&iact=mrc&uact=8.jpg', 
        ),
        array(
            'gift_type' => 'Gominolas',
            'gift_name' => 'Gominolas', 
            'photo' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic3.diariosur.es%2Fwww%2Fpre2017%2Fmultimedia%2Fnoticias%2F201505%2F15%2Fmedia%2Fcortadas%2FGF03RTU1--575x323.jpg&imgrefurl=https%3A%2F%2Fwww.diariosur.es%2Fsociedad%2F201505%2F15%2Festan-hechas-gominolas-20150515190628.html&docid=p7BsTCDofwaVEM&tbnid=QXG6hlebVT74UM%3A&vet=10ahUKEwj4hfOy88XgAhWw1-AKHThJAaAQMwhBKAMwAw..i&w=575&h=323&safe=strict&client=firefox-b-ab&bih=654&biw=1366&q=Gominolas&ved=0ahUKEwj4hfOy88XgAhWw1-AKHThJAaAQMwhBKAMwAw&iact=mrc&uact=8.jpg'
        ),
        array(
            'gift_type' => 'Nachos',
            'gift_name' => 'Nachos', 
            'photo' => 'https://www.google.com/imgres?imgurl=https%3A%2F%2Funareceta.com%2Fwp-content%2Fuploads%2F2017%2F08%2Freceta-de-salsa-de-queso-para-nachos-640x424.jpg&imgrefurl=https%3A%2F%2Funareceta.com%2Freceta-de-salsa-de-queso-para-nachos%2F&docid=wOt4C-_TjN_a7M&tbnid=H7tD2QyiZ_Y2NM%3A&vet=10ahUKEwjTnsrV88XgAhWnBWMBHUzPC4cQMwhBKAMwAw..i&w=640&h=424&safe=strict&client=firefox-b-ab&bih=654&biw=1366&q=Nachos&ved=0ahUKEwjTnsrV88XgAhWnBWMBHUzPC4cQMwhBKAMwAw&iact=mrc&uact=8.jpg'
        )
    );
}
