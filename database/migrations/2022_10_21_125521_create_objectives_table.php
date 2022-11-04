<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectives', function (Blueprint $table) {
            $table->id()->default(null);
            $table->foreignId('team_id')->constrained('teams')->onDelete(null)->nullable()->default(null);
            $table->string('objective_name')->default(null);
            $table->string('objective_details')->default(null);
            $table->string('objective_finish')->default(null);
            $table->string('progress')->default(null);
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
        Schema::dropIfExists('objectives');
    }
}
