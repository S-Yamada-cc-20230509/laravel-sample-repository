<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('last_name_kanji', 50);
            $table->string('first_name_kanji', 50);
            $table->string('last_name_hiragana', 50);
            $table->string('first_name_hiragana', 50);
            $table->string('tel', 15);
            $table->string('company_name')->nullable();
            $table->string('email')->unique();
            $table->text('content');
            $table->integer('internet_search')->default(0);
            $table->string('search_word')->nullable();
            $table->integer('acquaintance_introduction')->default(0);
            $table->string('introducer_name')->nullable();
            $table->integer('sns')->default(0);
            $table->integer('flyer')->default(0);
            $table->integer('others')->default(0);
            $table->string('free_input')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
