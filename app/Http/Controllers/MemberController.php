<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class MemberController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('members.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fistname' => 'rstring|max:255',
            'lastname' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users',
            'password' => 'string|min:6|confirmed',
            'userCity' => 'string|max:255',
            'userState' => 'string|max:255',
            'userContry' => 'string|max:255',
            'userPhone' => 'string|max:255',
            'userAddress1' => 'string|max:255',
            'userAddress2' => 'string|max:255',
        ]);
        User::create($request->all());
        return redirect()->route('members.index')
                        ->with('success','Member created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $member)
    {
        return view('members.show',compact('member'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $member)
    {
        return view('members.edit',compact('member'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $member)
    {
        $this->validate($request, [
            'fistname' => 'string|max:255',
            'lastname' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users',
            'password' => 'string|min:6|confirmed',
            'userCity' => 'string|max:255',
            'userState' => 'string|max:255',
            'userContry' => 'string|max:255',
            'userPhone' => 'string|max:255',
            'userAddress1' => 'string|max:255',
            'userAddress2' => 'string|max:255',
        ]);
        $member->update($request->all());
        return redirect()->route('members.index')
                        ->with('success','Member updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('members.index')
                        ->with('success','Member deleted successfully');
    }
}