<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Assign_subject;
use Auth;
use App\Add_class;
use App\TimeTable;
use App\Time_slot;

class TimetableController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $user = Auth::guard('admin');
      $user = $user->user()->id;

      $getUser =   User::where('id',$user)->first();
      $allClass = Add_class::get();
        return view('admin.pages.timeTable',compact('getUser','allClass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

      $user = Auth::guard('admin');
      $user = $user->user()->id;

      $getUser =   User::where('id',$user)->first();
   //  $subject =   Assign_subject::distinct('subject_id')->get();

      $subjected = collect(Assign_subject::get());

      $subject = $subjected->unique('subject_id');

      $subject->values()->all();


      $allClass = Add_class::get();
      $time_slot = Time_slot::get();

     //dd($time_slot);


      return view('admin.pages.createTimeTable',compact('getUser','subject','allClass','time_slot'));
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

       $time =    TimeTable::where('day',$request->day)->where('time_slot',$request->timeSlot)->where('class_id',$request->class)->first();

       if($time === null){

           $timeTeacherCheck =    TimeTable::where('day',$request->day)->where('time_slot',$request->timeSlot)->where('teacher_id',$request->teacher)->first();

           if($timeTeacherCheck === null){

            $timeClassCount =    TimeTable::where('day',$request->day)->where('class_id',$request->class)->get();

            $getSingleClassTime = $timeClassCount->count();

            if($getSingleClassTime <= 8){
                 TimeTable::create([

                "day" => $request->day,
                "time_slot" => $request->timeSlot,
                "class_id" => $request->class,
                "subject_id" => $request->subject,
                "teacher_id" => $request->teacher,
            ]);

                 return redirect('admin/create-timetable')->with('success','Time Table Add Successfully');



            }else{

            return redirect('admin/create-timetable')->with('failed','Only Eight PeroidS Will Be Added For Single Class ');

            }


            //    TimeTable::create([

            //     "day" => $request->day,
            //     "time_slot" => $request->timeSlot,
            //     "class_id" => $request->class,
            //     "subject_id" => $request->subject,
            //     "teacher_id" => $request->teacher,
            // ]);

               // return redirect('admin/create-timetable')->with('success','Time Table Add Successfully');

           }else{

               return redirect('admin/create-timetable')->with('failed','Teacher  Already Busy in Other Class');

           }



           

       }else{

           return redirect('admin/create-timetable')->with('failed','Time Table Already Exits For That Day');

       }


       // return redirect('admin/create-timetable')->with('success','Time Table Add Successfully');


   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getTeacher(Request $request)
    {
        //echo $request->id;
       // $getTeacher  = Assign_subject::where('subject_id',$request->id)->get();

        $getTeacher = collect(Assign_subject::where('subject_id',$request->id)->get());

        $getTeachers = $getTeacher->unique('subject_id');

        $getTeachers->values()->all();




        $html = "";
//$html .= "<option value=''>-- Select --</option>";
        foreach ($getTeachers as $getTeacherss) {
            $html .= " <option value='".$getTeacherss->teacher_id."'>".ucfirst($getTeacherss->getTeacherName->name)."</option>";

        }

        echo $html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    //if(request()->ajax()){

    if(!empty($request->day) && !empty($request->classId))
      {
       $data= TimeTable::where('day',$request->day)->where('class_id',$request->classId)->get();
       return datatables()->of($data)->make(true);
      }


       if(!empty($request->day) && empty($request->classId))
      {
       $data= TimeTable::where('day',$request->day)->get();
       return datatables()->of($data)->make(true);
      }

       if(empty($request->day) && !empty($request->classId))
      {
       $data= TimeTable::where('class_id',$request->classId)->get();
       return datatables()->of($data)->make(true);
      }

    


//}else{

 $data= TimeTable::get();
return datatables()->of($data)->make(true);

//}






      //   if(!empty($request->filter_gender))
      // {
      //  $data = DB::table('tbl_customer')
      //    ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
      //    ->where('Gender', $request->filter_gender)
      //    ->where('Country', $request->filter_country)
      //    ->get();
      // }


       //$data= TimeTable::get();
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //

         $user = Auth::guard('admin');
      $user = $user->user()->id;

      $getUser =   User::where('id',$user)->first();

        return view('admin.pages.showTimeTable',compact('getUser'));
    }



    public function getTimeTable(request $request){


        $time_slot = Time_slot::get();
            $html = "";
                            $html .='<div class="col-lg-12">
                                <div class="dash-item">
                                    <h6 class="item-title"><i class="fa fa-edit"></i>EDIT TIMETABLE</h6>
                                    <div class="inner-item">
                                        <table  class="display responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-clock-o"></i>TIMINGS</th>
                                                    <th><i class="fa fa-calendar"></i>MONDAY</th>
                                                    <th><i class="fa fa-calendar"></i>TUESDAY</th>
                                                    <th><i class="fa fa-calendar"></i>WEDNESDAY</th>
                                                    <th><i class="fa fa-calendar"></i>THURSDAY</th>
                                                    <th><i class="fa fa-calendar"></i>FRIDAY</th>
                                                    <th><i class="fa fa-calendar"></i>SATURDAY</th>
                                                    <th><i class="fa fa-tasks"></i>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>';

                                foreach ($time_slot as $time_slots) {
                                 
                                
                                    $html .= '  <tr>
                                                    <td>'.$time_slots->time.'</td>
                                                    <td>
                                                        <span>Lecture: MTH101</span>
                                                        <span>Room: 601</span>
                                                        <span>Teacher: John</span>
                                                    </td>
                                                    <td>
                                                        <span>Lecture: PHY101</span>
                                                        <span>Room: 303</span>
                                                        <span>Teacher: Lennore</span>
                                                    </td>
                                                    <td>
                                                        <span>Lecture: BIO101</span>
                                                        <span>Room: 302</span>
                                                        <span>Teacher: John</span>
                                                    </td>
                                                    <td>
                                                        <span>Lecture: PHY101</span>
                                                        <span>Room: 303</span>
                                                        <span>Teacher: Lennore</span>
                                                    </td>
                                                    <td>
                                                        <span>Lecture: BIO101</span>
                                                        <span>Room: 202</span>
                                                        <span>Teacher: John</span>
                                                    </td>
                                                    <td>
                                                        <span>Lecture: MTH101</span>
                                                        <span>Room: 601</span>
                                                        <span>Teacher: John</span>
                                                    </td>
                                                    <td class="action-link">
                                                        <a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a>
                                                        <a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal"><i class="fa fa-remove"></i></a>
                                                    </td>
                                                </tr>';

                                }




                                    $html  .= '</tbody>
                                        </table>
                                        <div class="table-action-box">
                                            <a href="#" class="save"><i class="fa fa-check"></i>SAVE</a>
                                            <a href="#" class="cancel"><i class="fa fa-ban"></i>CANCEL</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';

                           echo  $html;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
