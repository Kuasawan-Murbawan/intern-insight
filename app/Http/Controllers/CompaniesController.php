<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Reviews;

use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class CompaniesController extends Controller
{

    public function home()
    {
        return view('/components/company-listing', ['companies' => Companies::all()]);
    }

    public function showForm()
    {
        return view('/admin_pages/submit-company');
    }

    public function showDetails($companyID)
    {
        $company = Companies::find($companyID);

        switch ($companyID) {
            case 'myb1':
                return view('/companies/maybank-details', ['company' => $company]);
                break;
            case 'tm1':
                return view('/companies/TM-details', ['company' => $company]);
                break;
            case 'ptr1':
                return view('/companies/petronas-details', ['company' => $company]);
                break;
            case 'shl1':
                return view('/companies/shell-details', ['company' => $company]);
                break;
            case 'tnb1':
                return view('/companies/tnb-details', ['company' => $company]);
                break;
            default:
                echo "Company not found!";
                break;
        }
    }


    public function showCompaniesAdmin()
    {
        return view('/admin_pages/show-company', ['companies' => Companies::all()]);
    }

    public function showCompaniesUser()
    {
        return view('/user_pages/company-list', ['companies' => Companies::all()]);
    }

    public function insertCompanies()
    {

        $company = new Companies([
            'companyID' => request()->get('companyID'),
            'name' => request()->get('name'),
            'sector' => request()->get('sector'),
            'employees' => request()->get('employees'),
            'location' => request()->get('location'),
            'website' => request()->get('website'),
            'reviews' => request()->get('reviews')
        ]);

        $company->save();

        echo "Company added successfully!";
        return view('/admin_pages/show-company', ['companies' => Companies::all()]);
    }

    public function updateCompany(Request $request, $companyID)
    {
        $company = Companies::find($companyID);

        if ($company) {
            $company->update([
                'name' => $request->get('name'),
                'sector' => $request->get('sector'),
                'employees' => $request->get('employees'),
                'location' => $request->get('location'),
                'website' => $request->get('website'),
                'logo' => $request->get('logo')
            ]);
            echo "Company updated successfully!";
        } else {
            echo "Company not found!";
        }
        return view('/admin_pages/show-company', ['companies' => Companies::all()]);
    }


    public function delete($companyID)
    {
        $company = Companies::find($companyID);

        if ($company) {
            $company->delete();
            echo "Company deleted successfully!";
        } else {
            echo "Company not found!";
        }
        return view('/admin_pages/show-company', ['companies' => Companies::all()]);
    }

    public function updateReviewCount()
    {
        $companies = Companies::all(); // Get all companies

        foreach ($companies as $company) {
            $this->updateReviewCount($company); // Update review count for each company
        }
    }


    public function showDetailsMaybank()
    {
        return view('/companies/maybank-details');
    }

    public function showDetailsTM()
    {
        return view('/companies/TM-details');
    }

    public function showDetailsPetronas()
    {
        return view('/companies/petronas-details');
    }

    public function showDetailsShell()
    {
        return view('/companies/shell-details');
    }

    public function showDetailsTNB()
    {
        return view('/companies/tnb-details');
    }

    public function showUpdateForm($companyID)
    {
        $company = Companies::find($companyID);
        return view('/admin_pages/update-company', ['company' => $company]);
    }
}
