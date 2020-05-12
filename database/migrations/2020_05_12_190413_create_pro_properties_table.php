<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRO_PROPERTIES', function (Blueprint $table) {
            $table->bigIncrements('PRO_ID_PK');
            $table->string('PRO_COMPANY');
            $table->string('PRO_NAME');
            $table->string('PRO_ADDRESS');
            $table->string('PRO_CITY');
            $table->string('PRO_COUNTRY');
            $table->string('PRO_POSTAL_CODE');
            $table->string('PRO_ACCESSIBILITY');
            $table->timestamp('PRO_CREATED_AT', 0)->nullable();
            $table->timestamp('PRO_UPDATED_AT', 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRO_PROPERTIES');
    }
}
