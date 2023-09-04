<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function MyAplliedAnnonce()
    {
        $annonces = Auth::user()->AppliedAnnonces;
        return view('auth.profile.user.annonces.pending', compact("annonces"));
    }
    public function MyFavoritesAnnonce()
    {
        $annonces = Auth::user()->FavoriteAnnonces;
        return view('auth.profile.user.annonces.favorites', compact("annonces"));
    }

    /**
     * Apply for a job.
     *
     * @param int $job_id The ID of the job.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function apply_job($user_id, $announce_id)
    {
        // Find the authenticated user.
        $user = User::find($user_id);
        // Find the announcement with the given job ID.
        $announcement = Annonce::find($announce_id);
        // Attach the announcement to the user's applied announcements.
        $user->AppliedAnnonces()->attach($announcement);
        // Redirect back with a success message.
        return redirect()->back()->with([
            "success" => "You applied successfully."
        ]);
    }

    public function toggleFavorite($user_id, $announce_id)
    {
        $user = User::find($user_id);
        $announcement = Annonce::find($announce_id);
        if ($user->FavoriteAnnonces->contains($announce_id)) {
            $user->FavoriteAnnonces()->detach($announcement);
        } else {
            $user->FavoriteAnnonces()->attach($announcement);
        }
        // return response()->json()
        return redirect()->back();
    }
}
