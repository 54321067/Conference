@extends('layouts.index')
 
@section('content')
   
   
            <div class="ui segment" style="margin-top: 0%">
                <h2 class="ui header">Create a new Account
                    <div class="sub header">สร้างบัญชีใหม่</div>
                </h2>
                <form class="ui form" action="{{ route('users.setRegister') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="field required">
                        <label>Email</label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="two fields required">
                    <div class="field required">
                        <label>Username</label>
                        <input type="text" name="username" required>
                    </div>
                    <div class="field required">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                </div>
                    <div class="field required">
                        <label>Name</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="field required">
                        <label>Nation number</label>
                        <input type="text" name="nation" required>
                    </div>
                    <div class="field required">
                        <label>Phone</label>
                        <input type="text" name="phone" required>
                    </div>
                    <div class="field">
                        <button type="submit" class="ui button google plus">Submit</button>
                    </div>
                </form>
            </div>
@stop