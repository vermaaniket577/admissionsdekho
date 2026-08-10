<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Course;
use App\Models\Stream;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UniversityController extends Controller
{
    /**
     * Display University Hub Index Page (/universities).
     */
    public function index(Request $request): View
    {
        $colleges = College::all();
        $streams = Stream::with('courses')->get();

        $page = (object) [
            'title' => 'Top Universities & Colleges in India 2026 | Admissions, Fees & Cutoffs',
            'slug' => 'universities',
        ];

        $seo = (object) [
            'meta_title' => 'Top Approved Universities in India 2026 | Admission Guidance & Fees',
            'meta_description' => 'Explore statutory UGC, NAAC, AICTE approved partner universities. Check course eligibility, annual tuition fees, placement packages, and campus cutoffs.',
            'canonical_url' => url('/universities'),
            'schema_type' => 'EducationalOrganization',
        ];

        return view('templates.universities-index', [
            'page' => $page,
            'seo' => $seo,
            'colleges' => $colleges,
            'streams' => $streams,
        ]);
    }

    /**
     * Display Dynamic University Detail Page (/universities/{slug}).
     */
    public function show(string $slug): View
    {
        $cleanSlug = trim($slug, '/');

        // Lookup college in database or match slug fallback
        $college = College::where('slug', $cleanSlug)->first();

        if (!$college) {
            // Flexible slug matching fallback
            $college = College::where('name', 'LIKE', '%' . str_replace('-', '%', $cleanSlug) . '%')->first();
        }

        if (!$college) {
            $college = College::first();
        }

        // Generate rich dynamic university profile details based on target university slug
        $details = $this->getUniversityMetadata($college);

        $page = (object) [
            'title' => "{$college->name} - Admissions 2026, Courses, Fees & Placement Details",
            'slug' => "universities/{$college->slug}",
        ];

        $seo = (object) [
            'meta_title' => "{$college->name} Admissions 2026: Courses, Fees, Cutoffs & Placements",
            'meta_description' => "Get complete admission details for {$college->name}, {$college->location}. Check UGC/NAAC approval status, total course fees, average placement CTC, and scholarship eligibility.",
            'canonical_url' => url("/universities/{$college->slug}"),
            'schema_type' => 'CollegeOrUniversity',
        ];

        $streams = Stream::with('courses')->get();

        return view('templates.university-detail', [
            'page' => $page,
            'seo' => $seo,
            'college' => $college,
            'details' => $details,
            'streams' => $streams,
        ]);
    }

    /**
     * Compile rich dynamic metadata for any target Indian university.
     */
    private function getUniversityMetadata(College $college): array
    {
        $slug = strtolower($college->slug);

        // Pre-configured rich profiles for partner institutions
        $profiles = [
            'madhyanchal-prof-univ' => [
                'naac_grade' => 'UGC / MPPURC Approved',
                'campus_size' => '100+ Acres Green Campus',
                'avg_package' => '₹4.5 LPA',
                'highest_package' => '₹18.0 LPA',
                'placement_rate' => '92%',
                'overview' => 'Madhyanchal Professional University (MPU), Bhopal is a premier private university established under the MP Private University Act. Spanning 100+ acres of eco-friendly infrastructure, MPU offers multidisciplinary education in Engineering, Pharmacy, Management, Agriculture, Nursing, and Law with state-of-the-art research laboratories and industry incubation centers.',
                'recruiters' => ['TCS', 'Infosys', 'Wipro', 'Cipla', 'Sun Pharma', 'HDFC Bank', 'Tech Mahindra'],
            ],
            'sushant-university' => [
                'naac_grade' => 'NAAC A Grade / UGC',
                'campus_size' => '15+ Acres Modern Campus in Gurgaon',
                'avg_package' => '₹6.8 LPA',
                'highest_package' => '₹40.0 LPA',
                'placement_rate' => '95%',
                'overview' => 'Sushant University (formerly Ansal University) located in the corporate hub of Gurgaon, NCR, is renowned for its School of Art & Architecture, School of Law (BCI Approved), School of Health Sciences, and School of Engineering & Technology. With global academic collaborations and industry mentors, Sushant University delivers world-class practical education.',
                'recruiters' => ['Amazon', 'Deloitte', 'KPMG', 'Maruti Suzuki', 'ICICI Bank', 'EY', 'L&T Construction'],
            ],
            'vidya-university' => [
                'naac_grade' => 'UGC Approved / NAAC Accredited',
                'campus_size' => '75+ Acres Lush Campus in Meerut',
                'avg_package' => '₹5.2 LPA',
                'highest_package' => '₹24.0 LPA',
                'placement_rate' => '93%',
                'overview' => 'Vidya University, Meerut (Delhi NCR Region) is a center of excellence offering career-centric undergraduate and postgraduate programs in Computer Applications, Business Administration, Legal Studies, Pharmacy, and Engineering. The university features advanced robotics labs, moot courts, and high-speed Wi-Fi enabled digital classrooms.',
                'recruiters' => ['TCS', 'HCL Technologies', 'Axis Bank', 'Wipro', 'Cognizant', 'Paytm'],
            ],
            'dr-preeti-global-univ' => [
                'naac_grade' => 'UGC / Statutory Approved',
                'campus_size' => '50+ Acres Campus in Shivpuri',
                'avg_package' => '₹4.2 LPA',
                'highest_package' => '₹14.0 LPA',
                'placement_rate' => '90%',
                'overview' => 'Dr Preeti Global University, Shivpuri (MP) is dedicated to empowering students with skill-based education in Paramedical Sciences, Agriculture, Nursing, Education (B.Ed), Computer Applications, and Management. The institution prioritizes hands-on practical training, scholarship aid for underprivileged merit students, and rural health research initiatives.',
                'recruiters' => ['Apollo Hospitals', 'Fortis Healthcare', 'Mahindra Rural', 'ICICI Bank', 'Reliance Retail'],
            ],
            'mahakaushal-university' => [
                'naac_grade' => 'UGC / NCTE / MPPURC Approved',
                'campus_size' => '60+ Acres Campus in Jabalpur',
                'avg_package' => '₹4.8 LPA',
                'highest_package' => '₹16.5 LPA',
                'placement_rate' => '91%',
                'overview' => 'Mahakaushal University, Jabalpur stands as a leading regional educational hub providing statutory recognized programs in Teacher Education (B.Ed / D.El.Ed), Law (LLB/BA LLB), Pharmacy, Agriculture, and Commerce. Equipped with botanical research fields, digital libraries, and career guidance cells, it ensures well-rounded student development.',
                'recruiters' => ['Lupin Pharma', 'SBI Cards', 'Byju\'s', 'Tech Mahindra', 'HDFC Sales'],
            ],
            'mansarovar-global-univ' => [
                'naac_grade' => 'UGC / AICTE / BCI Approved',
                'campus_size' => '51+ Acres Campus in Sehore/Bhopal',
                'avg_package' => '₹5.0 LPA',
                'highest_package' => '₹20.0 LPA',
                'placement_rate' => '94%',
                'overview' => 'Mansarovar Global University (MGU), Bhopal/Sehore is a landmark institution offering industry-aligned degrees across Engineering, Computer Applications, Law, Nursing, Ayurveda, and Management. MGU features smart lecture halls, automated library networks, and specialized skill development workshops.',
                'recruiters' => ['Infosys', 'TCS', 'Zydus Cadila', 'Airtel', 'Axis Bank', 'Bandhan Bank'],
            ],
            'amity-university' => [
                'naac_grade' => 'NAAC A+ Grade / UGC / AICTE',
                'campus_size' => '120+ Acres Hi-Tech Campus',
                'avg_package' => '₹7.5 LPA',
                'highest_package' => '₹61.75 LPA',
                'placement_rate' => '98%',
                'overview' => 'Amity University, Noida is India\'s top-ranked private university with international campuses in London, Dubai, New York, and Singapore. Offering 300+ cutting-edge degrees, Amity is famed for its world-class research centers, patent filings, sports complexes, and stellar corporate placement drives.',
                'recruiters' => ['Microsoft', 'Google', 'Amazon', 'McKinsey', 'Goldman Sachs', 'Adobe', 'Deloitte'],
            ],
            'lovely-professional-university' => [
                'naac_grade' => 'NAAC A++ Grade / UGC / NIRF Top 50',
                'campus_size' => '600+ Acres Mega Campus',
                'avg_package' => '₹7.2 LPA',
                'highest_package' => '₹3.0 Crore (Global) / ₹54 LPA (Domestic)',
                'placement_rate' => '97%',
                'overview' => 'Lovely Professional University (LPU), Phagwara, Punjab is India\'s largest single-campus university housing 35,000+ students from 50+ countries. Recognized for its NIRF top rankings, LPU boasts Olympic-size sports arenas, 50+ specialized innovation labs, and top global recruiter partnerships.',
                'recruiters' => ['Microsoft', 'Google', 'Capgemini', 'Cognizant', 'L&T', 'Cisco', 'Texas Instruments'],
            ],
        ];

        $defaultProfile = [
            'naac_grade' => 'UGC / Statutory Approved',
            'campus_size' => '50+ Acres Campus',
            'avg_package' => '₹5.0 LPA',
            'highest_package' => '₹22.0 LPA',
            'placement_rate' => '92%',
            'overview' => "{$college->name}, {$college->location} is a statutory-approved institution dedicated to academic excellence, innovative research, and career-oriented learning across engineering, management, law, and health sciences.",
            'recruiters' => ['TCS', 'Infosys', 'Wipro', 'HDFC Bank', 'Tech Mahindra', 'Cognizant'],
        ];

        $meta = $profiles[$slug] ?? $defaultProfile;

        // Default programs breakdown table
        $meta['programs'] = [
            [
                'name' => 'B.Tech Computer Science & Engineering',
                'stream' => 'Engineering',
                'duration' => '4 Years (8 Semesters)',
                'eligibility' => '10+2 with Physics, Chem, Math (Min 50%) or JEE Rank',
                'total_fee' => '₹85,000 - ₹1,40,000 / Year',
            ],
            [
                'name' => 'MBA (Dual Specialization: Finance / Marketing / HR)',
                'stream' => 'Management',
                'duration' => '2 Years (4 Semesters)',
                'eligibility' => 'Graduation in any stream (Min 50%) or CAT/MAT/CMAT',
                'total_fee' => '₹95,000 - ₹1,65,000 / Year',
            ],
            [
                'name' => 'BCA (Bachelor of Computer Applications)',
                'stream' => 'Computer Applications',
                'duration' => '3 Years (6 Semesters)',
                'eligibility' => '10+2 in any stream with Maths/Computer subject (Min 45%)',
                'total_fee' => '₹45,000 - ₹75,000 / Year',
            ],
            [
                'name' => 'BA LLB / BBA LLB (Integrated Law)',
                'stream' => 'Law',
                'duration' => '5 Years (10 Semesters)',
                'eligibility' => '10+2 in any stream (Min 45%) or CLAT/LSAT Score',
                'total_fee' => '₹65,000 - ₹1,10,000 / Year',
            ],
            [
                'name' => 'B.Pharmacy (Bachelor of Pharmacy)',
                'stream' => 'Pharmacy',
                'duration' => '4 Years (8 Semesters)',
                'eligibility' => '10+2 with PCB/PCM (Min 50%) PCI Approved',
                'total_fee' => '₹75,000 - ₹1,25,000 / Year',
            ],
            [
                'name' => 'B.Sc Nursing',
                'stream' => 'Nursing',
                'duration' => '4 Years (8 Semesters)',
                'eligibility' => '10+2 with Physics, Chemistry, Biology & English (Min 45%)',
                'total_fee' => '₹80,000 - ₹1,30,000 / Year',
            ],
        ];

        // Infrastructure facilities
        $meta['facilities'] = [
            'Separate Air-Conditioned Boys & Girls Hostels with 24/7 Security & CCTV Coverage',
            'Central Digital Library equipped with Delnet, IEEE journals, e-books & Quiet Study Bays',
            'Advanced Computer Center & High-Speed Optical Fiber Wi-Fi across full campus',
            'Specialized R&D Laboratories, Robotics Workshop, Moot Court & Simulation Centers',
            'Multi-Cuisine Food Court, Student Cafeterias, and On-Campus Bank ATM Facilities',
            'Indoor & Outdoor Sports Infrastructure: Cricket Stadium, Basketball Courts & Gymnasium',
            'Comprehensive Fleet of Air-Conditioned Buses covering major city transport routes',
        ];

        // FAQs
        $meta['faqs'] = [
            [
                'q' => "Is {$college->name} recognized by UGC & Statutory Bodies?",
                'a' => "Yes. {$college->name} is a statutory university recognized by the University Grants Commission (UGC) under Section 2(f). Programs in Law, Pharmacy, Nursing, and Engineering are approved by BCI, PCI, INC, and AICTE respectively.",
            ],
            [
                'q' => "What entrance exams are accepted for 2026 Admissions?",
                'a' => "The university accepts national entrance scores like JEE Main, CLAT, CAT, MAT, NEET, and CUET. Candidates can also apply based on 10+2 / Graduation merit aggregate percentile.",
            ],
            [
                'q' => "Are hostel facilities available for outstation male and female students?",
                'a' => "Yes. The campus offers separate secure hostels for boys and girls equipped with 24/7 power backup, Wi-Fi connectivity, mess dining halls, and warden supervision.",
            ],
            [
                'q' => "How can students apply for merit scholarships at {$college->name}?",
                'a' => "Merit scholarships ranging from 25% up to 100% tuition fee waivers are awarded based on 10+2 board marks, entrance exam percentiles, state domicile quotas, and NSP government schemes.",
            ],
        ];

        return $meta;
    }
}
