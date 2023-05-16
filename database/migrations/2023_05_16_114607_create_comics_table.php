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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title', 50);
            $table->text('description');
            $table->string('thumb', 500);
            $table->decimal('price', 8, 2);
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type', 30);
            $table->string('artists', 100);
            $table->string('writers', 100);

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
        Schema::dropIfExists('comics');
    }
};
