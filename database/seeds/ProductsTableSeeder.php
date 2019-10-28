<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
            'title' => 'Pistoria',
            'category' => 'Men',
            'description' => 'Premium luxury watch for men. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

            Per in erat patrioque, ex sit idque tibique. Eos impetus recusabo argumentum ut. Sea esse ancillae inimicus ut. Affert vocibus ex vel, imperdiet voluptatibus est cu. Id laboramus theophrastus qui, an veniam maiorum referrentur vis. Sea te putant eripuit, eu vel stet omnes.

            Vix veritus docendi indoctum no. Ei est scaevola mandamus. Ne pro wisi dicant posidonium, soluta recteque id ius, in usu aeque affert oportere. Duis tantas consetetur eum ei, et choro possit vim. Cu mei nobis audiam petentium.',
            'image' => 'img/male-watch-144648_1920.jpg',
            'price' => '549990',
            'discount' => '15'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Segovia',
            'category' => 'Women',
            'description' => 'Fashionable watch for ladies. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

            Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.',
            'image' => 'img/male-watch-188780_1920.jpg',
            'price' => '119999',
            'discount' => '20'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Gerunda',
            'category' => 'Children',
            'description' => 'Beautiful watch for children. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius.

            Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.',
            'image' => 'img/male-watch-188782_1920.jpg',
            'price' => '150000',
            'discount' => '0'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Vesontio',
            'category' => 'Men',
            'description' => 'High quality watch for men. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu.

            Novum decore ex vix. Mei lorem utamur ne, an lorem vidisse delectus mea. Cu eam etiam nulla iudico. Officiis definitiones interpretaris ne qui, pri id atqui minim consetetur. Et cetero viderer usu, eu vis ferri congue evertitur, ea eam eros everti.',
            'image' => 'img/night-76880.jpg',
            'price' => '79090',
            'discount' => '10'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Lugdunum',
            'category' => 'Women',
            'description' => 'Stylish watch for ladies. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim.

            Per in erat patrioque, ex sit idque tibique. Eos impetus recusabo argumentum ut. Sea esse ancillae inimicus ut. Affert vocibus ex vel, imperdiet voluptatibus est cu. Id laboramus theophrastus qui, an veniam maiorum referrentur vis. Sea te putant eripuit, eu vel stet omnes.

            Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.',
            'image' => 'img/pocket-watch-560937_1280.jpg',
            'price' => '80990',
            'discount' => '0'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Bonna',
            'category' => 'Children',
            'description' => 'Custom watch for children. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

            Vix veritus docendi indoctum no. Ei est scaevola mandamus. Ne pro wisi dicant posidonium, soluta recteque id ius, in usu aeque affert oportere. Duis tantas consetetur eum ei, et choro possit vim. Cu mei nobis audiam petentium.',
            'image' => 'img/pexels-photo-125779.jpg',
            'price' => '234990',
            'discount' => '30'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Eboracum',
            'category' => 'Men',
            'description' => 'Limited edition watch for men. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius.

            Novum decore ex vix. Mei lorem utamur ne, an lorem vidisse delectus mea. Cu eam etiam nulla iudico. Officiis definitiones interpretaris ne qui, pri id atqui minim consetetur. Et cetero viderer usu, eu vis ferri congue evertitur, ea eam eros everti.',
            'image' => 'img/pexels-photo-225085.jpg',
            'price' => '549990',
            'discount' => '15'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Olicana',
            'category' => 'Women',
            'description' => 'Pretty watch for ladies. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu.

            Vix veritus docendi indoctum no. Ei est scaevola mandamus. Ne pro wisi dicant posidonium, soluta recteque id ius, in usu aeque affert oportere. Duis tantas consetetur eum ei, et choro possit vim. Cu mei nobis audiam petentium.',
            'image' => 'img/rolex-watch-time-luxury-364822.jpg',
            'price' => '349990',
            'discount' => '10'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Coria',
            'category' => 'Children',
            'description' => 'Custom watch for children. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim.

            Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.',
            'image' => 'img/pocket-watch-2036304_1920.jpg',
            'price' => '119990',
            'discount' => '30'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Lentia',
            'category' => 'Men',
            'description' => 'Handcrafted watch for men. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

            Per in erat patrioque, ex sit idque tibique. Eos impetus recusabo argumentum ut. Sea esse ancillae inimicus ut. Affert vocibus ex vel, imperdiet voluptatibus est cu. Id laboramus theophrastus qui, an veniam maiorum referrentur vis. Sea te putant eripuit, eu vel stet omnes.',
            'image' => 'img/pexels-photo-190819.jpg',
            'price' => '449990',
            'discount' => '25'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Brixia',
            'category' => 'Women',
            'description' => 'Stylish watch for ladies. 
            And also some 
            Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu.

            Doming deleniti et sit. Usu an maiorum fuisset, mei ea discere facilis scaevola, tantas vulputate at mei. His affert veniam urbanitas ei, iracundia posidonium eam et. Alterum scaevola sed ne, alterum fastidii senserit ne sit.

            Novum decore ex vix. Mei lorem utamur ne, an lorem vidisse delectus mea. Cu eam etiam nulla iudico. Officiis definitiones interpretaris ne qui, pri id atqui minim consetetur. Et cetero viderer usu, eu vis ferri congue evertitur, ea eam eros everti.',
            'image' => 'img/pocket-watch-2061228_1920.jpg',
            'price' => '200000',
            'discount' => '10'
        ]);
        $product->save();
        $product = new Product([
            'title' => 'Lagentium',
            'category' => 'Children',
            'description' => 'High quality watch for children. 
            And also some Lorem ipsum dolor sit amet, verear utamur pro et. Vivendum singulis sed ex, in duo atqui appetere prodesset. Te cum dicat persius iuvaret, ignota appellantur adversarium quo in, cu dicunt voluptua vim. In sed quod regione, ad illud iuvaret fastidii ius. Est viderer sapientem cu. In ius essent constituto.

            Vix veritus docendi indoctum no. Ei est scaevola mandamus. Ne pro wisi dicant posidonium, soluta recteque id ius, in usu aeque affert oportere. Duis tantas consetetur eum ei, et choro possit vim. Cu mei nobis audiam petentium.',
            'image' => 'img/watch-1955856_1920.jpg',
            'price' => '189000',
            'discount' => '0'
        ]);
        $product->save();
    }
}
