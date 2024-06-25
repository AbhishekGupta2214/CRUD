@include('layout.header')

    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url("reg")}}" method="POST">
               
               @csrf
                <div class="modal-header">						
                    <h1 class="modal-title" style="text-align: left;justify-content: space-evenly">Registration</h1>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    <a href="{{url('reg/show')}}"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></a>
                </div>
                <div class="modal-body">					
                    <x-form name="uname" label="UserName" type="text" labId="uname" />
                   <span class="">
                    @error('uname')
                    {{$message}}
                @enderror
                   </span>
                    <x-form name="email" label="E-mail" type="email" labId="email" />
                    <span>
                        @error('email')
                        {{$message}}
                    @enderror
                    </span>
                    <x-form name="password" label="Password" type="password" labId="pass" />
                    <span>
                        @error('password')
                        {{$message}}
                    @enderror
                </span>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" id="gender" value="male"><label for="male">male</label> &nbsp;&nbsp;
                    <input type="radio" name="gender" id="gender" value="female"><label for="female">female</label> &nbsp;&nbsp;
                    <input type="radio" name="gender" id="gender" value="other"><label for="other">other</label>

                </div>

                    <x-form name="address" label="Address" type="text" labId="address" />
                    <span>
                        @error('address')
                        {{$message}}
                    @enderror
                    </span>
                    <x-form name="city" label="city" type="text" labId="city" />
                    <span>
                        @error('city')
                        {{$message}}
                    @enderror
                    </span>
                    <x-form name="state" label="State" type="text" labId="state" />
                    <span>
                        @error('city')
                        {{$message}}
                    @enderror
                    </span>
                    <x-form name="dob" label="Date Of Birth" type="date" labId="dob" />
                    <span>
                        @error('dob')
                        {{$message}}
                    @enderror
                    </span>
                    <x-form name="phone" label="Phone" type="text" labId="phone" />
                    <span>
                        @error('phone')
                        {{$message}}
                    @enderror
                    </span>
                   		
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>

@include('layout.footer')