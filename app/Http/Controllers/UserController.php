<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewUsers(){
        $users = User:: all();
        return view('ManageUser.viewUsers', compact('users'));
            
    }

    //search user according to the account type
    public function search(Request $request){
        $search=$request->search;

        $users=User::where('accountType', 'Like', '%'.$search.'%')->get();

        return view('ManageUser.viewUsers', compact('users'));
    }

    public function viewuser($id){

        $users=User::find($id);

        return view('ManageUser.viewuser', compact('users'));
    }

    public function updateuser(Request $request)
        {

            $request->validate([
                'name' => 'required',
                'matricID' => 'required',
                'phoneNum' => 'required',
                'accountType' => 'required',
                'gender' => 'required',
                'location' => 'required',
                'email' => 'required',
            ]);
    
            $name = $request->name;
            $matricID = $request->matricID;
            $phoneNum = $request->phoneNum;
            $accountType = $request->accountType;
            $gender = $request->gender;
            $location = $request->location;
            $email = $request->email;

    
            User::where('id','=',$id)->update([
                'name' => $name,
                'matricID' => $matricID,
                'phoneNum' => $phoneNum,
                'accountType' => $accountType,
                'gender' => $gender,
                'location' => $location,
                'email' => $email,

            ]);
    
            return redirect('/viewUsers')->with('success', 'Details has been Updated Successfully');
    
        }

        public function deleteUser($id)
            {
                User::where('id','=',$id)->delete();
                return redirect()->back()->with('success', 'Product Deleted Successfully');

            }
}
