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

            $table->string('case_nr')->nullable()->default(null);
            $table->string('co_counsel_client_id_nr')->nullable()->default(null);
            $table->string('case_type')->nullable()->default(null);
            $table->string('case_status')->nullable()->default(null);
            $table->string('docusign_url')->nullable()->default(null);
            $table->boolean('docusign_btn_pressed')->default(0);
            $table->string('injured_party_f_name')->nullable()->default(null);
            $table->string('injured_party_l_name')->nullable()->default(null);
            $table->string('client_f_name');
            $table->string('client_l_name')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('zip_code')->nullable()->default(null);
            $table->string('home_phone')->nullable()->default(null);
            $table->string('cell_phone')->nullable()->default(null);
            $table->string('diagnosis')->nullable()->default(null);
            $table->string('date_of_diagnosis')->nullable()->default(null);
            $table->string('tentative_sol')->nullable()->default(null);
            $table->text('sol_notes')->nullable()->default(null);
            $table->string('treating_doctor')->nullable()->default(null);
            $table->string('diagnosing_hospital')->nullable()->default(null);
            $table->string('date_of_death')->nullable()->default(null);
            $table->string('cause_of_death')->nullable()->default(null);
            $table->string('next_of_kin')->nullable()->default(null);
            $table->string('rel_of_the_client_to_the_deceased')->nullable()->default(null);
            $table->string('date_married')->nullable()->default(null);
            $table->text('exposure_history_notes')->nullable()->default(null);
            $table->text('call_notes')->nullable()->default(null);
            $table->text('co_counsel_notes')->nullable()->default(null);
            $table->string('referred_to')->nullable()->default(null);

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
