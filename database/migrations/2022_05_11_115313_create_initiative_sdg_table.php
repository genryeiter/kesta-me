<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitiativeSdgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initiative_sdg', function (Blueprint $table) {
            $table->foreignId('sdg_id')->nullable()->constrained('sdgs');
            $table->foreignId('initiative_id')->nullable()->constrained('initiatives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('initiative_sdg');
    }
}
