            <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrekDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trek_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trek_id'); 
            $table->text('overview'); 
            $table->text('highlights'); 
            $table->text('itinerary'); 
            $table->text('includes'); 
            $table->text('excludes'); 
            $table->text('reviews')->nullable(); 
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('trek_id')->references('id')->on('treks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trek_details');
    }
}
