<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            [
                'flower_name' => 'Magical Blue Majesty',
                'slug' => 'Magical-Blue-Majesty',
                'flower_description' => 'Bunga biru ( Jerman : Blaue Blume ) adalah simbol sentral inspirasi gerakan Romantisisme , dan tetap menjadi motif abadi dalam seni Barat saat ini. Itu melambangkan keinginan , cinta , dan upaya metafisik untuk yang tak terbatas dan tak terjangkau. Itu melambangkan harapan dan keindahan sesuatu. Penulis Jerman, Novalis, memperkenalkan simbol tersebut ke dalam gerakan Romantis melalui kisah masa depannya yang belum selesai, berjudul Heinrich von Ofterdingen . [2] Setelah merenungkan pertemuan dengan orang asing, Heinrich von Ofterdingen muda bermimpi tentang bunga biru yang memanggilnya dan menyerap perhatiannya. Bunga biru ini adalah semboyan dan simbol suci dari sekolah [Romantis]," menurut HH Boyesen . "Ini dimaksudkan untuk melambangkan kerinduan yang dalam dan sakral dari jiwa penyair. Puisi romantis selalu berhubungan dengan kerinduan; bukan keinginan yang pasti dan dirumuskan untuk beberapa objek yang dapat diperoleh, tetapi aspirasi yang redup dan misterius, keresahan yang gemetar, rasa kekeluargaan yang samar-samar dengan yang tak terbatas, dan akibat ketidakpuasan dengan setiap bentuk kebahagiaan yang ditawarkan dunia. " [3] Thomas Carlyle menawarkan ini, bahwa bunga biru "adalah Puisi, objek nyata, hasrat dan panggilan Heinrich muda, yang, melalui berbagai petualangan, pengerahan tenaga dan penderitaan, ia harus mencari dan menemukan',
                'flower_price' => 2000000,
                'flower_img' => '1603867009$2y$10$YRkujVryE1lqVvVKd3XW.5s4Y1DEdUmG4qOUfcugwp6OmihYopVy.jpeg',
                'stock' => 100,
                'created_at' => '2020-10-4 16:00:00',
                'category_id' => 1,
            ],
            [
                'flower_name' => 'Romantic Day in Blause',
                'slug' => 'Romantic-Day-in-Blause',
                'flower_description' => 'Bunga biru ( Jerman : Blaue Blume ) adalah simbol sentral inspirasi gerakan Romantisisme , dan tetap menjadi motif abadi dalam seni Barat saat ini. Itu melambangkan keinginan , cinta , dan upaya metafisik untuk yang tak terbatas dan tak terjangkau. Itu melambangkan harapan dan keindahan sesuatu. Penulis Jerman, Novalis, memperkenalkan simbol tersebut ke dalam gerakan Romantis melalui kisah masa depannya yang belum selesai, berjudul Heinrich von Ofterdingen . [2] Setelah merenungkan pertemuan dengan orang asing, Heinrich von Ofterdingen muda bermimpi tentang bunga biru yang memanggilnya dan menyerap perhatiannya. Bunga biru ini adalah semboyan dan simbol suci dari sekolah [Romantis]," menurut HH Boyesen . "Ini dimaksudkan untuk melambangkan kerinduan yang dalam dan sakral dari jiwa penyair. Puisi romantis selalu berhubungan dengan kerinduan; bukan keinginan yang pasti dan dirumuskan untuk beberapa objek yang dapat diperoleh, tetapi aspirasi yang redup dan misterius, keresahan yang gemetar, rasa kekeluargaan yang samar-samar dengan yang tak terbatas, dan akibat ketidakpuasan dengan setiap bentuk kebahagiaan yang ditawarkan dunia. " [3] Thomas Carlyle menawarkan ini, bahwa bunga biru "adalah Puisi, objek nyata, hasrat dan panggilan Heinrich muda, yang, melalui berbagai petualangan, pengerahan tenaga dan penderitaan, ia harus mencari dan menemukan',
                'stock' => 100,
                'flower_price' => 1800000,
                'flower_img' => '1603867101$2y$10$ZQUU5tAO9y9bOQmf5gU1c.CXujJalXBjIzTCC8t9JQItHrty5eU0e.jpeg',
                'created_at' => '2020-10-4 16:21:00',
                'category_id' => 2,
            ],
            [
                'flower_name' => 'Sweet Elegance Luxury Vase',
                'slug' => 'Sweet-Elegance-Luxury-Vase',
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'stock' => 100,
                'flower_price' => 3200000,
                'flower_img' => '1603867213$2y$10$ICkNLe6EccIbLUTFZHj.3OncL1v6lNZtjNWfBOb5AzHtiEMvk3QK.jpeg',
                'created_at' => '2020-10-4 17:21:00',
                'category_id' => 3,
            ],
            [
                'flower_name' => 'Luxury Pink in Acrylic Round Box',
                'slug' => 'Luxury-Pink-in-Acrylic-Round-Box',
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'stock' => 100,
                'flower_price' => 2200000,
                'flower_img' => '1603867295$2y$10$6nOV6xModhHLluEM.5Km3OpnAg8D8zoYN2xYX3FK.bZHcIgIz0e.jpeg',
                'created_at' => '2020-10-4 18:31:00',
                'category_id' => 4,
            ],
            [
                'flower_name' => 'Sunset on Mars',
                'slug' => 'Sunset-on-Mars',
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'stock' => 100,
                'flower_price' => 3200000,
                'flower_img' => '1603867362$2y$10$uqidz49.jw1yep0dvHc..OKfLtGolM1ufZCu5qTDgVKjfdlm5Pai.jpeg',
                'created_at' => '2020-10-4 17:21:00',
                'category_id' => 5,
            ],
            [
                'flower_name' => 'Fall Romance Blossom Box',
                'slug' => 'Fall-Romance-Blossom-Box',
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'stock' => 100,
                'flower_price' => 3200000,
                'flower_img' => '1603867455$2y$10$AMrOvQyKQGCLiMOKwmsXOTxysiP6hrZpxtILtQNRy8.2GjKial9m.jpeg',
                'created_at' => '2020-10-4 17:41:00',
                'category_id' => 6,
            ]
        ]);
    }
}
