<?php

use App\Models\TestData;
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
        Schema::create('test_data_relations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TestData::class);
            $table->string('relation_name');
            $table->string('relation_email');
            $table->integer('relation_age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_data_relations');
    }
};
