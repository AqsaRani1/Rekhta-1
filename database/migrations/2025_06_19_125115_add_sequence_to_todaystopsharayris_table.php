<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('todaystopshayaris', function (Blueprint $table) {
           $table->integer('sequence')->after('link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('todaystopshayaris', function (Blueprint $table) {
            $table->integer('sequence')->after('link');
        });
    }
};
