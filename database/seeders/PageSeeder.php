<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\SeoMetadata;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds for all website routes with exact Meta Title & Meta Description mappings.
     */
    public function run(): void
    {
        $pages = [
            [
                'slug' => null, // Homepage
                'title' => 'AdmissionsDekho: College Admission Counselling India',
                'template_name' => 'home',
                'meta_title' => 'AdmissionsDekho: College Admission Counselling India',
                'meta_description' => 'Get free 1:1 admission counselling for UG, PG & PhD courses at 120+ UGC/AICTE-approved colleges in India. Book your free profile evaluation today!',
            ],
            [
                'slug' => 'courses-trusted-education-consultants',
                'title' => 'Trusted Education Consultants in India',
                'template_name' => 'law',
                'meta_title' => 'Trusted Education Consultants in India | AdmissionsDekho',
                'meta_description' => 'Get free career counseling & profile evaluation from India\'s trusted education consultants. Expert guidance for UG, PG & PhD admissions. Enquire now!',
            ],
            [
                'slug' => 'best-engineering-courses-after-12th',
                'title' => 'Best Engineering Courses After 12th – Diploma to B.Tech',
                'template_name' => 'stream',
                'meta_title' => 'Best Engineering Courses After 12th – Diploma to B.Tech',
                'meta_description' => 'Compare the best engineering courses after 12th – Diploma, B.Tech & M.Tech branches explained. Get free expert counseling and find your fit today!',
            ],
            [
                'slug' => 'courses-after-12th-science',
                'title' => 'Best Courses After 12th Science – B.Sc. & M.Sc. Guide',
                'template_name' => 'stream',
                'meta_title' => 'Best Courses After 12th Science – B.Sc. & M.Sc. Guide',
                'meta_description' => 'Explore top courses after 12th science, from B.Sc. to M.Sc. and high-salary options without NEET. Book a free counseling session and plan your path today!',
                'canonical_url' => 'https://admissionsdekho.com/courses-after-12th-science/',
            ],
            [
                'slug' => 'best-courses-after-12th-arts-humanities',
                'title' => 'Arts & Humanities',
                'template_name' => 'stream',
                'meta_title' => 'Best Courses After 12th Arts & Humanities | BA, MA Guide',
                'meta_description' => 'Explore the best courses after 12th Arts Humanities — BA & MA options, high-salary careers & UGC-approved colleges. Book your free counseling now!',
                'canonical_url' => 'https://admissionsdekho.com/best-courses-after-12th-arts-humanities/',
            ],
            [
                'slug' => 'education-b-ed-college',
                'title' => 'B.Ed & Education',
                'template_name' => 'stream',
                'meta_title' => 'Top B.Ed Colleges in India After 12th | Admissions Guide',
                'meta_description' => 'Explore top UGC and NCTE-approved B.Ed colleges in India after 12th, covering diploma, B.Ed, and M.Ed programs. Book a free counseling session and apply today!',
                'canonical_url' => 'https://admissionsdekho.com/education-b-ed-college/',
            ],
            [
                'slug' => 'best-courses-after-12th-commerce',
                'title' => 'Commerce Courses',
                'template_name' => 'stream',
                'meta_title' => 'Best Courses After 12th Commerce – Career & M.Com Guide',
                'meta_description' => 'Explore the best courses after 12th commerce — B.Com, M.Com, CA, CS & CMA options. Get free expert counseling and find your ideal career path today!',
                'canonical_url' => 'https://admissionsdekho.com/best-courses-after-12th-commerce/',
            ],
            [
                'slug' => 'best-nursing-course-after-12th',
                'title' => 'Nursing Courses',
                'template_name' => 'stream',
                'meta_title' => 'Best Nursing Course After 12th: GNM, B.Sc & M.Sc Guide',
                'meta_description' => 'Compare the best nursing course after 12th — GNM, B.Sc & M.Sc Nursing. Check duration, fees & careers. Get free expert counseling from AdmissionsDekho today!',
                'canonical_url' => 'https://admissionsdekho.com/best-nursing-course-after-12th/',
            ],
            [
                'slug' => 'agriculture-courses-after-12th',
                'title' => 'Agriculture Courses',
                'template_name' => 'stream',
                'meta_title' => 'Agriculture Courses After 12th: B.Sc. Agri & Careers',
                'meta_description' => 'Explore top agriculture courses after 12th, B.Sc. Agriculture details, IARI admissions & salary insights. Book your free counseling session today!',
                'canonical_url' => 'https://admissionsdekho.com/agriculture-courses-after-12th/',
            ],
            [
                'slug' => 'best-pharmacy-course-after-12th',
                'title' => 'Pharmacy Courses',
                'template_name' => 'stream',
                'meta_title' => 'Best Pharmacy Course After 12th: D.Pharm, B.Pharm & M.Pharm Guide',
                'meta_description' => 'Compare top pharmacy courses after 12th — D.Pharm, B.Pharm & M.Pharm. Check duration, PCI-approved colleges, fees & career options. Get free expert counseling today!',
                'canonical_url' => 'https://admissionsdekho.com/best-pharmacy-course-after-12th/',
            ],
            [
                'slug' => 'hospitality-vs-hotel-management',
                'title' => 'Hospitality & Hotel Management',
                'template_name' => 'stream',
                'meta_title' => 'Hospitality vs Hotel Management After 12th: BHM & B.Sc Guide',
                'meta_description' => 'Compare Hospitality vs Hotel Management after 12th — BHM, B.Sc Hospitality, NCHMCT JEE guidance & top colleges. Book your free counseling session today!',
                'canonical_url' => 'https://admissionsdekho.com/hospitality-vs-hotel-management/',
            ],
            [
                'slug' => 'bca-vs-b-sc-computer-science-which-is-better',
                'title' => 'Computer Applications',
                'template_name' => 'stream',
                'meta_title' => 'BCA vs B.Sc Computer Science: Which is Better After 12th?',
                'meta_description' => 'Compare BCA vs B.Sc Computer Science after 12th — syllabus, high-salary IT career options, fees & top UGC/AICTE colleges. Get free counseling today!',
                'canonical_url' => 'https://admissionsdekho.com/bca-vs-b-sc-computer-science-which-is-better/',
            ],
            [
                'slug' => 'top-mba-colleges-in-india',
                'title' => 'Management & MBA',
                'template_name' => 'stream',
                'meta_title' => 'Top MBA Colleges in India: BBA, MBA & PGDM Admissions Guide',
                'meta_description' => 'Explore top MBA colleges in India — BBA, MBA & PGDM specializations, CAT/MAT entrance exam tips, fees & placement insights. Get free counseling today!',
                'canonical_url' => 'https://admissionsdekho.com/top-mba-colleges-in-india/',
            ],
            [
                'slug' => 'get-in-touch',
                'title' => 'Contact Us',
                'template_name' => 'contact',
                'meta_title' => 'Get in Touch – Free Counseling Near Me | AdmissionsDekho',
                'meta_description' => 'Confused about courses or colleges? Talk to AdmissionsDekho\'s admission experts for free counseling near me. Call now or book your profile evaluation today!',
                'canonical_url' => 'https://admissionsdekho.com/get-in-touch/',
            ],
            [
                'slug' => 'legal-support',
                'title' => 'Legal Support',
                'template_name' => 'legal-support',
                'meta_title' => 'Legal Support & Statutory Advisory | AdmissionsDekho',
                'meta_description' => 'Legal advisory services, statutory compliance audits & academic grievance support for students and institutions in India.',
                'canonical_url' => 'https://admissionsdekho.com/legal-support/',
            ],
            [
                'slug' => 'privacy-policy',
                'title' => 'Privacy Policy',
                'template_name' => 'privacy-policy',
                'meta_title' => 'Privacy Policy & Data Security | AdmissionsDekho',
                'meta_description' => 'Learn how AdmissionsDekho protects your personal information in compliance with IT Act, GDPR & CCPA privacy standards.',
                'canonical_url' => 'https://admissionsdekho.com/privacy-policy/',
            ],
            [
                'slug' => 'terms-conditions',
                'title' => 'Terms & Conditions',
                'template_name' => 'terms-conditions',
                'meta_title' => 'Terms & Conditions of Service | AdmissionsDekho',
                'meta_description' => 'Read our website terms of use, educational advisory disclaimers, intellectual property governance & user guidelines.',
                'canonical_url' => 'https://admissionsdekho.com/terms-conditions/',
            ],
            [
                'slug' => 'about-us',
                'title' => 'About Us',
                'template_name' => 'about-us',
                'meta_title' => 'About AdmissionsDekho: Mission, Vision & Advisory Board',
                'meta_description' => 'India\'s leading independent education advisory portal connecting students to 120+ statutory-approved colleges.',
                'canonical_url' => 'https://admissionsdekho.com/about-us/',
            ],
            [
                'slug' => 'free-counseling',
                'title' => 'Free Counseling',
                'template_name' => 'free-counseling',
                'meta_title' => 'Book Free 1:1 Student Admission Counseling | AdmissionsDekho',
                'meta_description' => 'Get free 1:1 counseling from senior academic advisors — cutoff analysis, college shortlists & scholarship guidance.',
                'canonical_url' => 'https://admissionsdekho.com/free-counseling/',
            ],
            [
                'slug' => 'evaluate-my-profile',
                'title' => 'Evaluate My Profile',
                'template_name' => 'evaluate-my-profile',
                'meta_title' => 'Smart Profile Evaluation & Cutoff Matching | AdmissionsDekho',
                'meta_description' => 'Instant eligibility & cutoff assessment based on your 12th marks or entrance score for 120+ top approved colleges.',
                'canonical_url' => 'https://admissionsdekho.com/evaluate-my-profile/',
            ],
            [
                'slug' => 'top-colleges-universities-online-programs',
                'title' => 'Online Programs',
                'template_name' => 'stream',
                'meta_title' => 'Top Colleges & Universities for Online Programs | AdmissionsDekho',
                'meta_description' => 'Compare UGC & AICTE approved online programs like BBA, MBA, MCA, BCA & M.Com from top colleges. Get free counseling — apply now with AdmissionsDekho!',
                'canonical_url' => 'https://admissionsdekho.com/top-colleges-universities-online-programs/',
            ],
            [
                'slug' => 'blog',
                'title' => 'Blog Index',
                'template_name' => 'blog-index',
                'meta_title' => 'Education Blog: Courses, Admissions & Career Guides',
                'meta_description' => 'Explore expert guides on courses after 12th, top colleges, admission processes & career options across streams. Book your free counseling session today!',
                'canonical_url' => 'https://admissionsdekho.com/blog/',
            ],
            [
                'slug' => 'phd-courses-admission-guidance',
                'title' => 'PhD Guidance',
                'template_name' => 'stream',
                'meta_title' => 'PhD Admission Guidance in India 2026 | Eligibility & Exams',
                'meta_description' => 'Get expert PhD admission guidance in India — eligibility, top entrance exams & application tips. Book a free profile evaluation with our counselors today.',
                'canonical_url' => 'https://admissionsdekho.com/phd-courses-admission-guidance/',
            ],
            [
                'slug' => 'law-programs/ba-llb',
                'title' => 'BA LLB',
                'template_name' => 'stream',
                'meta_title' => 'BA LLB Admission Guidance 2026: Syllabus, Eligibility & Top Colleges',
                'meta_description' => 'Complete guide for 5-year integrated BA LLB course — check CLAT cutoff, fees, BCI approved colleges, syllabus & career scope. Apply today with AdmissionsDekho!',
                'canonical_url' => 'https://admissionsdekho.com/law-programs/ba-llb/',
            ],
            [
                'slug' => 'law-programs/bba-llb',
                'title' => 'BBA LLB',
                'template_name' => 'stream',
                'meta_title' => 'BBA LLB Course Admission 2026: Corporate Law & Business Guide',
                'meta_description' => 'Integrated 5-year BBA LLB course details — corporate law specializations, top law schools, fee structure & placement packages.',
                'canonical_url' => 'https://admissionsdekho.com/law-programs/bba-llb/',
            ],
            [
                'slug' => 'law-programs/bcom-llb',
                'title' => 'BCom LLB',
                'template_name' => 'stream',
                'meta_title' => 'BCom LLB Admission 2026: Taxation & Commercial Law Guide',
                'meta_description' => '5-year integrated BCom LLB degree — learn corporate finance, taxation law, banking law & commercial litigation. Get free expert counseling!',
                'canonical_url' => 'https://admissionsdekho.com/law-programs/bcom-llb/',
            ],
            [
                'slug' => 'law-programs/bsc-llb',
                'title' => 'BSc LLB',
                'template_name' => 'stream',
                'meta_title' => 'BSc LLB Course 2026: Cyber Law, IPR & Forensic Science',
                'meta_description' => 'Explore 5-year integrated BSc LLB program — intellectual property rights, biotechnology law, cyber law & forensic science career scope.',
                'canonical_url' => 'https://admissionsdekho.com/law-programs/bsc-llb/',
            ],
            [
                'slug' => 'law-programs/ba-llb-hons',
                'title' => 'BA LLB (Hons.)',
                'template_name' => 'stream',
                'meta_title' => 'BA LLB (Hons.) Admission 2026: Top NLU & Private Colleges',
                'meta_description' => 'Honours 5-year law degree with specialization in Constitutional Law, International Law & Criminal Research. Book free counseling now!',
                'canonical_url' => 'https://admissionsdekho.com/law-programs/ba-llb-hons/',
            ],
            [
                'slug' => 'law-programs/llm',
                'title' => 'LLM (Master of Laws)',
                'template_name' => 'stream',
                'meta_title' => 'LLM Admission Guidance 2026: CLAT PG, Specializations & NLUs',
                'meta_description' => '1-Year & 2-Year Postgraduate LLM degree guidance — Corporate Law, Cyber Law, Criminal Law & IPR specializations.',
                'canonical_url' => 'https://admissionsdekho.com/law-programs/llm/',
            ],
            [
                'slug' => 'btech-computer-science',
                'title' => 'B.Tech Computer Science',
                'template_name' => 'stream',
                'meta_title' => 'B.Tech Computer Science Engineering Admission 2026: Fees & Placements',
                'meta_description' => 'Complete guide for B.Tech CSE — AI, Software Engineering, Cloud Computing, top AICTE colleges & salary packages up to 25 LPA.',
                'canonical_url' => 'https://admissionsdekho.com/btech-computer-science/',
            ],
            [
                'slug' => 'bca',
                'title' => 'BCA (Bachelor of Computer Applications)',
                'template_name' => 'stream',
                'meta_title' => 'BCA Admission 2026: Top Colleges, Fees & IT Placements',
                'meta_description' => 'Complete BCA course guide — web development, software engineering, fees & top UGC colleges with free counseling.',
                'canonical_url' => 'https://admissionsdekho.com/bca/',
            ],
            [
                'slug' => 'bpharm',
                'title' => 'B.Pharm (Bachelor of Pharmacy)',
                'template_name' => 'stream',
                'meta_title' => 'B.Pharm Admission 2026: PCI Approved Colleges & Fees',
                'meta_description' => '4-year B.Pharm degree guidance — PCI approved colleges, drug research, clinical trials & pharmaceutical career scope.',
                'canonical_url' => 'https://admissionsdekho.com/bpharm/',
            ],
            [
                'slug' => 'bsc-nursing',
                'title' => 'B.Sc Nursing',
                'template_name' => 'stream',
                'meta_title' => 'B.Sc Nursing Admission 2026: INC Approved Colleges & Hospital Training',
                'meta_description' => '4-year B.Sc Nursing degree — INC approved colleges, clinical hospital practice & high salary healthcare careers.',
                'canonical_url' => 'https://admissionsdekho.com/bsc-nursing/',
            ],
            [
                'slug' => 'bsc-agriculture',
                'title' => 'B.Sc Agriculture',
                'template_name' => 'stream',
                'meta_title' => 'B.Sc Agriculture Admission 2026: IARI / ICAR Colleges & Scope',
                'meta_description' => '4-year B.Sc Agriculture course — IARI & ICAR approved colleges, government farming officer exams & salary scope.',
                'canonical_url' => 'https://admissionsdekho.com/bsc-agriculture/',
            ],
            [
                'slug' => 'bhm-hotel-management',
                'title' => 'BHM (Bachelor of Hotel Management)',
                'template_name' => 'stream',
                'meta_title' => 'BHM & Hotel Management Admission 2026: NCHMCT & Top Institutes',
                'meta_description' => 'BHM & B.Sc Hospitality Management details — NCHMCT JEE guidance, luxury hotel internships & 5-star placements.',
                'canonical_url' => 'https://admissionsdekho.com/bhm-hotel-management/',
            ],
            [
                'slug' => 'mba',
                'title' => 'MBA (Master of Business Administration)',
                'template_name' => 'stream',
                'meta_title' => 'MBA Admission 2026: CAT, MAT, Top B-Schools & Placements',
                'meta_description' => '2-year MBA / PGDM admissions guide — Finance, Marketing, HR, Business Analytics & top B-schools in India.',
                'canonical_url' => 'https://admissionsdekho.com/mba/',
            ],
        ];

        foreach ($pages as $data) {
            $page = Page::updateOrCreate(
                ['slug' => $data['slug']],
                [
                    'title' => $data['title'],
                    'template_name' => $data['template_name'],
                ]
            );

            SeoMetadata::updateOrCreate(
                [
                    'model_type' => Page::class,
                    'model_id' => $page->id,
                ],
                [
                    'meta_title' => $data['meta_title'],
                    'meta_description' => $data['meta_description'],
                    'canonical_url' => $data['canonical_url'] ?? ($data['slug'] ? url($data['slug']) : url('/')),
                    'schema_type' => 'EducationalOrganization',
                ]
            );
        }
    }
}
