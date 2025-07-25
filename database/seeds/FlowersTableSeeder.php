<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'slug' => Str::slug('Magical Blue Majesty', '-'),
                'flower_description' => 'Bunga biru ( Jerman : Blaue Blume ) adalah simbol sentral inspirasi gerakan Romantisisme , dan tetap menjadi motif abadi dalam seni Barat saat ini. Itu melambangkan keinginan , cinta , dan upaya metafisik untuk yang tak terbatas dan tak terjangkau. Itu melambangkan harapan dan keindahan sesuatu. Penulis Jerman, Novalis, memperkenalkan simbol tersebut ke dalam gerakan Romantis melalui kisah masa depannya yang belum selesai, berjudul Heinrich von Ofterdingen . [2] Setelah merenungkan pertemuan dengan orang asing, Heinrich von Ofterdingen muda bermimpi tentang bunga biru yang memanggilnya dan menyerap perhatiannya. Bunga biru ini adalah semboyan dan simbol suci dari sekolah [Romantis]," menurut HH Boyesen . "Ini dimaksudkan untuk melambangkan kerinduan yang dalam dan sakral dari jiwa penyair. Puisi romantis selalu berhubungan dengan kerinduan; bukan keinginan yang pasti dan dirumuskan untuk beberapa objek yang dapat diperoleh, tetapi aspirasi yang redup dan misterius, keresahan yang gemetar, rasa kekeluargaan yang samar-samar dengan yang tak terbatas, dan akibat ketidakpuasan dengan setiap bentuk kebahagiaan yang ditawarkan dunia. " [3] Thomas Carlyle menawarkan ini, bahwa bunga biru "adalah Puisi, objek nyata, hasrat dan panggilan Heinrich muda, yang, melalui berbagai petualangan, pengerahan tenaga dan penderitaan, ia harus mencari dan menemukan',
                'flower_price' => 2000000,
                'flower_img' => '1603867009$2y$10$YRkujVryE1lqVvVKd3XW.5s4Y1DEdUmG4qOUfcugwp6OmihYopVy.jpeg',
                'created_at' => '2020-10-4 16:00:00',
                'category_id' => 1,
            ],
            [
                'flower_name' => 'Romantic Day in Blause',
                'slug' => Str::slug('Romantic Day in Blause', '-'),
                'flower_description' => 'Bunga biru ( Jerman : Blaue Blume ) adalah simbol sentral inspirasi gerakan Romantisisme , dan tetap menjadi motif abadi dalam seni Barat saat ini. Itu melambangkan keinginan , cinta , dan upaya metafisik untuk yang tak terbatas dan tak terjangkau. Itu melambangkan harapan dan keindahan sesuatu. Penulis Jerman, Novalis, memperkenalkan simbol tersebut ke dalam gerakan Romantis melalui kisah masa depannya yang belum selesai, berjudul Heinrich von Ofterdingen . [2] Setelah merenungkan pertemuan dengan orang asing, Heinrich von Ofterdingen muda bermimpi tentang bunga biru yang memanggilnya dan menyerap perhatiannya. Bunga biru ini adalah semboyan dan simbol suci dari sekolah [Romantis]," menurut HH Boyesen . "Ini dimaksudkan untuk melambangkan kerinduan yang dalam dan sakral dari jiwa penyair. Puisi romantis selalu berhubungan dengan kerinduan; bukan keinginan yang pasti dan dirumuskan untuk beberapa objek yang dapat diperoleh, tetapi aspirasi yang redup dan misterius, keresahan yang gemetar, rasa kekeluargaan yang samar-samar dengan yang tak terbatas, dan akibat ketidakpuasan dengan setiap bentuk kebahagiaan yang ditawarkan dunia. " [3] Thomas Carlyle menawarkan ini, bahwa bunga biru "adalah Puisi, objek nyata, hasrat dan panggilan Heinrich muda, yang, melalui berbagai petualangan, pengerahan tenaga dan penderitaan, ia harus mencari dan menemukan',
                'flower_price' => 1800000,
                'flower_img' => '1603867101$2y$10$ZQUU5tAO9y9bOQmf5gU1c.CXujJalXBjIzTCC8t9JQItHrty5eU0e.jpeg',
                'created_at' => '2020-10-4 16:21:00',
                'category_id' => 2,
            ],
            [
                'flower_name' => 'Sweet Elegance Luxury Vase',
                'slug' => Str::slug('Sweet Elegance Luxury Vase', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 3200000,
                'flower_img' => '1603867213$2y$10$ICkNLe6EccIbLUTFZHj.3OncL1v6lNZtjNWfBOb5AzHtiEMvk3QK.jpeg',
                'created_at' => '2020-10-4 17:21:00',
                'category_id' => 3,
            ],
            [
                'flower_name' => 'Luxury Pink in Acrylic Blossom Box',
                'slug' => Str::slug('Luxury Pink in Acrylic Blossom Box', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 2200000,
                'flower_img' => '1603867295$2y$10$6nOV6xModhHLluEM.5Km3OpnAg8D8zoYN2xYX3FK.bZHcIgIz0e.jpeg',
                'created_at' => '2020-10-4 18:31:00',
                'category_id' => 4,
            ],
            [
                'flower_name' => 'Dashing Through the Show Sleigh',
                'slug' => Str::slug('Dashing Through the Show Sleigh', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 3200000,
                'flower_img' => '1603867362$2y$10$uqidz49.jw1yep0dvHc..OKfLtGolM1ufZCu5qTDgVKjfdlm5Pai.jpg',
                'created_at' => '2020-10-4 17:21:00',
                'category_id' => 5,
            ],
            [
                'flower_name' => 'Fall Romance Blossom Box',
                'slug' => Str::slug('Fall Romance Blossom Box', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 3200000,
                'flower_img' => '1603867455$2y$10$AMrOvQyKQGCLiMOKwmsXOTxysiP6hrZpxtILtQNRy8.2GjKial9m.jpeg',
                'created_at' => '2020-10-4 17:41:00',
                'category_id' => 6,
            ],
            [
                'flower_name' => 'Ocaen Breeze Orchid',
                'slug' => Str::slug('Ocaen Breeze Orchid', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 3200000,
                'flower_img' => '1603867892$2y$10$CUDvw.eiRZYrtsVMotBKc.eHBXw1WiKLcpj335XYix75LCkbKcO5K.jpg',
                'created_at' => '2020-10-4 17:41:00',
                'category_id' => 7,

            ],
            [
                'flower_name' => 'Winter Frost Tulip',
                'slug' => Str::slug('Winter Frost', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 3200000,
                'flower_img' => '1603867950$2y$10$0hfwMa.EFuyvhOIg6K.aoeuv7N9ew1pgNdyVPY7RVtWlOWv4wBAke.jpeg',
                'created_at' => '2020-10-4 17:41:00',
                'category_id' => 8,
            ],
            [
                'flower_name' => 'Simple Sparkling Gold',
                'slug' => Str::slug('Simple Sparkling Gold', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 480000,
                'flower_img' => '1607047941$2y$10$jYVyyE2dBH1BLiOAKOdG5O1Ifp1fMbagqDhCD0aRLSfOc227tYWC.jpeg',
                'created_at' => '2020-12-03 10:01:00',
                'category_id' => 1,
            ],
            [
                'flower_name' => 'Turqoise Blue Baby',
                'slug' => Str::slug('Turqoise Blue Baby', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 650000,
                'flower_img' => '1607048299$2y$10$IAEdYFde7TXvp2AXJHGZK.iM37lUckJElr7ErWs73IPHRsKQZlQBS.jpeg',
                'created_at' => '2020-12-03 10:01:00',
                'category_id' => 2,
            ],
            [
                'flower_name' => 'Caramel Antique Vase',
                'slug' => Str::slug('Caramel Antique Vase', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 2500000,
                'flower_img' => '1607048433$2y$10$UlgpFHTggrDPgguOzQqaA.hgSxUVufDhPcORXz6Z4jZo6RxyIlHHu.jpeg',
                'created_at' => '2020-12-03 11:01:00',
                'category_id' => 3,
            ],
            [
                'flower_name' => 'Romantic Secret Garden Blossom Box',
                'slug' => Str::slug('Romantic Secret Garden Blossom Box', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 2900000,
                'flower_img' => '1607048595$2y$10$yRiFeV6utuk0qnxREFGFORwTjC2JYFzvBgIVpxUcANfuu3HCxtim.png',
                'created_at' => '2020-12-03 11:01:00',
                'category_id' => 4,
            ],
            [
                'flower_name' => 'The Magic of Christmas',
                'slug' => Str::slug('The Magic of Christmas', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 1000000,
                'flower_img' => '1607048734$2y$10$Vh4yKQimdssLrbMn5e.lHO4ASReXCTEOEZSNTSgrdiN76ev67L7aS.jpeg',
                'created_at' => '2020-12-03 11:31:00',
                'category_id' => 5,
            ],
            [
                'flower_name' => 'Sunshine Serenade Boquet',
                'slug' => Str::slug('Sunshine Serenade Boquet', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 2000000,
                'flower_img' => '1607047740$2y$10$ZBYm.B9L66D27BNT2raVeOH.g0hFFgvgOadYYgzCF73PqANIK.DLa.jpeg',
                'created_at' => '2020-12-03 12:41:00',
                'category_id' => 6,
            ],
            [
                'flower_name' => 'Grand Majesty Orchid',
                'slug' => Str::slug('Holiday Liliy', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 700000,
                'flower_img' => '1607048880$2y$10$BLBBoiTqODgGYUWBBXQiuZs8wocr5j.BqtM5.8gPygdUjMtlm0Hu.jpg',
                'created_at' => '2020-12-03 12:51:00',
                'category_id' => 7,
            ],
            [
                'flower_name' => 'Holiday Tulip',
                'slug' => Str::slug('Holiday Tulip', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 700000,
                'flower_img' => '1607049024$2y$10$RbfxIZJ9GTAB1ho4PFnqe.IJ06b1UdEow.6eOK7uUvgjkOXHUglC.jpeg',
                'created_at' => '2020-12-03 12:51:00',
                'category_id' => 8,
            ],

            [
                'flower_name' => 'Elegant Peachy Shimmer',
                'slug' => Str::slug('Elegant Peachy Shimmer', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 1650000,
                'flower_img' => '1607049219$2y$10$qEDc7LlneRf9P7Z0XH1NeaxJFfz3aZO91JpJv9N4nRslEp9vrAH6.jpeg',
                'created_at' => '2020-12-03 10:01:00',
                'category_id' => 1,
            ],
            [
                'flower_name' => 'Watermelon Snow',
                'slug' => Str::slug('Watermelon Snow', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 500000,
                'flower_img' => '1607049361$2y$10$MITNeV36YgP2heOxkPo1BO9qnhpPYQamPCP3peFIKRjUsl42zATW.jpeg',
                'created_at' => '2020-12-03 10:01:00',
                'category_id' => 2,
            ],
            [
                'flower_name' => 'Lawrence Red Vase',
                'slug' => Str::slug('Lawrence Red Vase', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 1900000,
                'flower_img' => '1607049451$2y$10$vdpJT2RB7Xp7TpjmWqcag.6bPn6RiHPvandDGfyI8xjnmYMtHDLB2.jpeg',
                'created_at' => '2020-12-03 12:01:00',
                'category_id' => 3,
            ],
            [
                'flower_name' => 'Serafina Paradise Blossom Box',
                'slug' => Str::slug('Serafina Paradise Blossom Box', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 2200000,
                'flower_img' => '1607049593$2y$10$rTt.t9leYriT9Kg4reMwQePNO2MMRpi5uTaiHSnpIdAcGOfuQ1.jpeg',
                'created_at' => '2020-12-03 11:01:00',
                'category_id' => 4,
            ],
            [
                'flower_name' => 'Christmas Tree Boquet',
                'slug' => Str::slug('Christmas Tree Boquet', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 1000000,
                'flower_img' => '1607049824$2y$10$w8S850sNAcoFN6NaEulMROwcmCaIf6IodQcuZiooyju15XM8jUIi.jpeg',
                'created_at' => '2020-12-03 12:51:00',
                'category_id' => 5,
            ],
            [
                'flower_name' => 'Sunset In Paradise',
                'slug' => Str::slug('Sunset In Paradise', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 2800000,
                'flower_img' => '1607048099$2y$10$xEZB1Gooe.MgTOfC3FXODOIM2q7FpQxn9IwqNQdthIxa.QCsnAoe.jpeg',
                'created_at' => '2020-12-03 12:41:00',
                'category_id' => 6,
            ],
            [
                'flower_name' => 'Exotic Breeze Orchids',
                'slug' => Str::slug('Holiday Liliy', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 980000,
                'flower_img' => '1607049950$2y$10$1bmtnPlBcSd4PQVRYZgmObiCbSIJycjl4PmquCbKMWJ68Xp5zja.jpeg',
                'created_at' => '2020-12-03 12:51:00',
                'category_id' => 7,
            ],
            [
                'flower_name' => 'Love Tulip',
                'slug' => Str::slug('Love Tulip', '-'),
                'flower_description' => 'Menurut floriografi, rangkaian bunga merupakan salah satu bentuk komunikasi secara kriptologis yang sudah digunkan sejak ribuan tahun lalu. Sementara bunga mawar merupakan salah satu jenis bunga paling populer di dunia. Bunga ini menjadi salah satu simbol yang bisa ditemukan pada manuskrip kuno dan relief-relief bernilai sejarah. Mawar tak sekadar bunga pertanda cinta. Di balik kelopaknya yang berwarna-warni cerah tersembunyi makna khusus mewakili perasaan orang yang memberikannya. Berikut ini penjelasannya yang kami rangkum dari Swide dan Rose For Love.',
                'flower_price' => 2000000,
                'flower_img' => '1607053171$2y$10$MSTqn7ctC8bM.Nl.fETj.Bpl1XDrNvwW7P9QIOZQbZBZ9x9KCd5i1607053171$2y$10$MSTqn7ctC8bM.Nl.jpeg',
                'created_at' => '2020-12-03 13:51:00',
                'category_id' => 8,
            ],
        ]);
    }
}
