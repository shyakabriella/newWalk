<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // In your DashboardController.php file
    public function getApplicationCounts()
    {
        try {
            // Total events
            $totalEvents = DB::table('events')->count();
            // Total users
            $totalUsers = DB::table('users')->count();

            // Total applicants
            $totalApplicants = DB::table('applications')->count();
            // Approved applicants
            $approvedApplicants = DB::table('applications')->where('approved', true)->count();
            // Application count by province
            $applicationFromNorth = DB::table('applications')->where('province', 4)->count();
            $applicationFromSouth = DB::table('applications')->where('province', 2)->count();
            $applicationFromWestern = DB::table('applications')->where('province', 3)->count();
            $applicationFromEastern = DB::table('applications')->where('province', 5)->count();
    
            return response()->json([
                'totalEvents' => $totalEvents,
                'totalUsers' => $totalUsers,
                'totalApplicants' => $totalApplicants,
                'approvedApplicants' => $approvedApplicants,
                'applicationFromNorth' => $applicationFromNorth,
                'applicationFromSouth' => $applicationFromSouth,
                'applicationFromWestern' => $applicationFromWestern,
                'applicationFromEastern' => $applicationFromEastern,
            ]);
        } catch (\Exception $e) {
            // Log the exception
            \Log::error('getApplicationCounts failed: ' . $e->getMessage());
    
            // Rethrow the exception to maintain the 500 status
            throw $e;
        }
    }
    

}
