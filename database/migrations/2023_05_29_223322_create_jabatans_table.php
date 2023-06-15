<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatans', function (Blueprint $table) {
            $table->id('id_jabatan');
            $table->string('jabatan');
            $table->bigInteger('gaji')->nullable();
            $table->string('id_company');
            $table->timestamps();
            $table->foreign('id_company')->references('id_company')->on('companies')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('id_jabatan')->after('id_role');
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatans')->onUpdate('cascade');
        });


        DB::table('jabatans')->insert([
            ['id_jabatan' => 1, 'jabatan' => 'none','id_company' => 'default']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
};
