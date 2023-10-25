<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animations', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->string('name')->comment('名稱');
            $table->string('type')->nullable()->comment('類型');
            $table->string('orign')->comment('原作');
            $table->string('dir')->comment('導演');
            $table->integer('ep_num')->unsigned()->comment('集數')->default('12');
            $table->foreignID('cp_id')->comment('動畫製作(外部鍵)');
            $table->foreign('cp_id')->references('id')->on('companies')->onDelete('cascade');
            $table->date('play_time')->comment('播出時間');
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
        Schema::dropIfExists('animations');
    }
}
