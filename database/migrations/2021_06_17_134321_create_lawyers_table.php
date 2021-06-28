<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lawyer_id');
            $table->foreign('lawyer_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->string('title')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('avatar')->nullable()->default(null);
            $table->string('lawyer_firm_name')->nullable()->default(null);
            $table->text('call_url')->nullable()->default(null);
            $table->text('video_url')->nullable()->default(null);
            $table->text('deposition_url')->nullable()->default(null);

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
        Schema::dropIfExists('lawyers');
    }
}
