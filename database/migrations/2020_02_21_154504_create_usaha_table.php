<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usaha', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->bigIncrements('id_usaha');
            $table->foreign('id_owner')->references('id_owner')->on('owner')->onDelete('cascade');
            $table->char('jenis_ush');
            $table->string('nama_ush', 20);
            $table->bigInteger('telpon_ush');
            $table->longText('alamat_ush', 150);
            $table->char('prov', 50);
            $table->char('kota', 50);
            $table->char('kec', 50);
            $table->char('kelu', 50);
            $table->string('email_ush', 70);
            $table->string('foto_ush');
            $table->string('nama_table_produk');




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
        Schema::dropIfExists('usaha');
    }
}
