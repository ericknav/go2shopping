<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export (1.4.1)
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateCNFRESOURCETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CNF_RESOURCE', function (Blueprint $table) {
            $table->increments('resourceId');
            $table->integer('cnfLanguageId');
            $table->string('tableName', 50)->nullable();
            $table->string('tableId', 20)->nullable();
            $table->string('word', 200);
            $table->string('wordTranslated', 200);
            $table->string('descriptionTranslated', 500)->nullable();
            $table->tinyInteger('active');
            $table->dateTime('startDate');
            $table->dateTime('endDate');

            $table->index('cnfLanguageId', 'fk_resource_language_idx');

            $table->foreign('cnfLanguageId', 'fk_resource_language')->references('languageId')->on('CNF_LANGUAGE')->onDelete('NO ACTION
')->onUpdate('NO ACTION');

        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CNF_RESOURCE');
    }
}
