<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Product::create([
            'name' => 'Partnership Procurement Solution',
            'route' => 'procurement',
            'pic_id' => '1',
            'logo' => 'main.png',
            'tagline' => 'Solusi Pengadaan Tepat, Mendukung Bisnis Anda Tanpa Batas.',
            'desc' => 'Partnership Procurement Solution menyediakan layanan pengadaan lengkap untuk bisnis, termasuk sparepart dan ATK, dengan efisiensi biaya dan layanan yang disesuaikan. Kami memastikan Anda mendapatkan produk berkualitas tepat waktu untuk mendukung kelancaran operasional bisnis.',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Workshop',
            'route' => 'workshop',
            'pic_id' => '1',
            'logo' => 'workshop.png',
            'tagline' => 'Solusi Kreatif untuk Kebutuhan Visual dan Interior Anda',
            'desc' => 'Partnership Workshop menyediakan layanan pembuatan dan pemasangan neon box, neon
                    flex, letter sign, CNC router, laser cutting, welding, pagar, kanopi, serta interior. Dengan kemudahan
                    order, harga bersaing, dan garansi kualitas, kami memastikan setiap proyek dikerjakan dengan standar
                    tinggi dan hasil yang memuaskan.',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Contractor',
            'route' => 'contractor',
            'pic_id' => '1',
            'logo' => 'contractor.png',
            'tagline' => 'Membangun dengan Kualitas, Merancang dengan Presisi.',
            'desc' => 'Partnership Contractor menawarkan layanan lengkap untuk proyek konstruksi, termasuk
                    perencanaan, pengawasan, arsitektur, interior, pengukuran, dan pengaspalan. Dengan tim ahli dan solusi
                    yang disesuaikan, kami memastikan setiap proyek Anda selesai dengan kualitas tinggi dan sesuai anggaran.',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Law Consultant',
            'route' => 'law',
            'pic_id' => '1',
            'logo' => 'law.png',
            'tagline' => 'Solusi Hukum Terpercaya, Mendampingi Setiap Langkah Anda.',
            'desc' => 'Partnership Law Consultant adalah firma hukum yang fokus pada konsultasi hukum,
                    pendampingan, dan representasi di pengadilan. Kami menyediakan solusi hukum yang efektif dengan
                    pendekatan personal, memastikan setiap klien mendapatkan layanan yang disesuaikan dengan kebutuhan
                    mereka. Didukung oleh tim pengacara berpengalaman, kami siap menjadi mitra terpercaya dalam
                    menyelesaikan masalah hukum Anda dengan strategi yang matang dan komunikasi yang terbuka.',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Technology',
            'route' => 'technology',
            'pic_id' => '1',
            'logo' => 'tech.png',
            'tagline' => 'Inovasi Teknologi untuk Masa Depan Bisnis Anda.',
            'desc' => 'Partnership Technology menghadirkan solusi teknologi canggih untuk mengoptimalkan
                    bisnis Anda. Kami menawarkan layanan seperti RFID, IoT, dan pengembangan perangkat lunak khusus yang
                    disesuaikan dengan kebutuhan unik Anda. Dengan inovasi terkini dan dukungan profesional, kami membantu
                    bisnis meningkatkan efisiensi, keamanan, dan produktivitas melalui integrasi teknologi yang mulus.',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Information System & Website',
            'route' => 'informasi',
            'pic_id' => '1',
            'logo' => 'website.png',
            'tagline' => 'Menghubungkan Bisnis Anda dengan Dunia Digital.',
            'desc' => 'Partnership Information System & Website adalah solusi digital yang membantu bisnis
                    mengelola informasi dan kehadiran online secara efektif. Kami menawarkan layanan pembuatan website yang
                    menarik dan fungsional, serta sistem informasi yang terintegrasi dan aman. Dengan fokus pada desain
                    optimal, keamanan tinggi, dan solusi yang disesuaikan, kami menjadi mitra terpercaya dalam memperkuat
                    infrastruktur digital dan visibilitas online bisnis Anda.',
        ]);
        $admin = Product::create([
            'name' => 'Partnership Event Organizer & Mice',
            'route' => 'eo',
            'pic_id' => '1',
            'logo' => 'eo.png',
            'tagline' => 'Mewujudkan Momen Berharga, Dengan Sentuhan Profesional.',
            'desc' => 'Partnership Event Organizer & MICE ahli dalam merancang dan mengelola acara,
                    menawarkan layanan seperti wedding organizer, fotografi, videografi, gathering, ticketing, dan catering.
                    Dengan layanan terintegrasi dan tim profesional, kami memastikan setiap acara Anda sukses dan tak
                    terlupakan.',
        ]);
    }
}
