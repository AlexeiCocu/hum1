<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('client_id')->index();
            $table->foreign('client_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->unsignedBigInteger('lawyer_id');
            $table->foreign('lawyer_id')
                ->references('lawyer_id')
                ->on('lawyers')
                ->onDelete('cascade');

            $table->string('client_f_name')->nullable()->default(null);
            $table->string('client_l_name')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('zip_code')->nullable()->default(null);
            $table->string('home_phone')->nullable()->default(null);
            $table->string('cell_phone')->nullable()->default(null);

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
        Schema::dropIfExists('clients');
    }
}
