<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('invoiceId');
            $table->bigInteger('customer_id');
            $table->bigInteger('product_id');
            $table->date('created_date');
            $table->float('invoice_value');
            $table->string('card_number');
            $table->string('currency');
            $table->string('country');
            $table->timestamps();
            // Data["InvoiceId"] : 1973876,
            // customer_id
            // product_id
            // Data["InvoiceValue"] :
            // Data["CreatedDate"] :
            // InvoiceTransactions["CardNumber"] : "512345xxxxxx0008",
            // InvoiceTransactions["Currency"] :KD,
            // InvoiceTransactions["Country"] : Egypt,
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
}
