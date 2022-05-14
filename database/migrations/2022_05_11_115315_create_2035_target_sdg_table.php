<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create2035TargetSdgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('2035_target_sdg', function (Blueprint $table) {
            $table->foreignId('sdg_id')->nullable()->constrained('sdgs');
            $table->foreignId('2035_target_id')->nullable()->constrained('2035_targets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('2035_target_sdg');
    }
}
