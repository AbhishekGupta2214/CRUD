@include('layout.header')
<div class="modal-dialog">
    <div class="modal-content">
        <form action="{{route('reg.update',$registration->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-header">						
                <h1 class="modal-title">Update</h1>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                <a href="{{url('reg/show')}}"><button type="button" style="background-color: tomato;color: white; border:none; border-radius: 5px"  data-dismiss="modal" aria-hidden="true">&times;</button></a>
            </div>
            <div class="modal-body">					
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="uname" value="{{$registration->uname}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{$registration->email}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" id="gender" {{$registration->gender=="male"?"checked":""}} value="male" ><label for="male">male</label> &nbsp;&nbsp;
                    <input type="radio" name="gender" id="gender" {{$registration->gender=="female"?"checked":""}} value="female"><label for="female">female</label> &nbsp;&nbsp;
                    <input type="radio" name="gender" id="gender" {{$registration->gender=="other"?"checked":""}} value="other"><label for="other">other</label>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="{{$registration->address}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>State</label>
                    <input type="text" name="state" value="{{$registration->state}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city"  value="{{$registration->city}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="date" name="dob"  value="{{$registration->dob}}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{$registration->phone}}" class="form-control" required>
                </div>					
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
    </div>
</div>
@include('layout.footer')