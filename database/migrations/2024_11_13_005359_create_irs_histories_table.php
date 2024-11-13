<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIrsHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('irs_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('irs_id')->constrained('irs');
            $table->enum('action', ['created', 'submitted', 'approved', 'revision_needed', 'updated', 'cancelled']);
            $table->foreignId('user_id')->constrained('users');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('irs_histories');
    }

};
