<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalconditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalconditions', function (Blueprint $table) {
            $table->id();
            $table->boolean('smoking')->default(0);
            $table->boolean('alkol')->default(0);
            $table->boolean('diabetes')->default(0);
            $table->boolean('hypertension')->default(0);
            $table->boolean('headache')->default(0);
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicalconditions');
    }
}
