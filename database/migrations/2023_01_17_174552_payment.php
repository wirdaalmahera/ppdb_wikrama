<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('ppdb_id');
            $table->string('bank');
            $table->string('rekening');
            $table->char('tlp');
            $table->string('nominal');
            $table->string('image')->nullable();
            $table->bigImteger('user_id');
            $table->enum('status', ['Pending', 'Success', 'Failed']);
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
        //
    }
};
