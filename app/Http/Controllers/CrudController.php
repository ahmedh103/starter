<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use App\Traits\OfferTrait;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use LaravelLocalization;

class CrudController extends Controller
{


    use OfferTrait;
    public function getAllOffers(){

        $offers = Offer::select('id','price','name_'.LaravelLocalization::getCurrentLocale().' as name',
 'details_'.LaravelLocalization::getCurrentLocale().' as details')->get(); //return collection



    //return view('offers.all', compact('offers'));


    return view('offers.all',compact('offers'));
    }


// public function store(){



// //     Offer::create([

// // 'name'=>'offer3',
// // 'price'=>'5000',
// // 'details'=>'offer details'

// //     ]);
// }
//  $offers =       Offer::select('id','price','name_'.LaravelLocalization::getCurrentLocale().'as name',
//  'details_'.LaravelLocalization::getCurrentLocale().'as details'
public function create(){



    return view('offers.create');
}
public function store(OfferRequest $request){
// validate data before insert database
 


//  $messages =$this ->getMessages();
//  $rules =$this ->getRules();
// $validator =FacadesValidator::make(
//     $request->all(),$rules,$messages
// );
// if($validator ->fails()){
//     return redirect()->back()->withErrors($validator)->withInputs($request->all());


// }
//inser

//save photo in folder
$file_name=  $this  ->saveImage($request->photo,'images/offers');


//insert
Offer::create([
  'photo'=> $file_name,
'name_ar'=> $request-> name_ar,
'name_en'=> $request-> name_en,
'price'=>$request-> price,
'details_ar'=> $request-> details_ar,
'details_en'=> $request-> details_en,
]);

return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاح']);
}



// protected function getMessages(){


//   return  $messages = [
//         'name.required'=>__('messages.offer name reauired'),
//         'name.unique'=>__('messages.offer name must be unique'),
//         'price.numeric'=>"اسم العرض يجب ان يكون ارقام",
//         'price.required'=>"اسم العرض يجب ان يكون ارقام",
//         'details.required'=>"اسم العرض يجب ان يكون ",
        
        
        
//      ];
// }
// protected function getRules(){


//    return $rules = [
//         'name' =>'required|max:100|unique:offers,name',
//       'price' =>'required|numeric',
//          'details' =>'required',
//      ];
// }






public function editOffer($offer_id){

// Offer::findOrFail($offer_id);
 $offer = Offer::find($offer_id);//search in given table id only

if(!$offer){
return redirect()->back();

}
$offer= Offer::select('id','name_ar','name_en','details_ar','details_en','price')->find($offer_id);
return view('offers.edit',compact('offer'));

}


public function updateOffer(OfferRequest $request,$offer_id){
//validation 

//check if offer exists
$offer= Offer::find($offer_id);

if(!$offer){
    return redirect()->back();
    
    }
//update data

$offer->update($request->all());

return redirect()->back()->with(['success'=>'تم تحديث بنجاح']);
// $offer->update([
// 'name_ar'=>$request->name_ar,
// 'name_en'=>$request->name_en,
// 'price'=>$request->price

// ]);


}



}




