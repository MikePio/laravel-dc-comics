<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_c_comics', function (Blueprint $table) {
            $table->id();

            $table->string('title', 50);
            $table->text('description')->nullable();
            $table->text('thumb');
            $table->string('price', 8);
            $table->string('series', 50);
            $table->string('sale_date', 10);
            $table->string('type', 50);
            $table->string('artists');
            $table->string('writers');

            $table->timestamps();

            //* DOPO AVER SCRITTO LE COOLONNE DELLA TABELLA INSERIRE IL COMANDO php artisan migrate
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_c_comics');
    }
};
