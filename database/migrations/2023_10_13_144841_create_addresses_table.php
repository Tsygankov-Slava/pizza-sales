<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->string('city');
            $table->string('street');
            $table->string('house');
            $table->string('apartment');
            $table->string('entrance');
            $table->string('floor');
            $table->string('intercom');
            $table->string('barrier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('addresses');
    }
};
