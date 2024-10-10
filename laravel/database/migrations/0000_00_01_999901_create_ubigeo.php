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
        Schema::create('ubigeo_peru_departments', function (Blueprint $table) {
            $table->string('id', 2)->primary();
            $table->string('name');
        });

        Schema::create('ubigeo_peru_provinces', function (Blueprint $table) {
            $table->string('id', 4)->primary();
            $table->string('name');
            $table->string('department_id', 2);
            $table->foreign('department_id')->references('id')->on('ubigeo_peru_departments')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('ubigeo_peru_districts', function (Blueprint $table) {
            $table->string('id', 6)->primary();
            $table->string('name');
            $table->string('department_id', 2);
            $table->foreign('department_id')->references('id')->on('ubigeo_peru_departments')->onDelete('cascade')->onUpdate('cascade');
            $table->string('province_id', 4);
            $table->foreign('province_id')->references('id')->on('ubigeo_peru_provinces')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubigeo_peru_districts');
        Schema::dropIfExists('ubigeo_peru_provinces');
        Schema::dropIfExists('ubigeo_peru_departments');
    }
};
