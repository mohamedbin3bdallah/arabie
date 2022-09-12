<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAppointmentIdColumnToStudentCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_coupons', function (Blueprint $table) {
			$table->unsignedBigInteger('appointment_id')->after('coupon_id');
			$table->foreign('appointment_id')->references('id')->on('appointments');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_coupons', function (Blueprint $table) {
            $table->dropColumn('appointment_id');

        });
    }
}
