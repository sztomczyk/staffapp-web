<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('location');
            $table->string('work_plan');
            $table->string('work_mode');
            $table->string('contract_type');
            $table->string('recruitment_type');
            $table->double('salary_from')->nullable();
            $table->double('salary_to')->nullable();
            $table->dateTime('expires_at');
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
        Schema::dropIfExists('offers');
    }
}
