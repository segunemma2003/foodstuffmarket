<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('moniz', function (Blueprint $table) {
            $table->id();
            $table->json('header')->nullable()->comment('keys:[navlinks:array,logo:string ]');
            $table->json('banners')->nullable()->comment('keys:[image:string, title:string, subtitle:string, ctaLabel:string');
            $table->json('welcome')->nullable()->comment('keys:[title:string, subtitle:string, trustedByCount: int, image:string, cta1: string, cta2:string, description1:string,description2:string ]');
            $table->json('counters')->nullable()->comment('keys:[one:[image:string, count:int, label: string]');
            $table->json('video')->nullable()->comment('keys:[text:string,url:string,thumbnail:string]');
            $table->json('services')->nullable()->comment('keys:[]');
            $table->json('package')->nullable()->comment('keys:[]');
            $table->json('portfolios')->nullable()->comment('keys:[]');
            $table->json('testimonials')->nullable()->comment('keys:[one:[avatar:string, name:string, comment:sting,status:string]]');
            $table->json('testimonial_extra')->nullable()->comment('keys:[]');
            $table->json('faqs')->nullable()->comment('keys:[]');
            $table->json('faq_extra')->nullable()->comment('keys:[]');
            $table->json('teams')->nullable()->comment('keys:[]');
            $table->json('team_extra')->nullable()->comment('keys:[]');
            $table->json('progresses')->nullable()->comment('keys:[]');
            $table->json('quote')->nullable()->comment('keys:[]');
            $table->json('progress_extra')->nullable()->comment('keys:[]');
            $table->json('benefits')->nullable()->comment('keys:[]');
            $table->json('benefit_extra')->nullable()->comment('keys:[]');
            $table->json('contact')->nullable()->comment('keys:[]');
            $table->json('socials')->nullable()->comment('keys:[]');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('moniz');
    }
};
