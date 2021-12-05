<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slogan')->nullable();
            $table->string('maopen');
            $table->string('maclose');
            $table->string('diopen');
            $table->string('diclose');
            $table->string('woopen');
            $table->string('woclose');
            $table->string('doopen');
            $table->string('doclose');
            $table->string('vropen');
            $table->string('vrclose');
            $table->string('zaopen');
            $table->string('zaclose');
            $table->string('zoopen');
            $table->string('zoclose');
            $table->string('status')->default('closed');
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
        Schema::dropIfExists('restaurants');
    }
}
