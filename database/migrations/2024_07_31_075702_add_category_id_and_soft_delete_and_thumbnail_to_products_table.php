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
        Schema::table('products', function (Blueprint $table) {
            //
            $table->string('thumbnail')->after('description')->default('images/filler-image-1.png');
            $table->foreignId('category_id')->after('thumbnail')->default(1)->constrained()->cascadeOnDelete();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn('category_id');
            $table->dropColumn('thumbnail');
            $table->dropSoftDeletes();
        });
    }
};
