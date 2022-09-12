<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTitleAndDetailsColumnsForFaqInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faq_instructors', function (Blueprint $table) {
			$table->longText('title')->change();
            $table->longText('details')->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faq_instructors', function (Blueprint $table) {
            $table->string('title')->change();
			$table->text('details')->change();
        });
    }
}
