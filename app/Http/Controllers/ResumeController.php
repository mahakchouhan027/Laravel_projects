<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ResumeController extends Controller
{
    public function download()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                ['degree' => 'B.Tech in Computer Science', 'institute' => 'IIT Delhi', 'year' => '2018'],
                ['degree' => 'M.Tech in Software Engineering', 'institute' => 'IIT Bombay', 'year' => '2020'],
            ],
            'experience' => [
                ['title' => 'Software Engineer', 'company' => 'Google', 'years' => '2020 - Present', 'details' => 'Working on scalable backend systems, improving API performance by 30%.'],
                ['title' => 'Intern', 'company' => 'Microsoft', 'years' => '2019', 'details' => 'Built an internal tool for automated testing.'],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                ['name' => 'Resume Builder', 'description' => 'Built a Laravel + React based dynamic resume generator.'],
                ['name' => 'E-commerce Platform', 'description' => 'Developed a scalable e-commerce solution with payment gateway integration.'],
            ],
        ];

        // If you really need remote assets, either enable via config (see below)
        // or set via setOptions (note plural).
        $pdf = Pdf::loadView('resume.resume', ['resume'=>$data])
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function preview()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                [
                    'degree' => 'B.Tech in Computer Science',
                    'institute' => 'IIT Delhi',
                    'year' => '2018',
                ],
                [
                    'degree' => 'M.Tech in Software Engineering',
                    'institute' => 'IIT Bombay',
                    'year' => '2020',
                ],
            ],
            'experience' => [
                [
                    'title' => 'Software Engineer',
                    'company' => 'Google',
                    'years' => '2020 - Present',
                    'details' => 'Working on scalable backend systems, improving API performance by 30%.',
                ],
                [
                    'title' => 'Intern',
                    'company' => 'Microsoft',
                    'years' => '2019',
                    'details' => 'Built an internal tool for automated testing.',
                ],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                [
                    'name' => 'Resume Builder',
                    'description' => 'Built a Laravel + React based dynamic resume generator.',
                ],
                [
                    'name' => 'E-commerce Platform',
                    'description' => 'Developed a scalable e-commerce solution with payment gateway integration.',
                ],
            ],
        ];

        Log::info('Resume data prepared', $data);

        $view = view('resume.resume', $data);
        Log::info('Resume view rendered successfully');

        return $view;
    }

    //template1
    public function download2()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                ['degree' => 'B.Tech in Computer Science', 'institute' => 'IIT Delhi', 'year' => '2018'],
                ['degree' => 'M.Tech in Software Engineering', 'institute' => 'IIT Bombay', 'year' => '2020'],
            ],
            'experience' => [
                ['title' => 'Software Engineer', 'company' => 'Google', 'years' => '2020 - Present', 'details' => 'Working on scalable backend systems, improving API performance by 30%.'],
                ['title' => 'Intern', 'company' => 'Microsoft', 'years' => '2019', 'details' => 'Built an internal tool for automated testing.'],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                ['name' => 'Resume Builder', 'description' => 'Built a Laravel + React based dynamic resume generator.'],
                ['name' => 'E-commerce Platform', 'description' => 'Developed a scalable e-commerce solution with payment gateway integration.'],
            ],
        ];

        // If you really need remote assets, either enable via config (see below)
        // or set via setOptions (note plural).
        $pdf = Pdf::loadView('resume.template1', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function preview2()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                [
                    'degree' => 'B.Tech in Computer Science',
                    'institute' => 'IIT Delhi',
                    'year' => '2018',
                ],
                [
                    'degree' => 'M.Tech in Software Engineering',
                    'institute' => 'IIT Bombay',
                    'year' => '2020',
                ],
            ],
            'experience' => [
                [
                    'title' => 'Software Engineer',
                    'company' => 'Google',
                    'years' => '2020 - Present',
                    'details' => 'Working on scalable backend systems, improving API performance by 30%.',
                ],
                [
                    'title' => 'Intern',
                    'company' => 'Microsoft',
                    'years' => '2019',
                    'details' => 'Built an internal tool for automated testing.',
                ],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                [
                    'name' => 'Resume Builder',
                    'description' => 'Built a Laravel + React based dynamic resume generator.',
                ],
                [
                    'name' => 'E-commerce Platform',
                    'description' => 'Developed a scalable e-commerce solution with payment gateway integration.',
                ],
            ],
        ];

        Log::info('Resume data prepared', $data);

        $view = view('resume.template1', $data);
        Log::info('Resume view rendered successfully');

        return $view;
    }


    //template2
    public function download3()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                ['degree' => 'B.Tech in Computer Science', 'institute' => 'IIT Delhi', 'year' => '2018'],
                ['degree' => 'M.Tech in Software Engineering', 'institute' => 'IIT Bombay', 'year' => '2020'],
            ],
            'experience' => [
                ['title' => 'Software Engineer', 'company' => 'Google', 'years' => '2020 - Present', 'details' => 'Working on scalable backend systems, improving API performance by 30%.'],
                ['title' => 'Intern', 'company' => 'Microsoft', 'years' => '2019', 'details' => 'Built an internal tool for automated testing.'],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                ['name' => 'Resume Builder', 'description' => 'Built a Laravel + React based dynamic resume generator.'],
                ['name' => 'E-commerce Platform', 'description' => 'Developed a scalable e-commerce solution with payment gateway integration.'],
            ],
        ];

        // If you really need remote assets, either enable via config (see below)
        // or set via setOptions (note plural).
        $pdf = Pdf::loadView('resume.template2', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function preview3()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                [
                    'degree' => 'B.Tech in Computer Science',
                    'institute' => 'IIT Delhi',
                    'year' => '2018',
                ],
                [
                    'degree' => 'M.Tech in Software Engineering',
                    'institute' => 'IIT Bombay',
                    'year' => '2020',
                ],
            ],
            'experience' => [
                [
                    'title' => 'Software Engineer',
                    'company' => 'Google',
                    'years' => '2020 - Present',
                    'details' => 'Working on scalable backend systems, improving API performance by 30%.',
                ],
                [
                    'title' => 'Intern',
                    'company' => 'Microsoft',
                    'years' => '2019',
                    'details' => 'Built an internal tool for automated testing.',
                ],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                [
                    'name' => 'Resume Builder',
                    'description' => 'Built a Laravel + React based dynamic resume generator.',
                ],
                [
                    'name' => 'E-commerce Platform',
                    'description' => 'Developed a scalable e-commerce solution with payment gateway integration.',
                ],
            ],
        ];

        Log::info('Resume data prepared', $data);

        $view = view('resume.template2', $data);
        Log::info('Resume view rendered successfully');

        return $view;
    }

//template3
    public function download4()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                ['degree' => 'B.Tech in Computer Science', 'institute' => 'IIT Delhi', 'year' => '2018'],
                ['degree' => 'M.Tech in Software Engineering', 'institute' => 'IIT Bombay', 'year' => '2020'],
            ],
            'experience' => [
                ['title' => 'Software Engineer', 'company' => 'Google', 'years' => '2020 - Present', 'details' => 'Working on scalable backend systems, improving API performance by 30%.'],
                ['title' => 'Intern', 'company' => 'Microsoft', 'years' => '2019', 'details' => 'Built an internal tool for automated testing.'],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                ['name' => 'Resume Builder', 'description' => 'Built a Laravel + React based dynamic resume generator.'],
                ['name' => 'E-commerce Platform', 'description' => 'Developed a scalable e-commerce solution with payment gateway integration.'],
            ],
        ];

        // If you really need remote assets, either enable via config (see below)
        // or set via setOptions (note plural).
        $pdf = Pdf::loadView('resume.template3', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function preview4()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                [
                    'degree' => 'B.Tech in Computer Science',
                    'institute' => 'IIT Delhi',
                    'year' => '2018',
                ],
                [
                    'degree' => 'M.Tech in Software Engineering',
                    'institute' => 'IIT Bombay',
                    'year' => '2020',
                ],
            ],
            'experience' => [
                [
                    'title' => 'Software Engineer',
                    'company' => 'Google',
                    'years' => '2020 - Present',
                    'details' => 'Working on scalable backend systems, improving API performance by 30%.',
                ],
                [
                    'title' => 'Intern',
                    'company' => 'Microsoft',
                    'years' => '2019',
                    'details' => 'Built an internal tool for automated testing.',
                ],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                [
                    'name' => 'Resume Builder',
                    'description' => 'Built a Laravel + React based dynamic resume generator.',
                ],
                [
                    'name' => 'E-commerce Platform',
                    'description' => 'Developed a scalable e-commerce solution with payment gateway integration.',
                ],
            ],
        ];

        Log::info('Resume data prepared', $data);

        $view = view('resume.template3', $data);
        Log::info('Resume view rendered successfully');

        return $view;
    }
    //template4
    public function download5()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                ['degree' => 'B.Tech in Computer Science', 'institute' => 'IIT Delhi', 'year' => '2018'],
                ['degree' => 'M.Tech in Software Engineering', 'institute' => 'IIT Bombay', 'year' => '2020'],
            ],
            'experience' => [
                ['title' => 'Software Engineer', 'company' => 'Google', 'years' => '2020 - Present', 'details' => 'Working on scalable backend systems, improving API performance by 30%.'],
                ['title' => 'Intern', 'company' => 'Microsoft', 'years' => '2019', 'details' => 'Built an internal tool for automated testing.'],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                ['name' => 'Resume Builder', 'description' => 'Built a Laravel + React based dynamic resume generator.'],
                ['name' => 'E-commerce Platform', 'description' => 'Developed a scalable e-commerce solution with payment gateway integration.'],
            ],
        ];

        // If you really need remote assets, either enable via config (see below)
        // or set via setOptions (note plural).
        $pdf = Pdf::loadView('resume.template4', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function preview5()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                [
                    'degree' => 'B.Tech in Computer Science',
                    'institute' => 'IIT Delhi',
                    'year' => '2018',
                ],
                [
                    'degree' => 'M.Tech in Software Engineering',
                    'institute' => 'IIT Bombay',
                    'year' => '2020',
                ],
            ],
            'experience' => [
                [
                    'title' => 'Software Engineer',
                    'company' => 'Google',
                    'years' => '2020 - Present',
                    'details' => 'Working on scalable backend systems, improving API performance by 30%.',
                ],
                [
                    'title' => 'Intern',
                    'company' => 'Microsoft',
                    'years' => '2019',
                    'details' => 'Built an internal tool for automated testing.',
                ],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                [
                    'name' => 'Resume Builder',
                    'description' => 'Built a Laravel + React based dynamic resume generator.',
                ],
                [
                    'name' => 'E-commerce Platform',
                    'description' => 'Developed a scalable e-commerce solution with payment gateway integration.',
                ],
            ],
        ];

        Log::info('Resume data prepared', $data);

        $view = view('resume.template4', $data);
        Log::info('Resume view rendered successfully');

        return $view;
    }

    //template5
    public function download6()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                ['degree' => 'B.Tech in Computer Science', 'institute' => 'IIT Delhi', 'year' => '2018'],
                ['degree' => 'M.Tech in Software Engineering', 'institute' => 'IIT Bombay', 'year' => '2020'],
            ],
            'experience' => [
                ['title' => 'Software Engineer', 'company' => 'Google', 'years' => '2020 - Present', 'details' => 'Working on scalable backend systems, improving API performance by 30%.'],
                ['title' => 'Intern', 'company' => 'Microsoft', 'years' => '2019', 'details' => 'Built an internal tool for automated testing.'],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                ['name' => 'Resume Builder', 'description' => 'Built a Laravel + React based dynamic resume generator.'],
                ['name' => 'E-commerce Platform', 'description' => 'Developed a scalable e-commerce solution with payment gateway integration.'],
            ],
        ];

        // If you really need remote assets, either enable via config (see below)
        // or set via setOptions (note plural).
        $pdf = Pdf::loadView('resume.template5', $data)
            ->setPaper('a4', 'portrait')
            ->setOptions([
                'isRemoteEnabled' => true,       // or avoid remote assets entirely
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->download('resume.pdf');
    }
    public function preview6()
    {
        Log::info('Resume preview started');

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+91 98765 43210',
            'summary' => 'Full-stack developer with 5+ years of experience in Laravel, React, and AWS.',
            'education' => [
                [
                    'degree' => 'B.Tech in Computer Science',
                    'institute' => 'IIT Delhi',
                    'year' => '2018',
                ],
                [
                    'degree' => 'M.Tech in Software Engineering',
                    'institute' => 'IIT Bombay',
                    'year' => '2020',
                ],
            ],
            'experience' => [
                [
                    'title' => 'Software Engineer',
                    'company' => 'Google',
                    'years' => '2020 - Present',
                    'details' => 'Working on scalable backend systems, improving API performance by 30%.',
                ],
                [
                    'title' => 'Intern',
                    'company' => 'Microsoft',
                    'years' => '2019',
                    'details' => 'Built an internal tool for automated testing.',
                ],
            ],
            'skills' => ['Laravel', 'React', 'Node.js', 'MySQL', 'AWS', 'Docker'],
            'projects' => [
                [
                    'name' => 'Resume Builder',
                    'description' => 'Built a Laravel + React based dynamic resume generator.',
                ],
                [
                    'name' => 'E-commerce Platform',
                    'description' => 'Developed a scalable e-commerce solution with payment gateway integration.',
                ],
            ],
        ];

        Log::info('Resume data prepared', $data);

        $view = view('resume.templates', $data);
        Log::info('Resume view rendered successfully');

        return $view;
    }





}

