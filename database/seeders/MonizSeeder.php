<?php

namespace Database\Seeders;

use App\Models\Moniz;
use Illuminate\Database\Seeder;

class MonizSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $header = [
            'navlinks' => [
                'home' => 'Home',
                'about' => 'About',
                'pricing' => 'Pricing',
                'testimonials' => 'Testimonials',
                'faq' => 'FAQs',
                'why-us' => 'Why Us?',
                'contact' => 'Contact',
            ],
            'logo' => 'frontend/moniz/assets/images/Logo FullLogo - Small.png',
            'favicon' => 'frontend/moniz/assets/images/Logo IconLogo - Small.png',
        ];
        $banners = [
            'one' => [
                'image' => 'frontend/moniz/assets/images/backgrounds/Header-01.webp',
                'title' => 'Cannabis Friendly Email Marketing? Try Cannabis Focused.',
                'subtitle' => 'welcome to Moniz Web agency',
                'ctaLabel' => 'Sign Up Now!',
            ],
            'three' => [
                'image' => 'frontend/moniz/assets/images/backgrounds/Header-03.webp',
                'title' => '100+ Templates to Make Your Next Campaign a Breeze',
                'subtitle' => 'welcome to Moniz Web agency',
                'ctaLabel' => 'Sign Up Now!',
            ],
            'two' => [
                'image' => 'frontend/moniz/assets/images/backgrounds/Header-02.webp',
                'title' => 'Unparalleled Email Delivery',
                'subtitle' => 'welcome to Moniz Web agency',
                'ctaLabel' => 'Sign Up Now!',
            ],
        ];
        $welcome = [
            'title' => 'We’re more than just a service, we’re your partner in navigating and thriving in the
            cannabis market',
            'subtitle' => 'About KushMail',
            'image' => 'frontend/moniz/assets/images/resources/welcome-one-img-1.webp',
            'cta1' => '100+ Email Templates',
            'cta2' => 'HIGHest Deliverability',
            'description1' => 'Unlike other platforms that just tolerate cannabis businesses, KushMail is
            purpose-built for the needs of our industry. It\'s not just cannabis-friendly, it\'s
            cannabis-focused. We understand the intricacies of cannabis markets, ensuring your email
            marketing has a strong, memorable impact on your audience. With KushMail’s unique focus
            on our industry, you’ll have a trusted partner to help elevate your marketing to a higher level',
        ];
        $counters = [
            'one' => [
                'icon' => 'icon-recommend',
                'label' => 'Projects completed',
                'count' => 860,
            ],
            'two' => [
                'icon' => 'icon-recruit',
                'label' => 'Active Clients',
                'count' => 50,
            ],
            'three' => [
                'icon' => 'icon-coffee',
                'label' => 'Cups of coffee',
                'count' => 93,
            ],
            'four' => [
                'icon' => 'icon-customer-review',
                'label' => 'Happy clients',
                'count' => 970,
            ],
        ];
        $video = [
            'text' => 'Simple. Intuitive. Easy to Use.',
            'url' => 'https://www.youtube.com/watch?v=8DP4NgupAhI',
            'thumbnail' => 'frontend/moniz/assets/images/backgrounds/video-one-bg.png',

        ];

        $testimonials = [
            'one' => [
                'avatar' => 'frontend/moniz/assets/images/testimonial/testimonials-1-1.png',
                'comment' => 'This is due to their excellent service,
                competitive pricing and customer support. It’s throughly refresing
                to
                get such a personal touch. Duis aute lorem ipsum is simply.',
                'name' => 'Aleesha brown',
                'status' => 'Satisfied
                customers',
            ],
            'two' => [
                'avatar' => 'frontend/moniz/assets/images/testimonial/testimonials-1-2.png',
                'comment' => 'This is due to their excellent service,
                competitive pricing and customer support. It’s throughly refresing
                to
                get such a personal touch. Duis aute lorem ipsum is simply.',
                'name' => 'Aleesha brown',
                'status' => 'Satisfied
                customers',
            ],
            'three' => [
                'avatar' => 'frontend/moniz/assets/images/testimonial/testimonials-1-3.png',
                'comment' => 'This is due to their excellent service,
                competitive pricing and customer support. It’s throughly refresing
                to
                get such a personal touch. Duis aute lorem ipsum is simply.',
                'name' => 'Aleesha brown',
                'status' => 'Satisfied
                customers',
            ],
        ];
        $testimonialExtra = [
            'title' => 'What they’re saying about KushMail?',
            'subtitle' => 'Customer feedback',
            'cta' => 'Contact Us',
        ];
        $faqs = [
            'one' => [
                'question' => 'What does KushMail do?',
                'answer' => 'KushMail is an email marketing platform. You can send out newsletters, automate lead
                nurturing campaigns, and send announcements and other assorted marketing material.',
            ],
            'two' => [
                'question' => 'How does KushMail work?',
                'answer' => 'You can change it anytime.',
            ],
            'three' => [
                'question' => 'How do I use KushMail?',
                'answer' => 'You can change it anytime.',
            ],
            'four' => [
                'question' => 'Do I need a monthly plan?',
                'answer' => 'You can change it anytime.',
            ],
            'five' => [
                'question' => 'How do I get started with KushMail?',
                'answer' => 'You can change it anytime.',
            ],
            'six' => [
                'question' => 'How do I get support?',
                'answer' => 'You can change it anytime.',
            ],
            'seven' => [
                'question' => 'Can you assist me with my email campaign?',
                'answer' => 'You can change it anytime.',
            ],
            'eight' => [
                'question' => 'Do you integrate with GravityForms, WooCommerce, MetForms, etc?',
                'answer' => 'You can change it anytime.',
            ],
        ];
        $faqExtra = [
            'subtitle' => 'Frequently asked questions',
            'title' => 'We’re here to change your business look',
            'image' => 'frontend/moniz/assets/images/resources/we-change-right-img-1.jpg',
            'imageText' => 'Our agency is one of the most successful agency.',
        ];
        $teams = [
            'one' => [
                'name' => 'Kevin Martin',
                'avatar' => 'frontend/moniz/assets/images/team/team-1-1.jpg',
                'designation' => 'Developer',
                'socials' => [
                    'twitter' => 'https://twitter.com/',
                    'facebook' => 'https://facebook.com/',
                    'pinterest-p' => 'https://pinterest.com/',
                    'instagram' => 'https://instagram.com/',
                ],
            ],
            'two' => [
                'name' => 'Kevin Martin',
                'avatar' => 'frontend/moniz/assets/images/team/team-1-2.jpg',
                'designation' => 'Developer',
                'socials' => [
                    'twitter' => 'https://twitter.com/',
                    'facebook' => 'https://facebook.com/',
                    'pinterest-p' => 'https://pintrest.com/',
                    'instagram' => 'https://instagram.com/',
                ],
            ],
            'three' => [
                'name' => 'Kevin Martin',
                'avatar' => 'frontend/moniz/assets/images/team/team-1-3.jpg',
                'designation' => 'Developer',
                'socials' => [
                    'twitter' => 'https://twitter.com/',
                    'facebook' => 'https://facebook.com/',
                    'pinterest-p' => 'https://pinterest.com/',
                    'instagram' => 'https://instagram.com/',
                ],
            ],
            'four' => [
                'name' => 'Kevin Martin',
                'avatar' => 'frontend/moniz/assets/images/team/team-1-4.jpg',
                'designation' => 'Developer',
                'socials' => [
                    'twitter' => 'https://twitter.com/',
                    'facebook' => 'https://facebook.com/',
                    'pinterest-p' => 'https://pinterest.com/',
                    'instagram' => 'https://instagram.com/',
                ],
            ],
        ];
        $progresses = [
            'one' => [
                'label' => 'Web Design',
                'percent' => '90%',
            ],
            'two' => [
                'label' => 'Web Development',
                'percent' => '46%',
            ],
            'three' => [
                'label' => 'Web Application',
                'percent' => '30%',
            ],
        ];
        $progressExtra = [
            'title' => '',
        ];
        $socials = [
            'linkedin' => 'https://www.linkedin.com/company/91355768/',
            'facebook' => 'https://facebook.com/kushmktg',
            'instagram' => 'https://instagram.com/kushmktg',
            'youtube' => 'https://www.youtube.com/@KushCreativeMktg',
        ];
        $package = [
            'subtitle' => 'Affordable for all businesses',
            'title' => 'Our Pricing',
            'names' => [
                'zero' => 'Seedling',
                'one' => 'Blooming',
                'two' => 'Harvest',
            ],
        ];
        Moniz::create([
            'header' => $header,
            'banners' => $banners,
            'welcome' => $welcome,
            'counters' => $counters,
            'video' => $video,
            'testimonials' => $testimonials,
            'testimonial_extra' => $testimonialExtra,
            'faqs' => $faqs,
            'faq_extra' => $faqExtra,
            'teams' => $teams,
            'progresses' => $progresses,
            'socials' => $socials,
            'package' => $package,
        ]);
    }
}
