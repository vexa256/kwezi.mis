<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function MgtSlider()
    {
        $Sliders = Slider::all();

        $data = [
            'Page' => 'slider.MgtSlider',
            'Title' => 'Website Sliders',
            'Desc' => 'Manage slider section',
            'Sliders' => $Sliders,
        ];
        return view('index', $data);
    }

    public function CreateSlider(Request $request)
    {
        $request->validate([
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

            $imageName = time() . '_RachelKwezi.' . $request->Image->extension();

            $request->Image->move('assets/uploads/slider', $imageName);

        $Slider = new Slider;
        $Slider->SliderName         = $request->SliderName;
        $Slider->SliderCaption         = $request->SliderCaption;
        $Slider->SliderTitle         = $request->SliderTitle;
        $Slider->Image = 'assets/uploads/slider/' . $imageName;

        $Slider->save();

        return redirect()->back()->with("status", "Slider Created Successfully");

    }

    public function UpdateSlider(Request $request)
    {
        $validated = $this->validate($request, [
            'SliderName' => 'required',
            'SliderCaption' => 'required',
            'SliderTitle' => 'required',
            'id'          => 'required',
            'TableName'          => 'required',

        ]);

        $UploadUpdate = DB::table($request->TableName)
            ->where('id', $request->id)
            ->first();

        if ($request->hasfile('Image')) {

            unlink(public_path($UploadUpdate->Image));

            $ImageName = time() . '_RachelKwezi' . $request->Image->extension();

            $request->Image->move(public_path('assets/uploads/slider'), $ImageName);

            DB::table('sliders')->where('id', $request->id)->update([

                'Image' => 'assets/uploads/slider/' . $ImageName,
            ]);

        }


        DB::table($request->TableName)->where('id', $request->id)
            ->update(
                $request->except([
                    '_token',
                    'TableName',
                    'id',
                    'Image',

                ])
            );

        return redirect()->back()->with('status', 'Slider Updated Successfully');
    }

}
