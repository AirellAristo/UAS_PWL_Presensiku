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
        Schema::create('companies', function (Blueprint $table) {
            $table->string('id_company')->primary();
            $table->string('company_name');
            $table->enum('status', ['buka', 'tutup'])->default('tutup');
            $table->timestamps();
        });

        DB::table('companies')->insert([
            ['id_company' => 'default', 'company_name' => 'default']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
