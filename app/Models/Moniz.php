<?php

namespace App\Models;

use App\Casts\JsonCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moniz extends Model {
    use HasFactory;

    protected $table = 'moniz';

    protected $guarded = [];

    protected $casts = [
        'header' => JsonCast::class,
        'banners' => JsonCast::class,
        'welcome' => JsonCast::class,
        'counters' => JsonCast::class,
        'video' => JsonCast::class,
        'services' => JsonCast::class,
        'portfolios' => JsonCast::class,
        'testimonials' => JsonCast::class,
        'testimonial_extra' => JsonCast::class,
        'faqs' => JsonCast::class,
        'faq_extra' => JsonCast::class,
        'teams' => JsonCast::class,
        'teams_extra' => JsonCast::class,
        'progresses' => JsonCast::class,
        'progresses_extra' => JsonCast::class,
        'benefits' => JsonCast::class,
        'benefit_extra' => JsonCast::class,
        'contact' => JsonCast::class,
        'socials' => JsonCast::class,
        'package' => JsonCast::class,
        'quote' => JsonCast::class,
    ];
}
