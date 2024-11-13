<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIrsMataKuliahTable extends Migration
{
    public function up()
    {
        Schema::create('irs_mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('irs_id')->constrained('irs')->onDelete('cascade');
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliahs');
            $table->enum('status', ['active', 'cancelled']);
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('irs_mata_kuliah');
    }

};
