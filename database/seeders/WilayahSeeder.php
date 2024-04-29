<?php

namespace Database\Seeders;

use App\Models\desa;
use App\Models\wilayah;
use App\Models\kecamatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data untuk wilayah
        $data = [
            ['Ajung','Ajung'],
            ['Ajung','Klompangan'],
            ['Ajung','Mangaran'],
            ['Ajung','Pancakarya'],
            ['Ajung','Rowoindah'],
            ['Ajung','Sukamakmur'],
            ['Ajung','Wirowongso'],
            ['Ambulu','Ambulu'],
            ['Ambulu','Andongsari'],
            ['Ambulu','Karang Anyar'],
            ['Ambulu','Pontang'],
            ['Ambulu','Sabran'],
            ['Ambulu','Sumberejo'],
            ['Ambulu','Tegalsari'],
            ['Arjasa','Arjasa'],
            ['Arjasa','Biting'],
            ['Arjasa','Candijati'],
            ['Arjasa','Darson'],
            ['Arjasa','Kamal'],
            ['Arjasa','Kemuning Lor'],
            ['Bangsalsari','Badean'],
            ['Bangsalsari','Bangsalsari'],
            ['Bangsalsari','Banjarsari'],
            ['Bangsalsari','Curahkalong'],
            ['Bangsalsari','Gambirono'],
            ['Bangsalsari','Karangsono'],
            ['Bangsalsari','Langkap'],
            ['Bangsalsari','Petung'],
            ['Bangsalsari','Sukorejo'],
            ['Bangsalsari','Tisnogambar'],
            ['Bangsalsari','Tugusari'],
            ['Balung','Balung Kidul'],
            ['Balung','Balung Kulon'],
            ['Balung','Balung Lor'],
            ['Balung','Curahlele'],
            ['Balung','Gumelar'],
            ['Balung','Karangduren'],
            ['Balung','Karang Semandin'],
            ['Balung','Tutul'],
            ['Gumukmas','Bagorejo'],
            ['Gumukmas','Gumukmas'],
            ['Gumukmas','Karangrejo'],
            ['Gumukmas','Kepanjen'],
            ['Gumukmas','Mayangan'],
            ['Gumukmas','Menampu'],
            ['Gumukmas','Purwoasri'],
            ['Gumukmas','Tembokrejo'],
            ['Jelbuk','Jelbuk'],
            ['Jelbuk','Panduman'],
            ['Jelbuk','Sucopangepok'],
            ['Jelbuk','Sugerkidul'],
            ['Jelbuk','Sukojember'],
            ['Jelbuk','Sukowiryo'],
            ['Jenggawah','Cangkring'],
            ['Jenggawah','Jatimulyo'],
            ['Jenggawah','Jatisari'],
            ['Jenggawah','Jenggawah'],
            ['Jenggawah','Kemuningsari Kid'],
            ['Jenggawah','Kertonegoro'],
            ['Jenggawah','Sruni'],
            ['Jenggawah','Wonojati'],
            ['Jombang','Jombang'],
            ['Jombang','Keting'],
            ['Jombang','Ngampelrejo'],
            ['Jombang','Padomasan'],
            ['Jombang','Sarimulyo'],
            ['Jombang','Wringinagung'],
            ['Kalisat','Ajung'],
            ['Kalisat','Gambiran'],
            ['Kalisat','Glagahwero'],
            ['Kalisat','Gumuksari'],
            ['Kalisat','Kalisat'],
            ['Kalisat','Patempuran'],
            ['Kalisat','Plalangan'],
            ['Kalisat','Sebanen'],
            ['Kalisat','Sukoreno'],
            ['Kalisat','Sumberjeruk'],
            ['Kalisat','Sumberkalong'],
            ['Kalisat','Sumberketempa'],
            ['Kaliwates','Mangli'],
            ['Kaliwates','Jember Kidul'],
            ['Kaliwates','Kaliwates'],
            ['Kaliwates','Kebon Agung'],
            ['Kaliwates','Kepatihan'],
            ['Kaliwates','Sempusari'],
            ['Kaliwates','Tegal Besar'],
            ['Kencong','Cakru'],
            ['Kencong','Kencong'],
            ['Kencong','Kraton'],
            ['Kencong','Paseban'],
            ['Kencong','Wonorejo'],
            ['Ledokombo','Karangpaiton'],
            ['Ledokombo','Ledokombo'],
            ['Ledokombo','Lembengan'],
            ['Ledokombo','Slateng'],
            ['Ledokombo','Sukogidri'],
            ['Ledokombo','Sumberanget'],
            ['Ledokombo','Sumberbulus'],
            ['Ledokombo','Sumberlesung'],
            ['Ledokombo','Sumbersalak'],
            ['Ledokombo','Suren'],
            ['Mayang','Mayang'],
            ['Mayang','Mrawan'],
            ['Mayang','Seputih'],
            ['Mayang','Sidomukti'],
            ['Mayang','Sumberkejayan'],
            ['Mayang','Tegalrejo'],
            ['Mayang','Tegalwaru'],
            ['Mumbulsari','Karang Kedawung'],
            ['Mumbulsari','Kawangrejo'],
            ['Mumbulsari','Lampeji'],
            ['Mumbulsari','Lengkong'],
            ['Mumbulsari','Mumbulsari'],
            ['Mumbulsari','Suco'],
            ['Mumbulsari','Tamansari'],
            ['Panti','Glagahwero'],
            ['Panti','Kemiri'],
            ['Panti','Kemuningsari Lor'],
            ['Panti','Pakis'],
            ['Panti','Panti'],
            ['Panti','Serut'],
            ['Panti','Suci'],
            ['Pakusari','Bedadung'],
            ['Pakusari','Jatian'],
            ['Pakusari','Kertosari'],
            ['Pakusari','Pakusari'],
            ['Pakusari','Patemon'],
            ['Pakusari','Subo'],
            ['Pakusari','Sumberpinang'],
            ['Patrang','Patrang'],
            ['Patrang','Banjarsengon'],
            ['Patrang','Baratan'],
            ['Patrang','Bintoro'],
            ['Patrang','Gebang'],
            ['Patrang','Jemberlor'],
            ['Patrang','Jumerto'],
            ['Patrang','Slawu'],
            ['Puger','Bagon'],
            ['Puger','Grenden'],
            ['Puger','Jambearum'],
            ['Puger','Kasiyan'],
            ['Puger','Kasiyan Timur'],
            ['Puger','Mlokorejo'],
            ['Puger','Mojomulyo'],
            ['Puger','Mojosari'],
            ['Puger','Puger Kulon'],
            ['Puger','Puger Wetan'],
            ['Puger','Wonosari'],
            ['Puger','Wringintelu'],
            ['Rambipuji','Curahmalang'],
            ['Rambipuji','Gugut'],
            ['Rambipuji','Kaliwining'],
            ['Rambipuji','Nogosari'],
            ['Rambipuji','Pecoro'],
            ['Rambipuji','Rambigundam'],
            ['Rambipuji','Rambipuji'],
            ['Rambipuji','Rowotamtu'],
            ['Semboro','Pondokdalem'],
            ['Semboro','Pondokjoyo'],
            ['Semboro','Rejoagung'],
            ['Semboro','Semboro'],
            ['Semboro','Sidomekar'],
            ['Semboro','Sidomulyo'],
            ['Silo','Garahan'],
            ['Silo','Harjomulyo'],
            ['Silo','Karangharjo'],
            ['Silo','Mulyorejo'],
            ['Silo','Pace'],
            ['Silo','Sempolan'],
            ['Silo','Sidomulyo'],
            ['Silo','Silo'],
            ['Silo','Sumberjati'],
            ['Sukorambi','Dukuhmencek'],
            ['Sukorambi','Jubung'],
            ['Sukorambi','Karangpring'],
            ['Sukorambi','Klungkung'],
            ['Sukorambi','Sukorambi'],
            ['Sukowono','Arjasa'],
            ['Sukowono','Balet Bar'],
            ['Sukowono','Dawuhanmangli'],
            ['Sukowono','Mojogemi'],
            ['Sukowono','Pocangan'],
            ['Sukowono','Sukokerto'],
            ['Sukowono','Sukorejo'],
            ['Sukowono','Sukosari'],
            ['Sukowono','Sukowono'],
            ['Sukowono','Sumberwringin'],
            ['Sukowono','Sumberdanti'],
            ['Sukowono','Sumberwaru'],
            ['Sumberbaru','Gelang'],
            ['Sumberbaru','Jambesari'],
            ['Sumberbaru','Jamintoro'],
            ['Sumberbaru','Jatiroto'],
            ['Sumberbaru','Kaliglagah'],
            ['Sumberbaru','Karangbayat'],
            ['Sumberbaru','Pringgowirawan'],
            ['Sumberbaru','Rowotengah'],
            ['Sumberbaru','Sumberagung'],
            ['Sumberbaru','Yosorati'],
            ['Sumberjambe','Cumedak'],
            ['Sumberjambe','Gunungmalang'],
            ['Sumberjambe','Jambearum'],
            ['Sumberjambe','Plerean'],
            ['Sumberjambe','Pringgondani'],
            ['Sumberjambe','Randuagung'],
            ['Sumberjambe','Rowosari'],
            ['Sumberjambe','Sumberjambe'],
            ['Sumberjambe','Sumberpakem'],
            ['Sumbersari','Antirogo'],
            ['Sumbersari','Karangrejo'],
            ['Sumbersari','Kebonsari'],
            ['Sumbersari','Kranjingan'],
            ['Sumbersari','Sumbersari'],
            ['Sumbersari','Tegalgede'],
            ['Sumbersari','Wirolegi'],
            ['Tanggul','Darungan'],
            ['Tanggul','Klatakan'],
            ['Tanggul','Kramat'],
            ['Tanggul','Sukoharjo'],
            ['Tanggul','Manggisan'],
            ['Tanggul','Patemon'],
            ['Tanggul','Selodakon'],
            ['Tanggul','Tanggul Kulon'],
            ['Tanggul','Tanggul Wetan'],
            ['Tempurejo','Andongrejo'],
            ['Tempurejo','Curahnongko'],
            ['Tempurejo','Curahtakir'],
            ['Tempurejo','Pondokrejo'],
            ['Tempurejo','Sidodadi'],
            ['Tempurejo','Sanenrejo'],
            ['Tempurejo','Tempurejo'],
            ['Tempurejo','Wonoasri'],
            ['Umbulsari','Gadingrejo'],
            ['Umbulsari','Gunungsari'],
            ['Umbulsari','Mundurejo'],
            ['Umbulsari','Paleran'],
            ['Umbulsari','Sidorejo'],
            ['Umbulsari','Sukoreno'],
            ['Umbulsari','Tanjungsari'],
            ['Umbulsari','Tegalwangi'],
            ['Umbulsari','Umbulrejo'],
            ['Umbulsari','Umbulsari'],
            ['Wuluhan','Ampel'],
            ['Wuluhan','Dukuhdempok'],
            ['Wuluhan','Glundengan'],
            ['Wuluhan','Kesilir'],
            ['Wuluhan','Lojejer'],
            ['Wuluhan','Tamansari'],
            ['Wuluhan','Tanjungrejo'],
        ];

        // Menyimpan data ke tabel 'wilayah'
        foreach ($data as $index => $wilayah) {
        $kecamatan = Kecamatan::where('kecamatan', $wilayah[0])->first();
        
        if ($kecamatan) {
            // Buat entry wilayah dengan id_desa yang dihasilkan dari iterasi
            Wilayah::create([
                'id_kecamatan' => $kecamatan->id,
                'id_desa' => $index + 1,
            ]);
        }
    }
        
    }
}
