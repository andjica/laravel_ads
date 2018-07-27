<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FFMpeg;
use App\Ad;
use App\Video;
use App\Picture;

use App\User;
use App\SubCategory;

class AdController extends Controller
{
    public function store()
    {

        if (auth()->user()->account->type->id == '1')
        { 
            $picture_rule = 'max:5';
            $picture_message = 'You can only post 5 images with your account';
            $video_rule = 'sometimes';
            $video_message = '';
        }

        if (auth()->user()->account->type->id== '2')
        {
            $picture_rule = 'max:15';
            $picture_message = 'You can only post 15 images with your account';
            $video_rule = 'max:1';
            $video_message = 'You can only post 1 video with your account';
        }

        if (auth()->user()->account->type->id == '3')
        {
            $picture_rule = 'max:25';
            $picture_message = 'You can only post 25 images with your account';
            $video_rule = 'max:3';
            $video_message = 'You can only post 3 videos with your account';
        }
        
        $rules = [
            'title' => 'required',
            'body' => 'required|max:500',
            'category' => 'required|not_in:0',
            'phone' => 'nullable|numeric',
            'website' => 'nullable',
            'sub_id' => 'sometimes',
            'pictures.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pictures' => $picture_rule,
            'videos.*' => 'sometimes|file|mimetypes:video/mp4,video/ogg,video/avi,video/quicktime|max:20000',
            'videos' => 'max:2'
        ];

        $messages = [
            'pictures.max' => $picture_message,
            'pictures.*' => 'Images must be jpeg, png, gif or svg and must not exceed 2048kb',
            'videos.max' => $video_message,
            'videos.*' => 'Videos must be mp4, ogg, avi or quicktime and must not exceed 20000kb',
        ];

        $data = request()->validate($rules, $messages);


        //KREIRA NOVI OGLAS I SMESTA GA U BAZU
        $sub = request()->sub_id ?? null;

        $ad = Ad::create([
            'user_id' => auth()->user()->id,
            'title' => $data['title'],
            'body' => $data['body'],
            'phone' => $data['phone'],
            'website' => $data['website'],
            'category_id' => $data['category'],
            'sub_id' => $sub,
            'expires' => \Carbon\Carbon::now()->addMonth()
        ]);

        if ($ad)
        {

            //PROVERAVA DA LI POSTOJE SLIKE I UBACUJE IH U BAZU 
            if(request()->hasFile('pictures'))
            {
                $pictures = request()->file('pictures');

                foreach ($pictures as $pic)
                {
                    $filename = time().$pic->getClientOriginalname();
                    $pic->move(public_path().'/ads/images', $filename);

                    Picture::create([
                        'ad_id' => $ad['id'],
                        'src' => $filename
                    ]); 
                }
            }
            else 
            {
                Picture::create([
                    'ad_id' => $ad['id']
                ]); 
            }

            //PROVERAVA DA LI POSTOJE KLIPOVI I DA LI SU DUZI OD 30 SEK
            if(request()->hasFile('videos'))
            {
                $ffprobe = FFMpeg\FFProbe::create();

                $videos = request()->file('videos');

                foreach ($videos as $video) 
                {
                    $duration = $ffprobe
                    ->format($video)
                    ->get('duration');

                    if ($duration < 30)
                    {

                        // $filename = time(). "." .$video->getClientOriginalExtension();
                        $filename = time().$video->getClientOriginalname();
                        $video->move(public_path().'/ads/videos', $filename);
        
                        Video::create([
                            'ad_id' => $ad['id'],
                            'src' => $filename
                        ]);
                    }
                    else 
                    {
                        return redirect()->back()->with('message', 'Video too long, max duration is 30 seconds');
                    }
                }
                 
            }

            return redirect('/user_profile')->with('message', 'Success! Your ad is posted!');
        }

        return redirect('/user_profile')->with('message', 'Something happened! Please try again');
    }

    public function edit()
    {
        $data = request()->validate([
            'title' => 'required',
            'body' => 'required|max:500',
            'phone' => 'nullable|numeric',
            'website' => 'nullable'
        ]);

        $ad = Ad::where('user_id',auth()->user()->id)->first();


        $ad->title = $data['title'];
        $ad->body = $data['body'];
        $ad->phone = $data['phone'];
        $ad->website = $data['website'];

        $ad->save();

        return redirect('/user_profile')->with('message','Your ad is successfully changed');

    }

    public function category()
    {
        return SubCategory::all();
    }

    public function sub($id)
    {
        $ads = Ad::with('pictures','user')->where('sub_id',$id)->get();

        return $ads;
    }
}
