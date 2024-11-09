<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    protected $personas = [
        'amir' => [
            'name' => 'Amir',
            'title' => 'Full Stack Developer',
            'image' => '/images/amir.jpeg',
            'rating' => 4,
            'about' => "Computer Science graduate with hands-on experience in product management, web development, UX design, and market research in EdTech and Finance Solutions. Skilled in competitor analysis, user research, and data-driven product improvements. Proven ability to work with cross-functional teams to deliver seamless product experiences and manage feature development. ",
            'skills' => [
                ['name' => 'Product Management', 'level' => 90],
                ['name' => 'UX Design', 'level' => 85],
                ['name' => 'User Research', 'level' => 88],
                ['name' => 'Data Analysis', 'level' => 85],
                ['name' => 'Laravel', 'level' => 92],
                ['name' => 'Full Stack Development', 'level' => 90],
                ['name' => 'Database Design', 'level' => 88],
                ['name' => 'UI/UX Implementation', 'level' => 85],
                ['name' => 'Project Management', 'level' => 88],
                ['name' => 'Agile/Scrum', 'level' => 85],
            ],
            'experience' => [
                [
                    'position' => 'Product Manager',
                    'company' => 'Intern, Pandai Education Sdn. Bhd.',
                    'period' => 'July 2024 - October 2024',
                    'description' => [
                        'Led two major projects as product manager and UX designer, improving product development and company workflows.',
                        'Exceeded monthly active user (MAU) targets by 50%, demonstrating strong ability to drive user engagement.',
                        'Planned the development and launch of new features, including Pandai Class Lesson and Pandai Enrichment Class.',
                        'Established OKRs for product improvement initiatives that boosted student engagement.',
                        'Conducted thorough research for user needs, developing detailed user personas.',
                        'Defined information architecture and user flows ensuring intuitive experiences.'
                    ]
                ],
                [
                    'position' => 'Full Stack Developer',
                    'company' => 'Full Time, Yayasan Pendidikan Rakyat',
                    'period' => 'May 2022 - April 2024',
                    'description' => [
                        'Led the development of LMS, overseeing full-stack implementation and project management.',
                        'Addressed technical issues and provided support to end-users, ensuring prompt resolution.',
                        'Designed and optimized database structures to improve data retrieval and application performance.',
                        'Collaborated with UI/UX designers to create user-friendly interfaces, boosting user engagement.'
                    ]
                ]
            ],
            'education' => [
                [
                    'degree' => 'Bachelor of Computer Science (Software Engineering)',
                    'school' => 'Universiti Malaysia Pahang Al-Sultan Abdullah',
                    'year' => '2021',
             
                ]
            ],
            'social' => [
                'github' => 'https://github.com/amir1611',
                'linkedin' => 'https://linkedin.com/in/amir1611'
            ],
        ],

        // Update Moin's data
        'moin' => [
            'name' => 'Moin',
            'title' => 'UI/UX Designer',
            'image' => '/path/to/image.jpg', 
            'rating' => 4,
            'about' => "Creative UI/UX Designer with 4+ years of experience in crafting intuitive digital experiences. I combine user-centered design principles with modern aesthetics to create engaging and functional interfaces.",
            'skills' => [
                ['name' => 'Figma', 'level' => 95],
                ['name' => 'Adobe XD', 'level' => 92],
                ['name' => 'Prototyping', 'level' => 88],
                ['name' => 'User Research', 'level' => 85],
                ['name' => 'HTML/CSS', 'level' => 75],
                ['name' => 'Motion Design', 'level' => 70],
            ],
            'experience' => [
                [
                    'position' => 'Product Manager',
                    'company' => 'Intern, Pandai Education Sdn. Bhd.',
                    'period' => 'July 2024 - October 2024',
                    'description' => [
                        'Led two major projects as product manager and UX designer, improving product development and company workflows.',
                        'Exceeded monthly active user (MAU) targets by 50%, demonstrating strong ability to drive user engagement.',
                        'Planned the development and launch of new features, including Pandai Class Lesson and Pandai Enrichment Class.',
                        'Established OKRs for product improvement initiatives that boosted student engagement.',
                        'Conducted thorough research for user needs, developing detailed user personas.',
                        'Defined information architecture and user flows ensuring intuitive experiences.'
                    ]
                ],
                [
                    'position' => 'Full Stack Developer',
                    'company' => 'Full Time, Yayasan Pendidikan Rakyat',
                    'period' => 'May 2022 - April 2024',
                    'description' => [
                        'Led the development of LMS, overseeing full-stack implementation and project management.',
                        'Addressed technical issues and provided support to end-users, ensuring prompt resolution.',
                        'Designed and optimized database structures to improve data retrieval and application performance.',
                        'Collaborated with UI/UX designers to create user-friendly interfaces, boosting user engagement.'
                    ]
                ]
            ],
            'education' => [
                [
                    'degree' => 'BA in Digital Design',
                    'school' => 'Design Institute',
                    'year' => '2019',
                    'description' => 'Focus on Interactive Design and User Experience'
                ]
            ],
            'social' => [
                'github' => 'https://github.com/moinuddin',
                'linkedin' => 'https://linkedin.com/in/moinuddin'
            ],
        ],


        // Update Maged's data
        'maged' => [
            'name' => 'Maged',
            'title' => 'Professional Photographer',
            'image' => '/path/to/image.jpg',
            'rating' => 4,
            'about' => "Award-winning photographer with 6+ years of experience in portrait and commercial photography. My work focuses on capturing authentic moments and telling compelling visual stories.",
            'skills' => [
                ['name' => 'Portrait Photography', 'level' => 95],
                ['name' => 'Lightroom', 'level' => 90],
                ['name' => 'Photoshop', 'level' => 88],
                ['name' => 'Studio Lighting', 'level' => 85],
                ['name' => 'Commercial Photography', 'level' => 82],
                ['name' => 'Video Editing', 'level' => 75],
            ],
            'experience' => [
                [
                    'position' => 'Product Manager',
                    'company' => 'Intern, Pandai Education Sdn. Bhd.',
                    'period' => 'July 2024 - October 2024',
                    'description' => [
                        'Led two major projects as product manager and UX designer, improving product development and company workflows.',
                        'Exceeded monthly active user (MAU) targets by 50%, demonstrating strong ability to drive user engagement.',
                        'Planned the development and launch of new features, including Pandai Class Lesson and Pandai Enrichment Class.',
                        'Established OKRs for product improvement initiatives that boosted student engagement.',
                        'Conducted thorough research for user needs, developing detailed user personas.',
                        'Defined information architecture and user flows ensuring intuitive experiences.'
                    ]
                ],
                [
                    'position' => 'Full Stack Developer',
                    'company' => 'Full Time, Yayasan Pendidikan Rakyat',
                    'period' => 'May 2022 - April 2024',
                    'description' => [
                        'Led the development of LMS, overseeing full-stack implementation and project management.',
                        'Addressed technical issues and provided support to end-users, ensuring prompt resolution.',
                        'Designed and optimized database structures to improve data retrieval and application performance.',
                        'Collaborated with UI/UX designers to create user-friendly interfaces, boosting user engagement.'
                    ]
                ]
            ],
            'education' => [
                [
                    'degree' => 'BFA in Photography',
                    'school' => 'Arts Institute',
                    'year' => '2017',
                    'description' => 'Specialized in Digital Photography and Visual Storytelling'
                ]
            ],
            'social' => [
                'github' => 'https://github.com/maged',
                'linkedin' => 'https://linkedin.com/in/maged'
            ],
        ],


        // Update Ahmed's data
        'ahmed' => [
            'name' => 'Ahmed',
            'title' => 'Mobile App Developer',
            'image' => '/path/to/image.jpg',
            'rating' => 3,
            'about' => "Innovative Mobile App Developer with 3+ years of experience in native iOS and Android development. Specialized in creating performant, user-friendly mobile applications with a focus on clean architecture and best practices.",
            'skills' => [
                ['name' => 'Swift', 'level' => 90],
                ['name' => 'Kotlin', 'level' => 88],
                ['name' => 'React Native', 'level' => 85],
                ['name' => 'Firebase', 'level' => 82],
                ['name' => 'App Store Optimization', 'level' => 75],
                ['name' => 'UI/UX Design', 'level' => 70],
            ],
            'experience' => [
                [
                    'position' => 'Product Manager',
                    'company' => 'Intern, Pandai Education Sdn. Bhd.',
                    'period' => 'July 2024 - October 2024',
                    'description' => [
                        'Led two major projects as product manager and UX designer, improving product development and company workflows.',
                        'Exceeded monthly active user (MAU) targets by 50%, demonstrating strong ability to drive user engagement.',
                        'Planned the development and launch of new features, including Pandai Class Lesson and Pandai Enrichment Class.',
                        'Established OKRs for product improvement initiatives that boosted student engagement.',
                        'Conducted thorough research for user needs, developing detailed user personas.',
                        'Defined information architecture and user flows ensuring intuitive experiences.'
                    ]
                ],
                [
                    'position' => 'Full Stack Developer',
                    'company' => 'Full Time, Yayasan Pendidikan Rakyat',
                    'period' => 'May 2022 - April 2024',
                    'description' => [
                        'Led the development of LMS, overseeing full-stack implementation and project management.',
                        'Addressed technical issues and provided support to end-users, ensuring prompt resolution.',
                        'Designed and optimized database structures to improve data retrieval and application performance.',
                        'Collaborated with UI/UX designers to create user-friendly interfaces, boosting user engagement.'
                    ]
                ]
            ],
            'education' => [
                [
                    'degree' => 'BSc in Mobile Computing',
                    'school' => 'Tech Institute',
                    'year' => '2019',
                    'description' => 'Focus on Mobile Development and UX Design'
                ]
            ],
            'social' => [
                'github' => 'https://github.com/ahmed',
                'linkedin' => 'https://linkedin.com/in/ahmed'
            ],
        ]
    ];

    public function home($persona = null)
    {
        return view('home', [
            'personas' => $this->personas,
            'persona' => $persona ?? 'amir',
            'data' => $this->personas[$persona ?? 'amir']
        ]);
    }

    public function about($persona)
    {
        if (!isset($this->personas[$persona])) {
            abort(404);
        }
        
        return view('about', ['data' => $this->personas[$persona]]);
    }

    public function contact($persona)
    {
        if (!array_key_exists($persona, $this->personas)) {
            abort(404);
        }
        return view('contact', ['data' => $this->personas[$persona], 'persona' => $persona]);
    }
}
