<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyresults', function (Blueprint $table) {
            $table->id()->default(null);
            $table->foreignId('objective_id')->constrained('objectives')->onDelete(null)->nullable()->default(null);
            $table->string('keyresult_name')->default(null);
            $table->string('keyresult_details')->default(null);
            $table->string('keyresult_finish')->default(null);
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
        Schema::dropIfExists('keyresults');
    }
}
