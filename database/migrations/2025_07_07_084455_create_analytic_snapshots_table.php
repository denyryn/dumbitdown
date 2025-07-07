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
        Schema::create('analytic_snapshots', function (Blueprint $table) {
            $table->id();
            $table->date('snapshot_date');
            $table->integer('total_views');
            $table->integer('total_likes');
            $table->integer('total_shares');
            $table->integer('total_comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytic_snapshots');
    }
};
