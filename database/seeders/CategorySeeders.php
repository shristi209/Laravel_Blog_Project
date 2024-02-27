<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Technology',
            'Health',
            'Science',
            'Artificial Intelligence',
            'Finance',
            'Fashion',
            'Architecture',
            'Entertainment',
            'Comedy',
            'Dance',
            'Medicine',
            'Psychology',
            'Sustainability',
            'Fashion Design',
            'Marketing',
            'Economics',
            'Astronomy',
            'Motivation',
            'Philosophy',
            'Languages',
            'Programming',
            'Web Development',
            'Mobile Apps',
            'Virtual Reality',
            'Augmented Reality',
            'Blockchain',
            'Cryptocurrency',
            'Machine Learning',
            'Data Science',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}