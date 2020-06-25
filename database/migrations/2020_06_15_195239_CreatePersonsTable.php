<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Persons', function (Blueprint $table) {
            
            $table->string('Client_Id',  50);
            $table->string('Project_Id', 50);
            $table->bigIncrements('Person_Id');
            // this columns are the PK of the table
            $table->index(['Client_Id', 'Project_Id', 'Person_Id']); 

            $table->string('Family_Name', 128)->nullable();
            $table->string('First_Name',   128)->nullable();
            $table->string('Prefix_Title', 128)->nullable();
            $table->string('Suffix_Title', 255)->nullable();
            $table->string('Company', 255)->nullable();
            $table->string('Address_1', 128)->nullable();
            $table->string('Address_2', 128)->nullable();
            $table->string('Address_3', 128)->nullable();
            $table->string('Address_4', 128)->nullable();
            $table->string('Zip_Code', 128)->nullable();
            $table->string('City', 128)->nullable();
            $table->string('Country_Code', 50)->nullable();
            $table->string('Telephone', 255)->nullable();
            $table->string('Telefax', 255)->nullable();
            $table->string('EMail', 128)->nullable();
            $table->string('Email_Check', 128)->nullable();
            $table->string('EMail2', 128)->nullable();
            $table->string('Email2_Check', 128)->nullable();
            $table->string('Session_Id', 128)->nullable();
            $table->string('Gender', 50)->nullable();
            $table->string('JMUser_Id', 50)->nullable();
            $table->string('Password', 100)->nullable();
            $table->string('ExtraField01', 255)->nullable();
            $table->string('ExtraField02', 255)->nullable();
            $table->string('ExtraField03', 255)->nullable();
            $table->string('ExtraField04', 255)->nullable();
            $table->string('ExtraField05', 255)->nullable();
            $table->string('ExtraField06', 255)->nullable();
            $table->string('ExtraField07', 255)->nullable();
            $table->string('ExtraField08', 255)->nullable();
            $table->string('ExtraField09', 255)->nullable();
            $table->string('ExtraField10', 255)->nullable();
            $table->string('Mobile', 50)->nullable();
            $table->string('URL', 50)->nullable();
            $table->string('Passport_Number', 50)->nullable();
            $table->string('Nationality', 50)->nullable();
            $table->string('ID_Number', 50)->nullable();

            $table->dateTime('Date_Of_Birth')->nullable();  //TODO: this is a smalldatetime in SQL Server
            
            $table->string('Special_Needs_Physical', 128)->nullable();
            $table->string('Special_Needs_Dietary', 128)->nullable();
            $table->string('First_Name_For_Badge', 50)->nullable();
            $table->string('Family_Name_For_Badge', 50)->nullable();
            $table->string('Biography')->nullable();
            $table->string('VAT_Number', 50)->nullable();
            $table->string('Membership_No', 50)->nullable();
            $table->string('Participant_Template', 50)->nullable();
            $table->string('Browser', 255)->nullable();
            $table->string('User_Ip', 50)->nullable();

            $table->integer('msrepl_tran_version')->nullable(); //TODO: this is a uniqueidentifier in SQL Server
            
            $table->integer('Holding_Entity')->nullable(); 
            $table->string('Language_Code', 50)->nullable();
            $table->string('ExtraField11', 255)->nullable();
            $table->string('ExtraField12', 255)->nullable();
            $table->string('ExtraField13', 255)->nullable();
            $table->string('ExtraField14', 255)->nullable();
            $table->string('ExtraField15', 255)->nullable();
            $table->string('ExtraField16', 255)->nullable();
            $table->string('ExtraField17', 255)->nullable();
            $table->string('ExtraField18', 255)->nullable();
            $table->string('ExtraField19', 255)->nullable();
            $table->string('ExtraField20', 255)->nullable();
            $table->string('Image01', 254)->nullable();
            $table->string('Image02', 254)->nullable();
            $table->string('Image03', 254)->nullable();
            $table->string('Image04', 254)->nullable();
            $table->string('Image05', 254)->nullable();

            $table->string('Favorite_Person')->nullable(); //TODO this is a fk by [Favorite_Person]
            //$table->foreign('Favorite_Person')->references('Favorite_Id')->on('Favorite_Person')
            $table->string('Last_Sync_Date', 200)->nullable();
            $table->integer('Parent')->nullable()->default(null);
            
            $table->string('Job_Title', 512)->nullable();
            $table->string('Do_Not_Show_Publicly', 50)->nullable()->default(null);

            $table->integer('Consent_Store_Process_Data')->nullable(false)->default(0); //TODO this is not null
            $table->integer('Consent_Conference_Emails')->nullable(false)->default(0);
            $table->integer('Consent_Marketing_Emails')->nullable(false)->default(0);
            $table->integer('Consent_Third_Parties')->nullable(false)->default(0);
            $table->integer('Is_Forgotten')->nullable(false)->default(0);
 
            $table->dateTime('Date_Forgotten')->nullable(); //TODO: this is a smalldatetime in SQL Server
            
            $table->string('Old_Password', 100)->nullable()->default(null);
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
        Schema::dropIfExists('Persons');
    }
}
