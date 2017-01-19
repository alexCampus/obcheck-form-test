<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages',function(Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('id_sender')->unsigned();
            $table->foreign('id_sender')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
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
        Schema::table('messages',function(Blueprint $table) {
            $table->dropForeign('messages_id_sender_foreign');
        });
        
        Schema::drop('messages');
    }
}
