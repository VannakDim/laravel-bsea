@extends('admin.layouts.admin')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-lg-12 col-md-offset-3">
         @section('heading1','Dashboard')
         @section('username', $LoggedUserInfo['name'])
             <table class="table table-hover">
                <thead>
                  <th>Name</th>
                  <th>Email</th>
                  <th></th>
                </thead>
                <tbody>
                   <tr>
                      <td>{{ $LoggedUserInfo['name'] }}</td>
                      <td>{{ $LoggedUserInfo['email'] }}</td>
                      <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                   </tr>
                </tbody>
             </table>
             <ul>
                 <li><a href="/admin/dashboard">Dashboard</a></li>
                 <li><a href="/admin/profile">Profile</a></li>
                 <li><a href="/admin/settings">Settings</a></li>
                 <li><a href="/admin/staff">Staff</a></li>
             </ul>
      </div>
   </div>
</div>
@endsection