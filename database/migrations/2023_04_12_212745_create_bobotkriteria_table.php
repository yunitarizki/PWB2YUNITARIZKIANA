<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    use SoftDeletes;
    public function up(): void
    {
        Schema::create('bobotkriteria', function (Blueprint $table) {
            $table->increment('id');
            $table->timestamps('delete_at');
            $table->string('kriteria');
            $table->integer('bobot');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bobotkriteria');
    }
};
