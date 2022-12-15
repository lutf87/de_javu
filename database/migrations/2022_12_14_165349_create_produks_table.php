<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('kode_produk');
            $table->string('nama_produk');
            $table->string('slug_produk');
            $table->text('deskripsi_produk');
            $table->string('foto')->nullable();
            $table->double('qty', 12, 2)->default(0);
            $table->string('satuan');
            $table->double('harga', 12, 2)->default(0);
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::create('produks', function(Blueprint $table) {

        // });
        Schema::dropIfExists('produks');
    }
}
