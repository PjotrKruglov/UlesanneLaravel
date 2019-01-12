<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) { //luua tabeli
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at')->nullable(); // abeli väljad
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // kusutada tabeli
    {
        Schema::drop('password_resets');
    }
}
