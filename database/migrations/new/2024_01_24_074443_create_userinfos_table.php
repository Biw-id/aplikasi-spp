<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateUserinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfos', function (Blueprint $table) {
            $table->id();
			$table->unsignedBigInteger('user_id');
			$table->integer('nis');
			$table->string('nama');
			$table->string('kelas');
			$table->string('jurusan');
			$table->string('alamat');
			$table->integer('no_hp');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id') // user id
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userinfos');
    }
}
