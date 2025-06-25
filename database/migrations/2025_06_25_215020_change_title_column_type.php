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
        $table->string('title')->change();
        $table->text('content')->change();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->json('title')->change();
        $table->json('content')->change();
    }
};
