<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongtinnghihuuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtinnghihuu', function (Blueprint $table) {
             $table->Increments('id');
             $table->string('hinhthucnghihuu');
             $table->string('ngaynghihuu');
             $table->string('soquyetdinh');
             $table->string('ngayquyetdinh');
             $table->string('coquanquyetdinh');
             $table->string('trangthainghihuu');
             $table->string('hoso');
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
        Schema::dropIfExists('thongtinnghihuu');
    }
}
