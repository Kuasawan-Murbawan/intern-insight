<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Companies;

class ReviewController extends Controller
{

    public function store()
    {

        $reviewID = Str::random(5);
        $companyID = request()->get('companyID');

        $review = Reviews::create([
            'userID' => request()->get('userID'),
            'reviewID' => $reviewID,
            'overallRating' => request()->get('overallRating'),
            'jobTitle' => request()->get('jobTitle'),
            'allowance' => request()->get('allowance'),
            'review' => request()->get('review'),
            'tips' => request()->get('tips'),
            'companyID' => $companyID
        ]);
        $review->save();


        // TODO: use flash message
        echo "Review created successfully";
        return redirect()->route('review.show', ['companyID' => $companyID]);
    }



    public function showReview($companyID)
    {
        $reviews = Reviews::where('companyID', $companyID)->get();
        $companies = Companies::where('companyID', $companyID)->first();
        $companyIDcurrent = $companyID;

        if ($reviews->isEmpty()) {
            echo "No reviews found";
        } else {
            return view('/reviews', ['reviews' => $reviews, 'companyIDcurrent' => $companyIDcurrent, 'companies' => $companies]);
        }
    }



    public function showUserForm($companyID)
    {
        $userID = Auth::id();
        return view('/user_pages/submit-review', ['companyID' => $companyID, 'userID' => $userID]);
    }

    public function delete($reviewID)
    {
        $review = Reviews::find($reviewID);
        $companyID = $review->companyID;
        $review->delete();
        echo "deleted";
        return redirect()->route('review.show', ['companyID' => $companyID]);
    }







    public function init()
    {
        $reviewsData = [
            [
                'userID' => "user1",
                'reviewID' => "rev1",
                'overallRating' => 4,
                'jobTitle' => 'Software Engineer Intern',
                'allowance' => 1000,
                'review' => 'Good work balance, with good work culture. But boring ….',
                'tips' => 'C++, PHP Projects, etc',
                'companyID' => 'ptr1'
            ],
            [
                'userID' => "user2",
                'reviewID' => "rev2",
                'overallRating' => 3,
                'jobTitle' => 'Software Engineer Intern',
                'allowance' => 1000,
                'review' => 'Intern was being pushed to code and stay up late without any extra payments.',
                'tips' => 'C++, PHP, Python, Java',
                'companyID' => 'ptr1'
            ],
            [
                'userID' => "user3",
                'reviewID' => "rev3",
                'overallRating' => 4,
                'jobTitle' => 'Data Engineer Intern',
                'allowance' => 1500,
                'review' => 'Learned valuable data processing techniques.',
                'tips' => 'Python, SQL, Data Analytics',
                'companyID' => 'ptr1'
            ],
            [
                'userID' => "user4",
                'reviewID' => "rev4",
                'overallRating' => 5,
                'jobTitle' => 'Software Engineer Intern',
                'allowance' => 1000,
                'review' => 'Excellent work environment with opportunities for growth.',
                'tips' => 'Java, JavaScript, C#',
                'companyID' => 'ptr1'
            ],
            [
                'userID' => "user5",
                'reviewID' => "rev5",
                'overallRating' => 2,
                'jobTitle' => 'Quality Assurance Intern',
                'allowance' => 1000,
                'review' => 'Limited tasks and learning experiences. Basic understanding of testing methodologies, SQL',
                'tips' => 'Basic understanding of testing methodologies, SQL',
                'companyID' => 'ptr1'
            ],
            [
                'userID' => "user6",
                'reviewID' => "rev6",
                'overallRating' => 3,
                'jobTitle' => 'IT Support Intern',
                'allowance' => 900,
                'review' => 'Provided basic IT assistance but lacked exposure to complex tasks.',
                'tips' => 'Troubleshooting, Customer Service',
                'companyID' => 'myb1'
            ],
            [
                'userID' => "user7",
                'reviewID' => "rev7",
                'overallRating' => 3,
                'jobTitle' => 'Systems Analyst Intern',
                'allowance' => 1200,
                'review' => 'Opportunities to learn, but the workload was overwhelming at times.',
                'tips' => 'SQL, Data Analysis, Problem-Solving',
                'companyID' => 'myb1'
            ],
            [
                'userID' => "user8",
                'reviewID' => "rev8",
                'overallRating' => 2,
                'jobTitle' => 'Marketing Intern',
                'allowance' => 1000,
                'review' => 'Limited tasks with minimal learning opportunities.',
                'tips' => "Social Media Marketing, Communication Skills",
                'companyID' => 'myb1'
            ],
            [
                'userID' => "user9",
                'reviewID' => "rev9",
                'overallRating' => 5,
                'jobTitle' => 'Software Development Intern',
                'allowance' => 1000,
                'review' => 'Extensive hands-on experience in coding and project ownership.',
                'tips' => 'Java, Python, Software Development methodologies',
                'companyID' => 'myb1'
            ],
            [
                'userID' => "user10",
                'reviewID' => "rev10",
                'overallRating' => 2,
                'jobTitle' => 'Finance Intern',
                'allowance' => 1100,
                'review' => 'Exposure to financial processes but lacked in-depth training.',
                'tips' => "Excel, Financial Analysis, Attention to Detail",
                'companyID' => 'myb1'
            ],
            [
                'userID' => "user11",
                'reviewID' => "rev11",
                'overallRating' => 4,
                'jobTitle' => 'Network Engineer Intern',
                'allowance' => 1200,
                'review' => 'Valuable exposure to networking concepts and hands-on projects.',
                'tips' => 'Networking fundamentals, TCP/IP, Routing, subnetting',
                'companyID' => 'tm1'
            ],
            [
                'userID' => "user12",
                'reviewID' => "rev12",
                'overallRating' => 3,
                'jobTitle' => 'Customer Service Intern',
                'allowance' => 1000,
                'review' => 'Decent learning experience but limited growth opportunities.',
                'tips' => 'Communication skills, Customer handling',
                'companyID' => 'tm1'
            ],
            [
                'userID' => "user13",
                'reviewID' => "rev13",
                'overallRating' => 5,
                'jobTitle' => 'Software Tester Intern',
                'allowance' => 1400,
                'review' => 'Comprehensive testing exposure with supportive mentorship.',
                'tips' => 'Testing methodologies, Bug tracking tools',
                'companyID' => 'tm1'
            ],
            [
                'userID' => "user14",
                'reviewID' => "rev14",
                'overallRating' => 2,
                'jobTitle' => 'Data Analyst Intern',
                'allowance' => 1100,
                'review' => 'Limited projects, needed more challenging data analysis tasks.',
                'tips' => 'SQL, Data Visualization, Statistics',
                'companyID' => 'tm1'
            ],
            [
                'userID' => "user15",
                'reviewID' => "rev15",
                'overallRating' => 4,
                'jobTitle' => 'Cybersecurity Intern',
                'allowance' => 1500,
                'review' => 'Immersive cybersecurity projects, workload was overwhelming.',
                'tips' => 'Cybersecurity fundamentals, Network Security',
                'companyID' => 'tm1'
            ],
            [
                'userID' => "user16",
                'reviewID' => "rev16",
                'overallRating' => 3,
                'jobTitle' => 'Engineering Intern',
                'allowance' => 1300,
                'review' => 'Valuable exposure to oil and gas projects; limited mentorship.',
                'tips' => 'Engineering basics, Problem-solving skills',
                'companyID' => 'shl1'
            ],
            [
                'userID' => "user17",
                'reviewID' => "rev17",
                'overallRating' => 4,
                'jobTitle' => 'Business Development Intern',
                'allowance' => 1200,
                'review' => 'Diverse tasks with some involvement in strategic planning.',
                'tips' => 'Sales techniques, Market Research',
                'companyID' => 'shl1'
            ],
            [
                'userID' => "user18",
                'reviewID' => "rev18",
                'overallRating' => 2,
                'jobTitle' => 'Environmental Intern',
                'allowance' => 1400,
                'review' => 'Challenging projects addressing environmental concerns.',
                'tips' => 'Sustainability practices, Environmental regulations',
                'companyID' => 'shl1'
            ],
            [
                'userID' => "user19",
                'reviewID' => "rev19",
                'overallRating' => 5,
                'jobTitle' => 'Finance Intern',
                'allowance' => 1100,
                'review' => 'Extensive hands-on experience in financial analysis.',
                'tips' => 'Accounting basics, Excel proficiency',
                'companyID' => 'shl1'
            ],
            [
                'userID' => "user20",
                'reviewID' => "rev20",
                'overallRating' => 4,
                'jobTitle' => 'Supply Chain Intern',
                'allowance' => 1500,
                'review' => 'Exposure to supply chain operations but lacked depth.',
                'tips' => 'Logistics, Inventory Management',
                'companyID' => 'shl1'
            ],

            [
                'userID' => "user21",
                'reviewID' => "rev21",
                'overallRating' => 4,
                'jobTitle' => 'Electrical Engineering Intern',
                'allowance' => 1200,
                'review' => 'Engaging exposure to electrical projects; lacked structured training.',
                'tips' => 'Electrical fundamentals, Circuit Analysis',
                'companyID' => 'tnb1'
            ],
            [
                'userID' => "user22",
                'reviewID' => "rev22",
                'overallRating' => 3,
                'jobTitle' => 'Renewable Energy Intern',
                'allowance' => 1300,
                'review' => 'Insightful experience in renewable energy; workload was overwhelming.',
                'tips' => 'Renewable Energy concepts, Sustainability practices',
                'companyID' => 'tnb1'
            ],
            [
                'userID' => "user23",
                'reviewID' => "rev23",
                'overallRating' => 5,
                'jobTitle' => 'Grid Operations Intern',
                'allowance' => 1400,
                'review' => 'Comprehensive training in grid operations; valuable hands-on projects.',
                'tips' => 'Power Systems, Grid Management',
                'companyID' => 'tnb1'
            ],
            [
                'userID' => "user24",
                'reviewID' => "rev24",
                'overallRating' => 2,
                'jobTitle' => 'Marketing Intern',
                'allowance' => 1100,
                'review' => 'Limited tasks and projects; needed more marketing insights.',
                'tips' => 'Market Research, Communication Skills',
                'companyID' => 'tnb1'
            ],
            [
                'userID' => "user25",
                'reviewID' => "rev25",
                'overallRating' => 4,
                'jobTitle' => 'Human Resources Intern',
                'allowance' => 1250,
                'review' => 'Valuable HR exposure but lacked exposure to diverse HR functions.',
                'tips' => 'HR fundamentals, Recruitment processes',
                'companyID' => 'tnb1'
            ],

        ];

        foreach ($reviewsData as $reviewData) {
            Reviews::create($reviewData);
        }
        echo "Reviews initialized successfully";
    }
}
