<?php

namespace Database\Seeders;

use App\Models\TextContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TextContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TextContent::create([
            'type' => 'visi-misi',
            'content' => '<h2>Visi Desa</h2><p>Visi adalah suatu gambaran tentang perencanaan keadaan masa depan yang diinginkan dengan melihat potensi dan kebutuhan desa. Penyusunan Visi Desa Bulusuka dilakukan dengan pendekatan partisipatif, melibatkan pihak-pihak yang berkepentingan di Desa Bulusuka seperti pemerintah desa, BPD, tokoh masyarakat, tokoh agama, lembaga masyarakat desa, dan masyarakat desa pada umumnya. Visi Desa Bulusuka adalah :&nbsp;</p><h3>"Terwujudnya Masyarakat Desa Bulusuka Yang Beriman, Tentram, Maju, Makmur, dan Berkeadilan"</h3><p>Melalui visi ini, diharapkan masyarakat menemukan gambaran kondisi masa depan yang lebih baik dan merupakan potret keadaan yang ingin dicapai, dibanding dengan kondisi yang ada saat ini. Melalui rumusan visi ini diharapkan mampu memberikan arah perubahan masyarakat pada keadaan yang lebih baik, menumbuhkan kesadaran masyarakat untuk mengendalikan dan mengontrol perubahan-perubahan yang akan terjadi, mendorong masyarakat, menciptakan daya dorong untuk perubahan serta mempersatukan anggota masyarakat.</p><h2>Misi Desa</h2><p>Misi merupakan turunan/penjabaran dari visi yang akan menunjang keberhasilan tercapainya sebuah visi. Dengan kata&nbsp; lain, Misi merupakan penjabaran lebih operatif dari Visi. Penjabaran dari visi ini diharapkan dapat mengikuti dan mengantisipasi setiap terjadinya perubahan di situasi dan kondisi lingkungan&nbsp; di masa yang akan datang dari usaha-usaha mencapai Visi desa selama masa jabatan kepala desa.</p><p>Untuk meraih Visi desa seperti yang sudah dijabarkan di atas, dengan mempertimbangkan aspek masalah dan potensi yang ada di desa berdasarkan Potret Desa, Kalender Musim dan Kelembagaan Desa, maka disusunlah Misi desa sebagai berikut:</p><ol><li>Memberdayakan semua potensi yang ada di masyarakat, yang meliputi: Pemberdayaan sumber Daya manusia (SDM), Pemberdayaan sumber daya alam (SDA), dan Pemberdayaan ekonomi kerakyatan.</li><li>Menciptakan kondisi masyarakat Desa Bulusuka yang aman, tertib, dan rukun dalam kehidupan bermasyarakat dengan berpegang pada prinsip-prinsip, yaitu : Duduk sama rendah berdiri sama tinggi dan Ringan sama dijinjing berat sama dipikul.</li><li>Optimalisasi penyelenggaraan pemerintah desa Bulusuka, yang meliputi: Penyelenggaraan pemerintahan yang transparan dan akuntabel, Pelayanan kepada masyarakat yang prima, yaitu: cepat, tepat, dan benar, serta Pelaksanaan pembangunan yang berkesinambungan dan mengedepankan partisipasi dan gotong royong masyarakat.</li><li>Meningkatkan kualitas kehidupan beragama, sosial budaya, dan ketentraman masyarakat.</li><li>Meningkatkan kualitas pendidikan, kesehatan, dan sumberdaya manusia.</li><li>Meningkatkan pembangunan ekonomi pedesaan dan kesejahteraan masyarakat.</li><li>Meningkatkan kualitas dan profesionalisme aparatur dalam tata kelola pemerintaha, pembangunan, dan pelayanan pada masyarakat.</li></ol>',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        TextContent::create([
            'type' => 'sejarah',
            'content' => "<h2>Sejarah Pembentukan Desa</h2><p>Desa Bulusuka berdiri pada tahun 1985. Berdasarkan cerita dari pada Tokoh Masyarakat Desa Bulusuka, bahwa konon nama Bulusuka terbentuk sejak tahun 1980-an, Desa Bulusuka disimbolkan dengan Gunungnya yang diberi nama gunung Bulusuka. Desa Bulusuka berasal dari kata BULU' dan SUKA. BULU' artinya Gunung sedangkan SUKA artinya perasaan senang atau menyenangi. Dahulu asal mula berdirinya Desa Bulusuka terbentuk pada masa Gallarrang Bulusibatang atas nama Nanring tetapi pada masa itu masih belum ada Kepala Desa, sebagai pengganti kepala Desa yaitu Gallarrang. Barulah pada tahun 1984 terbentuk Pemimpin Desa atau Kepala Desa Bulusuka yang daerahnya dibagi menjadi 4 dusun, yaitu Bulo-Bulo, Tappalalo, Parang Boddong, dan Pangalawakkang.</p><p>Para Pejabat Kepala Desa Bulusuka semenjak berdirinya Desa Bulusuka adalah sebagai berikut:</p><ol><li>Nanring (1981 - 1984) : Gallarang</li><li>Abd. Haq Sikki (1985 - 1993) : Kepala Desa Persiapan</li><li>Abd. Haq Sikki (1993 - 2000) : Kepala Desa</li><li>Saihuddin (2001 - 2003) : Kepala Desa</li><li>Rahman Naro (2007 - 2012) : Kepala Desa</li><li>Hamsah (2012 - 2018) : Kepala Desa</li><li>Hamsah (2020 - 2025) : Kepala Desa</li></ol>",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
