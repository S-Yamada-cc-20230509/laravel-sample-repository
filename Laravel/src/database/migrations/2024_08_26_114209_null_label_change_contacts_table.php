<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

class NullLabelChangeContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('search_word')->nullable()->change();
            $table->string('introducer_name')->nullable()->change();
            $table->string('free_input')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('search_word')->nullable(false)->change();
            $table->string('introducer_name')->nullable(false)->change();
            $table->string('free_input')->nullable(false)->change();
        });
    }
}
