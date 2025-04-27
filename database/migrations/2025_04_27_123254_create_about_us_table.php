<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->text('deskripsi');
            $table->string('foto');
            $table->string('alamat');
            $table->string('url_facebook');
            $table->string('url_instagram');
            $table->string('url_map');
            $table->string('email');
            $table->string('no_hp');
            $table->timestamps();
        });

        DB::table('about_us')->insert([
            'nama_instansi' => 'Puskesmas Pembantu Desa Selotong',
            'deskripsi' => 'Puskesmas Pembantu Desa Selotong terletak di Kecamatan Secanggang, Kabupaten Langkat, Sumatera Utara. Sebagai bagian dari sistem pelayanan kesehatan primer, Puskesmas Pembantu (Pustu) berfungsi untuk mendekatkan layanan kesehatan kepada masyarakat di daerah yang jauh dari pusat layanan kesehatan utama.',
            'foto' => 'about_us/about.jpg',
            'alamat' => 'Selotong, Kec. Secanggang, Kabupaten Langkat, Sumatera Utara 20855',
            'url_facebook' => 'https://www.facebook.com/test/',
            'url_instagram' => 'https://www.instagram.com/test/',
            'url_map' => 'https://maps.google.com/maps?q=Selotong&t=&z=13&ie=UTF8&iwloc=&output=embed',
            'email' => 'test@gmail.com',
            'no_hp' => '0285-421911',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
