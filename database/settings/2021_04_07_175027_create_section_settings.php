<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateSectionSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('section.team_name_en', 'Volunteers');
        $this->migrator->add('section.team_name_bn', 'Bangla Volunteers');
        $this->migrator->add('section.team_title_en', 'Meet our excellent volunteers');
        $this->migrator->add('section.team_title_bn', 'Bangla Meet our excellent volunteers');
        $this->migrator->add('section.team_description_en', 'We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.');
        $this->migrator->add('section.team_description_bn', 'Bangla We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.');
        $this->migrator->add('section.testimonial_name_en', 'Reviews');
        $this->migrator->add('section.testimonial_name_bn', 'Bangla Reviews');
        $this->migrator->add('section.testimonial_title_en', 'Review from our clients');
        $this->migrator->add('section.testimonial_title_bn', 'Bangla Review from our clients');
        $this->migrator->add('section.testimonial_description_en', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam magnam earum');
        $this->migrator->add('section.testimonial_description_bn', 'Bangla Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi ab quam magnam earum');
        $this->migrator->add('section.news_name_en', 'Latest news & blog');
        $this->migrator->add('section.news_name_bn', 'Bangla Latest news & blog');
        $this->migrator->add('section.news_title_en', 'Latest charity blog');
        $this->migrator->add('section.news_title_bn', 'Bangla Latest charity blog');
        $this->migrator->add('section.news_description_en', 'We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.');
        $this->migrator->add('section.news_description_bn', 'Bangla We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.');
    }
}
