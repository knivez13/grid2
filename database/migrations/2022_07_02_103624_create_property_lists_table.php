<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_lists', function (Blueprint $table) {
            $table->id();
            //baisc info
            $table->string('title')->unique();
            $table->string('title_slug');
            $table->unsignedBigInteger('listing_type_id');
            $table->unsignedBigInteger('listing_category_id');
            $table->unsignedBigInteger('property_type_id');
            $table->unsignedBigInteger('property_status_id');
            $table->unsignedBigInteger('priority_id');
            $table->unsignedBigInteger('property_under_id');
            $table->unsignedBigInteger('delivery_unit_id')->nullable();
            $table->string('property_under_what')->nullable();
            $table->string('reserve_by')->nullable();

            //location
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('municipality')->nullable();
            $table->string('barangay')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('address');

            //price
            $table->decimal('asking_price', 18, 2)->nullable();
            $table->decimal('last_price', 18, 2)->nullable();
            $table->decimal('leasing_price', 18, 2)->nullable();
            //Photo
            $table->string('coverphoto')->nullable();
            $table->string('house_video')->nullable();
            //Property details
            $table->decimal('price_per_square')->nullable();
            $table->integer('lot_area')->nullable();
            $table->integer('number_of_unit')->nullable();
            $table->integer('number_of_room')->nullable();
            $table->integer('number_of_bedroom')->nullable();
            $table->integer('number_of_bathroom')->nullable();
            $table->integer('number_of_floor')->nullable();
            $table->integer('number_of_kitchen')->nullable();
            $table->integer('number_of_parking')->nullable();
            $table->integer('number_of_maid_room')->nullable();
            $table->string('title_number')->nullable();
            $table->string('tax_dec_number')->nullable();
            $table->string('unit_letter')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('cat_allow')->default(0);
            $table->tinyInteger('dog_allow')->default(0);

            //Contacts
            $table->string('owner');
            $table->string('contact_number')->nullable();
            $table->string('email');
            $table->string('company_name')->nullable();

            /////////
            // $table->string('source')->nullable();
            // $table->tinyInteger('favorite')->default(0);
            // $table->text('remarks')->nullable();

            // $table->string('references')->nullable();
            // $table->string('attachment')->nullable();
            // $table->string('nft_store_link')->nullable();

            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();


            $table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('cascade');
            $table->foreign('listing_category_id')->references('id')->on('listing_categories')->onDelete('cascade');
            $table->foreign('listing_type_id')->references('id')->on('listing_types')->onDelete('cascade');
            $table->foreign('property_status_id')->references('id')->on('property_statuses')->onDelete('cascade');
            $table->foreign('priority_id')->references('id')->on('priorities')->onDelete('cascade');
            $table->foreign('property_under_id')->references('id')->on('priority_unders')->onDelete('cascade');
            $table->foreign('delivery_unit_id')->references('id')->on('delivery_units')->onDelete('cascade');

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_lists');
    }
};
