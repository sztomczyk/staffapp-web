<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('name');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email');
            $table->text('message')->nullable();
            $table->string('cv_url');
            $table->boolean('accepted_policy');
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
        Schema::dropIfExists('applications');
    }
}
