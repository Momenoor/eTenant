<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained();
            $table->foreignId('contract_id')->constrained();
            $table->decimal('amount');
            $table->string('payee_bank_name')->default('cash');
            $table->enum('status_id', [0, 1, 2, 3, 4, 5])->comment('0=>unpaid,1=>paid,2=>partial,3=>returned,4=>cancelled,5=>hold')->default(0);
            $table->enum('type_id', [0, 1, 2])->comment('0=>cash,1=>check,2=>bank_transfer')->default(1);
            $table->enum('category_id', [0, 1, 2, 3, 4, 5, 6])->default(0)->comment('0=>installment,1=>security_deposit,2=>vat');
            $table->string('document_number');
            $table->date('document_date');
            $table->string('narration')->nullable();
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
        Schema::dropIfExists('installments');
    }
}
