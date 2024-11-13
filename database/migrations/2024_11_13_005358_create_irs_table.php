<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIrsTable extends Migration
{
    public function up()
    {
        Schema::create('irs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('users');
            $table->foreignId('semester_id')->constrained('semesters');
            $table->foreignId('dosen_wali_id')->constrained('users');
            $table->integer('total_sks');
            $table->enum('status', ['draft', 'submitted', 'approved', 'revision_needed']);
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('irs');
    }

};
