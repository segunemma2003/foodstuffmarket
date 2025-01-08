<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdPartiesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('third_parties', function (Blueprint $table) {
            $table->id();
            $table->longText('user_id')->nullable();
            $table->longText('application_name')->nullable();
            $table->longText('application_url')->nullable();
            $table->longText('user_email')->nullable();
            $table->longText('user_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('third_parties');
    }
}
