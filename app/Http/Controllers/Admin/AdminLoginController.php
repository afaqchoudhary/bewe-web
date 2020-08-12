<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminLoginController extends Controller
{

    /**
     * @return login view
     */
    public function login()
    {
        return view("login");
    }

    /**
     * @return dashboard view if success login
     */
    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required',
            'password' => 'required'
        ]);

        try {
            
            $is_valid = Admin::where('user_name', $request->user_name)->first();

            if($is_valid){
                if(Hash::check($request->password, $is_valid->password)){
                    session([
                        'admin_id' => $is_valid->id,
                    ]);
                    return redirect()->route('admin.dashboard');
                }else{
                    return redirect()->back()->withError('user not valid')->withInput();
                }
            }else{
                return redirect()->back()->withError('user not valid')->withInput();
            }

        }catch(QueryException $exception){
            return redirect()->back()->withError('something went wrong')->withInput();
        } catch (Exception $exception) {
            return redirect()->back()->withError('something went wrong')->withInput();
        }
    }

    /**
     * @return change username view
     */
    public function changeUserNameView()
    {
        $admin = Admin::first();
        return view("changeusername")->with('admin', $admin);
    }

    /**
     * @return change password view
     */
    public function changePasswordView()
    {
        $admin = Admin::first();
        return view("changepassword")->with('admin', $admin);
    }


    /**
     * @return response message with view
     */
    public function updateUserName(Request $request, $admin_id)
    {
        $this->validate($request, [
            'user_name' => 'required|min:5|max:15'
        ]);

        try {
            
            $is_updated = Admin::where('id', decrypt($admin_id))
            ->update([
                'user_name' => $request->user_name
            ]);

            if($is_updated){
                return redirect()->back()->with('message', 'successfully updated');
            }else{
                return redirect()->back()->withError('something went wrong')->withInput();
            }

        } catch (Exception $exception) {
            return redirect()->back()->withError('something went wrong')->withInput();
        }
    }


    /**
     * @return response message with view
     */
    public function updatePassword(Request $request, $admin_id)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|min:8|max:20',
            'confirm_password' => 'required|same:new_password'
        ]);

        try {
            
            $is_valid = Admin::where('id', decrypt($admin_id))->first();

            if($is_valid){
                if(Hash::check($request->input('old_password'), $is_valid->password)){
                    $is_valid->password = bcrypt($request->new_password);
                    if($is_valid->save()){
                        return redirect()->back()->with('message', 'successfully updated');
                    }else{
                        return redirect()->back()->withError('something went wrong')->withInput();
                    }
        
                }else{
                    return redirect()->back()->withError('old password does not match')->withInput();
                }
            }else{
                return redirect()->back()->withError('something went wrong')->withInput();
            }
        }catch(QueryException $exception){
            return redirect()->back()->withError('something went wrong')->withInput();
        } catch (Exception $exception) {
            return redirect()->back()->withError('something went wrong')->withInput();
        }
    }

    /**
     * just for testing purpose
     */
    public function test()
    {
        echo bcrypt('123');
    }
}
