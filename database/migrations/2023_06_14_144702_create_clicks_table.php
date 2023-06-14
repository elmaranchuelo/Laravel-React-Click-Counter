<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClicksTable extends Migration
{
    public function up()
    {
        Schema::create('clicks', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedInteger('count')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clicks');
    }
}
