<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('nis')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('jk')->nullable();
            $table->string('agama')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->text('alamat')->nullable();
            $table->string('nama_ortu')->nullable();
            $table->string('kerja_ortu')->nullable();
            $table->string('agama_ortu')->nullable();
            $table->text('alamat_ortu')->nullable();
            $table->string('hp_ortu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('kerja_wali')->nullable();
            $table->string('agama_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('hp_wali')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
