 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prod_id')->unsigned()->index();
            // $table->foreign('prod_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('customer');
            $table->text('review');
            $table->integer('star');
            // $table->timestamps();
        });

        Schema::table('posts', function($table) {
          // $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('prod_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
