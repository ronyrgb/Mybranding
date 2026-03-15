<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contato_id')->nullable();
        });

        DB::statement('update site_contatos set motivo_contato_id = motivo_contato');

        Schema::table('site_contatos', function (Blueprint $table) {

            $table->foreign('motivo_contato_id')
                  ->references('id')
                  ->on('motivo_contatos');

            $table->dropColumn('motivo_contato');
        });
    }

    public function down(): void
    {

        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contato')->nullable();
        });

        DB::statement('update site_contatos set motivo_contato = motivo_contato_id');

        Schema::table('site_contatos', function (Blueprint $table) {

            $table->dropForeign(['motivo_contato_id']);

            $table->dropColumn('motivo_contato_id');
        });
    }
};
