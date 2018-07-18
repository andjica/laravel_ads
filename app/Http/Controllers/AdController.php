<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FFMpeg;
use App\Ad;
use App\Video;
use App\Picture;

class AdController extends Controller
{
    public function store()
    {

       $rules = [
            'title' => 'required',
            'body' => 'required|max:500',
            'phone' => 'numeric',
            'category' => 'required',
            'images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'videos.*' => 'sometimes|file|mimetypes:video/mp4,video/ogg,video/avi,video/quicktime|max:20000'
        ];

        $messages = [
            'images.*' => 'Images must be jpeg, png, gif or svg and must not exceed 2048kb',
            'videos.*' => 'Videos must be mp4, ogg, avi or quicktime and must not exceed 20000kb' 
        ];

        $data = request()->validate($rules, $messages);

        //KREIRA NOVI OGLAS I SMESTA GA U BAZU
        $ad = Ad::create([
            'user_id' => 1, //ovde treba da ide auth()
            'title' => $data['title'],
            'body' => $data['body'],
            'phone' => $data['phone'],
            'category_id' => $data['category'],
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
                        $filename = time().
                        $video->getClientOriginalname();
                        $video->move(public_path().'/ads/videos', $filename);
        
                        Video::create([
                            'ad_id' => $ad['id'],
                            'src' => $filename
                        ]);
                    }
                    else 
                    {
                        return redirect()->back()->with('message', 'Video too long, max size is 30 seconds');
                    }
                }
                 
            }

            return redirect()->back()->with('message', 'Success! Your ad is posted!');
        }

        return redirect()->back()->with('message', 'Something happened! Please try again');
    }
}
