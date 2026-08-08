<?php

namespace Database\Seeders;

use App\Models\College;
use App\Models\Course;
use App\Models\Post;
use App\Models\SeoMetadata;
use App\Models\Stream;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 0. Seed Default Admin User
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@admissionsdekho.com'],
            [
                'name' => 'AdmissionsDekho Admin',
                'password' => \Illuminate\Support\Facades\Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );

        // 1. Run PageSeeder for mapped URLs & metadata
        $this->call([
            PageSeeder::class,
        ]);

        // 2. Seed Streams
        $streamsData = [
            ['name' => 'Engineering', 'slug' => 'engineering', 'description' => 'B.Tech, M.Tech, and Diploma courses across Computer Science, Mechanical, Civil, and AI.'],
            ['name' => 'Science', 'slug' => 'science', 'description' => 'B.Sc, M.Sc programs in Physics, Chemistry, Biotechnology, and Data Science.'],
            ['name' => 'Arts & Humanities', 'slug' => 'arts', 'description' => 'BA, MA courses in Psychology, Political Science, English Literature, and Sociology.'],
            ['name' => 'Commerce & Management', 'slug' => 'commerce', 'description' => 'B.Com, M.Com, BBA, MBA, CA, CS, and CMA professional degree options.'],
            ['name' => 'Nursing & Healthcare', 'slug' => 'nursing', 'description' => 'GNM, B.Sc Nursing, and M.Sc Nursing with clinical hospital training.'],
            ['name' => 'Agriculture', 'slug' => 'agriculture', 'description' => 'B.Sc Agriculture, Agronomy, and Horticulture programs approved by IARI.'],
            ['name' => 'Pharmacy', 'slug' => 'pharmacy', 'description' => 'D.Pharm, B.Pharm, and M.Pharm PCI-approved degree courses with pharmaceutical research & clinical lab training.'],
            ['name' => 'Hospitality & Hotel Management', 'slug' => 'hospitality', 'description' => 'BHM, B.Sc Hospitality & Hotel Administration, and Diploma programs approved by NCHMCT.'],
            ['name' => 'Computer Applications', 'slug' => 'computer-applications', 'description' => 'BCA, B.Sc Computer Science, MCA, and IT specialization programs for tech careers.'],
            ['name' => 'Management & MBA', 'slug' => 'management', 'description' => 'BBA, MBA, PGDM, and Executive Management courses across Finance, Marketing, HR, and Business Analytics.'],
            ['name' => 'Education & Teaching', 'slug' => 'education', 'description' => 'D.El.Ed, B.Ed, and M.Ed degrees for teaching career paths approved by NCTE.'],
            ['name' => 'PhD Doctorate', 'slug' => 'phd', 'description' => 'Research fellowships, UGC NET, CSIR NET, and direct PhD admissions.'],
            ['name' => 'Online & Distance Learning', 'slug' => 'online-programs', 'description' => 'Flexible online BBA, MBA, MCA, BCA & M.Com from top NAAC A+ accredited universities.'],
        ];

        foreach ($streamsData as $sData) {
            $stream = Stream::updateOrCreate(['slug' => $sData['slug']], $sData);

            // Create sample courses for stream
            Course::updateOrCreate(
                ['slug' => $stream->slug . '-bachelors-degree'],
                [
                    'stream_id' => $stream->id,
                    'title' => 'Bachelor of ' . $stream->name,
                    'level' => 'UG',
                    'duration' => '3 - 4 Years',
                    'eligibility' => '12th Pass with min 50% aggregate score',
                    'average_fee' => 'INR 60,000 - 2,20,000 / Year',
                    'career_prospects' => 'Industry Specialist, Consultant, Corporate Executive, Researcher.',
                    'content' => 'Comprehensive 4-year undergraduate curriculum covering core fundamentals, lab practicals, internships, and capstone project assignments.',
                    'is_published' => true,
                ]
            );

            Course::updateOrCreate(
                ['slug' => $stream->slug . '-masters-degree'],
                [
                    'stream_id' => $stream->id,
                    'title' => 'Master of ' . $stream->name,
                    'level' => 'PG',
                    'duration' => '2 Years',
                    'eligibility' => 'Relevant Bachelor Degree with 50% marks',
                    'average_fee' => 'INR 80,000 - 3,00,000 / Year',
                    'career_prospects' => 'Senior Specialist, Team Lead, Assistant Professor, Research Analyst.',
                    'content' => 'Advanced 2-year postgraduate program emphasizing research methodologies, specializations, and industry mentorship.',
                    'is_published' => true,
                ]
            );
        }

        // 3. Seed Colleges
        $colleges = [
            ['name' => 'Delhi Institute of Technology & Management', 'slug' => 'ditm-delhi', 'location' => 'Delhi NCR', 'approval_body' => 'AICTE / UGC', 'rating' => 4.8, 'total_courses' => 24],
            ['name' => 'National College of Higher Education', 'slug' => 'nche-mumbai', 'location' => 'Mumbai, Maharashtra', 'approval_body' => 'UGC / NAAC A+', 'rating' => 4.7, 'total_courses' => 18],
            ['name' => 'Apex Institute of Nursing & Paramedical', 'slug' => 'apex-nursing', 'location' => 'Bangalore, Karnataka', 'approval_body' => 'INC / KNC', 'rating' => 4.9, 'total_courses' => 12],
            ['name' => 'Imperial College of Agriculture Studies', 'slug' => 'imperial-agri', 'location' => 'Chandigarh, Punjab', 'approval_body' => 'IARI / ICAR', 'rating' => 4.6, 'total_courses' => 10],
            ['name' => 'St. Xavier School of Education & Teaching', 'slug' => 'st-xavier-bed', 'location' => 'Jaipur, Rajasthan', 'approval_body' => 'NCTE / UGC', 'rating' => 4.8, 'total_courses' => 8],
        ];

        foreach ($colleges as $colData) {
            College::updateOrCreate(['slug' => $colData['slug']], $colData);
        }

        // 4. Seed Posts for Blog
        $postsData = [
            [
                'title' => 'Top Engineering Branches with Highest Salary Packages in 2026',
                'slug' => 'top-engineering-branches-highest-salary-2026',
                'excerpt' => 'Discover the most sought-after engineering streams including AI & Data Science, CSE, Robotics, and ECE with detailed salary benchmarks.',
                'content' => '<p>Engineering remains one of the most rewarding career choices after 12th standard. With rapid advancements in Artificial Intelligence, Cloud Computing, and Renewable Energy, choosing the right branch is crucial for high placement prospects.</p><h3>1. Computer Science & Artificial Intelligence</h3><p>Average starting package ranges between INR 8 LPA to 25 LPA across top tech recruiters.</p><h3>2. Electronics & Communication Engineering</h3><p>Crucial for semiconductor development and IoT technologies.</p>',
                'featured_image' => '/images/blogs/engineering-guide.png',
                'status' => 'published',
                'published_at' => now(),
                'meta_title' => 'Top Engineering Branches with Highest Salary Packages in 2026',
                'meta_description' => 'Compare computer science, AI, ECE & Mechanical engineering salaries and scope for 2026 admission season.',
            ],
            [
                'title' => 'How to Choose the Right B.Ed College in India: NCTE & UGC Approval Guide',
                'slug' => 'choose-right-bed-college-ncte-ugc-guide',
                'excerpt' => 'A complete step-by-step checklist to verify B.Ed college accreditation, teaching internships, and fee structures before taking admission.',
                'content' => '<p>Pursuing a Bachelor of Education (B.Ed) is essential for anyone aspiring to become a certified secondary or senior secondary school teacher in India.</p><h3>Key Verification Steps</h3><ul><li>Verify NCTE recognition letter on the official portal</li><li>Check affiliation with recognized State or Central Universities</li><li>Review school internship partner list</li></ul>',
                'featured_image' => '/images/blogs/bed-guide.png',
                'status' => 'published',
                'published_at' => now(),
                'meta_title' => 'B.Ed Admission Guide 2026: Check NCTE Approval & Fees',
                'meta_description' => 'Complete guide for B.Ed admissions 2026 including NCTE verification, eligibility, course duration, and career options.',
            ],
            [
                'title' => 'B.Sc Agriculture vs B.Sc Nursing: Duration, Fees & Job Opportunities Compared',
                'slug' => 'bsc-agriculture-vs-bsc-nursing-comparison-2026',
                'excerpt' => 'Confused between Agriculture and Nursing after 12th Science? We compare eligibility, fee structures, government job prospects, and global demand.',
                'content' => '<p>Both B.Sc Agriculture and B.Sc Nursing offer tremendous stability and high career growth. While Nursing opens immediate global opportunities in healthcare, Agriculture offers lucrative roles in agronomy research and government farming officers.</p>',
                'featured_image' => '/images/blogs/nursing-agri-guide.png',
                'status' => 'published',
                'published_at' => now(),
                'meta_title' => 'B.Sc Agriculture vs B.Sc Nursing: Course Comparison 2026',
                'meta_description' => 'Compare B.Sc Agriculture and B.Sc Nursing courses after 12th science — check salary, scope, and college admissions.',
            ],
        ];

        foreach ($postsData as $pData) {
            $binaryImage = $pData['featured_image'];
            $localPath = public_path(ltrim($pData['featured_image'], '/'));
            if (file_exists($localPath)) {
                $raw = file_get_contents($localPath);
                $mime = mime_content_type($localPath) ?: 'image/png';
                $binaryImage = 'data:' . $mime . ';base64,' . base64_encode($raw);
            }

            $post = Post::updateOrCreate(
                ['slug' => $pData['slug']],
                [
                    'title' => $pData['title'],
                    'excerpt' => $pData['excerpt'],
                    'content' => $pData['content'],
                    'featured_image' => $binaryImage,
                    'status' => $pData['status'],
                    'published_at' => $pData['published_at'],
                ]
            );

            SeoMetadata::updateOrCreate(
                [
                    'model_type' => Post::class,
                    'model_id' => $post->id,
                ],
                [
                    'meta_title' => $pData['meta_title'],
                    'meta_description' => $pData['meta_description'],
                    'canonical_url' => 'https://admissionsdekho.com/blog/' . $post->slug,
                    'schema_type' => 'BlogPosting',
                ]
            );
        }
    }
}
