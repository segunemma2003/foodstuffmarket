<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('email_services', function (Blueprint $table) {
            $table->longText('api_key')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('email_services', function (Blueprint $table) {
            //
        });
    }
};
