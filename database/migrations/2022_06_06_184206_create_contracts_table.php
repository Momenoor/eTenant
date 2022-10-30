<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('landlord_id')->constrained();
            $table->foreignId('building_id')->constrained();
            $table->foreignId('tenant_id')->constrained();
            $table->string('number');
            $table->date('start');
            $table->date('end');
            $table->date('grace_start');
            $table->date('grace_end');
            $table->decimal('annual_value');
            $table->decimal('discount');
            $table->decimal('value');
            $table->enum('type_id', [0, 1, 2])->comment('0=>residential,1=>commercial,2=>industrial');
            $table->enum('status_id', [0, 1, 2, 3, 4])->comment('0=>active,1=>expired,2=>terminated,3=>renewed,4=>pending');
            $table->string('atesting_document_number');
            $table->text('remarks');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
