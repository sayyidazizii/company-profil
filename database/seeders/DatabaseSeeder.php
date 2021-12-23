<?php

namespace Database\Seeders;
use App\Models\Home;
use App\Models\Post;
use App\Models\User;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Portfolio;
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
        User::create([
            'name'=>'Luthfi',
            'email'=>'luthfi@gmail.com',
            'password'=>bcrypt('456')
        ]);
        // category
        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);
        Category::create([
            'name'=>'pemrograman',
            'slug'=>'pemrograman'
        ]);
        // Post::factory(5)->create();
        Post::create([
            'title'=>'Design Web',
            'image'=>'web-design.png',
            'slug'=>'design-web',
            'excerpt'=>'Perancangan web (web design) adalah  ',
            'body'=>'<p>Perancangan web (web design) adalah istilah umum yang digunakan untuk mencakup bagaimana isi web konten ditampilkan, (biasanya berupa hypertext atau hypermedia) yang dikirimkan ke pengguna akhir melalui World Wide Web, dengan menggunakan sebuah browser web atau perangkat lunak berbasis web. Tujuan dari web design adalah untuk membuat website—sekumpulan konten online termasuk dokumen dan aplikasi yang berada pada server web / server. Sebuah website dapat berupa sekumpulan teks, gambar, suara dan konten lainnya, serta dapat bersifat interaktif ataupun statis.</p><p> Elemen-elemen seperti teks, forms, images (GIFs, JPEGs, Portable Network Graphics) dan video dapat diletakkan di dalam halaman menggunakan tag-tag HTML/XHTML/XML. Browser terkadang juga memerlukan Plug-ins seperti Adobe Flash, QuickTime, Java, dan sebagainya untuk menampilkan beberapa media yang diletakkan di dalam halaman web menggunakan tag-tag HTML/XHTML.</p><p>Halaman web dan situs web dapat berupa halaman statis, atau dapat diprogram secara dinamis sehingga menghasilkan halaman web dengan konten atau tampilan visual yang diinginkan, tergantung pada berbagai faktor, seperti masukan dari pengguna akhir, masukan dari Webmaster, atau perubahan dalam lingkungan komputasi (seperti situs yang terkait dengan database yang telah diubah).</p>',
            'category_id'=> 2,
            'user_id'=> 2
        ]);
        Post::create([
            'title'=>'Pemrograman Web',
            'image'=>'web-programming.png',
            'slug'=>'pemrograman-web',
            'excerpt'=>'Apa Itu Pemrograman Web?',
            'body'=>'<p>Web Programming atau Pemrograman Web merupakan istilah yang erat kaitannya dengan internet dan website. Memang benar, karena pemrograman web merupakan suatu proses pembuatan website untuk keperluan internet. Orang banyak mengenal web dengan istilah WWW atau World Wide Web.</p><p> World Wide Web adalah halaman-halaman website yang terkoneksi satu dengan lainnya atau disebut juga dengan hyperlink yang membentuk samudera informasi yang berjalan dengan protokol HyperText Transfer Protocol (HTTP).</p><p>Dalam semua ilmu tentang pemrograman baik itu desktop, mobile, game maupun software atau aplikasi lainnya pasti selalu ada bahasa-bahasa pemrograman yang digunakan untuk membuat aplikasi tersebut yang berisi statement-statement, perintah, atau pun fungsi agar aplikasi yang dibuat sesuai dengan apa yang telah didesain oleh si programmer. Oleh karena itu pemrograman web pun memiliki banyak bahasa yang digunakan, di antaranya:</p><p>HTML sebenarnya bukan sebuah bahasa pemrograman, melainkan markup language atau bahasa penandaan yang terdiri dari kumpulan tag. Pada dasarnya HTML hanya mendeskripsikan bahwa bagian tertentu dalam sebuah halaman web adalah isi yang harus ditampilkan oleh browser dengan cara tertentu. HTML merupakan standar internet yang didefinisikan dan dikendalikan oleh World Wide Web Consortium (W3C).</p>',
            'category_id'=> 1,
            'user_id'=> 1
        ]);
        Post::create([
            'title'=>'Web Developer',
            'image'=>'web-developer.png',
            'slug'=>'web-developer',
            'excerpt'=>'Pengembangan web adalah istilah  ..',
            'body'=>'<p>Pengembangan web adalah istilah yang luas untuk pekerjaan yang terlibat dalam mengembangkan suatu situs web untuk internet ( World Wide Web ) atau intranet (jaringan pribadi). Hal ini dapat mencakup desain web, pengembangan konten web, penghubung klien, sisi klien / server-side scripting, web server dan keamanan jaringan konfigurasi, dan e-commerce pembangunan. Namun, kalangan profesional web, “pengembangan web” biasanya merujuk pada aspek non-desain utama dari membangun situs web: menulis markup dan coding . Pengembangan web dapat berkisar dari mengembangkan halaman statis sederhana tunggal teks biasa ke berbasis web yang paling kompleks aplikasi internet, bisnis elektronik, atau layanan jaringan sosial .</p><p>Untuk organisasi yang lebih besar dan bisnis, tim pengembangan web dapat terdiri dari ratusan orang (web developer). Organisasi yang lebih kecil mungkin hanya memerlukan permanen atau kontrak tunggal webmaster, atau tugas sekunder untuk posisi pekerjaan yang terkait seperti desainer grafis dan / atau sistem informasi teknisi. Pengembangan web mungkin merupakan upaya kolaborasi antar departemen bukan domain dari sebuah departemen yang ditunjuk.</p>',
            'category_id'=> 1,
            'user_id'=> 3
        ]);
        Post::create([
            'title'=>'HTML',
            'image'=>'html.png',
            'slug'=>'apa-itu-html',
            'excerpt'=>'Hypertext Markup Language (HTML) adalah..',
            'body'=>'<p>Hypertext Markup Language (HTML) adalah bahasa markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet. Ini dapat dibantu oleh teknologi seperti Cascading Style Sheets (CSS) dan bahasa scripting seperti JavaScript dan VBScript.
            Peramban internet menerima dokumen HTML dari server web atau dari penyimpanan lokal dan membuat dokumen menjadi halaman web multimedia. HTML menggambarkan struktur halaman web secara semantik dan isyarat awal yang disertakan untuk penampilan dokumen.</p><p>Elemen HTML digambarkan oleh tag, ditulis menggunakan tanda kurung sudut. Tag seperti <img /> dan <input /> langsung perkenalkan konten ke dalam halaman. Tag lain seperti <p> mengelilingi dan memberikan informasi tentang teks dokumen dan mungkin menyertakan tag lain sebagai sub-elemen. Peramban tidak menampilkan tag HTML, tetapi menggunakannya untuk menafsirkan konten halaman.</p>',
            'category_id'=> 1,
            'user_id'=> 4
        ]);
        Post::create([
            'title'=>'CSS',
            'image'=>'css.png',
            'slug'=>'apa-itu-css',
            'excerpt'=>'Cascading Style Sheet (CSS) merupakan..',
            'body'=>'<p>Cascading Style Sheet (CSS) merupakan aturan untuk mengatur beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. CSS bukan merupakan bahasa pemograman.</p><p>Sama halnya styles dalam aplikasi pengolahan kata seperti Microsoft Word yang dapat mengatur beberapa style, misalnya heading, subbab, bodytext, footer, images, dan style lainnya untuk dapat digunakan bersama-sama dalam beberapa berkas (file).[1] Pada umumnya CSS dipakai untuk memformat tampilan halaman web yang dibuat dengan bahasa HTML dan XHTML.</p>',
            'category_id'=> 2,
            'user_id'=> 4
        ]);
        Post::create([
            'title'=>'Javascript',
            'image'=>'js.png',
            'slug'=>'apa-itu-js',
            'excerpt'=>'JavaScript (disingkat JS) adalah..',
            'body'=>'<p>JavaScript (disingkat JS) adalah bahasa pemrograman tingkat tinggi dan dinamis.[9] JavaScript populer di internet dan dapat bekerja di sebagian besar penjelajah web populer seperti Google Chrome, Internet Explorer (IE), Mozilla Firefox, Netscape dan Opera. Kode JavaScript dapat disisipkan dalam halaman web menggunakan tag SCRIPT.[10] JavaScript merupakan salah satu teknologi inti World Wide Web selain HTML dan CSS. JavaScript membantu membuat halaman web interaktif dan merupakan bagian aplikasi web yang esensial.</p><p>Awalnya hanya diimplementasi sebagai client-side dalam penjelajah web, kini engine JavaScript disisipkan ke dalam perangkat lunak lain seperti dalam server-side dalam server web dan basis data, dalam program non web seperti perangkat lunak pengolah kata dan pembaca PDF, dan sebagai runtime environment yang memungkinkan penggunaan JavaScript untuk membuat aplikasi desktop maupun mobile.',
            'category_id'=> 3,
            'user_id'=> 4
        ]);

        About::create([
            'name'=>'Say-Id',
            'subtitle'=>'Dedicated to quality and your success',
            'role'=>'Builder',
            'image'=>'me.png',
            'visi'=>'Menjadi perusahaan terpercaya dalam memberikan solusi yang cerdas dan tepat di bidang teknologi informasi.'
        ]);
        
 
        Gallery::create([
            'title'=>'Perusahaan',
            'image'=>'gallery1.png',
            'body'=>' Kami bertugas untuk mewujudkan desain sebuah produk atau layanan, biasanya berupa software dan website. Developer membuat produk dengan cara menulis baris-baris kode yang rumit dengan menggunakan berbagai bahasa pemrograman seperti Phyton atau HTML.'
        ]);
        
        Gallery::create([
            'title'=>'SEO & Digital',
            'image'=>'banner-right-image.png',
            'body'=>'SEO akan meningkatkan visibilitas website di dalam hasil pencarian. Karena konten website telah dioptimasi menggunakan keyword yang sesuai dengan layanan Anda, maka lalu lintas web yang dihasilkan akan jauh lebih berkualitas.'
        ]);
        
        

        Portfolio::create([
            'title'=>'Desain Web Parallax',
            'image'=>'portfolio1.png',
            'body'=>'Mendesain Tampilan WebSite Menggunakan HTML dan CSS'
        ]);
        Portfolio::create([
            'title'=>'Desain Menggunakan Corel',
            'image'=>'portfolio2.png',
            'body'=>'Mendesain Poster Menggunakan Corel Draw'
        ]);
        Portfolio::create([
            'title'=>'Desain Menggunakan Photoshop',
            'image'=>'portfolio3.png',
            'body'=>'Mendesain Poster Menggunakan Adobe Photoshop'
        ]);

        Home::create([
            'title'=>'SEO & Digital',
            'body'=>'optimasi menggunakan keyword yang sesuai dengan layanan Anda',
            'image'=>'banner-right-image.png',
            'logo'=>'logo-web.png',
            'icon1'=>'icon-01.png',
            'icon2'=>'icon-02.png',
            'icon3'=>'icon-03.png',
            'icon4'=>'icon-01.png'
        ]);
        
    }
}
