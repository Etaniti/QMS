<?php

namespace App\Http\Controllers;

use App\Models\Organization;

class StaffController extends Controller
{
    public function index(Organization $organization)
    {
        return view('organizations.staff.index', compact('organization'));
    }

    public function staffCounting(Organization $organization)
    {
        //Specialists
        //specialistsCount
        $specialistsCountSum = 0;

        foreach ($organization->specialists as $specialist) {

            if (count($organization->specialists) > 0) {
                $currentSpecialistCount = $specialist->specialist_count;
                $specialistsCountSum = $specialistsCountSum + $currentSpecialistCount;
            }
            else {
                $specialistsCountSum = 0;
            }
        }
        $specialistsCount = $specialistsCountSum;

        //specialistsRateCount
        $specialistsRateSum = 0;

        foreach ($organization->specialists as $specialist) {

            if (count($organization->specialists) > 0) {
                $currentSpecialistRate = $specialist->specialist_tariff_rate * $specialist->specialist_count;
                $specialistsRateSum = $specialistsRateSum + $currentSpecialistRate;
            }
            else {
                $specialistsRateSum = 0;
            }
        }
        $specialistsRateCount = $specialistsRateSum;

        //specialistsFinalRateCount
        $specialistsFinalRateSum = 0;

        foreach ($organization->specialists as $specialist) {

            if (count($organization->specialists) > 0) {
                $currentSpecialistFinalRate = ($specialist->specialist_tariff_rate + $specialist->specialist_payrise_management_amount + $specialist->specialist_payrise_intensity_amount + $specialist->specialist_payrise_category_amount + $specialist->specialist_payrise_specificity_amount + $specialist->specialist_additional_stimulation_amount) * $specialist->specialist_count;
                $specialistsFinalRateSum = $specialistsFinalRateSum + $currentSpecialistFinalRate;
            }
            else {
                $specialistsFinalRateSum = 0;
            }
        }
        $specialistsFinalRateCount = $specialistsFinalRateSum;

        //Workers
        //workersCount
        $workersCountSum = 0;

        foreach ($organization->workers as $worker) {

            if (count($organization->workers) > 0) {
                $currentWorkerCount = $worker->worker_count;
                $workersCountSum = $workersCountSum + $currentWorkerCount;
            }
            else {
                $workersCountSum = 0;
            }
        }
        $workersCount = $workersCountSum;

        //workersRateCount
        $workersRateSum = 0;

        foreach ($organization->workers as $worker) {

            if (count($organization->workers) > 0) {
                $currentWorkerRate = $worker->worker_tariff_rate * $worker->worker_count;
                $workersRateSum = $workersRateSum + $currentWorkerRate;
            }
            else {
                $workersRateSum = 0;
            }
        }
        $workersRateCount = $workersRateSum;

        //workersFinalRateCount
        $workersFinalRateSum = 0;

        foreach ($organization->workers as $worker) {

            if (count($organization->workers) > 0) {
                $currentWorkerFinalRate = ($worker->worker_tariff_rate + $worker->worker_payrise_management_amount + $worker->worker_payrise_intensity_amount + $worker->worker_payrise_category_amount + $worker->worker_payrise_specificity_amount + $worker->worker_additional_stimulation_amount) * $worker->worker_count;
                $workersFinalRateSum = $workersFinalRateSum + $currentWorkerFinalRate;
            }
            else {
                $workersFinalRateSum = 0;
            }
        }
        $workersFinalRateCount = $workersFinalRateSum;


        return view('organizations.staff.index', compact('organization', 'specialistsCount', 'specialistsRateCount', 'specialistsFinalRateCount', 'workersCount', 'workersRateCount', 'workersFinalRateCount'));
    }
}
