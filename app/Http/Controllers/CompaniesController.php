<?php

namespace App\Http\Controllers;

use App\Models\Companies;

use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class CompaniesController extends Controller
{

    public function showForm()
    {
        return view('/admin_pages/submit-company');
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

    public function chooseUser()
    {
        return view('choose');
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

    public function showUpdateForm()
    {
        return view('/admin_pages/update-company');
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
            ]);
            echo "Company updated successfully!";
        } else {
            echo "Company not found!";
        }
        return view('/admin_pages/show-company', ['companies' => Companies::all()]);
    }
}
