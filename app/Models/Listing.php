<?php

namespace App\Models;

use App\Helpers\SiteHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Listing extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = [
        'main_image_url',
        'category_name',
        'subcategory_name',
        'created_at_time_diff',
        'is_favourite',
        'is_reported_by_this_user',
        'details',
        'document_listing_approval_status',
        'phone_listing_approval_status'
    ];

    public function attachments()
    {
        return $this->hasMany(Attachment::class, 'object_id', 'id')->where('object', 'Listing');
    }

    public function images()
    {
        return $this->hasMany(Attachment::class, 'object_id', 'id')->where('object', 'Listing')->where('context', 'Listing-image');
    }

    public function documents()
    {
        return $this->hasMany(Attachment::class, 'object_id', 'id')->where('object', 'Listing')->where('context', 'Listing-document');
    }

    public function created_by_user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function getMainImageUrlAttribute()
    {
        $attachments = $this->attachments;
        if ($attachments->isNotEmpty()) {
            $attachment = $attachments->first();

            $file_name = $attachment->name;
            return asset("uploads/listings/" . $file_name);
        }

        return asset('images/default/listing.jpg');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function ads_report()
    {
        return $this->hasMany(AdsReported::class, 'listing_id', 'id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class, 'listing_id', 'id');
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name ?? ''; 
    }

    public function getSubcategoryNameAttribute()
    {
        return $this->subcategory->name ?? '';
    }

    public function getIsFavouriteAttribute()
    {
        if (Auth::id() || Session::has('user')) {
            $Favourite = Favourite::where([
                'listing_id' => $this->id,
                'user_id' => Auth::id() ?? Session::get('user')->id,
            ])->get();

            if (count($Favourite) > 0) {
                return true;
            }
        }

        return false;
    }

    public function getIsReportedByThisUserAttribute()
    {
        if (Auth::id() || Session::has('user')) {
            $AdReported = AdsReported::where([
                'listing_id' => $this->id,
                'reported_by' => Auth::id() ?? Session::get('user')->id,
            ])->get();

            if (count($AdReported) > 0) {
                return true;
            }
        }

        return false;
    }

    public function getCreatedAtTimeDiffAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function getDetailsAttribute()
    {
        $table = Category::find($this->category_id)->form_view;
     
        $Detail = DB::table($table)->where('listing_id', $this->id)->first();
        return $Detail;
    }

    public function getDocumentListingApprovalStatusAttribute()
    {
        $ListingUserApproval = ListingUserApproval::where('listing_id', $this->id)->where('type', 'document')->where('user_id', SiteHelper::getLoginUserId())->get();

        if ($ListingUserApproval->isEmpty()) {
            // No records found
            $status = '';
        } elseif ($ListingUserApproval->contains('status', 'pending')) {
            // At least one record has a status of 'pending'
            $status = 'pending';
        } elseif ($ListingUserApproval->contains('status', 'approved')) {
            // At least one record has a status of 'approved'
            $status = 'approved';
        } else {
            // All records have a different status, choose one (e.g., the first one)
            $status = $ListingUserApproval->first()->status;
        }

        return $status;
    }

    public function getPhoneListingApprovalStatusAttribute()
    {
        $ListingUserApproval = ListingUserApproval::where('listing_id', $this->id)->where('type', 'phone')->where('user_id', SiteHelper::getLoginUserId())->get();

        if ($ListingUserApproval->isEmpty()) {
            // No records found
            $status = '';
        } elseif ($ListingUserApproval->contains('status', 'pending')) {
            // At least one record has a status of 'pending'
            $status = 'pending';
        } elseif ($ListingUserApproval->contains('status', 'approved')) {
            // At least one record has a status of 'approved'
            $status = 'approved';
        } else {
            // All records have a different status, choose one (e.g., the first one)
            $status = $ListingUserApproval->first()->status;
        }

        return $status;
    }
}
