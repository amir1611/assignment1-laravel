<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    protected $personas = [
        'amir' => [
            'name' => 'Amir',
            'title' => 'Full Stack Developer',
            'image' => '/images/amir.jpeg',
            'rating' => 5,
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
            'title' => 'Web Developer',
            'image' => '/images/moin.png', 
            'rating' => 5,
            'about' => "Seasoned web designer and developer with hands on experience working with clients from different industries, handling full SDLC, with dynamic skillset",
            'skills' => [
                ['name' => 'Java', 'level' => 85],
                ['name' => 'JavaScript', 'level' => 80],
                ['name' => 'HTML', 'level' => 90],
                ['name' => 'CSS', 'level' => 85],
                ['name' => 'PHP', 'level' => 80],
                ['name' => 'React.js', 'level' => 82],
                ['name' => 'Laravel', 'level' => 88],
                ['name' => 'Bootstrap', 'level' => 85],
                ['name' => 'Python', 'level' => 90],
                ['name' => 'Android Studio', 'level' => 75],
                ['name' => 'Azure', 'level' => 78],
                ['name' => 'MySQL', 'level' => 85],
                ['name' => 'Supabase', 'level' => 75],
                ['name' => 'Git', 'level' => 90],
                ['name' => 'GitHub', 'level' => 88],
                ['name' => 'GitLab', 'level' => 80],
                ['name' => 'Sourcetree', 'level' => 70],
                ['name' => 'Monday', 'level' => 70],
                ['name' => 'ClickUp', 'level' => 68],
                ['name' => 'SRS', 'level' => 85],
                ['name' => 'SDD', 'level' => 83],
                ['name' => 'UML', 'level' => 80],
                ['name' => 'Manual Testing', 'level' => 80],
                ['name' => 'Automated Testing', 'level' => 75],
                ['name' => 'Figma', 'level' => 95],
                ['name' => 'Adobe XD', 'level' => 92],
                ['name' => 'Photoshop', 'level' => 85],
                ['name' => 'WordPress', 'level' => 90],
                ['name' => 'Joomla', 'level' => 70],
                ['name' => 'MS Office', 'level' => 88],
            ],
            'experience' => [
                [
                    'position' => 'Web Developer',
                    'company' => 'Universiti Malaysia Pahang Al-Sultan Abdullah',
                    'period' => 'Feb 2024 - Present',
                    'location' => 'Pekan, Pahang',
                    'description' => [
                        'Developing and automating a hostel task management system, targeting to double efficiency with features designed to reduce administrative workload by 70%.',
                        'Designing and implementing a user-centric UI with a real-time notification system, aiming to minimize missed deadlines and improve task-tracking efficiency.',
                        'Collaborating with stakeholders through iterative development and testing phases, focusing on system reliability and user acceptance with comprehensive documentation.'
                    ]
                ],
                [
                    'position' => 'Founder',
                    'company' => 'Moinfinity Digital',
                    'period' => 'Sep 2023 – Present',
                    'description' => [
                        'Founded Moinfinity Digital, achieving 200% client growth in the first year.',
                        'Managed the entire SDLC independently, improving client efficiency by 30%, maintaining a 95% satisfaction rate, and mentoring employees in sales and client communication.',
                        'Dealt with clients from different industries and solved their problems through digital solutions while maintaining professional communication and handling conflicts.'
                    ]
                ],
                [
                    'position' => 'Web Designer & Developer',
                    'company' => 'Freelancer',
                    'period' => 'Aug 2020 - Present',
                    'location' => 'Remote',
                    'description' => [
                        'Acquired projects through strong sales and negotiations, designing websites that tripled online visibility and enhanced credibility through user-friendly, responsive designs.',
                        'Developed solutions that saved clients 3-6 hours daily, building long-term relationships by effectively handling conflicts.',
                        'Created complex systems that significantly improved client efficiency and streamlined operations.'
                    ]
                ],
                [
                    'position' => 'Front of the House Head',
                    'company' => 'KD Hongkong Group Sdn. Bhd.',
                    'period' => 'Jul 2023 – Oct 2023',
                    'location' => 'Kuala Lumpur & Penang',
                    'description' => [
                        'Delivered exceptional customer service, improving satisfaction by 50% and boosting sales by 10%, leading to a promotion.',
                        'Managed customer relations, resolved issues effectively, and trained multilingual staff, increasing efficiency by 50% and service satisfaction by 40%.',
                        'Enhanced customer retention by 40% and visits by 90%, earning the "Employee Excellence Award" within 3 months.'
                    ]
                ],
                [
                    'position' => 'Web Application Developer',
                    'company' => 'MAHIRAN DIGITAL SDN. BHD.',
                    'period' => 'Dec 2020 – April 2022',
                    'location' => 'Pekan, Pahang',
                    'description' => [
                        'Worked in teams and transformed clients’ requirements into structured documents, SRS (Software Requirement Specification).'
                    ]
                ]
            ],
            'education' => [
                [
                    'degree' => 'Bachelor of Computer Science (Software Engineering)',
                    'school' => 'Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)',
                    'location' => 'Pekan, Pahang, Malaysia',
                    'year' => 'Expected Graduation: Final Semester',
                    'GPA' => 'Major GPA: 3.03 / 4.0',
                    'faculty' => 'Faculty of Computing',
                    'coursework' => [
                        'Database Systems',
                        'Artificial Intelligence',
                        'Problem Solving',
                        'System Analysis & Design',
                        'Data Structures & Algorithms',
                        'Object Oriented Programming',
                        'Data & Network Security',
                        'Software Testing',
                        'Machine Learning Applications',
                        'Software Project Management',
                        'Software Evolution & Maintenance'
                    ]
                ],
                [
                    'degree' => 'Higher Secondary Certificate (HSC)',
                    'school' => 'Birshrestha Munshi Abdur Rouf Public College',
                    'location' => 'Dhaka, Bangladesh',
                    'year' => 'Year of Graduation',
                    'GPA' => 'GPA: 4.08 / 5.0',
                    'group' => 'Science',
                    'board' => 'Dhaka Board'
                ]
            ],
            'social' => [
                'github' => 'https://github.com/moin-ai',
                'linkedin' => 'https://linkedin.com/in/arifuzzaman-moin'
            ],
        ],


        // Update Maged's data
      
'maged' => [
    'name' => 'Maged Adel Bin Awon',
    'title' => 'Full Stack Developer',
    'image' => '/images/maged.png', 
    'rating' => 5,
    'about' => "I'm Maged, a software engineering student with a passion for web development, coding, and innovative tech solutions. Currently pursuing my degree in Computer Science at UMPSA, I have hands-on experience in software development, focusing on JavaScript, PHP, and Python. With strong problem-solving skills, I’m eager to contribute to exciting projects and collaborate with like-minded professionals.",
    'skills' => [
        ['name' => 'C', 'level' => 90],
        ['name' => 'Python', 'level' => 85],
        ['name' => 'JavaScript', 'level' => 88],
        ['name' => 'TypeScript', 'level' => 85],
        ['name' => 'SASS', 'level' => 80],
        ['name' => 'React', 'level' => 85],
        ['name' => 'Next.js', 'level' => 80],
        ['name' => 'PHP', 'level' => 85],
        ['name' => 'Node.js', 'level' => 80],
        ['name' => 'MongoDB', 'level' => 75],
        ['name' => 'Git', 'level' => 85],
        ['name' => 'GitHub', 'level' => 85],
        ['name' => 'Figma', 'level' => 80],
    ],
    'experience' => [
        [
            'position' => 'Full Stack Developer',
            'company' => 'Arabian Al-shall',
            'period' => 'July 2024 – Present',
            'description' => [
                'Developed and maintained an e-commerce platform for a men\'s fashion retailer in Saudi Arabia, focusing on traditional and modern men\'s accessories.',
                'Managed the full development lifecycle, ensuring timely delivery and high-quality standards.',
            ]
        ],
        [
            'position' => 'Piscine Participant',
            'company' => '42 Kuala Lumpur',
            'period' => 'August 2024 – September 2024',
            'description' => [
                'Participated in an intensive coding bootcamp, enhancing problem-solving skills and proficiency in various programming languages.',
                'Collaborated with peers on complex projects, fostering teamwork and effective communication.',
            ]
        ],
        [
            'position' => 'Front-end Next.js Developer',
            'company' => 'Aseel ALtakadum Trading Est',
            'period' => 'January 2020 - October 2020',
            'description' => [
                'Developed front-end components using Next.js, improving user experience and interface responsiveness.',
                'Worked closely with design and backend teams to implement seamless integrations.',
            ]
        ]
    ],
    'education' => [
        [
            'degree' => 'Bachelor of Computer Science & Software Engineering with Honours',
            'school' => 'Universiti Malaysia Pahang Al-Sultan Abdullah',
            'year' => '2021 - Present',
            'description' => ''
        ],
        
        [
            'degree' => 'High School ',
            'school' => 'Al-Jawhar School, Saudi Arabia',
            'year' => '2015 - 2018',
            'description' => ''
        ]
    ],
    'social' => [
        'github' => 'https://github.com/magedadel',
        'linkedin' => 'https://www.linkedin.com/in/maged-adel-bin-awon-673028118/',
    ],
],



        // Update Ahmed's data
        'ahmed' => [
            'name' => 'Ahmed',
            'title' => 'FullStack Developer',
            'image' => '/images/ahmad.jpg',
            'rating' => 5,
            'about' => "Innovative Fullstack Developer with 3+ years of experience in native iOS and Android and web development. Specialized in creating performant, user-friendly mobile applications with a focus on clean architecture and best practices.",
            'skills' => [
                ['name' => 'JavaScript', 'level' => 99],
                ['name' => 'Swift', 'level' => 90],
                ['name' => 'React Native', 'level' => 85],
                ['name' => 'Typescript', 'level' => 82],
                ['name' => 'Next', 'level' => 75],
                ['name' => 'Go', 'level' => 70],
                ['name' => 'Python', 'level' => 70],
            ],
            'experience' => [
                [
                    'position' => 'Co-Founder',
                    'company' => 'Rkiza.sa',
                    'period' => 'July 2024 - Present',
                    'description' => [
                        "Co-Founder with hands-on leadership in developing and launching a Learning Management System (LMS). Managed full-stack implementation, tackled technical issues, and optimized database structures to improve performance. Partnered with UI/UX teams to enhance user experience, driving user engagement and satisfaction."
                    ]
                    ],
                [
                    'position' => 'Full Stack Developer',
                    'company' => 'ART Development',
                    'period' => 'May 2024 - April 2024',
                    'description' => [
                        'Led the development of LMS, overseeing full-stack implementation and project management.',
                        'Addressed technical issues and provided support to end-users, ensuring prompt resolution.',
                        'Designed and optimized database structures to improve data retrieval and application performance.',
                        'Collaborated with UI/UX designers to create user-friendly interfaces, boosting user engagement.'
                    ]
                    ],
                
                [
                    'position' => 'Backend Developer',
                    'company' => 'CONF SA',
                    'period' => 'July 2023 - October 2023',
                    'description' => [
"Backend Developer with extensive experience in designing, developing, and optimizing scalable server-side applications. Skilled in managing databases, setting up API endpoints, and implementing secure and efficient data processing solutions. Led multiple projects from conception to deployment, collaborating closely with product and UX teams to ensure seamless integration with front-end components. Proficient in troubleshooting and improving server performance, as well as maintaining data integrity. Known for driving improvements in backend workflows, enhancing application performance, and ensuring high reliability and security standards across platforms."
                    ]
                ]

            ],
            'education' => [
                [
                    'degree' => 'BSc in Computer Science(Software Engineering)',
                    'school' => 'UMPSA',
                    'year' => '2025',
                    'description' => ''
                ]
            ],
            'social' => [
                'github' => 'https://github.com/xahmd',
                'linkedin' => 'https://www.linkedin.com/in/ahmed-moh-9aba99225/'
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
