<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        User::create([
            'name'=>'Sayyid Syafiq',
            'email'=>'sayyid234@gmail.com',
            'password'=>bcrypt('123')
        ]);
        User::create([
            'name'=>'Sandi',
            'email'=>'sandi@gmail.com',
            'password'=>bcrypt('234')
        ]);
        User::create([
            'name'=>'Abdul Aziz',
            'email'=>'AbdulAziz@gmail.com',
            'password'=>bcrypt('456')
        ]);
        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);
        Category::create([
            'name'=>'Web Developer',
            'slug'=>'web-developer'
        ]);
        // Post::factory(5)->create();
        Post::create([
            'title'=>'Pemrograman Web',
            'image'=>'web-programing.jpg',
            'slug'=>'pemrograman-web',
            'excerpt'=>'Apa Itu Pemrograman Web?',
            'body'=>'<p>Web Programming atau Pemrograman Web merupakan istilah yang erat kaitannya dengan internet dan website. Memang benar, karena pemrograman web merupakan suatu proses pembuatan website untuk keperluan internet. Orang banyak mengenal web dengan istilah WWW atau World Wide Web.</p><p> World Wide Web adalah halaman-halaman website yang terkoneksi satu dengan lainnya atau disebut juga dengan hyperlink yang membentuk samudera informasi yang berjalan dengan protokol HyperText Transfer Protocol (HTTP).</p><p>Dalam semua ilmu tentang pemrograman baik itu desktop, mobile, game maupun software atau aplikasi lainnya pasti selalu ada bahasa-bahasa pemrograman yang digunakan untuk membuat aplikasi tersebut yang berisi statement-statement, perintah, atau pun fungsi agar aplikasi yang dibuat sesuai dengan apa yang telah didesain oleh si programmer. Oleh karena itu pemrograman web pun memiliki banyak bahasa yang digunakan, di antaranya:</p><p>HTML sebenarnya bukan sebuah bahasa pemrograman, melainkan markup language atau bahasa penandaan yang terdiri dari kumpulan tag. Pada dasarnya HTML hanya mendeskripsikan bahwa bagian tertentu dalam sebuah halaman web adalah isi yang harus ditampilkan oleh browser dengan cara tertentu. HTML merupakan standar internet yang didefinisikan dan dikendalikan oleh World Wide Web Consortium (W3C).</p><p>CSS merupakan bahasa stylesheet yang digunakan untuk mengatur tampilan suatu dokumen yang ditulis dengan HTML. CSS juga memiliki css framework dan digunakan untuk menambah desain-desain tertentu pada halaman web agar desain halaman menarik untuk dilihat. Penggunaan CSS paling umum adalah untuk mengatur halaman web yang ditulis dengan HTML atau XHTML.</p><p>Bahasa pemrograman PHP merupakan salah satu bahasa scripting yang wajib dikuasai oleh seorang web developer. Karena sifatnya yang server-side scripting, maka untuk menjalankan bahasa pemrograman PHP tidak bisa hanya memanggil file yang berekstensi PHP saja. Bahasa pemrograman PHP memerlukan sebuah web server untuk menjalankannya. PHP juga dapat diintegrasikan dengan HTML, JavaScript, jQuery, Ajax dan lain sebagainya. Akan tetapi pada umumnya bahasa pemrograman PHP digunakan bersamaan dengan file yang bertipe HTML agar file tersebut dapat menjalankan berbagai fungsi.<p>JavaScript adalah bahasa scripting yang berjalan pada sisi client. Maksudnya adalah pemrosesan script dilakukan sendiri pada komputer user. Biasanya JavaScript digunakan untuk membuat animasi-animasi dan bentuk interaktif lain pada halaman web. Terbukti dari banyaknya library-library JavaScript yang dapat digunakan oleh programmer untuk membuat halaman web yang dibuat menjadi lebih interaktif. Untuk menjalankan script yang ditulis dalam JavaScript, kita membutuhkan browser yang mendukung dan mampu menjalankan JavaScript atau sering disebut dengan javascript-enabled browser.</p>',
            'category_id'=> 1,
            'user_id'=> 1
        ]);
        Post::create([
            'title'=>'Design Web',
            'image'=>'web-desain.jpg',
            'slug'=>'design-web',
            'excerpt'=>'Perancangan web (web design) adalah istilah umum yang digunakan untuk mencakup bagaimana isi web konten ditampilkan,',
            'body'=>'<p>Perancangan web (web design) adalah istilah umum yang digunakan untuk mencakup bagaimana isi web konten ditampilkan, (biasanya berupa hypertext atau hypermedia) yang dikirimkan ke pengguna akhir melalui World Wide Web, dengan menggunakan sebuah browser web atau perangkat lunak berbasis web. Tujuan dari web design adalah untuk membuat website—sekumpulan konten online termasuk dokumen dan aplikasi yang berada pada server web / server. Sebuah website dapat berupa sekumpulan teks, gambar, suara dan konten lainnya, serta dapat bersifat interaktif ataupun statis.</p><p> Elemen-elemen seperti teks, forms, images (GIFs, JPEGs, Portable Network Graphics) dan video dapat diletakkan di dalam halaman menggunakan tag-tag HTML/XHTML/XML. Browser terkadang juga memerlukan Plug-ins seperti Adobe Flash, QuickTime, Java, dan sebagainya untuk menampilkan beberapa media yang diletakkan di dalam halaman web menggunakan tag-tag HTML/XHTML.</p><p>Halaman web dan situs web dapat berupa halaman statis, atau dapat diprogram secara dinamis sehingga menghasilkan halaman web dengan konten atau tampilan visual yang diinginkan, tergantung pada berbagai faktor, seperti masukan dari pengguna akhir, masukan dari Webmaster, atau perubahan dalam lingkungan komputasi (seperti situs yang terkait dengan database yang telah diubah).</p>',
            'category_id'=> 2,
            'user_id'=> 2
        ]);
        Post::create([
            'title'=>'Web Developer',
            'image'=>'web-developer.jpg',
            'slug'=>'web-developer',
            'excerpt'=>'Perancangan web (web developer) adalah istilah umum yang digunakan untuk mencakup bagaimana isi web konten ditampilkan,',
            'body'=>'<p>Perancangan web (web Developer) adalah istilah umum yang digunakan untuk mencakup bagaimana isi web konten ditampilkan, (biasanya berupa hypertext atau hypermedia) yang dikirimkan ke pengguna akhir melalui World Wide Web, dengan menggunakan sebuah browser web atau perangkat lunak berbasis web. Tujuan dari web design adalah untuk membuat website—sekumpulan konten online termasuk dokumen dan aplikasi yang berada pada server web / server. Sebuah website dapat berupa sekumpulan teks, gambar, suara dan konten lainnya, serta dapat bersifat interaktif ataupun statis.</p><p> Elemen-elemen seperti teks, forms, images (GIFs, JPEGs, Portable Network Graphics) dan video dapat diletakkan di dalam halaman menggunakan tag-tag HTML/XHTML/XML. Browser terkadang juga memerlukan Plug-ins seperti Adobe Flash, QuickTime, Java, dan sebagainya untuk menampilkan beberapa media yang diletakkan di dalam halaman web menggunakan tag-tag HTML/XHTML.</p><p>Halaman web dan situs web dapat berupa halaman statis, atau dapat diprogram secara dinamis sehingga menghasilkan halaman web dengan konten atau tampilan visual yang diinginkan, tergantung pada berbagai faktor, seperti masukan dari pengguna akhir, masukan dari Webmaster, atau perubahan dalam lingkungan komputasi (seperti situs yang terkait dengan database yang telah diubah).</p>',
            'category_id'=> 3,
            'user_id'=> 3
        ]);

        About::create([
            'name'=>'Sayyid Syafiq',
            'image'=>'sayyid.jpg',
            'visi'=>'Menjadi perusahaan terpercaya dalam memberikan solusi yang cerdas dan tepat di bidang teknologi informasi.'
        ]);
        
 
        Gallery::create([
            'title'=>'Gallery 1',
            'image'=>'portfolio-03.jpg',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.'
        ]);
        
        Gallery::create([
            'title'=>'Gallery 2',
            'image'=>'portfolio-02.jpg',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.'
        ]);
        
        

        Portfolio::create([
            'title'=>'Desain Web Parallax',
            'image'=>'portfolio-1.png',
            'body'=>'Mendesain Tampilan WebSite Menggunakan HTML dan CSS'
        ]);
        Portfolio::create([
            'title'=>'Desain Menggunakan Corel',
            'image'=>'Poster1.png',
            'body'=>'Mendesain Poster Menggunakan Corel Draw'
        ]);
        Portfolio::create([
            'title'=>'Desain Menggunakan Photoshop',
            'image'=>'photoshop.png',
            'body'=>'Mendesain Poster Menggunakan Adobe Photoshop'
        ]);
        
    }
}
