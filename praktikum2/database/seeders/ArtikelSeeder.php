<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('artikel')->insert([
            'judul' => 'Saham Konsumer Salim (ICBP) & Mayora (MYOR) Jadi Favorit Analis',
            'content'=> 'Mayoritas emiten makanan dan minuman olahan membukukan kenaikan laba bersih sepanjang kuartal pertama 2023. Saham dua emiten konsumer dengan kapitalisasi besar, PT Indofood CBP Sukses Makmur Tbk (ICBP) kepunyaan Grup Salim dan PT Mayora Indah Tbk (MYOR) pun makin jadi favorit analis.',
            'image'=>'https://cdn.antaranews.com/cache/730x487/2021/01/12/Mayora.jpg',
            'author'=>'kompas'

        ]);
        DB::table('artikel')->insert([
            'judul' => 'Dyandra Media International (DYAN) Cetak Laba Bersih Rp 55,9 Miliar di Kuartal I-2023',
            'content'=> 'Perusahaan induk (holding) yang membawahi 27 perusahaan dan bergerak di industri Meeting, Incentivem Convention dan Exhibition (MICE) PT Dyandra Media International (DYAN) mencatatkan laba bersih tercatat senilai Rp 55,9 miliar pada kuartal I-2023.',
            'image'=>'https://asset.kompas.com/crops/QpfnCkieThTQdRKvh1St8I4pulk=/0x0:0x0/780x390/filters:watermark(data/photo/2020/03/10/5e6775b55942a.png,0,-0,1)/data/photo/2013/02/19/1406104-ipo-dyandra-media-international-620X310.jpg',
            'author'=>'kompas'

        ]);
        DB::table('artikel')->insert([
            'judul' => 'TBIG Catat Pendapatan Rp 6,52 Triliun',
            'content'=> 'PT Tower Bersama Infrastructure, Tbk mencatat pendapatan dan EBITDA masing-masing sebesar Rp 6.524 miliar dan Rp 5.662 miliar untuk periode satu tahun yang berakhir pada 31 Desember 2022. Marjin EBITDA perseroan tetap 86,6% untuk tahun 2022.',
            'image'=>'https://img2.beritasatu.com/cache/investor/798x449-2/1588083436.png',
            'author'=>'halonemo'

        ]);
    }
}
