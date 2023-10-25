<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->string('name')->comment('名稱');
            $table->date('create')->nullable()->comment('成立');
            $table->string('founder')->nullable()->comment('創辦人');
            $table->string('head')->nullable()->comment('總部地址')->default('日本');
            $table->string('address')->nullable()->comment('網址');
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
        Schema::dropIfExists('companies');
    }
}
